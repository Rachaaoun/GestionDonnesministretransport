<?php

namespace App\Form;

use App\Entity\TableAffaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TableAffaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('var1', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var2', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var3', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var4', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var5', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var6', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var7', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var8', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var9', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var10', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var11', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var12', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var13', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var14', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var15', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('var16')
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TableAffaire::class,
        ]);
    }
}
