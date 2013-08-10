<?php

namespace Blueshark;

use NeoPHP\web\WebApplication as CoreWebApplication;

class WebApplication extends CoreWebApplication
{
    public function __construct ()
    {
        parent::__construct("Blueshark");
    }
}

?>
