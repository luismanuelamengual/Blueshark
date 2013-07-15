<?php

namespace Blueshark\controllers;

use NeoPHP\web\controller\WebController;

class PortalController extends WebController
{ 
    public function showLoginAction ()
    {
        $this->getView('portal/login')->render();
    }
    
    public function loginAction ()
    {
        
    }
}

?>
