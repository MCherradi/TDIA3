<?php

    require_once './conn.php';


    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $np = $_POST['nomprenom'];
        $phtN = $_FILES['photo']['name'];
        $phtP = $_FILES['photo']['tmp_name'];

    
        if($phtN != ""){
            move_uploaded_file($phtP, "./uploads/$phtN"); 
            $req = $conn->prepare('update etudiants set nomEtprenom=?, pht=? where idEtd=?');
            $params = array($np, $phtN, $id);
            $req->execute($params);
        }else{
            $req = $conn->prepare('update etudiants set nomEtprenom=? where idEtd=?');
            $params = array($np, $id);
            $req->execute($params);
        }

        header('location: ./home.php');
        
    }