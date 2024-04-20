<?php

    $loginInput = "mohamed";
    $mdpInput = "11sd";

    $dbs = array(
        array('username' => 'mohamed', 'mdp' => '11'),
        array('username' => 'ali', 'mdp' => '22'),
    );

    foreach ($dbs as $db) {
        // echo $db['username']."--".$db['mdp']."<br/>";
        if($loginInput == $db['username'] and $mdpInput == $db['mdp']){
            echo "connected"."<br/>";
            break;
        }else
            echo "no connecte"."<br/>";
    }
