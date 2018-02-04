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
        <header><h2>Insertion dans la base de données</h2></header>
        <main>
            <article>
                <h3>Saisie d'un lieu de spectacle</h3>
                <form method="post" action="verifAjoutLieu.php">
                    <div class="input-field">
                      <input id="nom" type="text" class="validate" name="nom">
                      <label for="nom">Nom</label>
                    </div>
                    <div class="input-field">
                      <input id="adresse" type="text" class="validate" name="adresse">
                      <label for="adresse">Adresse</label>
                    </div>
                    <div class="input-field">
                      <input id="nbPlaces" type="number" class="validate" size = "3" min="0" name="nbPlaces">
                      <label for="nbPlaces">Nombre de places</label>
                    </div>
                    <div class="input-field">
                        <input type="texte" name="date">
                    </div>
                    <input type="submit" value="Enregistrer" class="waves-effect waves-light btn"/>
                </form>
              
            </article>    
            
        </main>
        <aside>

        </aside>
    </section>
    
     <?php include('elements/footer.inc.php') ; ?>
    
    
</body>
</html>
