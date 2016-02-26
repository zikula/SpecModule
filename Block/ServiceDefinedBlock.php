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
 * @package Zikula\SpecModule\Block
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
