<?php
//******* connexion a la base de donnee ******
require_once('includes/connexion.inc.php');  
// ******** appel du fichier setting afin d'afficher les erreurs en php **********
require_once('setting/setting.php');       
 //******** appel de la class Smarty ***********
require_once ('libs/Smarty.class.php'); 

//******* création de l'objet *********
$smarty = new Smarty();

        if (isset($_SESSION['notif'])) {
            $smarty->assign("notif",$_SESSION['notif']);
            session_unset($_SESSION['notif']);
        }
		//********** définit article par pages   *******
        $nba_p = 2;   
		 //******** permet de retenir la page ou l'on est *********
        $page_courante = (isset($_GET['p'])) ? $_GET['p'] : 1; 
		
		//************ pagination, on calcul le nombre d'article total,on le divise par le nombre d'article a afficher pour avoir le nombre de page *********************
        function pagination($nba_p, $page_courante) { 
		//********* nombre d'article total dans la bdd ********
            $req_nba = "SELECT COUNT(id) as count FROM articles WHERE publie=1"; 
            $execute = mysql_query($req_nba);
			//********* pour mettre dans un tableaux *********
            $tablo = mysql_fetch_array($execute); 
			//********* count represente la clé *******
            $nbart = $tablo['count']; 
            $nbpage = ceil($nbart / $nba_p);
            $index = ($page_courante - 1) * $nba_p;

            return array($nbpage, $index);
        }

        $tab = pagination($nba_p, $page_courante);

        //********** barre de recherche *********
        if (isset($_GET['recherche'])) {
            $recherche = $_GET['recherche'];
            $requete = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie=1 AND (titre LIKE '%$recherche%' OR texte LIKE '%$recherche%')";
        } else {
			//*********** Requete pour afficher 2 article max ***********
            $requete = "SELECT id,titre,texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie = 1 ORDER BY id LIMIT $tab[1],$nba_p";  
        }
           
        $executer = mysql_query($requete) or die('Erreur SQL !'.$requete.'<br>'.mysql_error());;
        while ($tabform = mysql_fetch_array($executer)) {
            
        $montab[]=$tabform;
                  
        }
        //********* en tete de page ********
    include('includes/header.inc.php'); 
	//******* variable smarty**********
    $smarty -> assign ("montab", $montab);
    $smarty -> assign ("tabpag", $tab[0]);
	// **********Corps de la page *********
    $smarty -> display('template/index.tpl'); 
	// *********** menu droit ************
    include('includes/menu.inc.php'); 
	// ********* pied de page **********
    include('includes/footer.inc.php'); 
   

    ?>

