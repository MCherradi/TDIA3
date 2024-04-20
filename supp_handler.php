<?php

    require_once './conn.php';

    if(isset($_GET['idEtd'])){
        $id = $_GET['idEtd'];

        // echo $id;

        $req = $conn->prepare('delete from `etudiants` WHERE idEtd=?');
        $params = array($id);
        $req->execute($params);

        header('location: ./home.php');
    }