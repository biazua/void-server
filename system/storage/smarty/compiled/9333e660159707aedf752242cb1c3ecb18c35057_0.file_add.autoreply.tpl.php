<?php
/* Smarty version 5.1.0, created on 2024-05-24 10:48:59
  from 'file:dashboard/widgets/modals/add.autoreply.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6650547bde4f92_29019652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9333e660159707aedf752242cb1c3ecb18c35057' => 
    array (
      0 => 'dashboard/widgets/modals/add.autoreply.tpl',
      1 => 1713129906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6650547bde4f92_29019652 (\Smarty\Template $_smarty_tpl) {
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
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line24_1");?>
"></i>
                    </label>
                    <select name="source" class="form-control">
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line27");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line28");?>
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
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_sel1");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_sel2");?>
</option>
                        <option value="3" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_sel3");?>
</option>
                        <option value="4"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_matchtype_sel4");?>
</option>
                        <option value="5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_none");?>
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
"><?php echo $_smarty_tpl->getValue('device')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>

                        <label class="mt-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_simslot_38");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_simslot_38_desc");?>
"></i>
                        </label>
                        <select name="sim" class="form-control">
                            <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_quick49");?>
</option>
                            <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_quick50");?>
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
"><?php echo $_smarty_tpl->getValue('account')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('account', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>

                        <label class="mt-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_priority_38");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_modal_widget_priority_38_desc");?>
"></i>
                        </label>
                        <select name="priority" class="form-control">
                            <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_yes");?>
</option>
                            <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_no");?>
</option>
                        </select>

                        <label class="mt-3">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_messagetype");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_messagetypehelp");?>
"></i>
                        </label>
                        <select name="message_type" class="form-control" zender-wa-type>
                            <option value="text" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_typetext");?>
</option>
                            <option value="media"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_typemedia");?>
</option>
                            <option value="document"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_typedoc");?>
</option>
                        </select>

                        <div class="mt-3" zender-wa-type-media>
                            <label>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_mediafile");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_whatsapp_mediafilehelp38");?>
"></i>
                            </label>
                            <input type="file" name="media_file" class="form-control pb-5">
                        </div>

                        <div class="mt-3" zender-wa-type-document>
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
"></textarea>
                    </div>
                    
                    <div zender-wa-audio-hide>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_autoreply_message");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line41");?>
"></i>
                        </label>
                        <textarea name="message" class="form-control mb-3" rows="5" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_auto_line43");?>
"></textarea>

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
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
