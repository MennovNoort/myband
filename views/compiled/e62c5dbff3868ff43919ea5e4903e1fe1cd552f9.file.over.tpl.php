<?php /* Smarty version Smarty-3.1.18, created on 2016-11-01 14:30:13
         compiled from "views\over.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142355800ade3357d06-63619626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62c5dbff3868ff43919ea5e4903e1fe1cd552f9' => 
    array (
      0 => 'views\\over.tpl',
      1 => 1478007011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142355800ade3357d06-63619626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800ade335f939_78342300',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800ade335f939_78342300')) {function content_5800ade335f939_78342300($_smarty_tpl) {?><head>
    <link rel="stylesheet" href="css/main.css">
</head>
<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['onderwerp']=='over ons') {?>
    <h3 class="titel"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h3>
    <p class="tekst"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>
</p>
    <img class="fotos" src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['alt_image'];?>
">
    <?php }?>
    <?php } ?>
</section><?php }} ?>
