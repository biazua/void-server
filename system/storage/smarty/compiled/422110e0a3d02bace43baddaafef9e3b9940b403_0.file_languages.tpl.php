<?php
/* Smarty version 5.1.0, created on 2024-05-21 14:32:13
  from 'file:default/widgets/modals/languages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_664c3fed1b31b0_63352916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422110e0a3d02bace43baddaafef9e3b9940b403' => 
    array (
      0 => 'default/widgets/modals/languages.tpl',
      1 => 1653699354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_664c3fed1b31b0_63352916 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/default/widgets/modals';
?><div class="modal fade" id="lang-modal">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content text-center">
        <div class="modal-header">
            <h2 class="modal-title">
                <i class="la la-language la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h2>

            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
        <div class="row">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['languages'], 'language');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach0DoElse = false;
?>
            <div class="col-3 text-center">
                <a href="#" class="all-languages" title="<?php echo $_smarty_tpl->getValue('language')['name'];?>
" zender-language="<?php echo $_smarty_tpl->getValue('language')['id'];?>
">
                    <i class="flag-icon flag-icon-<?php echo $_smarty_tpl->getValue('language')['iso'];?>
 p-1"></i>
                </a>
            </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>  
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
