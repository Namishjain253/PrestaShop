<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 16:32:54
         compiled from "/var/www/html/dev/PrestaShop/themes/classic/templates/customer/_partials/my-account-links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18358767765a957a2615dfe8-22399438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8773a66f399223a98c72181971f7035481a2c51' => 
    array (
      0 => '/var/www/html/dev/PrestaShop/themes/classic/templates/customer/_partials/my-account-links.tpl',
      1 => 1519745294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18358767765a957a2615dfe8-22399438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a957a2616a840_64254210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a957a2616a840_64254210')) {function content_5a957a2616a840_64254210($_smarty_tpl) {?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo smartyTranslate(array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo smartyTranslate(array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
  </a>

<?php }} ?>
