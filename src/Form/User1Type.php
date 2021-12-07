<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class User1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pseudo')
            // ->add('roles')
            ->add('password')
            ->add('firstName',TextType::class)
            ->add('lastName')
            ->add('gender')
            ->add('pronoun')
            ->add('dob')
            ->add('firstMail')
            ->add('secondMail')
            ->add('adress')
            ->add('zip')
            ->add('city')
            ->add('phone')
            ->add('memberStatus')
            ->add('ca')
            ->add('shirtSize')
            ->add('favColor')
            ->add('favGames')
            ->add('comments')
            // ->add('space')
            // ->add('role')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
