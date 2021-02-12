<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\User\UserInterface;

class EditUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'user.is.email',
                'disabled' => true
            ])
            ->add('firstname', TextType::class, [
                'label' => 'user.is.firstname',
            ])
            ->add('name', TextType::class,[
                'label' => 'user.is.name'
            ])

            ->add('birthday', BirthdayType::class, [
                'label' => 'user.is.birthday',
                'attr' => ['class' => 'layout-60 displayInline']
            ])
            ->add('mobile', TelType::class, [
                'label' => 'user.is.mobile',
                'attr' => ['pattern' => "[0-9]{10}"],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,

        ]);
    }
}
