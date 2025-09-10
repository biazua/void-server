<?php
/* Smarty version 5.4.0, created on 2024-12-19 13:47:48
  from 'file:/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/default/pages/../modules/analytics.block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6763b384a6e3b6_83525579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ae426a03aa7b15e7d16b6d9c5f138d71d76d502' => 
    array (
      0 => '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/default/pages/../modules/analytics.block.tpl',
      1 => 1734540052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6763b384a6e3b6_83525579 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/default/modules';
if (!empty(system_analytics_key)) {
echo '<script'; ?>
 async src="//www.googletagmanager.com/gtag/js?id=<?php echo system_analytics_key;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
        dataLayer.push(arguments);
    }
  gtag("js", new Date());

  gtag("config", "<?php echo system_analytics_key;?>
");
<?php echo '</script'; ?>
>
<?php }
}
}
