<?php
//********* appel du fichier setting afin d'afficher les erreurs en php ************
require_once('setting/setting.php');  
//******* connexion a la base de donnee **********
require_once('includes/connexion.inc.php'); 
 //******** appel de la class Smarty********
require_once("libs/Smarty.class.php");

//******* création de l'objet *********
$smarty = new Smarty();

setcookie("SID_Blog","", -1);
session_unset();
$_SESSION['notif']="Vous etes déconnecté";
header('Location:index.php');

//*********** corps de la page*************
//$smarty->display('template/deconnexion.tpl')

?>
