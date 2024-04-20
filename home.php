<?php
    require_once './navbar.php';

    require_once './securite.php';

    require_once './conn.php';

    $req = $conn->prepare('select * from etudiants');
    $req->execute();
    $res = $req->fetchAll();
    // var_dump($res);

    if(isset($_GET['chercher'])){
        $mc = '%'.$_GET['chercher'].'%';
        $req = $conn->prepare('select * from etudiants where nometprenom like ?');
        $params = array($mc);
        $req->execute($params);
        $res = $req->fetchAll();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des étudiants</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">La liste des étudiants</div>
                    <div class="card-body">
                        <form action="" method="get" class="mb-2">
                            <input type="text" name="chercher" value="<?php echo @$_GET['chercher']; ?>">
                            <input type="submit" value="Chercher">
                        </form>
                        <table class="table table-stripper">
                            <thead>
                                <th>#ID</th>
                                <th>Nom & Prénom</th>
                                <th>Photo</th>
                                <?php if($_SESSION['loginSucc']['role'] == "prf") {?>
                                    <th>Action</th>
                                <?php } ?>
                            </thead>
                            <tbody>
                                <?php foreach ($res as $etd ) {?>
                                <tr>
                                    <td><?= $etd['idEtd']; ?></td>
                                    <td><?= $etd['nomEtprenom']; ?></td>
                                    <td>
                                        <img src="./uploads/<?= $etd['pht']; ?>" width="100" height="100">
                                    </td>
                                    <?php if($_SESSION['loginSucc']['role'] == "prf") {?>
                                    <td colspan="2">
                                        <a href="supp_handler.php?idEtd=<?= $etd['idEtd']; ?>" class="btn btn-warning" onclick="return confirm('etes vpous sur de vouloir supprimer ....')">supprimer</a>
                                        <a href="modif_form.php?idEtd=<?= $etd['idEtd']; ?>" class="btn btn-success">Modifier</a>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>