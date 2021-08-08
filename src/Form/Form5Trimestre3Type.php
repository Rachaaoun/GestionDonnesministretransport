<?php

namespace App\Form;

use App\Entity\Form5Trimestre3;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Form5Trimestre3Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('classementdemande')
        ->add('nombrerapportpreselection')
        ->add('nombreprojetfinaux')
        ->add('totalrapport')
        ->add('nombrerapport')
        ->add('totalaccord')
        ->add('nombreaccord')
        ->add('totalprojet')
        ->add('nombreprojet')
        ->add('varfinal')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Form5Trimestre3::class,
        ]);
    }
}
