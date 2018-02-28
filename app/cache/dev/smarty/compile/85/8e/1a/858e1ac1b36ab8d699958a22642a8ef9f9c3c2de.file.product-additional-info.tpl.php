<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 16:32:55
         compiled from "/var/www/html/dev/PrestaShop/themes/classic/templates/catalog/_partials/product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1373937415a957a270a8ee5-19171193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '858e1ac1b36ab8d699958a22642a8ef9f9c3c2de' => 
    array (
      0 => '/var/www/html/dev/PrestaShop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1519745294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1373937415a957a270a8ee5-19171193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a957a270acb79_70981237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a957a270acb79_70981237')) {function content_5a957a270acb79_70981237($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
