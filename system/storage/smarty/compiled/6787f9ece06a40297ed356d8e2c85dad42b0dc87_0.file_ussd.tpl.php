<?php
/* Smarty version 5.1.0, created on 2024-07-05 17:54:52
  from 'file:dashboard/pages/user/android/ussd.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6688174cadc7f1_16741120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6787f9ece06a40297ed356d8e2c85dad42b0dc87' => 
    array (
      0 => 'dashboard/pages/user/android/ussd.tpl',
      1 => 1710912350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_6688174cadc7f1_16741120 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/android';
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_pages_android_line10");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-satellite-dish la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_droid_ussd_3");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_table_btn_refresh");?>
" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-danger lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_droid_ussd_6");?>
" zender-trash="android.ussd">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-warning lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_droid_ussd_10");?>
" zender-clear-pending="ussd">
                            <i class="la la-exclamation-triangle la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_droid_ussd_14");?>
" zender-toggle="zender.add.ussd">
                            <i class="la la-telegram la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_droid_ussd_16");?>

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
                    <table class="table" zender-table="android.ussd"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
