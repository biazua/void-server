<?php
/* Smarty version 5.4.3, created on 2025-01-23 18:54:29
  from 'file:dashboard/widgets/modals/user.subscription.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67921fe5a52e38_10118894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb64e044dfbba25a0eabd9cf55e8615f5cdac116' => 
    array (
      0 => 'dashboard/widgets/modals/user.subscription.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67921fe5a52e38_10118894 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">
            <i class="la la-crown la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

        </h3>

        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <ul class="text-left">
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_package");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['subscription']['name'];?>
</h5>
                        <?php if ($_smarty_tpl->getValue('data')['subscription']['id'] > 1) {?>
                        <h5 class="text-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub23");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')(logged_date_format,$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('data')['subscription']['expire_date']));?>
</h5>
                        <?php }?>
                    </li>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub28");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['quota']['sms_send'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['send_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['send_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_daily");
} else { ?>monthly<?php }
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub34");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['quota']['sms_receive'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['receive_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['receive_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_daily");
} else { ?>monthly<?php }
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub40");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['quota']['wa_send'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['wa_send_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['wa_send_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_daily");
} else { ?>monthly<?php }
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub46");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['quota']['wa_receive'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['wa_receive_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['wa_receive_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_daily");
} else { ?>monthly<?php }
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="text-left">
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub57");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['quota']['ussd'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['ussd_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['ussd_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_daily");
} else { ?>monthly<?php }
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub63");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['quota']['notifications'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['notification_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['notification_limit']);?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_daily");
} else { ?>monthly<?php }
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub69");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['scheduled'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['scheduled_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['scheduled_limit']);
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user_subscriptioncontacts");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['contacts'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['contact_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['contact_limit']);
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("api",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_keys");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['keys'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['key_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['key_limit']);
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="text-left">
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("webhooks",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_hooks");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['webhooks'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['webhook_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['webhook_limit']);
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("actions",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub98");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['actions'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['action_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['action_limit']);
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],",")) || $_smarty_tpl->getSmarty()->getModifierCallback('in_array')("android_notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub104");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['devices'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['device_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['device_limit']);
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['subscription']['services'],","))) {?>
                    <li class="mb-3">
                        <h4 class="text-uppercase">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_usub110");?>

                        </h4>
                        <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('data')['usage']['wa_accounts'];?>
 / <?php if ($_smarty_tpl->getValue('data')['subscription']['wa_account_limit'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['subscription']['wa_account_limit']);
} else { ?><i class="la la-infinity infinity"></i><?php }?></h5>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</div><?php }
}
