<nav class="span4">
            <h3>Menu</h3>

<form action="index.php" method="get" enctype="multipart/form-data" id="form_recherche">
            <div class="clearfix">
                <div class="input"><input type="text" name="recherche" id="recherche" placeholder="Votre recherche..."/></div>
            </div>
    <div class="form-inline">
        <input type="submit" name="" value="rechercher" class="btn btn-mini">
    </div>
</form> 
      <?php
    if (isset($connect) && $connect == 0) {
        echo" <ul>
            <li><a href='index.php'>Accueil</a></li>
                <li><a href='inscription.php'>Inscription</a></li>
                  <li><a href='connexion.php'>Connexion</a></li> 
				  <p>Statut : <font color=red>Déconnecté</font></p>
                  </ul>";
    } else {

        echo " <ul>
                 <li><a href='index.php'>Accueil</a></li>
                <li><a href='article.php'>Rédiger un article</a></li>
                <li><a href='deconnexion.php'>deconnexion</a></li>
				<p>Statut : <font color=red>Connecté</font></p>
            </ul> ";
    }
    ?>
          </nav>

</div>

</div>