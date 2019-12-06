<?php
  $dsn = "mysql:dbname=kivatoutkasser;host=localhost";
  $user = 'root';
  $password = 'toor';
  $pdo = new PDO($dsn, $user, $password);
  $pdo->query('SET CHARSET UTF8');

  function preparedQuery($sql, $parameters = [], $fetchedClass = null)
  {
      global $pdo;
      $query = $pdo->prepare($sql);
      if($fetchedClass != null) {
          $query->setFetchMode(PDO::FETCH_CLASS, $fetchedClass);
      }
      if (!$query->execute($parameters)) {
          $info = $query->errorInfo();
          echo("failed");
          throw new Exception("Mauvaise requête: ".$info[2]);
      }
      return $query;
   }
?>
