<?php

namespace App\Form;

use App\Entity\Xe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class XeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $url2 = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies.json";
        $currencies = json_decode(file_get_contents($url2), TRUE);
        $builder
            ->add('currency', ChoiceType::class, [
                'choices' => [$currencies]
            ])
            ->add('amount', NumberType::class)
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Xe::class,
        ]);
    }
}
