<?php

namespace App\Services;

class Router
{
    public static $list = [];
    public static $param;  // contains parameter of page

    public static function page($uri, $page_name, $admin = false)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" =>$page_name,
            "admin" => $admin,
        ];
    }

    public static function post($uri, $class, $method, $formdata = false)
    {
        self::$list[] = [
            "uri" => $uri,
            "class" => $class,
            "method" => $method, //login
            "post" => true,
            "formdata" => $formdata,
        ];
    }

    public static function enable()
    {
        $query = '/'.$_GET['q'];

        foreach(self::$list as $route){

            $param = trim($query,$route["uri"]); // get the parameter of page

            if($route["uri"] === $query || $route["uri"].$param ===$query ){
                if($route["post"] === true){
                    $action = new $route["class"];
                    $method = $route["method"];
                    if($route["formdata"]){
                        $action->$method($_POST);
                    }
                    else{
                        $action->$method();
                    }
                    die();
                }
                else{
                    if($route["admin"] === true){
                        if($_SESSION["user"] && $_SESSION["user"]["group"] != 2){
                            Router::redirect('/home');
                            die();
                        }
                        require_once "views/pages/admin/". $route['page'].".php";
                        die();
                    }else {
                        require_once "views/pages/" . $route['page'] . ".php";
                        die();
                    }
                }
            }
        }

        self::error('404');
    }

    public static function error($error)
    {
        require_once "views/errors/".$error.".php";
    }

    public static function redirect($uri)
    {
        header('Location:' . $uri);
    }

}

