<?php

namespace Zikula\SpecModule\Controller;

use Symfony\Component\HttpFoundation\Request;
use Zikula\Core\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; // used in annotations - do not remove

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
//        return $this->render('ZikulaSpecModule:Foo:index.html.twig', array('name' => $name));
//        return $this->render('@ZikulaSpecModule/Foo/index.html.twig', array('name' => $name));
        $perm = $this->hasPermission('ZikulaSpecModule::', '::', ACCESS_ADMIN, 1);
        $oldPerm = \SecurityUtil::checkPermission('ZikulaSpecModule::', '::', ACCESS_ADMIN, 1);

        return ['name' => $name, 'perms' => ['old' => $oldPerm, 'new' =>$perm]];
    }
}
