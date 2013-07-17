<?php

namespace Blueshark\views\site;

use NeoPHP\web\view\HTMLView;
use NeoPHP\widget\html\Tag;

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
        $this->addStyleFile("assets/bootstrap/css/bootstrap.min.css");
        $this->addStyleFile("assets/font-awesome/css/font-awesome.css");
        $this->addStyleFile("css/style.css");
        $this->addStyleFile("assets/bootstrap/css/bootstrap-responsive.min.css");    
        $this->headTag->add('        <!--[if lt IE 9]><script src="js/html5shim.js"></script><![endif]-->');
        $this->headTag->add('        <link rel="shortcut icon" href="images/favicon.png" />');
        $this->addScriptFile("js/jquery.min.js");
        $this->addScriptFile("assets/bootstrap/js/bootstrap.min.js");
    }
    
    protected function buildBody ()
    {
        $this->bodyTag->add('');
    }
}

?>