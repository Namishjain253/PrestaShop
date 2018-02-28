<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 17:01:44
         compiled from "/var/www/html/dev/PrestaShop/admin-dev/themes/new-theme/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15949953525a957a83229d19-47519827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0376d8485f12ea21c9cb514bcd36a5fe043a2967' => 
    array (
      0 => '/var/www/html/dev/PrestaShop/admin-dev/themes/new-theme/template/content.tpl',
      1 => 1519747098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15949953525a957a83229d19-47519827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a957a83273ea3_37809319',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a957a83273ea3_37809319')) {function content_5a957a83273ea3_37809319($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>




<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>
