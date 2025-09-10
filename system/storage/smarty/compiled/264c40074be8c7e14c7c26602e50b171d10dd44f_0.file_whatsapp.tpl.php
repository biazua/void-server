<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:16:57
  from 'file:dashboard/pages/user/hosts/whatsapp.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67800489d62b97_90016780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '264c40074be8c7e14c7c26602e50b171d10dd44f' => 
    array (
      0 => 'dashboard/pages/user/hosts/whatsapp.tpl',
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
function content_67800489d62b97_90016780 (\Smarty\Template $_smarty_tpl) {
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
                            <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("tabs_whatsappaccounts_titleheader");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("table_btn_refresh");?>
" system-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_what_accnt_6");?>
" relink-unique="none" wa-link-url="link" wa-link-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("widget_waaddaccount_title");?>
" system-toggle="add.whatsapp">
                            <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_what_accnt_8");?>

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
                    <table class="table" system-table="whatsapp.accounts"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
