<?php

include ('elements/gestionBD.inc.php');
include('elements/head.inc.php');

$pdo = connexionBD();

$sql_requete = 'SELECT * FROM php_lieux';

if (isset($_GET ['id'])) {
  $id = $_GET['id'];
}
// Si $_GET['id'] != null 
if (isset($_GET['id'])) {
  $sql_requete.= ' WHERE numero = :id';
  $requete = $pdo->prepare($sql_requete);
  $requete->execute([':id' => $id]);
  $resultat = $requete->fetch(PDO::FETCH_OBJ);
} else {
  $requete = $pdo->query($sql_requete);
  $resultats = $requete->fetchAll(PDO::FETCH_OBJ);
}

// On prepare la requête SQL (Change :id par ? si il ni a qu'une condition)


// On envoi la valeur dans la valeur dans la requête (changer [':id'=> $id] par [$id] si on utilise ?  )


// On retourne le résultat de la requête




//var_dump($lieux);

?>

<!DOCTYPE html>
<html>
    <?php
        include('elements/head.inc.php');
    ?>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
        <h1>Programmation Php</h1>
      <?php include('elements/menu.inc.php') ; ?>
    </header>

    <?php if (isset($resultat)) { ?>
    <section id="corps">
      <header>
        <h2><?= $resultat->nom ?></h2>
      </header>
      <main>
        <article class="">
          <p><?= $resultat->adresse ?> <span class="badge"><?= $resultat->nb_places?></span></p>
          <img src="<?= $resultat->image?>" alt="">
        </article>
      </main>
    </section>
    <?php } else { 
      foreach ($resultats as $resultat) {
      ?>
    <section id="corps">
      <header>
        <h2><?= $resultat->nom ?></h2>
      </header>
      <main>
        <article class="">
          <p><?= $resultat->adresse ?> <span class="badge"><?= $resultat->nb_places ?></span></p>
          <img src="<?= $resultat->image ?>" alt="">
        </article>
      </main>
    </section>
    <?php } } ?>




  <?php include('elements/footer.inc.php') ; ?>

  </body>
</html>
