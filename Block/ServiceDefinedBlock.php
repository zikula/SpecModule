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
 * Example block that utilizes dependencies from the container.
 *   @see /modules/SpecModule/Resources/config/services.xml
 *
 *         <service id="zikula.spec_module.block.service_defined_block" class="Zikula\SpecModule\Block\ServiceDefinedBlock">
 *             <argument>%kernel.environment%</argument>
 *             <tag name="zikula.block" module="ZikulaSpecModule" />
 *         </service>
 *
 * Class ServiceDefinedBlock
 */
class ServiceDefinedBlock implements BlockHandlerInterface
{
    private $env;

    /**
     * ServiceDefinedBlock constructor.
     */
    public function __construct($env)
    {
        $this->env = $env;
    }

    public function getType()
    {
        return 'ServiceDefined';
    }

    public function display(array $properties)
    {
        return "<div><strong>Environment: " . $this->env . "</strong></div>";
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
