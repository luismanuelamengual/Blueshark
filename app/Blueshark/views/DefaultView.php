<?php

namespace Blueshark\views;

abstract class DefaultView extends BootstrapView
{
    protected function build ()
    {
        parent::build();
        $this->setTitle($this->getApplication()->getName());
        $this->addStyleFile("assets/font-awesome/css/font-awesome.css");
        $this->addStyleFile("css/style.css");
        $this->buildHead();
        $this->buildBody();
    }
    
    protected function buildHead ()
    {
    }
    
    protected function buildBody ()
    {
        $this->bodyTag->add($this->createHeader());
        $this->bodyTag->add($this->createContent());
        $this->bodyTag->add($this->createFooter());
    }
    
    protected function createHeader ()
    {   
        return '
        <div id="mainNavbar" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">' . $this->getApplication()->getName() . '</a>
                </div>
                <div class="navbar-collapse collapse">
                    ' . $this->createHeaderContent() . '
                </div>
            </div>
        </div>';
    }
    
    protected function createHeaderContent ()
    {
        return '';
    }
    
    protected function createFooter ()
    {
        return '
        <div id="footer">
            <hr>
            <div class="container">
                <p class="text-muted credit">© Copyright 2013. ' . $this->getApplication()->getName() . ' - Todos los derechos reservados</p>
            </div>
        </div>';
    }
    
    protected abstract function createContent ();
}

?>