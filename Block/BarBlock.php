<?php

namespace Zikula\SpecModule\Block;

use Zikula\BlocksModule\BlockHandlerInterface;

/**
 * Example block to demonstrate a 'bare bones' block requiring only the interface.
 *
 * Class BarBlock
 * @package Zikula\SpecModule\Block
 */
class BarBlock implements BlockHandlerInterface
{
    public function getType()
    {
        return 'Bar';
    }

    public function display(array $properties)
    {
        return "<div><strong>Bar Block!</strong></div>";
    }

    public function getFormClassName()
    {
        return null;
    }

    public function getFormTemplate()
    {
        return '';
    }

    public function getFormOptions()
    {
        return [];
    }
}
