<?php

namespace Blueshark\controllers;

use NeoPHP\web\controller\WebController;
use Exception;

class SiteController extends WebController
{   
    public function onBeforeActionExecution ($action)
    {
        $executeAction = ($action == "login" || ($this->getSession()->isStarted() && isset($this->getSession()->sessionId)));
        if (!$executeAction)
            $this->redirectAction("portal/showLogin");
        return $executeAction;
    }
    
    public function loginAction ($userName, $password)
    {
        $this->getSession()->destroy();
        
        if ($userName == "demo" && $password == "demo")
        {
            $this->getSession()->start();
            $this->getSession()->sessionId = session_id();
            $this->getSession()->sessionName = session_name();
            $this->getSession()->userName = "Demo";
            $this->getSession()->firstName = "Luis";
            $this->getSession()->lastName = "Amengual";
            $this->getSession()->clientId = 1;
            $this->getSession()->profileId = 1;
        }
        else
        {
            try
            {
                $connection = $this->getDatabase("production");
                $doUser = $connection->getDataObject("User");
                $doUser->addWhereCondition ('username="' . $userName . '"');
                $doUser->addWhereCondition ('password="' . $password . '"');
                if ($doUser->find(true))
                {
                    $this->getSession()->start();
                    $this->getSession()->sessionId = session_id();
                    $this->getSession()->sessionName = session_name();
                    $this->getSession()->userName = $doUser->username;
                    $this->getSession()->firstName = $doUser->firstname;
                    $this->getSession()->lastName = $doUser->lastname;
                    $this->getSession()->clientId = $doUser->clientid;
                    $this->getSession()->profileId = $doUser->profileid;
                }
            }
            catch (Exception $ex) {}
        }
        
        if ($this->getSession()->isStarted())
        {
            $this->redirectAction('site/showHome');
        }
        else
        {
            $this->redirectAction('portal/showLogin', array("showLoginError"=>true));
        }
    }
    
    public function logoutAction ()
    {
        $this->getSession()->destroy();
        $this->redirectAction('portal/showLogin');
    }
    
    public function showHomeAction ()
    {
        $this->getView("site/home")->render();
    }
}

?>