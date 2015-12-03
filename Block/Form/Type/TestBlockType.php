<?php
/**
 * Copyright Zikula Foundation 2015 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\SpecModule\Block\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TestBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('myfield', 'Symfony\Component\Form\Extension\Core\Type\TextType', [
                'label' => __('My field label')
            ])
            ->add('mycheckbox', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', [
                'required' => false,
                'label' => __('My checkbox label')
            ])
            ->add('content', 'Symfony\Component\Form\Extension\Core\Type\TextareaType', [
                'required' => false
            ])
        ;
    }

    public function getName()
    {
        return 'zikulaspecmodule_testblock';
    }
}