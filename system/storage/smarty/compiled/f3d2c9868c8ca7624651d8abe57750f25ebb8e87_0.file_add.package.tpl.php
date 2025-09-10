<?php
/* Smarty version 5.4.0, created on 2024-12-19 11:21:47
  from 'file:dashboard/widgets/modals/add.package.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6763e5ab48e498_65534890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3d2c9868c8ca7624651d8abe57750f25ebb8e87' => 
    array (
      0 => 'dashboard/widgets/modals/add.package.tpl',
      1 => 1734540058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6763e5ab48e498_65534890 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-cube la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

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
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line19");?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packageprice");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line24");?>
"></i>
                    </label>
                    <small class="text-muted">
                        (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')(system_currency);?>
)
                    </small>
                    <input type="number" name="price" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line29");?>
" value="10">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_package_enabledservicestitle");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_package_enabledservicesdesc");?>
"></i>
                    </label>
                    <select name="services[]" class="form-control" data-live-search="true" multiple>
                        <option value="sms" selected>SMS</option>
                        <option value="whatsapp" selected>WhatsApp</option>
                        <option value="android_ussd" selected>Android USSD</option>
                        <option value="android_notifications" selected>Android Notifications</option>
                        <option value="api" selected>API Access</option>
                        <option value="webhooks" selected>Webhooks</option>
                        <option value="templates" selected>Templates</option>
                        <option value="actions" selected>Actions</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagefootermark");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line34");?>
"></i>
                    </label>
                    <select name="footermark" class="form-control">
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_enable");?>
</option>
                        <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_package_hiddenselect");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line44");?>
"></i>
                    </label>
                    <select name="hidden" class="form-control">
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_enable");?>
</option>
                        <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line53");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line58");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line58_1");?>
"></i>
                    </label>
                    <input type="number" name="send_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line60");?>
" value="0">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line65");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line65_1");?>
"></i>
                    </label>
                    <input type="number" name="receive_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line67");?>
" value="0">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line72");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line72_1");?>
"></i>
                    </label>
                    <input type="number" name="ussd_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line74");?>
" value="0">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line79");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line79_1");?>
"></i>
                    </label>
                    <input type="number" name="notification_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line81");?>
" value="0">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagedevice");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line86");?>
"></i>
                    </label>
                    <input type="number" name="device_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line88");?>
" value="0">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line92");?>
</h4>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagesend");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line97");?>
"></i>
                    </label>
                    <input type="number" name="wa_send_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line99");?>
" value="0">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagereceive");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line104");?>
"></i>
                    </label>
                    <input type="number" name="wa_receive_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line106");?>
" value="0">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line111");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line111_1");?>
"></i>
                    </label>
                    <input type="number" name="wa_account_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line113");?>
" value="0">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line117");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_package_contactslimit");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line122");?>
"></i>
                    </label>
                    <input type="number" name="contact_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line124");?>
" value="0">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line129");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line129_1");?>
"></i>
                    </label>
                    <input type="number" name="scheduled_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line131");?>
" value="0">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagekey");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line136");?>
"></i>
                    </label>
                    <input type="number" name="key_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line138");?>
" value="0">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagehook");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line143");?>
"></i>
                    </label>
                    <input type="number" name="webhook_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line145");?>
" value="0">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line150");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line150_1");?>
"></i>
                    </label>
                    <input type="number" name="action_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_pack_line152");?>
" value="0">
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
