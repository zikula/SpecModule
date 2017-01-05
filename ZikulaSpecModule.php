<?php

/*
 * This file is part of the Zikula package.
 *
 * Copyright Zikula Foundation - http://zikula.org/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zikula\SpecModule;

use Zikula\Core\AbstractModule;

class ZikulaSpecModule extends AbstractModule
{        
    /** 
     * This function is necesssary for console commands in Command/*Command.php
     * to be recognized by app/console.php
     * 
     * @return boolean
     */
    protected function hasCommands()
    {
       return true;
    }
}
