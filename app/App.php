<?php

namespace App;

class App{

    // const DB_NAME= 'blog';
    // const DB_USER= 'root';
    // const DB_PASS = 'root';
    // const DB_HOST = 'localhost';

    // private static $title = 'TP POO';
    public $title = 'TP POO';
    // private static $database;
    private static $_instance;

    public static function getInstance()
    {
        if (is_null (self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    // public static function getDb(){
    //     if (self::$database === null) {
    //     self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
    //     }
    //     return self::$database;
    // }

    // public static function notFound(){
    //     header ("HTTP/1.0 404 Not Found");
    //     header('Location:index.php?p=404');
    // }

    // public static function getTitle(){
    //     return self::$title;
    // }


    // public static function setTitle($title){
    //     self::$title = $title . " | " . self::$title;
    // }
}
