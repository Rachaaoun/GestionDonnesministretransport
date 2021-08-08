<?php

namespace App\Form;

use App\Entity\Observatoire3;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Observatoire3Type extends AbstractType
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
            ->add('var14')
            ->add('var15')
            ->add('var16')
            ->add('var17')
            ->add('var18')
            ->add('var19')
            ->add('var20')
            ->add('var21')
            ->add('var22')
            ->add('var23')
            ->add('var24')
        
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Observatoire3::class,
        ]);
    }
}
