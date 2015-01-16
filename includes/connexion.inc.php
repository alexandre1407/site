<?php session_start();

$bdd = mysql_connect('mysql.hostinger.fr','u216106131_blog','iutcalais') or die('connexion impossible : ' . mysql_error());
mysql_select_db("u216106131_blog");

$connect = FALSE;
if (isset($_COOKIE['SID_Blog'])) {

    $ValeurCookie = $_COOKIE['SID_Blog'];
    $sql = "SELECT * FROM utilisateurs WHERE sid='$ValeurCookie'";
    $exe = mysql_query($sql);
    $test = mysql_fetch_array($exe);

    if ($test) {
       $nom = $test['nom'];
       $connect = TRUE;
    } 
}
?>
