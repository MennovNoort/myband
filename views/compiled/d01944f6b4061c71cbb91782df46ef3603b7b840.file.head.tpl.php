<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 17:15:47
         compiled from "views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1711657e4f5509b6103-51375259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd01944f6b4061c71cbb91782df46ef3603b7b840' => 
    array (
      0 => 'views\\head.tpl',
      1 => 1478189746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711657e4f5509b6103-51375259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e4f5509f4912_67422274',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4f5509f4912_67422274')) {function content_57e4f5509f4912_67422274($_smarty_tpl) {?><!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/main.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="views/script.js"></script>
        
    </head>
    <body>
       <div id="menu">
        <div id="nav_bar">
            <ul>
                <a href="index.php?action=geschiedenis"><li>geschiedenis</li></a>
                <a href="index.php?action=tussenstand"><li>tussenstand</li></a>
                <a href="index.php?action=wedstrijden"><li>wedstrijdschema</li></a>
                 <a href="index.php?action=overons"><li>over ons</li></a>
                 <a href="index.php?action=contact"><li>contact</li></a>
            </ul>
        </div>    
        
        <div id="logo_ruimte">
            <a href="index.php"><img src="images/logo.jpg" id="logo"></a>
        </div>
        
           
    </div>
        
        <div id="banner_ruimte">
            <img src="images/ajax_banner.jpg" id="banner_foto">
        </div>
        <!-- 

        <div id="banner_ruimte">
           <div>
             <img src="images/ajax_banner.jpg" id="banner_foto1">
           </div>
           <div>
             <img src="images/ajax_banner1.jpg" id="banner_foto">
           </div>
        </div>
-->
    </body>
<?php }} ?>
