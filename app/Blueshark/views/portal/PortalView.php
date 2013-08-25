<?php

namespace Blueshark\views\portal;

use Blueshark\views\DefaultView;

abstract class PortalView extends DefaultView
{
    protected function buildBody ()
    {
        parent::buildBody();
        $this->bodyTag->setAttribute("data-spy", "scroll");
        $this->bodyTag->setAttribute("data-target", "#mainNavbar");
    }
    
    protected function createHeaderContent ()
    {   
        return $this->createNavbarMenu() . $this->createLoginForm();
    }
    
    protected function createNavbarMenu ()
    {
        return '
        <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Inicio</a></li>
            <li><a href="#aboutUs">Empresa</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#contactUs">Contacto</a></li>
        </ul>';
    }
    
    protected function createLoginForm ()
    {
        return '
        <form class="navbar-form navbar-right" action="' . $this->getUrl("site/login") . '" method="post">
            <div class="form-group">
                <input type="text" name="userName" placeholder="Usuario" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" class="form-control">
            </div>
            <button type="submit" class="btn">Ingresar</button>
        </form>';
    }
}

?>
