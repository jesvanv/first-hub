<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $config['db'] = array (
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'dbname' => 'pagination_udemy',
    );

$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname='  . $config['db']['dbname']  , $config['db']['user']  ,  $config['db']['password'] );

?>