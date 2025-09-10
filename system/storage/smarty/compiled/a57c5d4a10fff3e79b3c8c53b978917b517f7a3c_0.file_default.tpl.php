<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:01:09
  from 'file:dashboard/widgets/charts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678000d5e33e47_64146754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a57c5d4a10fff3e79b3c8c53b978917b517f7a3c' => 
    array (
      0 => 'dashboard/widgets/charts/default.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678000d5e33e47_64146754 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/charts';
?><!DOCTYPE html>

<div id="chart"></div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/fetch.min.js");?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	fetchInject([
		"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/system.js");?>
"
	], fetchInject([
		"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/apexcharts.min.js");?>
",
		"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/iframeResizer.contentWindow.min.js");?>
"
	])).then(() => {
		system.charts("<?php echo $_smarty_tpl->getValue('chart');?>
");
	});
<?php echo '</script'; ?>
><?php }
}
