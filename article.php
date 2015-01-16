<?php
//******** connexion a la base de donnee **********
require_once('includes/connexion.inc.php');
//********* appel du fichier setting afin d'afficher les erreurs en php ***********
require_once('setting/setting.php');  
 // ********** appel de la class Smarty ************
require_once ('libs/Smarty.class.php');

//******* création de l'objet *********
$smarty = new Smarty();

if ($connect!=true) {
    $_SESSION['notif'] = "Merci de vous connectez";
    header('Location:index.php');
}

//********** Initialisation des variable quand on enoie la requete **********
if (isset($_POST['Modifier']) OR isset($_POST['Ajouter'])) {
   $id = $_POST['id'];
   
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
	//************** Ceci permet de retourner un 0 au lieux d'une erreur ***********
    $publie = (isset($_POST['publie'])) ? $_POST['publie'] : '0'; 
	 //********** date du serveur ***********
    $date = date('Y-m-d H:i:s');
  

    if (isset($_POST['Modifier'])) {
	//********requete pour modifier***********
        $insertion = "UPDATE articles SET titre = '$titre', texte = '$texte', publie = '$publie', date ='$date' WHERE id='$id'";  
    } else {
	//********requete pour inserer***********
        $insertion = "INSERT INTO articles(titre, texte, date, publie) VALUES ('$titre','$texte','$date', $publie)";      
    }
    
    if(!empty($_POST['image'])){
    $erreur_image = $_FILES['image']['error'];
    }else{
    $erreur_image=""; 
    }
    
    $result = mysql_query($insertion);
    if (isset($_POST['Ajouter'])) {
    $insertion_id = mysql_insert_id();
	//**************Modification de l'image (on recupere l'id)*****************
      move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$insertion_id.jpg"); 
    } else { 
		//********Sinon en cas de modification************
        $insertion_id=$id;
		//*********** permet d'inserer l'image************
          move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$insertion_id.jpg"); 
    }
    
    session_start();
    $_SESSION['notif']  = (isset($_POST['Modifier'])) ? "Modification reussi" : 'Ajout reussi';

    header('location:index.php');
} else {
	// ************* en tete de la page ************
    include('includes/header.inc.php');    
	
	//*********** recuperation de l'id pour pouvoir mettre a jour formulaire vide pour "rediger un article"************
    if (isset($_GET['id'])) {   
    $id_art = $_GET['id'];
    //************cette Requete permet d'afficher 2 article max ****************
     $req = "SELECT id,titre,texte,publie, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE id=$id_art";
	 //************execution de la sql1 ****************
        $execute = mysql_query($req); 
        extract($tabform = mysql_fetch_array($execute));
		
    }else{
        $tabform = array("id" => NULL, "titre" => "", "texte" => "", "date" => "", "publie" => "");
    }
   //*********si il y a un ID alors modifier sinon on ajoute**************
	$nom_bouton = (isset($_GET['id'])) ? "Modifier" : "Ajouter"; }   
    
        /******* variable smarty ************/
        $smarty-> assign ("nombouton",$nom_bouton);
        $smarty-> assign ("tabform",$tabform);  
		
		//******corps de la page **********
        $smarty->display('template/article.tpl');
		// ************** menu droit********** 
        include('includes/menu.inc.php'); 
		//************ pied de la page**********
        include('includes/footer.inc.php'); 

        ?>

    
