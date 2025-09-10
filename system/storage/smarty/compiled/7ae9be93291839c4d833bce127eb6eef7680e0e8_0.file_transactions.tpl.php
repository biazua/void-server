<?php
/* Smarty version 5.4.0, created on 2024-12-19 07:52:31
  from 'file:dashboard/pages/user/sms/transactions.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6763b49fe9a799_62447590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae9be93291839c4d833bce127eb6eef7680e0e8' => 
    array (
      0 => 'dashboard/pages/user/sms/transactions.tpl',
      1 => 1734540062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_6763b49fe9a799_62447590 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/sms';
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashpages_sms_headertitle");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-handshake la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_smstransactions_header");?>

                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-primary text-center">
                    <?php ob_start();
echo system_partner_commission;
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_pages_smstransactions_comtagline"),array($_prefixVariable1));?>

                </div>
                <div class="dt-responsive table-responsive">
                    <table class="table" zender-table="sms.transactions"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
