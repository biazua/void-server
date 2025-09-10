<?php
/* Smarty version 5.4.3, created on 2025-01-23 18:54:43
  from 'file:dashboard/pages/misc/packages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67921ff324ecc3_90114747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f87bd3af1d13e9b39589db885be11ce180aba29' => 
    array (
      0 => 'dashboard/pages/misc/packages.tpl',
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
function content_67921ff324ecc3_90114747 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/misc';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_title_default");?>

                        </h6>

                        <h1 class="header-title">
                            <i class="la la-cubes la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_packages_title");?>

                        </h1>
                    </div>
                </div> 
            </div> 
        </div>
    </div> 

    <div class="container">
        <div class="row d-flex align-items-stretch">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['packages'], 'package');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('package')->value) {
$foreach0DoElse = false;
?>
            <div class="col-12 col-lg-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body d-flex flex-column">
                        <div class="content">
                            <h6 class="text-uppercase text-center text-muted my-4">
                                <?php echo $_smarty_tpl->getValue('package')['name'];?>

                            </h6>

                            <div class="row no-gutters align-items-center justify-content-center">
                                <?php if ($_smarty_tpl->getValue('package')['id'] < 2) {?>
                                <div class="col-auto">
                                    <div class="h1 mb-5 mt-5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_freefor");?>
</div>
                                </div>
                                <?php } else { ?>
                                <div class="col-auto">
                                    <div class="display-2 mb-0">
                                        <?php echo $_smarty_tpl->getValue('package')['price'];?>
 <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')(system_currency);?>
</small>
                                    </div>
                                </div>
                                <?php }?>
                            </div> 

                            <?php if ($_smarty_tpl->getValue('package')['id'] > 1) {?>
                            <div class="h6 text-uppercase text-center text-muted mb-5">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_monthly");?>

                            </div>
                            <?php }?>

                            <div class="mb-3">
                                <ul class="list-group list-group-flush">
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_packagesmodal_smssend");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['send_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['send_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_dailylabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_monthlylabel");
}
}?></small>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line36");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['receive_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['receive_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_dailylabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_monthlylabel");
}
}?></small>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line41");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['wa_send_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['wa_send_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_dailylabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_monthlylabel");
}
}?></small>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line46");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['wa_receive_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['wa_receive_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_dailylabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_monthlylabel");
}
}?></small>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line51");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['ussd_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['ussd_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_dailylabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_monthlylabel");
}
}?></small>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line56");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['notification_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['notification_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_dailylabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_monthlylabel");
}
}?></small>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line61");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['scheduled_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['scheduled_limit']);
}?></small>
                                    </li>
                                    <?php }?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line66");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['contact_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['contact_limit']);
}?></small>
                                    </li>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("api",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line71");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['key_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['key_limit']);
}?></small>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("webhooks",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line76");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['webhook_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['webhook_limit']);
}?></small>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("actions",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line81");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['action_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['action_limit']);
}?></small>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line86");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['device_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['device_limit']);
}?></small>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('package')['services'],","))) {?>
                                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_package_line91");?>
</small> <small><?php if ($_smarty_tpl->getValue('package')['wa_account_limit'] < 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("default_pricecolumns_unlimitedlabel");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('package')['wa_account_limit']);
}?></small>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>

                        <div class="btn-container mt-auto">
                            <button class="btn btn-block btn-primary" <?php if ($_smarty_tpl->getValue('package')['id'] > 1) {?>system-toggle="add.duration/<?php echo $_smarty_tpl->getValue('package')['id'];?>
"<?php }?> <?php if ($_smarty_tpl->getValue('package')['id'] < 2) {?>disabled<?php }?>>
                                <?php if ($_smarty_tpl->getValue('package')['id'] < 2) {?>
                                    <i class="la la-bolt"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_free");?>

                                <?php } else { ?>
                                    <i class="la la-credit-card"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_purchase");?>

                                <?php }?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>


        <?php $_smarty_tpl->renderSubTemplate("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
