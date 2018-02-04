<?php
    include('elements/gestionBD.inc.php');
    $maBD = connexionBd();
    $texteRequete = 'SELECT * FROM php_spectacles' ;
    $requete_spectacles = $maBD->prepare($texteRequete) ;
    $ok = $requete_spectacles->execute() ;
    $spectacles = $requete_spectacles->fetchAll(PDO::FETCH_ASSOC)  ;

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
    <section id="corps">
        <header><h2>Nos spectacles</h2></header>
        <main>
            <article>
            <?php if($ok) :?>
                <ul class="collection with-header">
                <?php foreach($spectacles as $unSpectacle): ?>
                    <li class="collection-item">
                        <?=$unSpectacle['jour_heure'];?> - <?=$unSpectacle['titre'];?> - <?=$unSpectacle['lieu'];?>
                    </li>
                <?php endforeach ?>
                </ul>
            <?php else: ?>
                <p class="alert alert-warning">Problème d'accès à la base de données</p>
            <?php endif ; ?>
            </article>

        </main>
        <aside>

        </aside>
    </section>

     <?php include('elements/footer.inc.php') ; ?>

</body>
</html>
