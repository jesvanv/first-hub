<h3>Explode and Implode</h3>

<?php

    $likeables = 'hamsters, woo, food, water, sleep';
    $likeables = explode (',', $likeables);
    
    print_r($likeables);

    foreach($likeables as $key => $like) {
            echo '<p><a href="' . $like . '.html"> ' . $like . '</a></p>';
    }

    $theCrew = array('Jim','Joseph','Bob');
    $theCrew_str = null;

    //print_r($theCrew);

    echo '<p>' , implode(', ', $theCrew) , '</p>';
        

            ?>

<h3>Ternery operator</h3>

<?php
    //Simple if then syntax
    $age = 36;
    echo ($age>=18) ? 'Old enough' : 'Too young'
    // action (condition) ?--alterntives 'if true' : 'if false'          
                ?>
