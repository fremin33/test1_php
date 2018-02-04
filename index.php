<?php
    include('elements/gestionBD.inc.php');
    $pdo = connexionBd();

    // Préparation de la requête
    $sql_requette = 'SELECT *
                    FROM php_lieux
                    WHERE 1 = 1' ;
    $requete = $pdo->prepare($sql_requette);
    // Soumission de la requête au SGBD
    $requete->execute() ;
    $resultats = $requete->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>

<html>
<?php
    include('elements/head.inc.php');
?>
   <body>
    <header>
        <h1>Programmation Php</h1>
      <?php include('elements/menu.inc.php') ; ?>
    </header>
    <section id="corps"> <!-- Contient la partie variable de la page -->
        <header><h2>Nos lieux de spectacle</h2></header>
        <main>
            <article>
            <?php if(isset($resultats)) { ?>
                <ul class="collection with-header">
                <?php foreach($resultats as $resultat): ?>
                    <li class="collection-item">
                        <a href="lieux.php?id=<?=$resultat->numero;?>"><?=$resultat->nom ?></a>   <?= $resultat->adresse ?>
                        <span class="badge"><?=$resultat->nb_places ?></span>
                    </li>
                <?php endforeach ?>
                </ul>
            <?php } else { ?>
                <p class="alert alert-warning">Problème d'accès à la base de données</p>
            <?php } ?>
            </article>

        </main>
        <aside>

        </aside>
    </section>

     <?php include('elements/footer.inc.php') ; ?>

</body>
</html>
