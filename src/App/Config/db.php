<?php

use Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule;

$capsule->addConnection([
	'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'wsframework',
    'username'  => 'root',
    'password'  => '1q2w3e4r',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();