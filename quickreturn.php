<h3>Quick return true/false</h3>

<?php
    // quick way to check true false, if value doesn not match what is returned, false!
    function quickOne($value) {
        return $value === 1;
    }

var_dump(quickOne(1));

?>

<h3>Splitting with spaces</h3>
<?php
    $myString = trim('  Gray  car    yellow     submarine  ');
        // ' ' is the value of the splitter, regular expression is // and [\s]+ means space 1 or more
    $keywords = preg_split('/[\s]+/', $myString);
        
        print_r ($keywords);
?>

<h3>Random number</h3>

<?php
    $numero = rand(1,12);
    echo 'You have ' , $numero , ' hamsters loose.';
?>