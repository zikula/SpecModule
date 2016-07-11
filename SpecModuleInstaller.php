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

use Zikula\Core\AbstractExtensionInstaller;

class SpecModuleInstaller extends AbstractExtensionInstaller
{
    public function install()
    {
        $this->hookApi->installSubscriberHooks($this->bundle->getMetaData());

        return true;
    }

    public function upgrade($oldversion)
    {
        return true;
    }

    public function uninstall()
    {
        $this->hookApi->uninstallSubscriberHooks($this->bundle->getMetaData());

        return true;
    }
}
