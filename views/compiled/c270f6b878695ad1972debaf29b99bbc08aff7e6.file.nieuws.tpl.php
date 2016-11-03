<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 11:45:43
         compiled from "views\nieuws.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2615658189405c8c706-72163850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c270f6b878695ad1972debaf29b99bbc08aff7e6' => 
    array (
      0 => 'views\\nieuws.tpl',
      1 => 1478169941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2615658189405c8c706-72163850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58189405d7b6a6_44743768',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58189405d7b6a6_44743768')) {function content_58189405d7b6a6_44743768($_smarty_tpl) {?><head>
    <link rel="stylesheet" href="css/main.css">
</head>
<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <h3 class="titel"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h3>
    <img class="fotos" src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['foto'];?>
">
    <p class="tekst"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>
</p>
    <hr>
    <?php } ?>
</section><?php }} ?>
