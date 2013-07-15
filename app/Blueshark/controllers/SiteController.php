<?php

namespace Blueshark\controllers;

use NeoPHP\web\controller\WebController;

class SiteController extends WebController
{   
    public function onBeforeActionExecution ($action)
    {
        $executeAction = App::getInstance()->getSession()->isStarted() && isset(App::getInstance()->getSession()->sessionId);
        if (!$executeAction)
            App::getInstance()->redirectAction("portal/showLogin");
        return $executeAction;
    }
    
    public function logoutAction ()
    {
        App::getInstance()->redirectAction('portal/showLogin');
    }
}

?>
