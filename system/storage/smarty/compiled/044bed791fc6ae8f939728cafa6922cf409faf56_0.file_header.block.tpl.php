<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:03:29
  from 'file:/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/sms/../../../modules/header.block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678949f1e5e5b6_11461099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '044bed791fc6ae8f939728cafa6922cf409faf56' => 
    array (
      0 => '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/sms/../../../modules/header.block.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678949f1e5e5b6_11461099 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/modules';
?><nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container">
        <div class="me-4">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_freemodel") < 2) {?>
            <a class="btn btn-md btn-primary mb-1 lift" href="#" system-toggle="user.subscription">
                <i class="la la-crown la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_nav_menusubscription");?>

            </a>
            <?php } else { ?>
                <?php if (!( !true || empty($_smarty_tpl->getValue('data')['package']))) {?>
                    <a class="btn btn-md btn-primary mb-1 lift" href="#" system-toggle="user.subscription">
                        <i class="la la-crown la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_nav_menusubscription");?>

                    </a>
                <?php }?>
            <?php }?>

            <a class="btn btn-md btn-primary mb-1 lift" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/misc/packages");?>
" system-nav>
                <i class="la la-cubes la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_packages");?>

            </a>

            <a class="btn btn-md btn-primary mb-1 lift" href="#" system-toggle="redeem">
                <i class="la la-ticket la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_redeem");?>

            </a>
        </div>

        <div class="navbar-user" system-usernav>
            <div class="dropdown">
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("logged_avatar");?>
" class="avatar-img rounded-circle">
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-right">
                    <a href="#" class="dropdown-item" system-toggle="user.settings">
                        <i class="la la-user-cog"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_nav_menusettings");?>

                    </a>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("impersonate")) {?>
                    <a href="#" class="dropdown-item" auth-type="exit" system-action="impersonate">
                        <i class="la la-times-circle"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("impersonate_exit_btn");?>

                    </a>
                    <?php } else { ?>
                    <a href="#" class="dropdown-item" system-action="logout">
                        <i class="la la-sign-out"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_nav_menulogout");?>

                    </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</nav><?php }
}
