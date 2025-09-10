<?php
/* Smarty version 5.4.3, created on 2025-02-08 14:13:21
  from 'file:dashboard/widgets/modals/edit.device.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a74a61635986_86264035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c80130a33836562fce8d3722b39b201404f7555f' => 
    array (
      0 => 'dashboard/widgets/modals/edit.device.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67a74a61635986_86264035 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-android la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line16");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_editdevice_devicename");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line21");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line23");?>
" value="<?php echo $_smarty_tpl->getValue('data')['device']['name'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_editdevice_receiveoptiontitle");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_editdevice_receiveoptiondesc");?>
"></i>
                    </label>
                    <select name="receive_sms" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['device']['receive_sms'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['device']['receive_sms'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>
                
                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_editdevice_randomsend");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line28");?>
"></i>
                    </label>
                    <select name="random_send" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['device']['random_send'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['device']['random_send'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_editdevice_randommin");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line38");?>
"></i>
                    </label>

                    <input type="number" name="random_min" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line41");?>
" value="<?php echo $_smarty_tpl->getValue('data')['device']['random_min'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_editdevice_randommax");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line46");?>
"></i>
                    </label>
                    <input type="number" name="random_max" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line49");?>
" value="<?php echo $_smarty_tpl->getValue('data')['device']['random_max'];?>
">
                </div>

                <div class="form-group col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_sendinglimittitle");?>
</h4>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_limitstatus");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_limitstatushelp");?>
"></i>
                    </label>
                    <select name="limit_status" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['device']['limit_status'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['device']['limit_status'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_limitinterv");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_limitintervhelp");?>
"></i>
                    </label>
                    <select name="limit_interval" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['device']['limit_interval'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_limitintervselect1");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['device']['limit_interval'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_limitintervselect2");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_messagecount");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_messagecounthelp");?>
"></i>
                    </label>
                    <input type="number" name="limit_number" class="form-control" placeholder="eg. 100" value="<?php echo $_smarty_tpl->getValue('data')['device']['limit_number'];?>
">
                </div>

                <div class="form-group col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line53");?>
</h4>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line58");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line58_1");?>
"></i>
                    </label>
                    <textarea name="packages" class="form-control" placeholder="com.facebook.orca&#10;com.facebook.katana&#10;com.instagram.android" rows="5"><?php echo $_smarty_tpl->getValue('data')['device']['packages'];?>
</textarea>
                </div>

                <?php if ($_smarty_tpl->getValue('data')['partner'] < 2) {?>
                <div class="form-group col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line65");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_editdevice_partnerstatus");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line78_1");?>
"></i>
                    </label>
                    <select name="global_device" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['device']['global_device'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['device']['global_device'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line89");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line89_1");?>
"></i>
                    </label>
                    <select name="country" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('country');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('country')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getVariable('country')->key;?>
 <?php echo $_smarty_tpl->getValue('country');?>
" <?php if ($_smarty_tpl->getVariable('country')->key == $_smarty_tpl->getValue('data')['device']['country']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country');?>
</option>
                        <?php
$_smarty_tpl->setVariable('country', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line70");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line70_1_new");?>
"></i>
                    </label>
                    <input type="text" name="rate" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line73");?>
" value="<?php echo $_smarty_tpl->getValue('data')['device']['rate'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line101");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line101_1");?>
"></i>
                    </label>
                    <select name="global_priority" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['device']['global_priority'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['device']['global_priority'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line112");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_dev_line112_1");?>
"></i>
                    </label>
                    <select name="global_slots[]" class="form-control" multiple>
                        <option value="1" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')(1,$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['device']['global_slots'],","))) {?>selected<?php }?>>SIM 1</option>
                        <option value="2" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')(2,$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['device']['global_slots'],","))) {?>selected<?php }?>>SIM 2</option>
                    </select>
                </div>
                <?php }?>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
