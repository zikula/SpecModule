<?php

namespace Zikula\SpecModule\Container;

use Zikula\Bundle\HookBundle\AbstractHookContainer;
use Zikula\Bundle\HookBundle\Bundle\SubscriberBundle;

class HookContainer extends AbstractHookContainer
{
    protected function setupHookBundles()
    {
        $bundle = new SubscriberBundle('ZikulaSpecModule', 'subscriber.user.ui_hooks.view.content', 'ui_hooks', $this->__('Foo'));
        $bundle->addEvent('foo_view', 'zikula_spec_module.ui_hooks.foo_view');
        $this->registerHookSubscriberBundle($bundle);
    }
}
