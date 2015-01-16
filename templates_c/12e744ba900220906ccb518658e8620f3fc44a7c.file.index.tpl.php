<?php /* Smarty version Smarty-3.1.15, created on 2015-01-13 14:37:58
         compiled from "template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14420761555489c2449da923-51024583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e744ba900220906ccb518658e8620f3fc44a7c' => 
    array (
      0 => 'template/index.tpl',
      1 => 1421159876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14420761555489c2449da923-51024583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5489c244b7b193_86243334',
  'variables' => 
  array (
    'notif' => 0,
    'montab' => 0,
    'tabform' => 0,
    'tabpag' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489c244b7b193_86243334')) {function content_5489c244b7b193_86243334($_smarty_tpl) {?><div class="row">

    <div class="span8">
	<?php if (isset($_smarty_tpl->tpl_vars['notif']->value)) {?>
        <div class="alert alert-success" id="notif">
		<?php echo $_smarty_tpl->tpl_vars['notif']->value;?>

		</div>
		<?php }?>
        <?php  $_smarty_tpl->tpl_vars['tabform'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tabform']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['montab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tabform']->key => $_smarty_tpl->tpl_vars['tabform']->value) {
$_smarty_tpl->tpl_vars['tabform']->_loop = true;
?>
             <h2> <?php echo $_smarty_tpl->tpl_vars['tabform']->value['titre'];?>
 </h2>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['tabform']->value['id'];?>
.jpg" class="img-rounded"/>
                    <p><?php echo $_smarty_tpl->tpl_vars['tabform']->value['texte'];?>
</p>
                    <p>Date : <?php echo $_smarty_tpl->tpl_vars['tabform']->value['date_fr'];?>
</p>  
				<a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['tabform']->value['id'];?>
" >Modifier</a> - <a href="suppression.php?id=<?php echo $_smarty_tpl->tpl_vars['tabform']->value['id'];?>
">Supprimer</a>
        <?php } ?>
        
        <div class="pagination"><ul>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['tabpag']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['tabpag']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            
                <li><a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 </a></li> 
        <?php }} ?>
		</ul>
        </div>
</div><?php }} ?>
