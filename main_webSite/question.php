<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Question</title>
</head>
  <?php
  session_start();
  include("db.php");
  ?>
<body>
    <p>
      Quelle est votre question ?
    </p>
    <form method="post">
      <input type="text" name="question"> <br/>
      <input type="submit" value="Valider"/><br/>
    </form>

    <?php
    if(isset($_POST['question']){
      $dataPourInsertion = $pdo->prepare('INSERT INTO Question (question)
      VALUES (?)');
      $dataPourInsertion->execute($_POST['question']);
    }
    ?>

    <?php/*
      $sql = 'INSERT INTO Question(question) VALUES(:questionUser)';
      $query->bindParam(:questionUser, $_POST['question']);
      $query = $pdo->prepare($sql);
      if($query->execute()) { ?>
        <p>Votre question a bien été enregistrée !</p>
      <?php
      }
    }*/
    ?>
</body>
</html>
