<?php

namespace App\Form;

use App\Entity\TabCaFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TabCaFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('document', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('proprietaireAccord', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('montantTransaction', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('validiteGarentiePresentation', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('dateConfirmation', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('avisCommission', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('avisConseil', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TabCaFinal::class,
        ]);
    }
}
