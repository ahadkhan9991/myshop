<?php /* Smarty version Smarty-3.1.19, created on 2019-07-06 13:39:33
         compiled from "C:\xampp\htdocs\prestashop_1.6.1.24\prestashop16\themes\default-bootstrap\modules\favoriteproducts\views\templates\hook\favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15508229115d208875a6b5f2-92782412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3fbc62139d5dc53949e5f8913357ffeb84c46d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.6.1.24\\prestashop16\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\hook\\favoriteproducts-header.tpl',
      1 => 1562407524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15508229115d208875a6b5f2-92782412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d208875a9fce2_78223229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d208875a9fce2_78223229')) {function content_5d208875a9fce2_78223229($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_add'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),Tools::usingSecureMode()))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_remove'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),Tools::usingSecureMode()))),$_smarty_tpl);?>
<?php if (isset($_GET['id_product'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_id_product'=>intval($_GET['id_product'])),$_smarty_tpl);?>
<?php }?>
<?php }} ?>
