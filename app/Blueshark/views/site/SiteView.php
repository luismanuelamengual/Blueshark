<?php

namespace Blueshark\views\site;

use Blueshark\views\DefaultView;

abstract class SiteView extends DefaultView
{
    protected function createHeaderContent ()
    {   
        return $this->createUserMenu();
    }
    
    protected function createUserMenu ()
    {
        return '
        <ul class="nav navbar-nav pull-right">
            <li class="dropdown">            
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-user"></i> ' . $this->getSession()->firstName . ' ' . $this->getSession()->lastName . ' <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i> Mi Cuenta</a></li>
                    <li><a href="#"><i class="icon-cogs"></i> Configuración</a></li>
                    <li><a href="' . $this->getUrl("site/logout") . '"><i class="icon-off"></i> Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>';
    }
}

?>
