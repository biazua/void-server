<?php
/* Smarty version 5.1.0, created on 2024-07-05 17:18:44
  from 'file:dashboard/widgets/modals/sms.bulk.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66880ed42132e4_61983855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '482450d97ebf03891d016140cfc4a25a0b719894' => 
    array (
      0 => 'dashboard/widgets/modals/sms.bulk.tpl',
      1 => 1710215762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66880ed42132e4_61983855 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-mail-bulk la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <div class="form-group">
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_campagin_formname");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_campagin_formhelp");?>
"></i>
                        </label>
                        <input type="text" name="campaign" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_campaign_formplaceholder");?>
">
                    </div>
                </div>

                <div class="form-group col-md-7">
                    <div class="form-group">
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_bulksms_numbers");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_18");?>
"></i>
                        </label>
                        <textarea name="numbers" class="form-control" rows="3" placeholder="<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

"></textarea>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_groups");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_31");?>
"></i>
                    </label>
                    <select name="groups[]" class="form-control" data-live-search="true" zender-select-groups multiple>
                        <option value="0" data-tokens="None <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['groups'], 'group');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->key => $_smarty_tpl->getVariable('group')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('group');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('group')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('group')['token'];?>
"><?php echo $_smarty_tpl->getValue('group')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('group', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_43");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_43_1");?>
"></i>
                    </label>
                    <select name="shortener" class="form-control">
                        <option value="0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_46");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['shorteners'], 'shortener');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shortener')->key => $_smarty_tpl->getVariable('shortener')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('shortener');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('shortener')->key;?>
"><?php echo $_smarty_tpl->getValue('shortener')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('shortener', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_55");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_55_1");?>
"></i>
                    </label>
                    <select name="mode" class="form-control" zender-select-mode>
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_58");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_59");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <div zender-device-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_sim");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_64");?>
"></i>
                        </label>
                        <select name="sim" class="form-control mb-3">
                            <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_67");?>
</option>
                            <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_68");?>
</option>
                        </select>
                        
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_priority");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_72");?>
"></i>
                        </label>
                        <select name="priority" class="form-control mb-3">
                            <option value="0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_no");?>
</option>
                            <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_yes");?>
</option>
                        </select>
                    </div>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_template");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_81");?>
"></i>
                    </label>
                    <select class="form-control" data-live-search="true" zender-select-template>
                        <option value="none" data-tokens="no none 0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_none");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['templates'], 'template');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('template')->key => $_smarty_tpl->getVariable('template')->value) {
$foreach2DoElse = false;
$foreach2Backup = clone $_smarty_tpl->getVariable('template');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('template')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('template')['token'];?>
" data-format="<?php echo $_smarty_tpl->getValue('template')['format'];?>
"><?php echo $_smarty_tpl->getValue('template')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('template', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <div zender-device-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_device");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_94");?>
"></i>
                        </label>
                        <select name="devices[]" class="form-control mb-3" data-live-search="true" zender-device-list multiple>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devices'], 'device');
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
" data-content="<?php echo $_smarty_tpl->getValue('device')['name'];?>
 <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_offline");
}?></span>" <?php if ($_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div zender-credits-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_105");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_105_1");?>
"></i>
                        </label>
                        <select name="gateways[]" class="form-control mb-3" data-live-search="true" zender-device-list multiple>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['gateways'], 'gateway');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gateway')->value) {
$foreach4DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('gateway')['id'];?>
" data-tokens="<?php echo $_smarty_tpl->getValue('gateway')['name'];?>
"><?php echo $_smarty_tpl->getValue('gateway')['name'];?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php if (!empty($_smarty_tpl->getValue('data')['devicesGlobal'])) {?>
                            <?php if (!empty($_smarty_tpl->getValue('data')['gateways'])) {?>
                            <option data-divider="true"></option>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devicesGlobal'], 'device');
$_smarty_tpl->getVariable('device')->index = -1;
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach5DoElse = false;
$_smarty_tpl->getVariable('device')->index++;
$foreach5Backup = clone $_smarty_tpl->getVariable('device');
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
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_offline");
}?></span> <span class='badge badge-primary'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_smsall_globalstatus");?>
</span>" <?php if (empty($_smarty_tpl->getValue('data')['gateways']) && $_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_smsall_globalstatus");?>
)</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                    </div>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_message");?>
 <span class="badge text-white bg-primary" zender-counter-view></span>
                    </label>
                    
                    <button class="btn btn-primary btn-sm" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_whatsbulk_79");?>
" zender-action="translate">
                        <i class="la la-language"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_sms_btnevent_formcontent_btntranslate");?>

                    </button>

                    <textarea name="message" class="form-control mb-3" rows="7" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_message_placeholder");?>
" zender-counter></textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_131");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_131_1");?>
"></i>
                    </label>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_135");?>
</small> <code><?php echo $_smarty_tpl->getValue('data')['spintax_sample']['main'];?>
</code>
                    </p>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_literal_spintaxdesc2"),array("<strong>".((string)$_smarty_tpl->getValue('data')['spintax_sample']['good'])."</strong>","<strong>".((string)$_smarty_tpl->getValue('data')['spintax_sample']['bad'])."</strong>"));?>
</small>
                    </p>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_shortcodes");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_143");?>
"></i>
                    </label>
                    
                    <p>
                        <code><strong>{{contact.name}}</strong>, <strong>{{contact.number}}</strong>, <strong>{{group.name}}</strong>, <strong>{{date.now}}</strong>, <strong>{{date.time}}</strong>, <strong>{{unsubscribe.command}}</strong>, <strong>{{unsubscribe.link}}</strong></code>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-telegram la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_send");?>

            </button>
        </div>
    </div>
</form><?php }
}
