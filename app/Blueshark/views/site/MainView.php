<?php

namespace Blueshark\views\site;

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
        $this->setTitle("Blueshark");
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
        $this->bodyTag->add('');
    }
}

?>