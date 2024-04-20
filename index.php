<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des étudiants</title>
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
    <script src="./static/js/jquery.min.js"></script>
    <script src="./static/js/bootstrap.min.js"></script>
    <script src="./static/js/popper.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <?php
                    session_start();
                    if(isset($_SESSION['loginErr'])){ ?>
                    <div class="alert alert-danger">
                        <strong>Ooops!</strong> <?= $_SESSION['loginErr']; ?>
                    </div>
                <?php 
                session_unset();
                } 
                ?>
                <div class="card">
                    <div class="card-header">
                        Espace d'authentification
                    </div>
                    <div class="card-body">
                        <form action="authentifier_handler.php" method="post">
                            <div class="form-group">
                                <label for="">Login</label>
                                <input type="text" name="login" class="form-control" placeholder="entrer votre login" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="entrer votre mdp" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control btn btn-info" value="Se connecter">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        copyright (c) tdia 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>