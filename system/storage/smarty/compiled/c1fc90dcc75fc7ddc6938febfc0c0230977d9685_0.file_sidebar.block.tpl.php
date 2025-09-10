<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:01:04
  from 'file:/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/./modules/sidebar.block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678000d0327467_74448844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1fc90dcc75fc7ddc6938febfc0c0230977d9685' => 
    array (
      0 => '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/./modules/sidebar.block.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678000d0327467_74448844 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/modules';
?><nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-dark navbar-vibrant" id="sidebar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard");?>
" system-nav>
            <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')("logo_light");?>
" class="navbar-brand-img mx-auto">
        </a>

        <div class="navbar-user d-md-none" system-usernav>
            <div class="dropdown">
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("logged_avatar");?>
" class="avatar-img rounded-circle">
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="#" class="dropdown-item" system-toggle="user.settings">
                        <i class="la la-user-cog"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_nav_menusettings");?>

                    </a>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_freemodel") < 2) {?>
                    <a href="#" class="dropdown-item" system-toggle="user.subscription">
                        <i class="la la-crown la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_nav_menusubscription");?>

                    </a>
                    <?php } else { ?>
                        <?php if (!( !true || empty($_smarty_tpl->getValue('data')['package']))) {?>
                            <a href="#" class="dropdown-item" system-toggle="user.subscription">
                                <i class="la la-crown la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_nav_menusubscription");?>

                            </a>
                        <?php }?>
                    <?php }?>
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/misc/packages");?>
" class="dropdown-item" system-nav>
                        <i class="la la-cubes la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_packages");?>

                    </a>
        
                    <a href="#" class="dropdown-item" system-toggle="redeem">
                        <i class="la la-ticket la-lg me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_redeem");?>

                    </a>

                    <hr class="dropdown-divider">

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

        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_nav_default");?>

            </h6>

            <ul class="navbar-nav">
                <li class="nav-item" system-navbar>
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard");?>
" system-nav>
                        <i class="la la-chart-bar la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_sidebarblk_overview");?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#smsMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="la la-comment la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashnav_sms_navname");?>

                    </a>
                    <div class="collapse" id="smsMenu">
                        <ul class="nav nav-sm flex-column" system-navbar>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/queue");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("tabs_smspage_queuebtn");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/sent");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_messages_menusent");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/received");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_messages_menureceived");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/campaigns");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_sms_campaignstab");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/scheduled");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_android_line40");?>

                                </a>
                            </li>
                            <?php if ($_smarty_tpl->getValue('partner')) {?>
                                <li class="nav-item">
                                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/sms/transactions");?>
" class="nav-link" system-nav>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_sms_partnertransactions");?>

                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#whatsappMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_modules_header_line25");?>

                    </a>
                    <div class="collapse" id="whatsappMenu">
                        <ul class="nav nav-sm flex-column" system-navbar>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/queue");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("tabs_wapage_queuebtn");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/sent");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_whats_line28");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/received");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_whats_line34");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/campaigns");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_whatsapp_campaignstab");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/scheduled");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_whats_line40");?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/whatsapp/groups");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_whatsapp_groupstab");?>

                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#sendersMenu" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="la la-fax la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_sidebarblk_hosts");?>

                    </a>
                    <div class="collapse" id="sendersMenu">
                        <ul class="nav nav-sm flex-column" system-navbar>
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/hosts/android");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_sidebarblk_hostsandroid");?>

                                </a>
                            </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/hosts/whatsapp");?>
" class="nav-link" system-nav>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_sidebarblk_hostswhatsapp");?>

                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
                <?php }?>
            </ul>
            
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_android_line10");?>

            </h6>
            
            <ul class="navbar-nav" system-navbar>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/android/ussd");?>
" class="nav-link" system-nav>
                        <i class="la la-mobile la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_android_line46");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/android/notifications");?>
" class="nav-link" system-nav>
                        <i class="la la-satellite-dish la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_android_line52");?>

                    </a>
                </li>
                <?php }?>
            </ul>
            <?php }?>

            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_contacts_title");?>

            </h6>

            <ul class="navbar-nav" system-navbar>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/contacts/saved");?>
" class="nav-link" system-nav>
                        <i class="la la-address-book la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_contacts_menusaved");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/contacts/groups");?>
" class="nav-link" system-nav>
                        <i class="la la-list la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_contacts_menugroups");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/contacts/unsubscribed");?>
" class="nav-link" system-nav>
                        <i class="la la-unlink la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_pages_contacts_line40");?>

                    </a>
                </li>
            </ul>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("api",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("webhooks",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("actions",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("templates",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_tools_title");?>

            </h6>

            <ul class="navbar-nav" system-navbar>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("api",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/tools/keys");?>
" class="nav-link" system-nav>
                        <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_tools_menukeys");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("webhooks",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/tools/webhooks");?>
" class="nav-link" system-nav>
                        <i class="la la-code-branch la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_tools_menuhooks");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("actions",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/tools/actions");?>
" class="nav-link" system-nav>
                        <i class="la la-robot la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_tools_menuactions");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("templates",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/tools/templates");?>
" class="nav-link" system-nav>
                        <i class="la la-wrench la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_messages_menutemplates");?>

                    </a>
                </li>
                <?php }?>
            </ul>
            <?php }?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("ai",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("template_sidebar_ai");?>

            </h6>

            <ul class="navbar-nav" system-navbar>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/ai/keys");?>
" class="nav-link" system-nav>
                        <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("template_sidebar_ai_keys");?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/ai/plugins");?>
" class="nav-link" system-nav>
                        <i class="la la-plug la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("template_sidebar_ai_plugins");?>

                    </a>
                </li>
            </ul>
            <?php }?>
            
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("is_admin")) {?>
            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_modules_header_line45");?>

            </h6>

            <ul class="navbar-nav" system-navbar>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin");?>
" class="nav-link" system-nav>
                        <i class="la la-chart-bar la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_sidebarblk_overview");?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_users")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/users");?>
" class="nav-link" system-nav>
                        <i class="la la-users la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menuusers");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_roles")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/roles");?>
" class="nav-link" system-nav>
                        <i class="la la-shield la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menuroles");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_packages")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/packages");?>
" class="nav-link" system-nav>
                        <i class="la la-cubes la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menupackages");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_vouchers")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/vouchers");?>
" class="nav-link" system-nav>
                        <i class="la la-money-bill-wave la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menuvouchers");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_subscriptions")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/subscriptions");?>
" class="nav-link" system-nav>
                        <i class="la la-crown la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menusubscriptions");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_transactions")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/transactions");?>
" class="nav-link" system-nav>
                        <i class="la la-coins la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menutransactions");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_payouts")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/payouts");?>
" class="nav-link" system-nav>
                        <i class="la la-money-check-alt la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_landing_payouts");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_pages")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/pages");?>
" class="nav-link" system-nav>
                        <i class="la la-stream la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menupages");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_marketing")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/marketing");?>
" class="nav-link" system-nav>
                        <i class="la la-bullhorn la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_landing_marketing");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_languages")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/languages");?>
" class="nav-link" system-nav>
                        <i class="la la-language la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menulanguages");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_waservers")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/waservers");?>
" class="nav-link" system-nav>
                        <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_sidebarblk_waservers");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_gateways")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/gateways");?>
" class="nav-link" system-nav>
                        <i class="la la-code la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_landing_gateways");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_shorteners")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/shorteners");?>
" class="nav-link" system-nav>
                        <i class="la la-link la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_landing_shorteners");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_plugins")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/admin/plugins");?>
" class="nav-link" system-nav>
                        <i class="la la-cogs la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_menuplugins");?>

                    </a>
                </li>
                <?php }?>
            </ul>
            <?php }?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("api",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("webhooks",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("actions",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
            <hr class="navbar-divider my-3">

            <h6 class="navbar-heading">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_doc_line10");?>

            </h6>

            <ul class="navbar-nav" system-navbar>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("api",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs");?>
" class="nav-link" target="_blank">
                        <i class="la la-code la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_doc_line28");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('permission')("manage_api")) {?>
                <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/admin");?>
" class="nav-link" target="_blank">
                        <i class="la la-cogs la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("administration_landing_api");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("webhooks",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/webhooks");?>
" class="nav-link" system-nav>
                        <i class="la la-code-branch la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_doc_line34");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("actions",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/actions");?>
" class="nav-link" system-nav>
                        <i class="la la-robot la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_doc_line40");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/android");?>
" class="nav-link" system-nav>
                        <i class="la la-android la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_sidebarblk_docsandroid");?>

                    </a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('subscription')['services'],","))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs/partners");?>
" class="nav-link" system-nav>
                        <i class="la la-handshake la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_doc_line52");?>

                    </a>
                </li>
                <?php }?>
            </ul>
            <?php }?>

            <div class="mt-auto"></div>
        </div> 
    </div>
</nav><?php }
}
