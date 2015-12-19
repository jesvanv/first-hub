<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagination</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        .fa {
            display: block;
            margin-top: 1.5em;
        }
        
    </style>
</head>
<body>
   <div class="container">
         
          <?php
           error_reporting(E_ALL);
           ini_set('display_errors', 1);
       
           include 'database_connector.php';
       
           $records_perpage = 6;
       
           $pagination_query = $db->query('SELECT `name`  FROM `names`');
       
           while ($query_row = $pagination_query->fetch(PDO::FETCH_ASSOC)) {
               echo '<p class="fa fa-camera-retro fa-sm"> ', $query_row['name'] , '</p>  ';
           }
       ?>
       
       </div>
    
</body>
</html>
   

