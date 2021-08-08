<?php

namespace App\Form;

use App\Data\SearchData;
use App\Entity\Session;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('q', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => ' بحث على الملف'
                ]
            ])
            ->add('qproprietaireaccord', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => ' بحث على صاحب الصفقة'
                ]
            ])

//            ->add('sessions', EntityType::class, [
//                'label' => false,
//                'required' => false,
//                'class' => Session::class,
//                'expanded' => true,
//                'multiple' => true
//            ])
         /*  ->add('dateannonceconcours',\Symfony\Component\Form\Extension\Core\Type\DateType::class,[
               'label' => false,
                'required' => false,
            ])*/

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }

}