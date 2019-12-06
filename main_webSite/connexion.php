<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="connexion.css">
    <title>Inscritpion</title>
</head>
<body>
<?php
session_start();
include ("db.php");

if(isset($_POST['mdp'])&&isset($_POST['username'])){
    $sql = "SELECT pseudo FROM Etudiant WHERE mdp = ? AND pseudo = ? ";
    $query = preparedQuery($sql, [$_POST['mdp'], $_POST['username']]);
    if($row = $query->fetch()){
        $_SESSION['pseudo'] = $row['pseudo'];
        $_SESSION['id'] = $row['IdE'];
        if($_SESSION['pseudo']!= null){
            header('Location: index.php');
        }
    }  else {
      ?>
      <div>
        <label> Connexion failed : Wrong username or password </label>
      </div>
      <?php
    }
}
?>

<div>
<form method="post">
    Username :
    <input type="text" name="username"/><br />
    Password :
    <input type="password" name="mdp"/><br/>

    <hr />
    <input type="submit" />
    </br>
</form>
  <a href="index.php"> return to Home page </a>
</div>
</body>
</html>
