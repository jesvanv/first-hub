<h3>Querying a database</h3>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config['db'] = array (
    'host' => 'localhost',
    'user' => 'jesvanv',
    'password' => 'draghkar',
    'dbname' => 'jesse',
    );



/*echo 'mysql:host=' . $config['db']['host'] . ':' . $config['db']['port'] . ';dbname=' . '\'' . $config['db']['dbname'] . '\' , \'' . $config['db']['username'] . '\' , \'' . $config['db']['password'] . '\'';*/

$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname='  . $config['db']['dbname']  , $config['db']['user']  ,  $config['db']['password'] );

//selecting columns to include in new variable called query
$query = $db->query('SELECT `hamsters` . `id` , `hamsters` . `description` , `hamsters` . `hamster` FROM `hamsters`');

//deleting a specific row (row 4)  hamsters is table, id is row id
$deleter = $db->query('DELETE FROM `hamsters` WHERE `hamsters` . `id` = 4');

//See http://php.net/manual/en/pdo.constants.php for constants to use with PDO
while ($row = $query->fetch(PDO::FETCH_BOTH)) {
    echo '<b>' . $row['hamster'] . ' </b>';
    echo $row['description'] . '<br />';
}

$driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);

echo '<p>' . $driver . '</p>';

//echo '<p> Deleted' . $deleter->rowCount() . ' hamster.</p>';

//echo '<p>' . $query->rowCount() . '</p>';

//$rows = $query->fetchAll(PDO::FETCH_ASSOC);

//echo '<pre>', print_r($rows) , '</pre>';


?>