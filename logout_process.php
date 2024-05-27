<?php

    //memulai interaksi SESSION
    session_start();

    //menghancurkan SESSION["email]
    session_destroy();

    //unset SESSION["email]
    session_unset();

    header("Location: login.php");

?>