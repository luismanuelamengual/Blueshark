<?php

namespace Blueshark\controllers;

use NeoPHP\web\controller\WebController;

class PortalController extends WebController
{ 
    public function onBeforeActionExecution ($action)
    {
        $this->getSession()->destroy();
        return true;
    }
    
    public function showLoginAction ($showLoginError=false)
    {
        $loginView = $this->getView('portal/login');
        $loginView->setShowLoginError($showLoginError);
        $loginView->render();
    }
}

?>
