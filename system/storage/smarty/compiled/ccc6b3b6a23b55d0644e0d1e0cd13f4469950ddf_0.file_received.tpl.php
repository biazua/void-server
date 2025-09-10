<?php
/* Smarty version 5.4.3, created on 2025-01-23 18:50:03
  from 'file:dashboard/pages/user/sms/received.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67921edb6661c0_87731478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccc6b3b6a23b55d0644e0d1e0cd13f4469950ddf' => 
    array (
      0 => 'dashboard/pages/user/sms/received.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_67921edb6661c0_87731478 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/sms';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashpages_sms_headertitle");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-sms la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_rev_3");?>

                        </h1>
                    </div>
                    
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("table_btn_refresh");?>
" system-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-danger lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_rev_6");?>
" system-trash="sms.received">
                            <i class="la la-stream la-lg"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table class="table" system-table="sms.received"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
