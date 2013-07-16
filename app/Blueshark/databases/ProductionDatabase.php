<?php

namespace Blueshark\databases;

use NeoPHP\core\data\Database;
use \PDO;

class ProductionDatabase extends Database
{
    public function getDsn ()
    {
        return "mysql:host=localhost;dbname=blueshark";
    }
    
    public function getUsername ()
    {
        return "root";
    }
    
    public function getPassword ()
    {
        return "root";
    }
    
    public function getDriverOptions ()
    {
        return array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
    }
}

?>
