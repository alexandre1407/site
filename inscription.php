
<?php
//*********** appel du fichier setting afin d'afficher les erreurs en php **********
require_once('setting/setting.php');  
//******** connexion a la base de donnee *********
require_once('includes/connexion.inc.php'); 
 //********** appel de la class Smarty ************
require_once ('libs/Smarty.class.php');

//******* création de l'objet *********
$smarty = new Smarty();

//**********variable permmetant d'eviter les insertion sql **********
if (isset($_POST['inscription'])) {                 
    $nom = addcslashes($_POST['nom'], "'\_*%");
    $prenom = addcslashes($_POST['prenom'], "'\_*%");
    $email = addcslashes($_POST['email'], "'\_*%");
    $mdp = addcslashes($_POST['mdp'], "'\_*%");

    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp) VALUES ('$nom','$prenom','$email','$mdp')";
    $exe=mysql_query($sql);
    $_SESSION['notif'] = "Inscription reussie";
    header('Location:index.php');
} else {
	//*********en tete de la page ********
    include('includes/header.inc.php');     
	//******** corps de la page *********
    $smarty->display('template/inscription.tpl');
	// *********** menu droit **********
    include('includes/menu.inc.php'); 
	//*********** pied de la page **********
    include('includes/footer.inc.php'); 
}
?>
