<?php

    require_once './conn.php';
    session_start();
    if(isset($_POST['submit'])){
        $l = $_POST['login'];
        $p = md5($_POST['password']);

        // echo $l."--".$p;

        $req = $conn->prepare('select * from users where login=? and password=?');
        $params = array($l, $p);
        $req->execute($params);

        $res = $req->fetch();

        if($res){
            $_SESSION['loginSucc'] = $res;
            header('location: ./home.php');
        }else{
            $_SESSION['loginErr'] = "Votre login et/ou mdp est incorrect";
            header('location: ./index.php');
        }
    }