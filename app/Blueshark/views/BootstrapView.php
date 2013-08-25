<?php

namespace Blueshark\views;

use NeoPHP\web\view\HTMLView;

abstract class BootstrapView extends HTMLView
{
    protected function build()
    {
        parent::build();
        $this->addMeta(array("http-equiv"=>"Content-Type", "content"=>"text/html; charset=UTF-8"));
        $this->addMeta(array("charset"=>"utf-8"));
        $this->addMeta(array("name"=>"viewport", "content"=>"width=device-width, initial-scale=1.0"));
        $this->addStyleFile("assets/bootstrap-3.0.0/css/bootstrap.min.css");
        $this->addScriptFile("http://code.jquery.com/jquery.js");
        $this->addScriptFile("assets/bootstrap-3.0.0/js/bootstrap.min.js");
    }
}

?>
