<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.05.2022
 * Time: 22:42
 */

namespace App\Controllers;
use App\Services\Router;

class Admin extends User
{
    public function getUsers(){
        return(\R::getAll( 'SELECT ID,name,email FROM users'));
    }

    public function userUpdate($data){

        //with a limit of 2-20 characters, which can be letters and numbers, the first character must be a letter
        $name_pattern = '/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/';
        $email_pattern = '/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/';

        $id = $data["ID"];
        $email = $data["email"];
        $name = $data["name"];
        $dateOfBirth = $data["date_of_birth"];
        $password = $data["password"];
        $group = $data["group"];

        if(!preg_match($name_pattern,$name) || !preg_match($email_pattern,$email)){
            Router::redirect('/admin/user/'.$id);
            die();
        }

        $user = \R::load('users',$id);
        $user->email = $email;
        $user->name = $name;
        $user->date_of_birth = $dateOfBirth;
        $user->password = password_hash($password,PASSWORD_DEFAULT);
        $user->_group = $group;

        \R::store($user);

        Router::redirect('/admin/users/1');
    }

    public function userDelete($data){

        $id = $data["ID"];

        $user = \R::load('users',$id);
        \R::trash($user);
        Router::redirect('/admin/users/1');
    }

    public function userAdd($data){

        //with a limit of 2-20 characters, which can be letters and numbers, the first character must be a letter
        $name_pattern = '/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/';
        $email_pattern = '/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/';

        $email = $data["email"];
        $name = $data["name"];
        $dateOfBirth = $data["dateOfBirth"];
        $password = $data["password"];

        if(!preg_match($name_pattern,$name) || !preg_match($email_pattern,$email)){
            Router::redirect('/admin/user/add');
            die();
        }

        $user = \R::dispense('users');
        $user->email = $email;
        $user->name = $name;
        $user->date_of_birth = $dateOfBirth;
        $user->password = password_hash($password,PASSWORD_DEFAULT);
        $user->_group = 1;
        /*
        * 1 - users
        * 2 - admin
        */

        \R::store($user);

        Router::redirect('/admin/users/1');
    }

}