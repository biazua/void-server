<?php
/* Smarty version 5.4.3, created on 2025-01-10 01:13:00
  from 'file:dashboard/pages/user/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6780039c598726_85342587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5f3bf55fdc3ce370dbf97fbbce02e6a00c55844' => 
    array (
      0 => 'dashboard/pages/user/default.tpl',
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
function content_6780039c598726_85342587 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_title_default");?>

                        </h6>

                        <h1 class="header-title">
                            <i class="la la-chart-bar la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_overall_overview");?>

                        </h1>
                    </div>
    
                    <div class="col-auto">
                        <a class="btn btn-primary lift mb-2 mb-lg-0 <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>d-none<?php }?>" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/misc/rates.gateways");?>
" system-nav>
                            <i class="la la-comments-dollar la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_overview_gatewaysbtn");?>

                        </a>

                        <a class="btn btn-primary lift mb-2 mb-lg-0 <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>d-none<?php }?>" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/misc/rates.partners");?>
" system-nav>
                            <i class="la la-handshake la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_rates_line39");?>

                        </a>
                    </div>
                </div> 
            </div> 
        </div>
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_overview_user_totalsent");?>

                                </h6>

                                <span class="h2 mb-0">
                                    <?php echo $_smarty_tpl->getValue('data')['total']['sent'];?>

                                </span>
                            </div>
                            <div class="col-auto">
                                <span class="h2 la la-telegram la-lg text-muted mb-0"></span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_overview_user_totalreceived");?>

                                </h6>

                                <span class="h2 mb-0">
                                    <?php echo $_smarty_tpl->getValue('data')['total']['received'];?>

                                </span>
                            </div>

                            <div class="col-auto">
                                <span class="h2 la la-comment la-lg text-muted mb-0"></span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_def_line178");?>

                                </h6>

                                <span class="h2 mb-0">
                                    <?php echo $_smarty_tpl->getValue('data')['ratio']['success'];?>
%
                                </span>
                            </div>

                            <div class="col-auto">
                                <span class="h2 fe fe-trending-up text-success mb-0"></span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_def_line190");?>

                                </h6>

                                <span class="h2 mb-0">
                                    <?php echo $_smarty_tpl->getValue('data')['ratio']['failed'];?>
%
                                </span>
                            </div>
                            <div class="col-auto">
                                <span class="h2 fe fe-trending-down text-danger mb-0"></span>
                            </div>
                        </div> 
                    </div>
                </div>

            </div>
        </div> 
        <div class="row">
            <div class="col-12 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line58");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line60");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0"
                            system-iframe="<?php echo site_url;?>
/widget/chart/dashboard.messages"></iframe>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line74");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line76");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0"
                            system-iframe="<?php echo site_url;?>
/widget/chart/dashboard.events"></iframe>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line90");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line92");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0"
                            system-iframe="<?php echo site_url;?>
/widget/chart/dashboard.utilities"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-3">
                <div class="card">
                    <h3 class="card-header">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line109");?>

                    </h3>

                    <div class="card-body">
                        <h4 class="card-text">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['balance']['earnings'],2);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')(system_currency);?>

                            <span class="badge bg-primary-soft"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line117");?>
</span>
                        </h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary lift btn-sm" system-toggle="add.payout">
                            <i class="la la-money-check-alt me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line131");?>

                        </button>
                    </div>
                </div>

                <div class="card">
                    <h3 class="card-header">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line140");?>

                    </h3>

                    <div class="card-body">
                        <h4 class="card-text">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['balance']['credits'],2);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')(system_currency);?>

                            <span class="badge bg-primary-soft"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line148");?>
</span>
                        </h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary lift btn-sm" system-toggle="add.credits">
                            <i class="la la-coins me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_default_line162");?>

                        </button>
                    </div>
                </div>

                            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>

</div><?php }
}
