<?php

namespace Zikula\SpecModule\Block;

use Zikula\BlocksModule\AbstractBlockHandler;

/**
 * Example block to demonstrate usage of AbstractBlockHandler and Symfony Form.
 *
 * Class FooBlock
 * @package Zikula\SpecModule\Block
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
