<?php 

require 'vendor/autoload.php';
require_once 'src/App/Config/db.php';


error_reporting(E_ALL);
ini_set("display_errors", 1);

use App\Mvc\Controller as Controller;

Controller::index();