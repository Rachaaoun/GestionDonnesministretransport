<?php

namespace App\Form;

use App\Entity\Session;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datesession', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('nombrefichieraffiches', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('fichier', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('nombredemandeproposition', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('proprietaireaccord', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('dateannonceconcours', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('montant', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('nombreinstallation', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('methodeconclusion', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('naturefinancement', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('natureaccord', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('dateentreprisdossierparcomite', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('notecomite', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('dateapprobationparconseiladministration', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('notesconseil', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('dateconclusiontransaction', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('nombrecontrat', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('datedebutaccomplissement', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('datenotificationobservatoire', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('periodeaccord', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('dateestimeetimbre', TextType::class, [
        'attr' => ['class' => 'form-control'],
        'required'   => false,
    ])
            ->add('periodegarantie', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
            ->add('uniteconcerne', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required'   => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Session::class,
        ]);
    }
}
