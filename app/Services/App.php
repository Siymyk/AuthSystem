<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.05.2022
 * Time: 12:42
 */

namespace App\Services;


class App
{
    public static function start(){
        self::library();
        self::db();
    }

    public static function library(){

        $config = require_once "config/app.php";
        foreach($config["libs"] as $lib){
            require_once "libraries/".$lib.".php";
        }
    }

    public static function db(){

        $config = require_once "config/db.php";
        if($config["enable"]){
            \R::setup( 'mysql:host='.$config["host"].';port='.$config["port"].';dbname='.$config["db"].''
            ,$config["username"],$config["password"]);

            if(!\R::testConnection()){
                die('Error: database connection');
            }
        }
    }

}