<?php

namespace App\Form;

use App\Entity\TabCA;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TabCAType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('document')
            ->add('proprietaireAccord')
            ->add('montantTransaction')
            ->add('validiteGarentiePresentation')
            ->add('dateConfirmation')
            ->add('avisCommission')
            ->add('avisConseil')
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TabCA::class,
        ]);
    }
}
