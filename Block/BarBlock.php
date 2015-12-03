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
use Zikula\Core\BlockControllerInterface;

/**
 * Bar Block
 */
class BarBlock implements BlockControllerInterface
{
    public function getType()
    {
        return 'Bar';
    }

    public function display($content)
    {
        return "<div><strong>Bar Block!</strong></div>";
    }

    public function modify(Request $request, $content)
    {
        return "This block provides no configurable options.";
    }
}