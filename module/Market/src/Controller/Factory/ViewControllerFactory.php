<?php
//*** INITIALIZERS LAB: this factory will no longer be needed after the initializer has been created
namespace Market\Controller\Factory;

use Market\Controller\ViewController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ViewControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $controller = new ViewController();
        return $controller;
    }
}
