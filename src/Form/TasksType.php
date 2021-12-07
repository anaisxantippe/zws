<?php

namespace App\Form;

use App\Entity\Tasks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class TasksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('taskName')
            ->add('taskStart', DateType::class, ['widget' => 'single_text'])
            ->add('taskDeadline', DateType::class, ['widget' => 'single_text'])
            ->add('taskDesc')
            ->add('taskUsers')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tasks::class,
        ]);
    }
}
