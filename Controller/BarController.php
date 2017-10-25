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
use Zikula\ThemeModule\Engine\Annotation\Theme;

class BarController extends AbstractController
{
    /**
     * @Route("/admin/hello/{name}")
     * @Theme("admin")
     * @Template("ZikulaSpecModule:Bar:index.html.twig")
     *
     * @param Request $request
     * @param string $name
     * @return array
     */
    public function indexAction(Request $request, $name = 'no name')
    {
        // return $this->render('ZikulaSpecModule:Bar:index.html.twig', array('name' => $name));
        // return $this->render('@ZikulaSpecModule/Bar/index.html.twig', array('name' => $name));
        return ['name' => $name];
    }
}
