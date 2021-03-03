<?php

//namespace App;

use Core\Config;
use Core\Database\MysqlDatabase;

class App{

    public $title = 'TP POO';
    private static $_instance;
    private $db_instance;

    public static function getInstance()
    {
        if (is_null (self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load(){
        session_start();
        require '../vendor/autoload.php';
    }

    public function getTable($name)
    {
        $class_name = 'App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb() 
    {
        if(is_null($this->db_instance)) {
            $config = Config::getInstance(ROOT . '/config/config.php');
            $this->db_instance = new MysqlDatabase($config->get('db_name'),
                                                $config->get('db_user'),
                                                $config->get('db_pass'),
                                                $config->get('db_host'));            
        }
        return $this->db_instance;
    }

    public function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');
    }

    public function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }
}
