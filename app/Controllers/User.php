<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.05.2022
 * Time: 17:50
 */

namespace App\Controllers;
use App\Services\Router;


class User
{
    public function logout(){
        unset($_SESSION["user"]);
        Router::redirect('/login/');
    }
    public function login($data)
    {
        $email = $data["email"];
        $password = $data["password"];

        $user = \R::findOne('users','email = ?', [$email]);

        if(password_verify($password, $user->password)){
            session_start();
            $_SESSION["user"] = [
                "id" => $user->ID,
                "email" => $user->email,
                "name" => $user->name,
                "date_of_birth" => $user->date_of_birth,
                "group" => $user->_group,
            ];
            Router::redirect('/profile');
        }else{
            Router::redirect('/login/error');
        }

    }

    public function register($data)
    {
        //with a limit of 2-20 characters, which can be letters and numbers, the first character must be a letter
        $name_pattern = '/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/';
        $email_pattern = '/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/';

        $email = $data["email"];
        $name = $data["Name"];
        $dateOfBirth = $data["dateOfBirth"];
        $inputPassword = $data["inputPassword"];
        $confirmPassword = $data["confirmPassword"];

        if(!preg_match($name_pattern,$name) || !preg_match($email_pattern,$email)){ // validation by patterns
            Router::redirect('/register/');
            die();
        }

        if($inputPassword !== $confirmPassword){
            Router::redirect('/register/501');
            die();
        }

        $user = \R::dispense('users');
        $user->email = $email;
        $user->name = $name;
        $user->date_of_birth = $dateOfBirth;
        $user->password = password_hash($inputPassword,PASSWORD_DEFAULT);
        $user->_group = 1;
        /*
        * 1 - users
        * 2 - admin
        */

        \R::store($user);

        Router::redirect('/login/');

    }

    public function getUser($ID){
        $user = \R::findOne( 'users', ' ID = '.$ID);
        return($user->export());
    }
}