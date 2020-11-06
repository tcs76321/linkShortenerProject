<?php

namespace App\Form;

use App\Entity\UrlConversion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UrlConversionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('LongUrl')
            ->add('ShortUrl')
            ->add('CreationTime')
            ->add('Redirections')
            ->add('CreatorIP')
            ->add('LastRedirectIP')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UrlConversion::class,
        ]);
    }
}
