<?php /* Smarty version Smarty-3.1.19, created on 2019-07-06 17:32:42
         compiled from "C:\xampp\htdocs\prestashop_1.6.1.24\prestashop16\admin724fhgpmo\themes\default\template\controllers\modules\modal_translation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056662155d208de2267f71-14989495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d521f81e89232f1e986197c6e8fbec3a8c3e326' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.6.1.24\\prestashop16\\admin724fhgpmo\\themes\\default\\template\\controllers\\modules\\modal_translation.tpl',
      1 => 1562407413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056662155d208de2267f71-14989495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_languages' => 0,
    'trad_link' => 0,
    'language' => 0,
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d208de22b7323_01134377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d208de22b7323_01134377')) {function content_5d208de22b7323_01134377($_smarty_tpl) {?>
<div class="modal-body">
	<div class="input-group">
		<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			<i class="icon-flag"></i>
			<?php echo smartyTranslate(array('s'=>'Manage translations'),$_smarty_tpl);?>

			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trad_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>
#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php }} ?>
