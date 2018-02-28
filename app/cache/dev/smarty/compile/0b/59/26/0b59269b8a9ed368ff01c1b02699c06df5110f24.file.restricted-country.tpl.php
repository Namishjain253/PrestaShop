<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 16:32:53
         compiled from "/var/www/html/dev/PrestaShop/themes/classic/templates/errors/restricted-country.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5041860475a957a25a2f7d9-98581341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b59269b8a9ed368ff01c1b02699c06df5110f24' => 
    array (
      0 => '/var/www/html/dev/PrestaShop/themes/classic/templates/errors/restricted-country.tpl',
      1 => 1519745294,
      2 => 'file',
    ),
    '36ed4edd9cf16fd35ce277e7ac7a60ad9fa33896' => 
    array (
      0 => '/var/www/html/dev/PrestaShop/themes/classic/templates/layouts/layout-error.tpl',
      1 => 1519745294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5041860475a957a25a2f7d9-98581341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stylesheets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a957a25a7adb3_38884410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a957a25a7adb3_38884410')) {function content_5a957a25a7adb3_38884410($_smarty_tpl) {?>
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
      

  <section id="main">

    
      <header class="page-header">
        <div class="logo"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo"></div>
        
          <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
        
      </header>
    

    
      <section id="content" class="page-content page-restricted">
        
          <h2><?php echo smartyTranslate(array('s'=>'403 Forbidden','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h2>
          <p><?php echo smartyTranslate(array('s'=>'You cannot access this store from your country. We apologize for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>
        
      </section>
    

    

    

  </section>


    </div>

  </body>

</html>
<?php }} ?>
