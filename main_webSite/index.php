<!DOCTYPE html>
<html lang="fr">
<?php include('db.php');?>

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php session_start(); ?>
<body>
    <header>

        <nav>
            <h1>Kivatoutkasser</h1>
            <?php
              if ($_SESSION['pseudo'] != NULL) { ?>
                <label id="log2"> <?= $_SESSION['pseudo'] ?> </label>
                <a id="sign" href="deconnexion.php">Deconnexion</a> <?php
              } else { ?>
              <a id="log" href="connexion.php">Connexion</a>
              <a id="sign" href="inscription.php">Inscription</a>
          <?php }
            ?>
        </nav>

        <div>
            <img alt="logo" src="jcloud_shiva.png">

            <p id="description">
              Sur ce site vous pourrez touver l'ensemble des ressources vous permettant d'acceder a l'ensemble des serivces sociaux, des services de santé, et bien d'autres aides.<br>
              Si vous avez des questions posez les a nos Seniors, ils sont agrés pour répondre a vos questions.
            </p>
        </div>


        <nav>
        <?php
            $Querry=preparedQuery('SELECT Nom,Content_Description FROM Section');
            foreach($Querry as $s){
        ?>
            <a href="#<?= $s[0] ?>"><?= $s[0] ?></a>
            <?php } ?>
        </nav>

    </header>

    <main>
        <?php
             $Querry=preparedQuery('SELECT Nom,Content_Description FROM Section');
            foreach($Querry as $s){
      ?>
        <article>
            <h2 id="<?= $s[0] ?>"><?= $s[0] ?></h2>
            <p id="article">
               <?= $s[1] ?>
            </p>
            <a href="Ressources.php?Nom=<?= $s[0] ?>">Ressources <?= $s[0] ?></a>
        </article>
            <?php } ?>

    </main>

    <footer>
        <div>
          <img alt="logo" src="logo.png">
          <!--<p>2019-2020</p>-->
        </div>
    </footer>

</body>

</html>
