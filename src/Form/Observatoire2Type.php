<?php

namespace App\Form;

use App\Entity\Observatoire2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Observatoire2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('check1')
            ->add('check2')
            ->add('check3')
            ->add('check4')
            ->add('check5')
            ->add('check6')
            ->add('check7')
            ->add('check8')
            ->add('check9')
            ->add('text1')
            ->add('text2')
            ->add('text3')
            ->add('text4')
            ->add('text5')
            ->add('text6')
            ->add('tab1')
            ->add('tab2')
            ->add('tab3')
            ->add('tab4')
            ->add('tab5')
            ->add('tab6')
            ->add('tab7')
            ->add('tab8')
            ->add('tab9')
            ->add('tab10')
            ->add('tab11')
            ->add('tabdeux1')
            ->add('tabdeux2')
            ->add('tabdeux3')
            ->add('tabdeux4')
            ->add('text7')
            ->add('check10')
            ->add('check11')
            ->add('check12')
            ->add('tabtrois1')
            ->add('tabtrois2')
            ->add('tabtrois3')
            ->add('tabtrois4')
            ->add('tabtrois5')
            ->add('tabtrois6')
            ->add('tabquatre1')
            ->add('tabquatre2')
            ->add('tabquatre3')
            ->add('tabquatre4')
            ->add('tabquatre5')
            ->add('tabquatre6')
            ->add('tabcinq1')
            ->add('tabcinq2')
            ->add('check13')
            ->add('check14')
            ->add('check15')
            ->add('check16')
            ->add('tabsix1')
            ->add('tabsix2')
            ->add('tabsix3')
            ->add('tabsix4')
            ->add('tabsix5')
            ->add('varfinal')
            ->add('conclusion', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('conclusion1', TextType::class, [
                'required'   => false,
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('conclusion2', TextType::class, [
                'required'   => false,
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('conclusion3', TextType::class, [
                'required'   => false,
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Observatoire2::class,
        ]);
    }
}
