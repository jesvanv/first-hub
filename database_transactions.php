<h3>Transactions</h3>

<?php 


error_reporting(E_ALL);
ini_set('display_errors', 1);

// variable holds values for connecting and logging in:
$config['db'] = array (
    'host' => 'localhost',
    'user' => 'jesvanv',
    'password' => 'draghkar',
    'dbname' => 'jesse',
    );

// create a variable that logins and accessess db
$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname='  . $config['db']['dbname']  , $config['db']['user']  ,  $config['db']['password'] );

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    
    $db->beginTransaction();
    
    $db->query('INSERT INTO `hamsters` (`hamsters`.`description`) VALUES ("Another cool hamster name")');
    $db->query('UPDATE `hamsters` SET `hamsters`.`views` =1 WHERE `hamsters`.`id` =' . $db->lastInsertId());
    
    $db->commit();
    
}

catch (PDOException $e){
    $db->rollBack();
    die($e->getMessage());
}





?>

