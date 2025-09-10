<?php
/* Smarty version 5.4.3, created on 2025-02-08 14:05:36
  from 'file:dashboard/pages/docs/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a748907193b1_15944922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba68f0f612b1f7a512f85d37d1c39b0172d20ca' => 
    array (
      0 => 'dashboard/pages/docs/default.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67a748907193b1_15944922 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/docs';
?><div class="main-content">
    <div class="container-fluid">
        <div id="redocly-container" spec="api"></div>
    </div>
</div>

<?php echo '<script'; ?>
 src="https://cdn.redoc.ly/redoc/latest/bundles/redoc.standalone.js"><?php echo '</script'; ?>
><?php }
}
