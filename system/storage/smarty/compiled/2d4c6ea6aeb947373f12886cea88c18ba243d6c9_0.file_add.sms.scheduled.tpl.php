<?php
/* Smarty version 5.4.3, created on 2025-02-11 10:09:04
  from 'file:dashboard/widgets/modals/add.sms.scheduled.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ab13b0cdd864_15916133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4c6ea6aeb947373f12886cea88c18ba243d6c9' => 
    array (
      0 => 'dashboard/widgets/modals/add.sms.scheduled.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ab13b0cdd864_15916133 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-calendar la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line19");?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_schedule_schedule");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line24");?>
"></i>
                    </label>
                    <input type="text" name="schedule" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line26");?>
" system-datepicker-schedule>
                </div>

                <div class="form-group col-md-4">
                    <div system-device-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_device");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line110");?>
"></i>
                        </label>
                        <select name="device" class="form-control" data-live-search="true">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devices'], 'device');
$_smarty_tpl->getVariable('device')->index = -1;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('device')->index++;
$foreach0Backup = clone $_smarty_tpl->getVariable('device');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" data-content="<?php echo $_smarty_tpl->getValue('device')['name'];?>
 <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_status_offline");
}?></span>" <?php if ($_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div system-credits-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line121");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line121_1");?>
"></i>
                        </label>
                        <select name="gateway" class="form-control" data-live-search="true">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['gateways'], 'gateway');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gateway')->value) {
$foreach1DoElse = false;
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
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('device')->index++;
$foreach2Backup = clone $_smarty_tpl->getVariable('device');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" data-content="<i class='flag-icon flag-icon flag-icon-<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('device')['country']);?>
'></i> <?php echo $_smarty_tpl->getValue('device')['name'];?>
 <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_status_offline");
}?></span> <span class='badge badge-primary'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_smsall_globalstatus");?>
</span> (<?php echo $_smarty_tpl->getValue('device')['rate'];?>
 PHP)" <?php if (( !true || empty($_smarty_tpl->getValue('data')['gateways'])) && $_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_smsall_globalstatus");?>
)</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <div class="form-group">
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_schedule_numbers");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line42");?>
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
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_groups");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line55");?>
"></i>
                    </label>
                    <select name="groups[]" class="form-control" data-live-search="true" system-select-groups multiple>
                        <option value="0" data-tokens="None <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_select_multinone");?>
" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_select_multinone");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['groups'], 'group');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->key => $_smarty_tpl->getVariable('group')->value) {
$foreach3DoElse = false;
$foreach3Backup = clone $_smarty_tpl->getVariable('group');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('group')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('group')['token'];?>
"><?php echo $_smarty_tpl->getValue('group')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('group', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line67");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line67_1");?>
"></i>
                    </label>
                    <select name="shortener" class="form-control">
                        <option value="0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line70");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['shorteners'], 'shortener');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shortener')->key => $_smarty_tpl->getVariable('shortener')->value) {
$foreach4DoElse = false;
$foreach4Backup = clone $_smarty_tpl->getVariable('shortener');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('shortener')->key;?>
"><?php echo $_smarty_tpl->getValue('shortener')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('shortener', $foreach4Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_repeatdays_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_repeatdays_tagline");?>
"></i>
                    </label>
                    <input type="number" name="repeat" class="form-control" placeholder="ex. 7" value="0">

                    <label class="mt-3">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line79");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line79_1");?>
"></i>
                    </label>
                    <select name="mode" class="form-control" system-select-mode>
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line82");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line83");?>
</option>
                    </select>

                    <div class="mt-3" system-device-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_sim");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line88");?>
"></i>
                        </label>
                        <select name="sim" class="form-control">
                            <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line91");?>
</option>
                            <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line92");?>
</option>
                        </select>
                    </div>

                    <label class="mt-3">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_template");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_line97");?>
"></i>
                    </label>
                    <select class="form-control" data-live-search="true" system-select-template>
                        <option value="none" data-tokens="no none 0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_none");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['templates'], 'template');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('template')->key => $_smarty_tpl->getVariable('template')->value) {
$foreach5DoElse = false;
$foreach5Backup = clone $_smarty_tpl->getVariable('template');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('template')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('template')['token'];?>
" data-format="<?php echo $_smarty_tpl->getValue('template')['format'];?>
"><?php echo $_smarty_tpl->getValue('template')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('template', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_message");?>
 <span class="badge text-white bg-primary" system-counter-view></span>
                    </label>

                    <button class="btn btn-primary btn-sm" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatquick_50");?>
" system-action="translate">
                        <i class="la la-language"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("sms_btnevent_formcontent_btntranslate");?>

                    </button>

                    <textarea name="message" class="form-control mb-3" rows="7" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_message_placeholder");?>
" system-counter></textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_bulk_131");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_bulk_131_1");?>
"></i>
                    </label>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_bulk_135");?>
</small> <code>Tom is a <strong>{good|bad}</strong> cat</code>
                    </p>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("form_literal_spintaxdesc2"),array("<strong>good</strong>","<strong>bad</strong>"));?>
</small>
                    </p>

                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_shortcodes");?>
</label>
                    
                    <p>
                        <code><strong>{{contact.name}}</strong>, <strong>{{contact.number}}</strong>, <strong>{{group.name}}</strong>, <strong>{{date.now}}</strong>, <strong>{{date.time}}</strong></code>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-clock la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_smsschedule_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
