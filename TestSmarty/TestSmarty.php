<?php

require_once(direname(__FILE__) ."libs/Smarty.class.php");
require_once("setting/setting.php");


$smarty = new Smarty();
$monTexte = "<p>Ma 1er page SMARTY !</p>";
$smarty->assign("monTexte",$monTexte);
$smarty->display("TestSmarty.tpl");

?>
