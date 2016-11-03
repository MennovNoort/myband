<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 20:42:12
         compiled from "views\geschiedenis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16915800af376152f8-29631447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5fe7efcd468d69302167ef6d0b01ae3a07b13d6' => 
    array (
      0 => 'views\\geschiedenis.tpl',
      1 => 1478202130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16915800af376152f8-29631447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800af377416c7_60719865',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800af377416c7_60719865')) {function content_5800af377416c7_60719865($_smarty_tpl) {?><head>
    <link rel="stylesheet" href="css/main.css">
</head>
    <div id="ajax_amsterdam">
        <div class="ajax_titel">
            Ajax Amsterdam
        </div>
        <div class="ajax_tekst">
            Amsterdamsche Football Club "Ajax", kortweg AFC Ajax of gewoon Ajax, is een Nederlandse profvoetbalclub uit Amsterdam. De club is opgericht op 18 maart 1900 en is een van de drie traditionele topclubs in Nederland. Sinds de oprichting van de Eredivisie speelt Ajax onafgebroken in deze hoogste divisie.
        </div>
        
    </div>
    <div id="geschiedenis_oprichting">
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['titel']=='Oprichting') {?>
        
        <h3 class="titel"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h3>
        
        <p class="tekst">
        <iframe id="iframe" width="560" height="315" src="https://www.youtube.com/embed/laXIwrlxIAE" frameborder="0" allowfullscreen></iframe><br><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>

            <br><img class="fotos" src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['alt_image'];?>
">
        </p>
        <?php }?>
        <?php } ?>
    </div>
    <div id="geschiedenis_successen">
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
         <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['titel']=='Succesen') {?>
        <h3 class="titel"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h3>

        <p class="tekst"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>

            <br><img class="fotos" src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['alt_image'];?>
">
        </p>
        <?php }?>
        <?php } ?>
    </div>
    <div>
         <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['onderwerp']=='geschiedenis') {?>
         <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['titel']!='Oprichting') {?>
         <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['titel']!='Succesen') {?>
        <h3 class="titel"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h3>

        <p class="tekst"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>

            <br><img class="fotos" src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['alt_image'];?>
">
        </p>
        <hr>
        <?php }?>
        <?php }?>
        <?php }?>
        <?php } ?>
    </div>


<?php }} ?>
