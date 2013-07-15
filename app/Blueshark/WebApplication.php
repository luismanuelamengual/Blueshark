<?php

namespace Blueshark;

use NeoPHP\web\WebApplication as CoreWebApplication;

class WebApplication extends CoreWebApplication
{
    public function initialize ()
    {
        $this->getSettings()->title = "Blueshark";
    }
}

?>
