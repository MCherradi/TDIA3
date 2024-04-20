<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestion des étudiants</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="./static/css/bootstrap.min.css">
    <script src="./static/js/jquery.min.js"></script>
    <script src="./static/js/bootstrap.min.js"></script>
    <script src="./static/js/popper.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Gestion des étudiants</a>
    </li>
    <?php if($_SESSION['loginSucc']['role'] == "prf") {?>
      <li class="nav-item">
        <a class="nav-link" href="ajout_form.php">Ajouter</a>
      </li>
    <?php } ?>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Se déconnecter [<?php if(isset($_SESSION['loginSucc'])) echo $_SESSION['loginSucc']['role']; ?>]</a>
    </li>
  </ul>
</nav>
<br>


</body>
</html>


