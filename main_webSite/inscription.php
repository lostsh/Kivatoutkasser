<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="inscription.css">
    <title>Inscritpion</title>
</head>
<?php include('db.php'); ?>
<body>
  <?php
  if (isset($_POST['Creation'])) {
    if(isset($_POST['username']) && isset($_POST['mdp']) && isset($_POST['mdp2']) && isset($_POST['mail'])){
      if (!empty($_POST['username']) && !empty($_POST['mdp']) && !empty($_POST['mdp2']) && !empty($_POST['mail'])) {
        if($_POST['mdp2'] === $_POST['mdp']) {
          $sql = "INSERT INTO Etudiant(pseudo, mdp, adresse_mail) VALUES ( ?, ?, ?)";
          preparedQuery($sql,[$_POST['username'], $_POST['mdp'], $_POST['mail']]);
          ?>
          <div>
            <label> inscription is a success ! </label>
          </div>
          <?php
        } else {
          ?>
          <div>
            <label> Inscritpion Failed : password confirmation failed </label>
          </div>
          <?php
          $_POST['Creation'] = NULL;
        }
      } else {
        ?>
        <div>
          <label> Inscritpion Failed : all field need to be filled </label>
        </div>
        <?php
        $_POST['Creation'] = NULL;
      }
    }
  }
  ?>
  <div>
  <?php
  if (!isset($_POST['Creation'])) { ?>
      <form method="post">
          <label> Fill the following fields to create an account : </label> <br/> <br/>
          <input type="hidden" name="Creation" value="true" />
          <label for="Username_label"> Username :</label> <br/>
          <input type="text" name="username"/> <br/>
          <label for="password_label"> Password :</label> <br/>
          <input type="password" name="mdp"/> <br/>
          <label for="password_confirmation_label"> Password Confirmation :</label> <br/>
          <input type="password" name="mdp2"/><br/>
          <label for="email_label"> Email :</label> <br/>
          <input type="email" name="mail"/> <br/> <br/>
          <input type="submit" value="Create Account" />
      </form>
<?php
  } ?>
    <a href="index.php"> return to Home page </a>
  </div>
</body>
</html>
