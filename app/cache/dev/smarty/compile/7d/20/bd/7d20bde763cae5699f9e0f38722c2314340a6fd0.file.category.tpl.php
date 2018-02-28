<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 16:32:55
         compiled from "/var/www/html/dev/PrestaShop/themes/classic/templates/catalog/_partials/miniatures/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8528320485a957a270271b3-22055627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d20bde763cae5699f9e0f38722c2314340a6fd0' => 
    array (
      0 => '/var/www/html/dev/PrestaShop/themes/classic/templates/catalog/_partials/miniatures/category.tpl',
      1 => 1519745294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8528320485a957a270271b3-22055627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a957a2703c173_66668219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a957a2703c173_66668219')) {function content_5a957a2703c173_66668219($_smarty_tpl) {?>

  <section class="category-miniature">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
    </a>

    <h1 class="h2">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </h1>

    <div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
  </section>

<?php }} ?>
