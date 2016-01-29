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

namespace Zikula\SpecModule\Block;

use Symfony\Component\HttpFoundation\Request;
use Zikula\Core\BlockHandlerInterface;

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