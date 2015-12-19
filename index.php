<!doctype html>

<html>

<head>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic' rel='stylesheet' type='text/css'>

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }
        
        div {
            clear: both;
            margin: 15px 0;
        }
        
        h1,
        h2,
        h3 {
            margin: 0
        }
    </style>
</head>

<div>
    <!--  <h3>Switch</h3>
    <?php /*
    $number = 1;

    switch ($number) {

        case 10:
            echo "Ten";
        break;

        case 9:
            echo "Nine";
        break;

        default: echo "Sorry, this number is not valid.";
        break;
    }



   */ ?>
</div>
    -->
    <div>
        <h3>Arrays</h3>
        <?php /*
        $dudes = array ('Joe'=>array('age'=>21, 'occupation'=>'Plumber'),
                       'Bob'=>array('age'=>12, 'occupation'=>'Secretary'),
                       'Ray'=>array('age'=>46, 'occupation'=>'Director')
                      );
        
       // print_r($dudes);

        $dudes['Jeb']=26;

        echo $dudes['Joe']['occupation'];
*/
    ?>


    </div>

    <div>
        <h3>While loop</h3>
        <?php /*

            $countdownNumber = 10;

            while ($countdownNumber >= 0) {
                echo $countdownNumber . '<br />';
                $countdownNumber--;
            }
            
            echo '<em>' . $countdownNumber . '</em>';
         
*/
        ?>


    </div>

    <div>
        <h3>For loop</h3>
        <?php

        for ($dig=1;$dig<=10;$dig=$dig+2) {
            echo $dig . '<br />';
        }


    ?>


    </div>

    <div>
        <h3>For each loop</h3>
        <?php
        
        $digit = 1;

        $gents = array('Bob'=>12, 'Joe'=>5, 'Bill'=>83);
        
        foreach ($gents as $guy => $age) {
            echo "{$digit} {$guy}  is  {$age} <br />"  // use double quotes, and curly brace vars to use in string wout concatenating :D;
            $digit++;
        }

    ?>


    </div>

    <div>
        <h3>Function</h3>
        <?php
        
      /*  function identifier($id) {
            echo $id;
        }*/

        function identifier($id, $age) {
            return 'My name is ' . $id . ' and his age is ' . $age;
                }

        function adder($firstNum, $secondNum) {
            return $firsNum + $secondNum;
        }

      $idvalue = identifier('Jesse', 56);
       $totaled = adder(4, 12);
        echo $idvalue;
        echo '<br/><em>'. $totaled . '</em>';


    ?>


    </div>

    <div>
        <h3>Function Undefined</h3>
        <?php

            function addNumbers() {
                $total = 0;
                foreach(func_get_args() as $arg) {
                    $total += (int)$arg;

                };
                 return $total . '<br />';
            };

            echo addNumbers(12,25,3);

            function insert($initial) {
                $name = func_get_arg(0);
                foreach(func_get_args() as $number => $value) {
                    if ($number>=1) {$name .= ' ' . $value;};
                };
                return $name;
            };

           echo insert('Jesse', 'Bob', 'Joe');

        ?>
    </div>

    <div>
        <h3>number formatting</h3>
        <?php

           $numbyNumb = 234345435.32565;
            echo number_format($numbyNumb, 2, '.', ' ');

        ?>
    </div>

    <div>
        <h3>GET</h3>

        <form action="index.php" method="GET">
            <p>Name:</p>
            <input type="text" name="name" />
            <p>Age:</p>
            <input type="text" name="age" />
            <p>
                <button type="submit">Submit</button>
            </p>
        </form>
        <?php

           $myOwnName = $_GET['name'];
            $age = $_GET['age'];
            if (isset($myOwnName)&&isset($age)) {  
                if (!empty($age)&&!empty($myOwnName)) {
                echo $myOwnName . '. I\'m ' . $age;
                    }
                else 
            
            { echo "You got nuthin!";}
            } 

        ?>
    </div>

    <div>
        <h3>POST</h3>

        <form action="index.php" method="POST">
            <p>Password:&nbsp;
                <input type="password" name="password" />
            </p>

            <p>
                <button type="submit">Submit</button>
            </p>
        </form>
        <?php
            $password = 'password';
                if(isset($_POST['password'])&&!empty($_POST['password'])) {
                    echo "Password's in.";
                } else { echo 'Forget something?';};
       
        ?>
    </div>

    <div>
        <h3>Emedding</h3>
        <!--  isset checks if something has been set/exists -->
        <?php  if(isset($_POST['something'])) {
            
            $something = $_POST['something'];
            
            if (!empty($something)) {
                $phrase = $something . ' got it going, no?';
            } else {
                echo "Please name yourself";
            }
        } ?>

            <form action="index.php" method="POST">
                <p> Please enter something:&nbsp;
                    <input type="text" name="something" value="<?php echo $something ?>">
                    <input type="submit" value="Submit">
                </p>

                <textarea rows="12" cols="40" style="margin:15px 0; text-align:left"><?php echo $phrase ?></textarea>
            </form>

    </div>

    <div>
        <h3>Multidimensional/Associative Arrays</h3>
        <?php
            $hamsters = array(
                1 => 'Rex',
                2 => 'Mojo',
                3 => 'Higgs',
                4 => 'Obi'
            );
            
            //$GLOBALS puts a variable in the global namespace
            $GLOBALS['hamstersInfo'] = array(
                1 => array(
                    'Name' => 'Rex',
                    'Date' => '2009',
                    'Tude' => 'Energetic'
                ),
                2 => array(
                    'Name' => 'Mojo',
                    'Date' => '2011',
                    'Tude' => 'Lazy'
                ),
                3 => array(
                    'Name' => 'Higgs',
                    'Date' => '2013',
                    'Tude' => 'Energetic and AntiSocial'
                ),
                4 => array(
                    'Name' => 'Obi',
                    'Date' => '2015',
                    'Tude' => 'Energetic and Chill'
                )
            );
    
                //adding to pieces of an array;
                $hamstersInfo[5]['Name'] = 'TBD';
                
                $hamstersInfo[5] = array(
                //longoform adding to an array
                    'Name' => 'Unknown',
                    'Date' => 'Maybe 2017?',
                    'Tude' => 'We\'ll see...'
                ); 

                //echo '<pre>', print_r($GLOBALS['hamstersInfo'], true), '</pre>';
                //echo $hamstersInfo[2]['Name'] . ' and ' . $hamstersInfo[4]['Name'] . ' were ' . $hamstersInfo[4]['Tude'];
                
                function hamsterData($hamstersInfo, $data) {
                    if(array_key_exists($hamstersInfo, $GLOBALS['hamstersInfo']) === true) {
                        return $GLOBALS['hamstersInfo'][$hamstersInfo][$data];
                    }
                    else {
                        return false;
                        }
                };
                    
                    echo hamsterData(3, 'Tude');

                    echo '<pre>' . print_r($GLOBALS, true) . '</pre>';
            ?>

    </div>

</html>