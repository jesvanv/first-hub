<?php
    session_start();

   // $_SESSION['mySession'] = "Session";

    echo $_SESSION['mySession'];
    
    //clears all session data - user, login etc
    session_destroy();
?>