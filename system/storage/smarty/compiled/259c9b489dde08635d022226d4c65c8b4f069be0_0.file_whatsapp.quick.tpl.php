<?php
/* Smarty version 5.4.3, created on 2025-01-17 01:56:57
  from 'file:dashboard/widgets/modals/whatsapp.quick.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894869e1c507_78959363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '259c9b489dde08635d022226d4c65c8b4f069be0' => 
    array (
      0 => 'dashboard/widgets/modals/whatsapp.quick.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67894869e1c507_78959363 (\Smarty\Template $_smarty_tpl) {
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
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_phonegroupsname");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_phonegroupshelp");?>
"></i>
                    </label>
                    <input type="text" name="phone" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getValue('data')['phone'];?>
" system-whatsapp-autocomplete>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatquick_36");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatquick_36_1");?>
"></i>
                    </label>
                    <select name="account" class="form-control" data-live-search="true" system-wa-account-select>
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

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatquick_24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatquick_24_1");?>
"></i>
                    </label>
                    <select name="shortener" class="form-control">
                        <option value="0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatquick_27");?>
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
 
                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_message");?>
 <span class="badge text-white bg-primary" system-counter-view></span>
                    </label>
                    
                    <button class="btn btn-primary btn-sm" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatsbulk_79");?>
" system-action="translate">
                        <i class="la la-language"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("sms_btnevent_formcontent_btntranslate");?>

                    </button>
                    
                    <textarea id="text-counter" name="message" class="form-control mb-3" rows="5" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_message_placeholder");?>
" system-counter></textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatquick_55");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatquick_55_1");?>
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

                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <label>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_waquicksend_prioritylabel");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_waquicksend_priorityhelp");?>
"></i>
                            </label>
                            <select name="priority" class="form-control">
                                <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_yes");?>
</option>
                                <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_no");?>
</option>
                            </select>
                        </div>

                        <div class="col-md-7">
                            <label>
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
                        </div>
                    </div>

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
