<?php

namespace Blueshark\controllers;

use NeoPHP\core\controller\Controller;

class MainController extends Controller
{
    public function defaultAction ()
    {
        $this->executeAction("portal/showLogin");
    }
}

?>
