<?php

namespace App\Form;

use App\Entity\Newsletters\Categories;
use App\Entity\Newsletters\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;

class NewslettersUsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('categories', EntityType::class, [
                'class' => Categories::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true
            ])
            ->add('is_rgpd', CheckboxType::class, [
                'constraints' => [
                    new IsTrue([
                        'message' => 'You must accept the collection of your personal data'
                    ])
                ],
                'label' => 'J\'accept the collection of my personal data'
            ])
            ->add('send', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
