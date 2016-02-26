<?php

namespace Zikula\SpecModule;

use Zikula\Core\AbstractBundle;
use Zikula\Core\AbstractExtensionInstaller;

class SpecModuleInstaller extends AbstractExtensionInstaller
{
    public function setBundle(AbstractBundle $bundle)
    {
        $this->bundle = $bundle;
    }

    public function install()
    {
        $hookContainer = $this->hookApi->getHookContainerInstance($this->bundle->getMetaData());
        $this->hookApi->registerSubscriberBundles($hookContainer->getHookSubscriberBundles());
        return true;
    }

    public function upgrade($oldversion)
    {
        return true;
    }

    public function uninstall()
    {
        $hookContainer = $this->hookApi->getHookContainerInstance($this->bundle->getMetaData());
        $this->hookApi->unregisterSubscriberBundles($hookContainer->getHookSubscriberBundles());
        return true;
    }
}