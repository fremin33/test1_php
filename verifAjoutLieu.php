<?php
    include('elements/gestionBD.inc.php');
    $pdo = connexionBD();
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $nb_places = $_POST['nbPlaces'];


    $sql_requete = "INSERT INTO php_lieux VALUES (':adresse, :nom, :nb_places)";
    // On prepare la requête SQL (Change :id par ? si il ni a qu'une condition)
    $requete = $pdo->prepare($sql_requete);
    
    // On envoi la valeur dans la valeur dans la requête (changer [':id'=> $id] par [$id] si on utilise ?  )
    $requete->execute([':titre'=> $titre, ':lieu' => $lieu, ':date' => $date]);
    
    // // On retourne le résultat de la requête
    // $resultat = $requete->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>

<html>
<?php
    include('elements/head.inc.php');  
?>
   <body>
    <header>
        <h1>Programmation Php</h1>
      <?php       
            include('elements/menu.inc.php') ;
        ?>
    </header>
    <section id="corps"> <!-- Contient la partie variable de la page -->
        <header><h2>Nouveau lieu de spectacle</h2></header>
        <main>
            <article>
                <h3>Vous venez de saisir le lieu suivant :</h3>
                    <ul>
                        <li><?= $nom ?></li>
                        <li><?= $adresse ?></li>
                        <li><?= $nb_place ?></li>
                    </ul>
            </article>    
            
        </main>
        <aside>

        </aside>
    </section>
    
     <?php include('elements/footer.inc.php') ; ?>
    
    
</body>
</html>
