<?php

namespace Blueshark\views\site;

class HomeView extends MainView
{
    protected function buildBody ()
    {
        $this->bodyTag->add($this->createNavBar());
    }
    
    protected function createNavBar ()
    {
        return '
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span>Menu</span></a>
                    <a href="' . $this->getUrl("site/showHome") . '" class="brand hidden-desktop">Blueshark</a>

                    <div class="nav-collapse collapse">        
                        <form class="navbar-search pull-left">
                            <input type="text" class="search-query" placeholder="Buscar">
                        </form>
                        <ul class="nav pull-right">
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
            </div>
        </div>';
    }
}

?>