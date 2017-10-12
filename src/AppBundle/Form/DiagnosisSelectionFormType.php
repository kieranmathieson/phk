<?php

namespace AppBundle\Form;

use AppBundle\Entity\DiagnosisState;
use AppBundle\Repository\DiagnosisStateRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiagnosisSelectionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('diagnosisState', ChoiceType::class,[
            'choices' => $options['data']['options'],
            'placeholder' => 'Choose a diagnosis state',
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => NULL
        ]);
    }
}
