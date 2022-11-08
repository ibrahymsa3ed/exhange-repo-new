<?php

namespace App\Form;

use App\Entity\Transactions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;


class TransactionsFormType extends AbstractType
{
    private Security $security;

    public function __construct(Security $security )
    {

        $this->security= $security;


    }


    public function buildForm( FormBuilderInterface $builder, array $options): void
    {


             $url2 = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies.json";
        $currencies = json_decode(file_get_contents($url2), TRUE);

        $builder
            ->add('currency', ChoiceType::class, [
                'choices' => [$currencies]
            ])
            ->add('amount', NumberType::class)
            ->add('user', TextType::class, [
                'data' => $this->security->getUser()->getEmail()
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transactions::class,
        ]);
    }
}
