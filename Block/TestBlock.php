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
use Zikula\SpecModule\Block\Form\Type\TestBlockType;
use Zikula\Core\Controller\AbstractBlockController;

/**
 * Test Block
 */
class TestBlock extends AbstractBlockController
{
    public function getType()
    {
        return $this->__('Test');
    }

    public function display($content)
    {
        $content = nl2br(implode("\n", $content));

        return $this->renderView('ZikulaSpecModule:Block:test.html.twig', ['content' => $content]);
    }

    public function modify(Request $request, $content)
    {
        $defaults = [
            'myfield' => 'default field value.',
            'mycheckbox' => true,
            'content' => '',
        ];
        $vars = array_merge($defaults, $content);
        $form = $this->createForm('Zikula\SpecModule\Block\Form\Type\TestBlockType', $vars);
        $form->handleRequest($request);
        if ($form->isValid()) {

            return $form->getData();
        }

        return $this->renderView('ZikulaBlocksModule:Block:default_modify.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}