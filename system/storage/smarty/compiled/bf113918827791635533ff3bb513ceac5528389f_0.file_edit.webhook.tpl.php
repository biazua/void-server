<?php
/* Smarty version 5.1.0, created on 2024-05-24 10:59:04
  from 'file:dashboard/widgets/modals/edit.webhook.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665056d8a15788_95381687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf113918827791635533ff3bb513ceac5528389f' => 
    array (
      0 => 'dashboard/widgets/modals/edit.webhook.tpl',
      1 => 1714695698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665056d8a15788_95381687 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edweb_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_webhookname_placeholder");?>
" value="<?php echo $_smarty_tpl->getValue('data')['webhook']['name'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edweb_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edweb_line24_1");?>
"></i>
                    </label>
                    <select name="events[]" class="form-control" multiple>
                        <option value="sms" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("sms",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['webhook']['events'],","))) {?>selected<?php }?>>SMS</option>
                        <option value="whatsapp" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['webhook']['events'],","))) {?>selected<?php }?>>WhatsApp</option>
                        <option value="ussd" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("ussd",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['webhook']['events'],","))) {?>selected<?php }?>>USSD</option>
                        <option value="notifications" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("notifications",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['webhook']['events'],","))) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edweb_line30");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_webhookurl");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edweb_line36");?>
"></i>
                    </label>
                    <input type="text" name="url" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edweb_line38");?>
" value="<?php echo $_smarty_tpl->getValue('data')['webhook']['url'];?>
">
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
