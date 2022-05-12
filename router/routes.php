<?php

use App\Services\Router;
use App\Controllers\User;
use App\Controllers\Admin;

/*
 * For pages with a parameter, you need to set / at the end of the uri, each page with / can contain only 1 parameter
 *
 * */
Router::page('/login/','login');
Router::page('/register/','register');
Router::page('/home','home');
Router::page('/profile','profile');
Router::page('/admin','admin',true);
Router::page('/admin/users/','users',true);
Router::page('/admin/user/','user',true);
Router::page('/admin/user/add','add-user',true);

Router::post('/auth/register',User::class,'register',true);
Router::post('/auth/login',User::class,'login',true);
Router::post('/auth/logout',User::class,'logout');

Router::post('/user/update',Admin::class,'userUpdate',true);
Router::post('/user/delete',Admin::class,'userDelete',true);
Router::post('/user/add',Admin::class,'userAdd',true);

Router::enable();

