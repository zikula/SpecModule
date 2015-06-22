<?php

namespace Zikula\SpecModule;

use Zikula\Core\AbstractBundle;
use Zikula\Core\ExtensionInstallerInterface;

class SpecModuleInstaller implements ExtensionInstallerInterface
{
    public function setBundle(AbstractBundle $bundle)
    {
        $this->bundle = $bundle;
    }

    public function install()
    {
        return true;
    }

    public function upgrade($oldversion)
    {
        return true;
    }

    public function uninstall()
    {
        return true;
    }
}