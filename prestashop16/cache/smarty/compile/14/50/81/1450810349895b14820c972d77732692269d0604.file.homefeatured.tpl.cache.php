<?php /* Smarty version Smarty-3.1.19, created on 2019-07-06 17:33:05
         compiled from "C:\xampp\htdocs\prestashop_1.6.1.24\prestashop16\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6419544955d208df98246d4-50263076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1450810349895b14820c972d77732692269d0604' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.6.1.24\\prestashop16\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1562407524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6419544955d208df98246d4-50263076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d208df9837667_50294075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d208df9837667_50294075')) {function content_5d208df9837667_50294075($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
