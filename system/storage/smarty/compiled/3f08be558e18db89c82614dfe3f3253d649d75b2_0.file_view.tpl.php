<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:03:51
  from 'file:dashboard/widgets/modals/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894a07736c55_16145082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f08be558e18db89c82614dfe3f3253d649d75b2' => 
    array (
      0 => 'dashboard/widgets/modals/view.tpl',
      1 => 1734540058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67894a07736c55_16145082 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">
            <i class="la la-<?php echo $_smarty_tpl->getValue('data')['icon'];?>
 la-lg"></i> <?php echo $_smarty_tpl->getValue('data')['title'];?>

        </h3>

        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <p class="text-left text-wrap px-5">
            <?php echo $_smarty_tpl->getValue('data')['content'];?>

        </p>
    </div>
</div><?php }
}
