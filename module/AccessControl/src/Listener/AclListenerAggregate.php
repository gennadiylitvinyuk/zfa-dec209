<?php
namespace AccessControl\Listener;

use AccessControl\Acl\MarketAcl;
use AccessControl\Traits\AclTrait;
use Login\Traits\AuthServiceTrait;
use Zend\Mvc\MvcEvent;
use Zend\Authentication\AuthenticationService;
use Zend\EventManager\ {AbstractListenerAggregate,EventManagerInterface};
class AclListenerAggregate extends AbstractListenerAggregate
{
	use AclTrait;
	use AuthServiceTrait;

	const DEFAULT_ACTION     = 'index';
    const DEFAULT_CONTROLLER = 'Login\Controller\IndexController';

    public function attach(EventManagerInterface $e, $priority = 100)
    {
        //*** ACCESS CONTROL LAB: attach the "checkAcl" and "injectAcl" listeners to the MVC "dispatch" event using the shared manager
        $shared = $e->getSharedManager();
        $this->listeners[] = $shared->attach('*', MvcEvent::EVENT_DISPATCH,  [$this, 'injectAcl'], 2);
        $this->listeners[] = $shared->attach('*', MvcEvent::EVENT_DISPATCH,  [$this, 'checkAcl'], 999);
    }
    public function injectAcl(MvcEvent $e)
    {
        $layout = $e->getViewModel();
        $layout->setVariable('acl', $this->acl);
    }
    public function checkAcl(MvcEvent $e)
    {
        //*** ACCESS CONTROL LAB: pull resource and rights from route match
        $match = $e->getRouteMatch();
        // get role
        $role = ($this->authService->hasIdentity())
              ? $this->authService->getIdentity()->getRole()
              : MarketAcl::DEFAULT_ROLE;
        $denied = TRUE;
        //*** ACCESS CONTROL LAB: make sure controller which is matched is in the list of resources
        //*** if denied and we're not already going home ...
        if ($denied && $resource != self::DEFAULT_CONTROLLER) {
            $response = $e->getResponse();
            $response->getHeaders()->addHeaderLine('Location', '/');
            $response->setStatusCode(302);
            return $response;
        }
        // otherwise: do nothing
    }
}
