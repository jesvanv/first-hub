<?php
 if (isset($_POST['like'])&&($_POST['like'] === 'whaWho')) {
     echo "Like's on";
 } 

if (isset($_POST['hamster'])) {
    $hamster = $_POST['hamster'];
    echo "Your hamster is " . $hamster;
 }


?>