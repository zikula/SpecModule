<?php

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
