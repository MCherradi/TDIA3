<?php
    require_once './navbar.php';
    require_once './conn.php';
    if(isset($_GET['idEtd'])){
        $id = $_GET['idEtd'];
        $req = $conn->prepare('select * from etudiants where idEtd=?');
        $params = array($id);
        $req->execute($params);

        $res  = $req->fetch();
        // print_r($res);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier etudiant</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <div class="card">
                    <div class="card-header bg-danger text-light">Modifier étudiant</div>
                    <div class="card-body">
                        <form action="modif_handler.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="badge badge-success">ID <?= $res['idEtd']; ?></label>
                                <input type="hidden" name="id" class="form-control" value="<?= $res['idEtd']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nom & Prénom</label>
                                <input type="text" name="nomprenom" class="form-control" value="<?= $res['nomEtprenom']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="photo" class="form-control">
                                <img src="./uploads/<?= $res['pht']; ?>" width="100" height="100">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control btn btn-danger" value="Modifier">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
