<?php

    require_once './conn.php';

    if(isset($_POST['submit'])){
       $np = $_POST['nomprenom'];
       $nomPht = $_FILES['photo']['name'];
       $chemPht = $_FILES['photo']['tmp_name'];
       
        // echo $np."--".$nomPht."--".$chemPht;
        move_uploaded_file($chemPht, "./uploads/$nomPht");

        $req = $conn->prepare('insert into etudiants (nometprenom, pht) values (?, ?) ');
        $params = array($np, $nomPht);
        $req->execute($params);

        header('location: ./home.php');


    }

?>