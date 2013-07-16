<?php

namespace Blueshark\views\portal;

use Blueshark\views\MainView;
use NeoPHP\widget\html\Tag;

class LoginView extends MainView
{
    private $showLoginError = false;
    
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
