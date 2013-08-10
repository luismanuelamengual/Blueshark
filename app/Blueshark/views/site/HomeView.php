<?php

namespace Blueshark\views\site;

use Blueshark\views\MainView;

class HomeView extends MainView
{
    protected function buildBody ()
    {
        $this->bodyTag->add($this->createNavbar());
    }
    
    protected function createNavBar ()
    {   
        return '
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <a href="../" class="navbar-brand">' . $this->getApplication()->getName() . '</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="nav-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">            
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-user"></i> ' . $this->getSession()->firstName . ' ' . $this->getSession()->lastName . ' <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> Mi Cuenta</a></li>
                                <li><a href="#"><i class="icon-cogs"></i> Configuración</a></li>
                                <li><a href="' . $this->getUrl("site/logout") . '"><i class="icon-off"></i> Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>';
    }
}

?>