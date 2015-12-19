<h3>Getting last entered id</h3>

<?php 




// variable holds values for connecting and logging in:
$config['db'] = array (
    'host' => 'localhost',
    'user' => 'jesvanv',
    'password' => 'draghkar',
    'dbname' => 'jesse',
    );

// create a variable that logins and accessess db
$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname='  . $config['db']['dbname']  , $config['db']['user']  ,  $config['db']['password'] );

//Insert a new row, into hamsters table, under description column, insert VALUES 'Piggy longtail?'
$db->query("INSERT INTO `hamsters` (`hamsters` . `description`) VALUES ('Piggy longtail?')");

header('Location: posts.php?id=' . $db->lastInsertId());

echo var_dump($myHeader);
error_reporting(E_ALL);
ini_set('display_errors', 1);
exit();






?>

