<?php
//******** connexion a la base de donnee *******
require_once('includes/connexion.inc.php');  
//********* appel du fichier setting afin d'afficher les erreurs en php ***********
require_once('setting/setting.php');   
// *********** en tete de la page *********
include('includes/header.inc.php');         
?>

<?php
if ($connect!=true) {
    echo $connect;
    $_SESSION['notif'] = "Merci de vous connectez";
    header('Location:index.php');
} else {
?>

<div class="row">

    <div class="span8">

        <?php
        echo $_GET['id'];
        
        $id=$_GET['id'];
        //***********requete qui supprime l'article selon l'id *********
        $sql = "DELETE FROM articles WHERE id=$id";    
        mysql_query($sql);
        //*********supprimer l'image du dossier ********
        if (file_exists(dirname(__FILE__)."/img/$id.jpg")){  
          unlink(dirname(__FILE__)."/img/$id.jpg");
      }
        
      $_SESSION['notif']="Suppression reussi";
      header('location:index.php');
      
        ?>

    </div>

    <?php
	//******** menu droit *********
    include('includes/menu.inc.php'); 
    ?> 


</div>

</div>


<?php
//******* pied de la page *********
include('includes/footer.inc.php'); 
}
?>

</div>


</body>
</html>

