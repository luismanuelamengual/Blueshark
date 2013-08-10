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
    
    public function showHomeAction ()
    {
        $homeView = $this->getView('portal/home');
        $homeView->render();
    }
}

?>
