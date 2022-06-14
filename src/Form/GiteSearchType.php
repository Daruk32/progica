<?php

namespace App\Form;

use App\Entity\GiteSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiteSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('minSurface', IntegerType::class, [
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" => "Surface minimume"]
            ])
            ->add('minChambre', IntegerType::class, [
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" => "Chambre minimume"]
            ])
            ->add('minCouchage', IntegerType::class, [
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" => "Nombre de couchage minimum"]
            ])
            ->add('equipement', IntegerType::class, [
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" => "Equipements fournis"]
            ])
            ->add('submit', SubmitType::class, [
                "label" => "Rechercher",
                "attr" => ['class'=> 'btn-secondary']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GiteSearch::class,
        ]);
    }
}
