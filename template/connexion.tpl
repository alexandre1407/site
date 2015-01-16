<script type="text/javascript" src="../js/javascript.js"></script>
    <div class="row">

        <div class="span8">

            <h2>Connexion </h2>

            <form action="connexion.php" method="post" enctype="multipart/form-data" id="connexion" name="connexion" onsubmit="verifForm()">

                <div class="clearfix">

                    <label for="titre">Email :</label>
                    <div class="input">
                        <input type="text" name="email" id="email" value="">
                    </div><br>

                    <label for="titre">Mot de passe :</label>
                    <div class="input">
                        <input type="password" name="mdp" id="mdp" value="">
                    </div><br>

                    <input type="submit" name="connexion" value="Connexion" class="btn btn-large btn-primary"> 

                </div>
   
        </div>