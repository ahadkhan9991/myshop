<?php /* Smarty version Smarty-3.1.19, created on 2019-07-06 17:44:03
         compiled from "C:\xampp\htdocs\prestashop_1.6.1.24\prestashop16\admin724fhgpmo\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15795530565d20908b0c5c99-83452553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98a2f4942a7ccd68745ac2fdb0816e82be9ed4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.6.1.24\\prestashop16\\admin724fhgpmo\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1562407419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15795530565d20908b0c5c99-83452553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d20908b0e1994_12008852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d20908b0e1994_12008852')) {function content_5d20908b0e1994_12008852($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
