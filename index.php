<?php
    require 'vendor/autoload.php';
    use mybuku\Config as Config;

     
try {
    Config::get()->connect();
    echo 'A connection to the PostgreSQL database sever has been established successfully.';
} catch (\PDOException $e) {
    echo $e->getMessage();
}

?>