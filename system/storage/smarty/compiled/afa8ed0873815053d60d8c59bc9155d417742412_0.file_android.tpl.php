<?php
/* Smarty version 5.4.3, created on 2025-01-17 01:31:08
  from 'file:dashboard/pages/user/hosts/android.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6789425c6b6413_29578198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afa8ed0873815053d60d8c59bc9155d417742412' => 
    array (
      0 => 'dashboard/pages/user/hosts/android.tpl',
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
function content_6789425c6b6413_29578198 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/hosts';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_userhosts_hostbreadcrumb");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-android la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_dev_3");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/android");?>
" class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_dev_6");?>
" system-nav>
                            <i class="la la-book la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_dev_8");?>

                        </a>
                        <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/partnership");?>
" class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_dev_11");?>
" system-nav>
                            <i class="la la-handshake la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_dev_13");?>

                        </a>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_dev_16");?>
" system-toggle="add.device">
                            <i class="la la-android la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_adddevice");?>

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
                    <table class="table" system-table="android.devices"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
