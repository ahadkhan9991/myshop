<?php /* Smarty version Smarty-3.1.19, created on 2019-07-06 17:33:59
         compiled from "C:\xampp\htdocs\prestashop_1.6.1.24\prestashop16\admin724fhgpmo\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11135241095d208e2f51f076-35353622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338ae8b5c933c041e881d5b5af543a48f52fd93f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.6.1.24\\prestashop16\\admin724fhgpmo\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1562407413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11135241095d208e2f51f076-35353622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d208e2f555613_60783940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d208e2f555613_60783940')) {function content_5d208e2f555613_60783940($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
