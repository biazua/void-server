<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:01:04
  from 'file:dashboard/pages/admin/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678000d03cd9d3_92265661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e817df085cdf9a8dfaeb911c56ad61d194a2e99' => 
    array (
      0 => 'dashboard/pages/admin/default.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../modules/header.block.tpl' => 1,
    'file:../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_678000d03cd9d3_92265661 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/admin';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_modules_header_line45");?>

                        </h6>

                        <h1 class="header-title">
                            <i class="la la-chart-bar la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_overall_overview");?>

                        </h1>
                    </div>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("super_admin")) {?>
                    <div class="col-auto">
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("admin_btncron_tooltip");?>
" system-toggle="setup.cron">
                            <i class="la la-broom la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("admin_btncron_btn");?>

                        </button>

                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_admin_cachehelp");?>
" system-action="clear">
                            <i class="la la-trash la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_landing_btncache");?>

                        </button>

                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_admin_tokenrefreshbutthelp");?>
" system-action="token">
                            <i class="la la-refresh la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_admin_tokenrefreshbutt");?>

                        </button>

                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_admin_themehelp");?>
" system-toggle="admin.theme">
                            <i class="la la-palette la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_theme");?>

                        </button>

                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_admin_systemsettingshelp");?>
" system-toggle="admin.settings">
                            <i class="la la-cog la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_settings");?>

                        </button>
                    </div>
                    <?php }?>
                </div> 
            </div> 
        </div>
    </div> 

    <div class="container">
        <div class="row">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("super_admin")) {?>
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <h4 class="card-header">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("admin_gateway_title");?>

                    </h4>

                    <div class="card-body">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("admin_gateway_status");?>
: <?php if ($_smarty_tpl->getValue('data')['gateway']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("admin_gateway_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("admin_gateway_notuploaded");?>
</span><?php }?>
                        </h4>

                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_landing_build");?>
: <span class="badge badge-success text-lowercase">v<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_apk_version");?>
</span>
                        </h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary btn-sm lift mb-2 mb-lg-0" system-build>
                            <i class="la la-hammer la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_build");?>

                        </button>

                        <button class="btn btn-primary btn-sm lift mb-2 mb-lg-0" system-toggle="admin.builder">
                            <i class="la la-tools la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_buildsettings");?>

                        </button>
                    </div>
                </div>

                <div class="card">
                    <h4 class="card-header">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_landing_system");?>

                    </h4>

                    <div class="card-body">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("admin_update_installed");?>
: <span class="badge badge-success text-lowercase">v<?php echo version;?>
</span>
                        </h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary btn-sm lift mb-2 mb-lg-0" system-toggle="system.update">
                            <i class="la la-terminal la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("admin_update_btn");?>

                        </button>

                        <button class="btn btn-primary btn-sm lift mb-2 mb-lg-0" system-support>
                            <i class="la la-headset la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_support");?>
</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>

            <div class="col-md-12 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("super_admin")) {?>col-xl-8<?php }?>">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_adminoverview_topcountries5");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabdefaultmessageslast");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" system-iframe="<?php echo site_url;?>
/widget/chart/admin.countries"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_adminoverview_browsers");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabdefaultmessageslast");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" system-iframe="<?php echo site_url;?>
/widget/chart/admin.browsers"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_adminoverview_os");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabdefaultmessageslast");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" system-iframe="<?php echo site_url;?>
/widget/chart/admin.os"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_default_messages");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabdefaultmessageslast");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" system-iframe="<?php echo site_url;?>
/widget/chart/admin.messages"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_default_utilities");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabdefaultmessageslast");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" system-iframe="<?php echo site_url;?>
/widget/chart/admin.utilities"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_default_subscriptions");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabdefaultmessageslast");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" system-iframe="<?php echo site_url;?>
/widget/chart/admin.subscriptions"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_default_credits");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabdefaultmessageslast");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" system-iframe="<?php echo site_url;?>
/widget/chart/admin.credits"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_administration_commissionstitle");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabdefaultmessageslast");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" system-iframe="<?php echo site_url;?>
/widget/chart/admin.commissions"></iframe>
                    </div>
                </div>
            </div>
        </div> 

        <?php $_smarty_tpl->renderSubTemplate("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
