<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 16:32:53
         compiled from "/var/www/html/dev/PrestaShop/themes/classic/templates/layouts/layout-error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10861220655a957a257fec01-45160560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ed4edd9cf16fd35ce277e7ac7a60ad9fa33896' => 
    array (
      0 => '/var/www/html/dev/PrestaShop/themes/classic/templates/layouts/layout-error.tpl',
      1 => 1519745294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10861220655a957a257fec01-45160560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stylesheets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a957a258123c0_16334967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a957a258123c0_16334967')) {function content_5a957a258123c0_16334967($_smarty_tpl) {?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    
      <title></title>
      <meta name="description" content="">
      <meta name="keywords" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
      <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '6595532765a957a25674879-71549696');
content_5a957a256d1ce0_03630471($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>
    

  </head>

  <body>

    <div id="layout-error">
      
        <p>Hello world! This is HTML5 Boilerplate.</p>
      
    </div>

  </body>

</html>
<?php }} ?>
