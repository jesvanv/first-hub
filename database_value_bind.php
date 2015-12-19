<h3>Binding data to values</h3>

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

//Set attribute to get any errors in connecting to db, using PDO methods:
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//query is pulling particular columns and also includes a search option
$query = $db->prepare("SELECT `hamsters` . `description` FROM `hamsters` WHERE `hamsters` . `description` LIKE :search ");

//defining search to check and pull the search value from the URL
$search = (isset($_GET['search']) === true) ? $_GET['search'] : '' ;

//attach the query to look for the searched term
$query->bindValue(':search', '%' . $search . '%');

try {
    //run the query
    $query->execute();

    //row specifies any strings with that search term (?)
    $row = $query->fetchAll(PDO::PARAM_STR);

    echo '<pre>' . print_r($row, true) . '</pre>';

    echo 'You searched for <span style="font-style:italic">' . $search . '</span>.' . '<br/>';

    echo (isset($_GET['search']) === true ? 'Success' : "Nothing entered");
    
    } catch(PDOException $e)
        //PDOException is a PDO-object-specific exception
{
    
    //die($e->getMessage());   
    
    }

echo '<pre>' . print_r($query->errorInfo(), true) . '</pre>';

?>

