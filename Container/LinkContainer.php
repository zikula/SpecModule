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

use Symfony\Component\Routing\RouterInterface;
use Zikula\Common\Translator\Translator;
use Zikula\Core\LinkContainer\LinkContainerInterface;

class LinkContainer implements LinkContainerInterface
{
    /**
     * @var Translator
     */
    private $translator;
    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * constructor.
     *
     * @param $translator
     * @param RouterInterface $router
     */
    public function __construct($translator, RouterInterface $router)
    {
        $this->translator = $translator;
        $this->router = $router;
    }

    /**
     * get Links of any type for this extension
     * required by the interface
     *
     * @param string $type
     * @return array
     */
    public function getLinks($type = LinkContainerInterface::TYPE_ADMIN)
    {
        $method = 'get' . ucfirst(strtolower($type));
        if (method_exists($this, $method)) {
            return $this->$method();
        }

        return [];
    }

    /**
     * get the Admin links for this extension
     *
     * @return array
     */
    private function getAdmin()
    {
        $links = [];
        if (\SecurityUtil::checkPermission('ZikulaSpecModule::', '::', ACCESS_READ)) {
            $links[] = [
                'url' => $this->router->generate('zikulaspecmodule_bar_index'),
                'text' => $this->translator->__('Spec Admin'),
                'icon' => 'wrench'
            ];
        }

        return $links;
    }

    /**
     * get the User Links for this extension
     *
     * @return array
     */
    private function getUser()
    {
        $links = [];
        $links[] = [
            'url' => $this->router->generate('zikulaspecmodule_foo_index'),
            'text' => $this->translator->__('Spec User'),
            'icon' => 'check-square-o'
        ];

        return $links;
    }

    /**
     * get the User account links.
     *
     * @return array
     */
    private function getAccount()
    {
        $links = [];
        $links[] = [
            'url' => $this->router->generate('zikulaspecmodule_foo_index'),
            'text' => $this->translator->__('Spec Module Index'),
            'icon' => 'check-square-o'
        ];

        return $links;
    }

    /**
     * set the BundleName as required buy the interface
     *
     * @return string
     */
    public function getBundleName()
    {
        return 'ZikulaSpecModule';
    }
}
