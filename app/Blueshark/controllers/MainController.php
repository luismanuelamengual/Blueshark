<?php

namespace Blueshark\controllers;

use NeoPHP\core\controller\Controller;
use Exception;

class MainController extends Controller
{
    public function defaultAction ()
    {
        if (ini_get("session.use_cookies") == "0")
            throw new Exception ("Se necesita la variable session.use_cookies = 1 en el archivo de configuración de php");
        $this->executeAction("portal/showLogin");
    }
}

?>
