<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 12:31:13
         compiled from "views\wedstrijden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180975813240d396637-48239085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fd0e9ac6379f3f92da93c02abde3412f807ef34' => 
    array (
      0 => 'views\\wedstrijden.tpl',
      1 => 1477650672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180975813240d396637-48239085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5813240d3e9087_46302271',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813240d3e9087_46302271')) {function content_5813240d3e9087_46302271($_smarty_tpl) {?><head>
    <link rel="StyleSheet" href="css/main.css" type="text/css">
</head>
<body>
<table>
 <tr>
    <th>Thuis</th>
     <th></th>
    <th>Uit</th> 
     
    <th>Datum</th>
    <th>Tijd</th>
    <th>Week</th>
  </tr>
    
      <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
  <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['team_thuis'];?>
</td>
      <td>-</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['team_uit'];?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['tijd'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['week'];?>
</td>
      
  </tr>  
    <?php } ?>
</table>
</body><?php }} ?>
