<?php
/* Smarty version 5.1.0, created on 2024-05-17 00:16:11
  from 'file:dashboard/widgets/modals/payment.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_664685ab00d8d2_93487053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72aca0e2ee21ce506bfdd4b17e80f6daeeaa9c35' => 
    array (
      0 => 'dashboard/widgets/modals/payment.tpl',
      1 => 1715445074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_664685ab00d8d2_93487053 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">
            <i class="la la-credit-card la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

        </h3>

        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <div class="row" zender-payments>
            <?php if (system_offline_payment < 2) {?>
            <div class="col-md-6">
                <button class="btn btn-white btn-payment-offline btn-block lift" zender-toggle="zender.view/bank-<?php echo $_smarty_tpl->getValue('data')['original_price'];?>
">
                    <i class="la la-money-check la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_modal_paymentbtn_banktransfernew");?>

                </button>
            </div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
