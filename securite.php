<?php

    // session_start();

    if(!isset($_SESSION['loginSucc'])){
        header('location: ./index.php');
    }