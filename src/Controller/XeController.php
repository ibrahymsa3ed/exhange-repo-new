<?php

namespace App\Controller;

use App\Entity\Alert;
use App\Entity\Transactions;
use App\Entity\Xe;
use App\Form\AlertFormType;
use App\Form\TransactionsFormType;
use App\Form\XeFormType;
use App\Repository\AlertRepository;
use App\Repository\TransactionsRepository;
use App\Repository\XeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;


class XeController extends AbstractController
{
    private $em;
    // private $xeRepository;
    private Security $security;
    private TransactionsRepository $transactionsRepository;

    public function __construct(Security $security, XeRepository $xeRepository, EntityManagerInterface $em, AlertRepository $alertRepository, TransactionsRepository $transactionsRepository)
    {
        $this->em = $em;
        //$this->xeRepository = $xeRepository;
        $this->security = $security;
        $this->transactionsRepository = $transactionsRepository;
    }

    #[Route('/xe/exchange/today', name: 'today')]
    public function index(): Response
    {

        $url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/usd.json";
        $rates = json_decode(file_get_contents($url), TRUE);
        $currency_arr = $rates['usd'];
        $currency = [];
        $my_ip=$this->getMyIp();
        $user_currency=strtolower($this->get_curr($my_ip));

        $currency[$user_currency]=$currency_arr[$user_currency];
        foreach ($currency_arr as $key=>$value) {
            if($key!=$user_currency){
                $currency[$key]=$value;
            }
        }
        $url2 = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies.json";
        $currencies = json_decode(file_get_contents($url2), TRUE);

        return $this->render('exchange/today.html.twig', array(
            'currency' => $currency, 'currencies' => $currencies
        ));
    }

    #[Route('/xe/exchange/home', name: 'home',)]
    public function second(): Response
    {
        $messages = [];
        $alerts = $this->getAlerts();
        foreach ($alerts as $alert) {
            // $message.= "If ".$alert->getCur1()." is ".$alert->getFunc()." ".$alert->getResult()." ".$alert->getCur2()."\n";

            $cur1_code = $this->getCurrCode($alert->getCur1());
            $cur2_code = $this->getCurrCode($alert->getCur2());
            $current_rate = $this->getCurValue($cur1_code, $cur2_code);
            switch ($alert->getFunc()) {
                case ">":
                    if ($current_rate > $alert->getResult()) {
                        $messages[] = "This Alert is active: " . $alert->getCur1() . " is " . $alert->getFunc() . " " . $alert->getResult() . " " . $alert->getCur2();
                    }
                    break;
                case ">=":
                    if ($current_rate >= $alert->getResult()) {
                        $messages[] = "This Alert is active: " . $alert->getCur1() . " is " . $alert->getFunc() . " " . $alert->getResult() . " " . $alert->getCur2();

                    }
                    break;
                case "<":
                    if ($current_rate < $alert->getResult()) {
                        $messages[] = "This Alert is active: " . $alert->getCur1() . " is " . $alert->getFunc() . " " . $alert->getResult() . " " . $alert->getCur2();

                    }
                    break;
                case "<=":
                    if ($current_rate <= $alert->getResult()) {
                        $messages[] = "This Alert is active: " . $alert->getCur1() . " is " . $alert->getFunc() . " " . $alert->getResult() . " " . $alert->getCur2();

                    }
                    break;
                case "=":
                    if ($current_rate == $alert->getResult()) {
                        $messages[] = "This Alert is active: " . $alert->getCur1() . " is " . $alert->getFunc() . " " . $alert->getResult() . " " . $alert->getCur2();

                    }
                    break;
            }
        }

        //$repository = $this->em->getRepository(Xe::class);
        $repository = $this->em->getRepository(Transactions::class);
        //eslam start
        //$transactions = $repository->findAll();
        $transactions = $repository->findBy(['user' => $this->security->getUser()->getEmail()]);

//        $user = $this->security->getUser()->getEmail();


        $all_amounts_arr = [];
        foreach ($transactions as $saving) {
            $currency = $saving->getCurrency();
            $amount = $saving->getAmount();
            if (!isset($all_amounts_arr[$currency])) {
                $all_amounts_arr[$currency] = 0;
            }
            $all_amounts_arr[$currency] += $amount;
        }
        //dd($this->getCurrCode('Euro'));
        foreach ($all_amounts_arr as $key => $value) {
            $code = $this->getCurrCode($key);
            $all_amounts_arr[$key] = [
                "code" => $code, "amount" => $value,
                "egpValue" => $this->getEGPvalue($code, $value)
            ];
        }

//eslam end

        return $this->render('exchange/home.html.twig', [
            'allAmounts' => $all_amounts_arr,
            'messages' => $messages
        ]);
    }

    public function getCurValue($code1, $code2)
    {
        $url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/{$code1}.json";

        $rates = json_decode($this->file_get_contents_curl($url), TRUE);
        $_rate = $rates[$code1][$code2];
        $total = 1 * $_rate;
        return $total;
    }

    public function getEGPvalue($code, $amount)
    {
        $url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/{$code}.json";
        $rates = json_decode(file_get_contents($url), TRUE);
        $egp_rate = $rates[$code]['egp'];
        $total = $amount * $egp_rate;
        return $total;
    }

    public function getCurrCode($name)
    {
        $url2 = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies.json";
        $currencies = json_decode(file_get_contents($url2), TRUE);
        $key = array_search($name, $currencies);
        return $key;

    }

    public function getAlerts()
    {
        $repository = $this->em->getRepository(Alert::class);
        $alerts = $repository->findAll();
        return $alerts;
    }

    #[Route('/xe/exchange/add', name: 'add')]
    public function add(Request $request): Response
    {
        //$xe = new Xe();
        //$form = $this->createForm(XeFormType::class, $xe);
        //$xe = new Xe();
        $transactions = new Transactions();
        $form = $this->createForm(TransactionsFormType::class, $transactions);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $newXe = $form->getData();
            $newTransactions = $form->getData();
            //$this->em->persist($newXe);
            $this->em->persist($newTransactions);
            $this->em->flush();
            return $this->redirectToRoute('view');
        }


        return $this->render('exchange/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/xe/exchange/view', name: 'view',)]
    public function view(): Response
    {

        // $data = $this->xeRepository->findAll();
        $repository = $this->em->getRepository(Transactions::class);
        //eslam start
        //$transactions = $repository->findAll();
        $data = $repository->findBy(['user' => $this->security->getUser()->getEmail()]);


        return $this->render('exchange/view.html.twig', [
            'data' => $data
        ]);
    }

    #[Route('/xe/exchange/delete/{id}', name: 'delete', methods: ['GET', 'DELETE'])]
    public function delete($id): Response
    {

        $data = $this->transactionsRepository->find($id);
        $this->em->remove($data);
        $this->em->flush();
        return $this->redirectToRoute('home');
    }

    #[Route('/xe/exchange/deletealert/{id}', name: 'deletealert', methods: ['GET', 'DELETE'])]
    public function deletealert($id): Response
    {
        $repository = $this->em->getRepository(Alert::class);
        $data = $repository->find($id);
        $this->em->remove($data);
        $this->em->flush();
        return $this->redirectToRoute('alert');
    }

    #[Route('/xe/exchange/alert', name: 'alert',)]
    public function alert(): Response
    {
        $url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/usd.json";

        $rates = json_decode(file_get_contents($url), TRUE);
        $currency = $rates['usd'];

        $repository = $this->em->getRepository(Alert::class);
        $alert = $repository->findAll();

        return $this->render('exchange/alert.html.twig', [
            'alert' => $alert, 'currency' => $currency
        ]);
    }

    #[Route('/xe/exchange/addalert', name: 'addalert',)]
    public function create(Request $request): Response
    {
        $addalert = new Alert();
        $form = $this->createForm(AlertFormType::class, $addalert);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $newAlert = $form->getData();
            $this->em->persist($newAlert);
            $this->em->flush();
            return $this->redirectToRoute('alert');
        }


        return $this->render('exchange/addalert.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function getMyIp(){

        $conts=$this->file_get_contents_curl("https://api.ipify.org?format=json");
        $response = json_decode($conts, TRUE);
       return $response['ip'];

    }


    function get_curr($ip_address){
        $json = $this->file_get_contents_curl("http://www.geoplugin.net/json.gp?ip={$ip_address}");
        $details = json_decode($json,TRUE);
        return $details['geoplugin_currencyCode'];
    }
    public function file_get_contents_curl($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}
