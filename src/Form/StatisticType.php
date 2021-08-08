<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StatisticsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('year', ChoiceType::class, [
                'required' => false,
                'choices' => range(2020, 2030),
                'choice_label' => function($value) {
                    return $value;
                }
            ])
            ->add('month', ChoiceType::class, [
                'required' => false,
                'choices' => range(1, 12),
                'choice_label' => function($value) {
                    return $value;
                }
            ])
            ->add('day', ChoiceType::class, [
                'required' => false,
                'choices' => range(1, 31),
                'choice_label' => function($value) {
                    return $value;
                }
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('csrf_protection', false);
    }
}
