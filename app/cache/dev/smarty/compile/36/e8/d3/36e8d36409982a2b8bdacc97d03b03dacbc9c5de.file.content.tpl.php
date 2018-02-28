<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 17:01:38
         compiled from "/var/www/html/dev/PrestaShop/admin-dev/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:732363875a957a6f576528-22533356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e8d36409982a2b8bdacc97d03b03dacbc9c5de' => 
    array (
      0 => '/var/www/html/dev/PrestaShop/admin-dev/themes/default/template/content.tpl',
      1 => 1519747163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '732363875a957a6f576528-22533356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a957a6f57ecd4_43816737',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a957a6f57ecd4_43816737')) {function content_5a957a6f57ecd4_43816737($_smarty_tpl) {?>
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
