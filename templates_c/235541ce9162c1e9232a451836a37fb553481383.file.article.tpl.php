<?php /* Smarty version Smarty-3.1.15, created on 2015-01-13 14:09:12
         compiled from "template/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10119839415489b698e837d8-69059629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235541ce9162c1e9232a451836a37fb553481383' => 
    array (
      0 => 'template/article.tpl',
      1 => 1421158133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10119839415489b698e837d8-69059629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5489b698ecf7a4_73369697',
  'variables' => 
  array (
    'tabform' => 0,
    'nombouton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489b698ecf7a4_73369697')) {function content_5489b698ecf7a4_73369697($_smarty_tpl) {?><div class="row">

        <div class="span8">
			<?php if (isset($_GET['id'])) {?>
				<h2>Modification d'un article</h2>
			<?php } else { ?>
				<h2>Ajout d'un article</h2>
			<?php }?>
            <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">

                <div class="clearfix">

                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['tabform']->value['id'];?>
"

                    <label for="titre">Titre :</label>
                    <div class="input">
                        <input type="text" name="titre" id="titre" value="<?php echo $_smarty_tpl->tpl_vars['tabform']->value['titre'];?>
">  
                    </div>

                    <label for="texte">Texte :</label>
                    <div class="input">
                        <textarea type="textarea" name="texte" id="texte" ><?php echo $_smarty_tpl->tpl_vars['tabform']->value['texte'];?>
</textarea>
                    </div>

                    <label for="image">Image :</label>
                <?php if (!empty($_smarty_tpl->tpl_vars['tabform']->value['id'])) {?>    
                    <img src="img/<?php echo $_smarty_tpl->tpl_vars['tabform']->value['id'];?>
.jpg" width="200px"/>
                <?php }?>
                    <div class="input">
                        <input type="file" name="image" id="image" value="" placeholder="inserer titre">
                    </div>

                    <br>

                    <label for="publie">Publié :</label>
                    <div class="input">
                        <input type="checkbox" name="publie" id="publie" value="1"<?php if (($_smarty_tpl->tpl_vars['tabform']->value['publie']==1)) {?> checked <?php }?> >
                    </div>

                    <br>

                    <div>

                        <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['nombouton']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['nombouton']->value;?>
" class="btn btn-large btn-primary"> 

                    </div>

                </div>
            </form>
        </div><?php }} ?>
