<?php /* Smarty version Smarty-3.1.15, created on 2015-01-15 21:05:44
         compiled from "template/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128153149854b29a7d700da1-89788823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eaec5692ea9f959d28c252e3db1518ecf271276' => 
    array (
      0 => 'template/inscription.tpl',
      1 => 1421355935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128153149854b29a7d700da1-89788823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b29a7d719233_40025483',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b29a7d719233_40025483')) {function content_54b29a7d719233_40025483($_smarty_tpl) {?>
<div class="row">

    <div class="span8">
        
                <h2>Inscription</h2>

        <form action="inscription.php" method="post" enctype="multipart/form-data" id="inscription" name="inscription">

            <div class="clearfix">

                <h4>veuillez saisir vos informations</h4>

                <label for="titre">Nom :</label>
                <div class="input">
                    <input type="text" name="nom" id="nom" value="">
                </div><br>

                <label for="titre">Prenom :</label>
                <div class="input">
                    <input type="text" name="prenom" id="prenom" value="">
                </div><br>

                <label for="titre">Email :</label>
                <div class="input">
                    <input type="text" name="email" id="email" value="">
                </div><br>

                <label for="titre">Mot de passe :</label>
                <div class="input">
                    <input type="password" name="mdp" id="mdp" value="">
                </div><br>

                <input type="submit" name="inscription" value="Inscription" class="btn btn-large btn-primary"> 

            </div>
        </form>



    </div><?php }} ?>
