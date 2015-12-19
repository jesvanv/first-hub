
   <?php
    $expiration = time() + 86400;
    $expUnset = time() - 86400;
    /*
    setcookie("moniker", "Jesse", $expiration);*/

    setcookie('moniker','', $expUnset)
    
    setcookie('age', 19, $expiration);
    echo '<p>' . $_COOKIE["moniker"] . ' is well over ' . $_COOKIE["age"] . '! </p>';

    if(isset($_COOKIE['moniker'])) {
        echo "Cookie's good!";
    } else {
       echo "Cookie isn't set!";
    }
    
?>