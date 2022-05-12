<?php
session_start();

use App\Services\App;

require_once __DIR__ ."/vendor/autoload.php";

App::start();  // connect database and libraries

require_once __DIR__ ."/router/routes.php";

