<?php

namespace Blueshark\views;

use NeoPHP\web\view\HTMLView;

abstract class MainView extends HTMLView
{
    protected final function build()
    {
        parent::build();
        $this->buildHead();
        $this->buildBody();
    }
    
    protected function buildHead ()
    {
        $this->setTitle($this->getApplication()->getName());
        $this->addMeta(array("http-equiv"=>"Content-Type", "content"=>"text/html; charset=UTF-8"));
        $this->addMeta(array("charset"=>"utf-8"));
        $this->addMeta(array("name"=>"viewport", "content"=>"width=device-width, initial-scale=1.0"));
        $this->addStyleFile("assets/bootstrap-3.0.0RC1/css/bootstrap.min.css");
        $this->addStyleFile("assets/font-awesome/css/font-awesome.css");
        $this->addStyleFile("css/style.css");
        $this->addScriptFile("http://code.jquery.com/jquery.js");
        $this->addScriptFile("assets/bootstrap-3.0.0RC1/js/bootstrap.min.js");
    }
    
    protected function buildBody ()
    {
        $this->bodyTag->add($this->createNavbar());
        $this->bodyTag->add($this->createFooter());
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
    
    protected function createFooter ()
    {
        return '
        <div id="footer">
            <div class="container">
                <p class="text-muted credit">© Copyright 2013. ' . $this->getApplication()->getName() . ' - Todos los derechos reservados</p>
            </div>
        </div>';
    }
}

?>