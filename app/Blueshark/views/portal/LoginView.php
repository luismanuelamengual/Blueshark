<?php

namespace Blueshark\views\portal;

use NeoPHP\web\view\HTMLView;
use NeoPHP\widget\html\Tag;

class LoginView extends HTMLView
{
    private $showLoginError = false;
    
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
        $this->bodyTag->add($this->createLoginForm());
    }
    
    public function setShowLoginError ($showLoginError)
    {
        $this->showLoginError = $showLoginError;
    }
   
    protected function createLoginForm ()
    {
        return '
        <div class="admin-form">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-head">
                                <i class="icon-lock"></i> Inicio de Sesión
                            </div>
                            <div class="widget-content">
                                <div class="padd">
                                    <form class="form-horizontal" action="' . $this->getUrl("site/login") . '" method="post">
                                        <div class="control-group' . ($this->showLoginError? " error": "") . '">
                                            <label class="control-label" for="userName">Usuario</label>
                                            <div class="controls">
                                                <input type="text" id="userName" name="userName" placeholder="Nombre de Usuario">
                                            </div>
                                        </div>

                                        <div class="control-group' . ($this->showLoginError? " error": "") . '">
                                            <label class="control-label" for="password">Contraseña</label>
                                            <div class="controls">
                                                <input type="password" id="password" name="password" placeholder="Contraseña">
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <div class="controls">
                                                <label class="checkbox">
                                                    <input type="checkbox"> Recordarme
                                                </label>
                                                <br>
                                                <button type="submit" class="btn">Iniciar Sesión</button>
                                                <button type="reset" class="btn">Borrar</button>
                                            </div>
                                        </div>
                                        ' . ($this->showLoginError? ('<div class="alert alert-error"><strong>Error</strong> Nombre de usuario o contraseña incorrecta</div>') : '') . '
                                    </form>
                                </div>
                                <div class="widget-foot">
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>';
    }
}

?>
