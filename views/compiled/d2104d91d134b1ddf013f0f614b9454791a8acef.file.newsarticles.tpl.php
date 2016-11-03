<?php /* Smarty version Smarty-3.1.18, created on 2016-10-05 15:12:56
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2160457f4fae4f12851-74943648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1475673175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160457f4fae4f12851-74943648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4fae506d015_70545070',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4fae506d015_70545070')) {function content_57f4fae506d015_70545070($_smarty_tpl) {?><section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    
    <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
    <img class="fotos" src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>
    
    <?php } ?>
</section>


    echo '<img class="fotos" src="images/'.$oneItem['image'].'">'.'<br>';
	echo '<content class="text">'.$oneItem['content'].'</content>';<?php }} ?>
