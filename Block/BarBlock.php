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

use Zikula\BlocksModule\BlockHandlerInterface;

/**
 * Example block to demonstrate a 'bare bones' block requiring only the interface.
 *
 * Class BarBlock
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
