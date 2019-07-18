<?php /* Smarty version Smarty-3.1.19, created on 2019-07-06 17:32:36
         compiled from "C:\xampp\htdocs\prestashop_1.6.1.24\prestashop16\admin724fhgpmo\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19029285535d208ddcd63686-07493471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6106dce06a547571e5cef27e02f80ec185b7c7c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.6.1.24\\prestashop16\\admin724fhgpmo\\themes\\default\\template\\content.tpl',
      1 => 1562407409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19029285535d208ddcd63686-07493471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d208ddcd6f6a0_67969250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d208ddcd6f6a0_67969250')) {function content_5d208ddcd6f6a0_67969250($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
