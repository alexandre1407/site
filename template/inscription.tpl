
<div class="row">

    <div class="span8">
        
                <h2>Inscription</h2>

        <form action="inscription.php" method="post" enctype="multipart/form-data" id="inscription" name="inscription">

            <div class="clearfix">

                <h4>veuillez saisir vos informations</h4>

                <label for="titre">Nom :</label>
                <div class="input">
                    <input type="text" name="nom" id="nom" value="">
                </div><br>

                <label for="titre">Prenom :</label>
                <div class="input">
                    <input type="text" name="prenom" id="prenom" value="">
                </div><br>

                <label for="titre">Email :</label>
                <div class="input">
                    <input type="text" name="email" id="email" value="">
                </div><br>

                <label for="titre">Mot de passe :</label>
                <div class="input">
                    <input type="password" name="mdp" id="mdp" value="">
                </div><br>

                <input type="submit" name="inscription" value="Inscription" class="btn btn-large btn-primary"> 

            </div>
        </form>



    </div>