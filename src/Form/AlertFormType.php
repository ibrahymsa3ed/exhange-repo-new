<?php

namespace App\Form;

use App\Entity\Alert;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlertFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $url2 = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies.json";
        $currencies = json_decode(file_get_contents($url2), TRUE);

        $builder
            ->add('cur1', ChoiceType::class, [
                'choices' => [$currencies]
            ])
            ->add('func', ChoiceType::class, [
                'choices' => ['<'=>'<','>'=>'>','='=>'=','<='=>'<=','>='=>'>=']
            ])
            ->add('cur2', ChoiceType::class, [
                'choices' => [$currencies]
            ])
            ->add('result', IntegerType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Alert::class,
        ]);
    }
}
