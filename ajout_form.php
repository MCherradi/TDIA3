<?php
    require_once './navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout etudiant</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <div class="card">
                    <div class="card-header bg-primary text-light">Ajouter étudiant</div>
                    <div class="card-body">
                        <form action="ajout_handler.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Nom & Prénom</label>
                                <input type="text" name="nomprenom" class="form-control" placeholder="entrer votre mdp" required>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="photo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control btn btn-info" value="Se connecter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
