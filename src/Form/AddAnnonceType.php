<?php

namespace App\Form;

use App\Entity\Listing;
use Doctrine\DBAL\Types\ArrayType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddAnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class, [
                'label' => 'Titre de l\'annonce',
                'attr' => [
                    'placeholder' => 'Titre de l\'annonce',
                ],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description de l\'annonce',
                'attr' => [
                    'placeholder' => 'Description de l\'annonce',
                ],
            ])
            ->add('producedYear', IntegerType::class, [
                'label' => 'Kilométrage',
                'attr' => [
                    'placeholder' => 'Kilométrage',
                ],
            ])
            ->add('mileage', IntegerType::class, [
                'label' => 'Kilométrage',
                'attr' => [
                    'placeholder' => 'Kilométrage',
                ],
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix',
                'attr' => [
                    'placeholder' => 'Prix',
                ],
            ])
            ->add('createdAt', DateType::class, [
                'label' => 'Date de sortie',
                'widget' => 'single_text',
                'attr' => [
                    'max' => date('Y-m-d')
                ]
            ])
            ->add('model', EntityType::class, [
                'label' => 'Modèle',
                'class' => 'App\Entity\Model',
                'choice_label' => 'name',
                'attr' => [
                    'placeholder' => 'Modèle',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn btn-warning'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Listing::class,
        ]);
    }
}
