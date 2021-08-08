<?php

namespace App\Form;

use App\Entity\CommissionFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommissionFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('var1')
            ->add('var2')
            ->add('var3')
            ->add('var4')
            ->add('var5')
            ->add('var6')
            ->add('var7')
            ->add('var8')
            ->add('var9')
            ->add('var10')
            ->add('var11')
            ->add('var12')
            ->add('var13')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CommissionFinal::class,
        ]);
    }
}
