<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.05.2022
 * Time: 11:45
 */

namespace App\Services;


class Page
{
    public static function part($part_name)
    {
        require_once "views/components/".$part_name.".php";
    }
}