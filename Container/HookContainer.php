<?php

/*
 * This file is part of the Zikula package.
 *
 * Copyright Zikula Foundation - http://zikula.org/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
