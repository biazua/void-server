<?php
/* Smarty version 5.4.3, created on 2025-01-22 00:34:19
  from 'file:dashboard/widgets/modals/add.whatsapp.scheduled.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678fcc8bb08130_50524915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '158e06dad48383de037d9e7f163fbd0bf75a9c14' => 
    array (
      0 => 'dashboard/widgets/modals/add.whatsapp.scheduled.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678fcc8bb08130_50524915 (\Smarty\Template $_smarty_tpl) {
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
                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line19");?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_schedule_schedule");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line24");?>
"></i>
                    </label>
                    <input type="text" name="schedule" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line26");?>
" system-datepicker-schedule>
                </div>

                <div class="form-group col-md-4">
                    <label>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line79");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line79_1");?>
"></i>
                    </label>
                    <select name="account" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['accounts'], 'account');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('account')->key => $_smarty_tpl->getVariable('account')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('account');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('account')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('account')['token'];?>
"><?php echo $_smarty_tpl->getValue('account')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('account', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-5">
                    <div class="form-group">
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_numbersgroupsname");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_numbersgroupshelp");?>
"></i>
                        </label>
                        <textarea name="numbers" class="form-control" rows="3" placeholder="<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

12345678987654321@g.us
12345678987654322@g.us
"></textarea>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_groups");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line55");?>
"></i>
                    </label>
                    <select name="groups[]" class="form-control" data-live-search="true" system-select-groups multiple>
                        <option value="0" data-tokens="None <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_select_multinone");?>
" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_select_multinone");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['groups'], 'group');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->key => $_smarty_tpl->getVariable('group')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('group');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('group')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('group')['token'];?>
"><?php echo $_smarty_tpl->getValue('group')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('group', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line67");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line67_1");?>
"></i>
                    </label>
                    <select name="shortener" class="form-control">
                        <option value="0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line70");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['shorteners'], 'shortener');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shortener')->key => $_smarty_tpl->getVariable('shortener')->value) {
$foreach2DoElse = false;
$foreach2Backup = clone $_smarty_tpl->getVariable('shortener');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('shortener')->key;?>
"><?php echo $_smarty_tpl->getValue('shortener')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('shortener', $foreach2Backup);
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
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_template");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatsached_line88");?>
"></i>
                    </label>
                    <select class="form-control" data-live-search="true" system-select-template>
                        <option value="none" data-tokens="no none 0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_none");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['templates'], 'template');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('template')->key => $_smarty_tpl->getVariable('template')->value) {
$foreach3DoElse = false;
$foreach3Backup = clone $_smarty_tpl->getVariable('template');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('template')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('template')['token'];?>
" data-format="<?php echo $_smarty_tpl->getValue('template')['format'];?>
"><?php echo $_smarty_tpl->getValue('template')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('template', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>

                    <label class="mt-3">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_messagetype");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_messagetypehelp");?>
"></i>
                    </label>
                    <select name="message_type" class="form-control" system-wa-type>
                        <option value="text" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_typetext");?>
</option>
                        <option value="media"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_typemedia");?>
</option>
                        <option value="document"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_typedoc");?>
</option>
                    </select>

                    <div class="mt-3" system-wa-type-media>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_mediafile");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_mediafilehelp38");?>
"></i>
                        </label>
                        <input type="file" name="media_file" class="form-control pb-5">
                    </div>

                    <div class="mt-3" system-wa-type-document>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_docfile");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_docfilehelp");?>
"></i>
                        </label>
                        <input type="file" name="doc_file" class="form-control pb-5">
                    </div>
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

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_shortcodes");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line115");?>
"></i>
                    </label>
                    
                    <p>
                        <code><strong>{{contact.name}}</strong>, <strong>{{contact.number}}</strong>, <strong>{{group.name}}</strong>, <strong>{{date.now}}</strong>, <strong>{{date.time}}</strong></code>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatssched_line128");?>

            </button>
        </div>
    </div>
</form><?php }
}
