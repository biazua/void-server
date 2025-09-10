<?php
/* Smarty version 5.4.3, created on 2025-02-10 15:31:45
  from 'file:dashboard/widgets/modals/sms.quick.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a9ffc1ccb8d9_85389377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b981c2c7786fd7312a71cbb3ebf60a756187ce7' => 
    array (
      0 => 'dashboard/widgets/modals/sms.quick.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67a9ffc1ccb8d9_85389377 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-telegram la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_number");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick17");?>
"></i>
                    </label>
                    <input type="text" name="phone" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getValue('data')['phone'];?>
" system-autocomplete="contacts">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick24_1");?>
"></i>
                    </label>
                    <select name="mode" class="form-control" system-select-mode>
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick27");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick28");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick34");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick34_1");?>
"></i>
                    </label>
                    <select name="shortener" class="form-control">
                        <option value="0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick37");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['shorteners'], 'shortener');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shortener')->key => $_smarty_tpl->getVariable('shortener')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('shortener');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('shortener')->key;?>
"><?php echo $_smarty_tpl->getValue('shortener')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('shortener', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-6" system-device-mode>
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_sim");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick46");?>
"></i>
                    </label>
                    <select name="sim" class="form-control">
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick49");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick50");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6" system-device-mode>
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_priority");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick56");?>
"></i>
                    </label>
                    <select name="priority" class="form-control">
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_no");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_yes");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12" system-device-mode>
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_device");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick66");?>
"></i>
                    </label>
                    <select name="device" class="form-control" data-live-search="true" system-device-list>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devices'], 'device');
$_smarty_tpl->getVariable('device')->index = -1;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('device')->index++;
$foreach1Backup = clone $_smarty_tpl->getVariable('device');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" device-id="<?php echo $_smarty_tpl->getValue('device')['id'];?>
" online-id="<?php echo $_smarty_tpl->getValue('device')['online_id'];?>
" data-content="<?php echo $_smarty_tpl->getValue('device')['name'];?>
 <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_status_offline");
}?></span>" <?php if ($_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('device', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-12" system-credits-mode>
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick77");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick77_1");?>
"></i>
                    </label>
                    <select name="gateway" class="form-control mb-3" data-live-search="true" system-device-list>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['gateways'], 'gateway');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gateway')->value) {
$foreach2DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('gateway')['id'];?>
" data-tokens="<?php echo $_smarty_tpl->getValue('gateway')['name'];?>
"><?php echo $_smarty_tpl->getValue('gateway')['name'];?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php if (!( !true || empty($_smarty_tpl->getValue('data')['devicesGlobal']))) {?>
                        <?php if (!( !true || empty($_smarty_tpl->getValue('data')['gateways']))) {?>
                        <option data-divider="true"></option>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devicesGlobal'], 'device');
$_smarty_tpl->getVariable('device')->index = -1;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('device')->index++;
$foreach3Backup = clone $_smarty_tpl->getVariable('device');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" device-id="<?php echo $_smarty_tpl->getValue('device')['id'];?>
" online-id="<?php echo $_smarty_tpl->getValue('device')['online_id'];?>
" data-content="<i class='flag-icon flag-icon flag-icon-<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('device')['country']);?>
'></i> <?php echo $_smarty_tpl->getValue('device')['name'];?>
 (<span class='text-lowercase'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('device')['owner'],15,"...");?>
</span>) <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_status_offline");
}?></span> <span class='badge badge-primary'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_smsall_globalstatus");?>
</span>" <?php if (( !true || empty($_smarty_tpl->getValue('data')['gateways'])) && $_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_smsall_globalstatus");?>
)</option>
                        <?php
$_smarty_tpl->setVariable('device', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_message");?>
 <span class="badge text-white bg-primary" system-counter-view></span>
                    </label>
                    
                    <button class="btn btn-primary btn-sm" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatsbulk_79");?>
" system-action="translate">
                        <i class="la la-language"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("sms_btnevent_formcontent_btntranslate");?>

                    </button>

                    <textarea name="message" class="form-control mb-3" rows="5" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_message_placeholder");?>
" system-counter></textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick104");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_quick104_1");?>
"></i>
                    </label>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_bulk_135");?>
</small> <code><?php echo $_smarty_tpl->getValue('data')['spintax_sample']['main'];?>
</code>
                    </p>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("form_literal_spintaxdesc2"),array("<strong>".((string)$_smarty_tpl->getValue('data')['spintax_sample']['good'])."</strong>","<strong>".((string)$_smarty_tpl->getValue('data')['spintax_sample']['bad'])."</strong>"));?>
</small>
                    </p>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-telegram la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_send");?>

            </button>
        </div>
    </div>
</form><?php }
}
