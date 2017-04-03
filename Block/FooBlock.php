<?php

/*
 * This file is part of the Zikula package.
 *
 * Copyright Zikula Foundation - http://zikula.org/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zikula\SpecModule\Block;

use Zikula\BlocksModule\AbstractBlockHandler;

/**
 * Example block to demonstrate usage of AbstractBlockHandler and Symfony Form.
 *
 * Class FooBlock
 */
class FooBlock extends AbstractBlockHandler
{
    // getType(), getFormTemplate() and getFormOptions() intentionally unimplemented for demonstration purposes.

    public function display(array $properties)
    {
        $content = nl2br(implode("\n", $properties));

        return $this->renderView('@ZikulaSpecModule/Block/foo.html.twig', ['content' => $content]);
    }

    public function getFormClassName()
    {
        return 'Zikula\SpecModule\Block\Form\Type\FooBlockType';
    }
}
