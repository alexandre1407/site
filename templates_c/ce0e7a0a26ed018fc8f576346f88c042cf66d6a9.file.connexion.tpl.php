<?php /* Smarty version Smarty-3.1.15, created on 2015-01-15 12:40:27
         compiled from "template/connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104541535489b136d4f432-72743610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0e7a0a26ed018fc8f576346f88c042cf66d6a9' => 
    array (
      0 => 'template/connexion.tpl',
      1 => 1421325597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2104541535489b136d4f432-72743610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5489b136e31b80_70886424',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489b136e31b80_70886424')) {function content_5489b136e31b80_70886424($_smarty_tpl) {?><script type="text/javascript" src="../js/javascript.js"></script>
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
   
        </div><?php }} ?>
