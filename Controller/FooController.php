<?php

/*
 * This file is part of the Zikula package.
 *
 * Copyright Zikula Foundation - http://zikula.org/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zikula\SpecModule\Controller;

use Symfony\Component\HttpFoundation\Request;
use Zikula\Core\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FooController extends AbstractController
{
    /**
     * @Route("/hello/{name}")
     * @Template
     * @param Request $request
     * @param string $name
     * @return array
     */
    public function indexAction(Request $request, $name = 'no name')
    {
        $perm = $this->hasPermission('ZikulaSpecModule::', '::', ACCESS_ADMIN, 1);
        $oldPerm = \SecurityUtil::checkPermission('ZikulaSpecModule::', '::', ACCESS_ADMIN, 1);

//        return $this->render('ZikulaSpecModule:Foo:index.html.twig', array('name' => $name));
//        return $this->render('@ZikulaSpecModule/Foo/index.html.twig', array('name' => $name));
        return ['name' => $name, 'perms' => ['old' => $oldPerm, 'new' => $perm]];
    }
}
