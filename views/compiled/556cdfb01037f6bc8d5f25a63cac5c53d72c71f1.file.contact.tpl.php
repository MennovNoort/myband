<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 15:48:26
         compiled from "views\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59445800ade3401c71-82136182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556cdfb01037f6bc8d5f25a63cac5c53d72c71f1' => 
    array (
      0 => 'views\\contact.tpl',
      1 => 1478184505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59445800ade3401c71-82136182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800ade340c196_89880589',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800ade340c196_89880589')) {function content_5800ade340c196_89880589($_smarty_tpl) {?><section>
    
    <h3 class="titel">Contact</h3>
    <form id="" method="POST" action="index.php">
        Naam: <br><input type="text" name="name"><br>
        Onderwerp: <br><input type="text" name="onderwerp"><br>
        Email: <br><input type="email" name="email"><br>
        Bericht: <br><textarea></textarea><br>
        <input type="submit">
    </form>
</section><?php }} ?>
