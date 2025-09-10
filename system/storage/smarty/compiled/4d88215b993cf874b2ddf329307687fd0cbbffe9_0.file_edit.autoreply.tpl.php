<?php
/* Smarty version 5.1.0, created on 2024-05-24 10:59:58
  from 'file:dashboard/widgets/modals/edit.autoreply.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6650570ec2e0c4_98264842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d88215b993cf874b2ddf329307687fd0cbbffe9' => 
    array (
      0 => 'dashboard/widgets/modals/edit.autoreply.tpl',
      1 => 1710215332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6650570ec2e0c4_98264842 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-reply la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_hook_line19");?>
" value="<?php echo $_smarty_tpl->getValue('data')['autoreply']['name'];?>
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line24_1");?>
"></i>
                    </label>
                    <select name="source" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['autoreply']['source'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line27");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['autoreply']['source'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line28");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_desc");?>
"></i>
                    </label>
                    <select name="match" class="form-control" zender-autoreply-type>
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['autoreply']['match'] == 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_sel1");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['autoreply']['match'] == 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_sel2");?>
</option>
                        <option value="3" <?php if ($_smarty_tpl->getValue('data')['autoreply']['match'] == 3) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_sel3");?>
</option>
                        <option value="4" <?php if ($_smarty_tpl->getValue('data')['autoreply']['match'] == 4) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_sel4");?>
</option>
                        <option value="5" <?php if ($_smarty_tpl->getValue('data')['autoreply']['match'] > 4) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_none");?>
</option>
                    </select>
                </div>

                <div class="form-group col-4">
                    <div zender-autoreply-device>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_device");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_devicedesc_38");?>
"></i>
                        </label>
                        <select name="device" class="form-control" data-live-search="true">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devices'], 'device');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('device');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" <?php if ($_smarty_tpl->getValue('data')['autoreply']['device'] == $_smarty_tpl->getVariable('device')->key) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>

                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_simslot_38");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_simslot_38_desc");?>
"></i>
                        </label>
                        <select name="sim" class="form-control">
                            <option value="1" <?php if ($_smarty_tpl->getValue('data')['autoreply']['sim'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_quick49");?>
</option>
                            <option value="2" <?php if ($_smarty_tpl->getValue('data')['autoreply']['sim'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_quick50");?>
</option>
                        </select>
                    </div>

                    <div zender-autoreply-whatsapp>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_whatquick_36");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_waaccount_38_desc");?>
"></i>
                        </label>
                        <select name="account" class="form-control" data-live-search="true" zender-wa-account-select>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['accounts'], 'account');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('account')->key => $_smarty_tpl->getVariable('account')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('account');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('account')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('account')['token'];?>
" <?php if ($_smarty_tpl->getValue('data')['autoreply']['account'] == $_smarty_tpl->getVariable('account')->key) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('account')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('account', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>

                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_priority_38");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_priority_38_desc");?>
"></i>
                        </label>
                        <select name="priority" class="form-control">
                            <option value="1" <?php if ($_smarty_tpl->getValue('data')['autoreply']['priority'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_yes");?>
</option>
                            <option value="2" <?php if ($_smarty_tpl->getValue('data')['autoreply']['priority'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_no");?>
</option>
                        </select>

                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_messagetype");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_messagetypehelp");?>
"></i>
                        </label>
                        <select name="message_type" class="form-control" zender-wa-type>
                            <option value="text" <?php if ($_smarty_tpl->getValue('data')['wa_meta']['type'] == "text") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_typetext");?>
</option>
                            <option value="media" <?php if ($_smarty_tpl->getValue('data')['wa_meta']['type'] == "media") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_typemedia");?>
</option>
                            <option value="document" <?php if ($_smarty_tpl->getValue('data')['wa_meta']['type'] == "document") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_typedoc");?>
</option>
                        </select>

                        <div zender-wa-type-media>
                            <label>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_mediafile");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_mediafilehelp38");?>
"></i>
                            </label>
                            <input type="file" name="media_file" class="form-control pb-5">
                        </div>

                        <div zender-wa-type-document>
                            <label>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_docfile");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_docfilehelp");?>
"></i>
                            </label>
                            <input type="file" name="doc_file" class="form-control pb-5">
                        </div>
                    </div>
                </div>

                <div class="form-group col-8">
                    <div zender-autoreply-triggers>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_trigger_38");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_trigger_38_desc");?>
"></i>
                        </label>
                        <textarea name="keywords" class="form-control mb-3" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line36");?>
"><?php echo $_smarty_tpl->getValue('data')['autoreply']['keywords'];?>
</textarea>
                    </div>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_message");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line41");?>
"></i>
                    </label>
                    <textarea name="message" class="form-control mb-3" rows="5" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line43");?>
"><?php echo $_smarty_tpl->getValue('data')['message'];?>
</textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_shortcodes");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line48");?>
"></i>
                    </label>
                    
                    <p>
                        <code>
                            <strong>{{phone}}</strong>, <strong>{{message}}</strong>, <strong>{{date.now}}</strong>, <strong>{{date.time}}</strong>
                        </code>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
