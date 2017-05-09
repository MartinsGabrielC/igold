<?php
require __DIR__ . '/../config/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection(array(
    'driver'    => $db['driver'],
    'host'      => $db['host'],
    'database'  => $db['database'],
    'username'  => $db['username'],
    'password'  => $db['password'],
    'charset'   => $db['charset'],
    'collation' => $db['collation'],
    'prefix'    => $db['prefix']
));

$capsule->bootEloquent();
