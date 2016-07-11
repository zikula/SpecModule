<?php

/*
 * This file is part of the Zikula package.
 *
 * Copyright Zikula Foundation - http://zikula.org/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zikula\SpecModule\Block\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class FooBlockType
 * @package Zikula\SpecModule\Block\Form\Type
 */
class FooBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sentence', 'Symfony\Component\Form\Extension\Core\Type\TextType', [
                'label' => __('Sentence label')
            ])
            ->add('status', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', [
                'required' => false,
            ])
            ->add('more', 'Symfony\Component\Form\Extension\Core\Type\TextareaType', [
                'required' => false
            ])
        ;
    }

    public function getName()
    {
        return 'zikulaspecmodule_fooblock';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'sentence' => 'The cheesecake exploded.',
            'status' => true,
            'more' => '',
        ]);
    }
}
