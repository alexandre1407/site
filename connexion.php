
<?php
// *********appel du fichier setting afin d'afficher les erreurs en php *********
require_once('setting/setting.php');  
// *********connexion a la base de donnee ***********
require_once('includes/connexion.inc.php');  
 //********** appel de la class Smarty********
require_once ('libs/Smarty.class.php');

//******* création de l'objet *********
$smarty = new Smarty();

   //********** addcslashes permet d'eviter les insertions sql**********
if (isset($_POST['connexion'])) {              
    $email = addcslashes($_POST['email'], "'\_*%");
    $mdp = addcslashes($_POST['mdp'], "'\_*%");

    $requete = "SELECT * FROM utilisateurs WHERE email='$email' AND mdp='$mdp'";
    $execute = mysql_query($requete);
    $tableau = mysql_fetch_array($execute);

    
	//******on regarde si ca existe*******
    if ($tableau) {

        $sid = md5($tableau['email'].time());
        //********requete insertion du sid**************
        $mod = "UPDATE utilisateurs SET sid = '$sid' WHERE email='$email'";  
        mysql_query($mod);

        setcookie("Blog", $sid, time() + 3600);

        $_SESSION['notif'] = "Connexion reussie";
        header('Location:index.php');
    } else {
        $_SESSION['notif'] = "erreur pendant la connexion";
        header('Location:connexion.php');
    }
} else {
	// *********** en tete de la page *********
    include('includes/header.inc.php');  
	//*********** corps de la page*************
    $smarty->display('template/connexion.tpl');
	//*********** menu droit **********
        include('includes/menu.inc.php'); 
	//********* pied de page **********
        include('includes/footer.inc.php'); 
    }
    ?>
