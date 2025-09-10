<?php
/* Smarty version 5.4.3, created on 2025-02-08 14:02:15
  from 'file:dashboard/widgets/modals/add.user.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a747c7345f98_55259688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac2b41917dac30cabcd352a2c913c8814df9f2e6' => 
    array (
      0 => 'dashboard/widgets/modals/add.user.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67a747c7345f98_55259688 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-user-plus la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line19");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_emailaddress");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line24");?>
"></i>
                    </label>
                    <input type="text" name="email" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line26");?>
">
                </div>
                
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_password");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line31");?>
"></i>
                    </label>
                    <input type="text" name="password" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_password");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user_settings_defthemecolortitle");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user_settings_defthemecolortooltip");?>
"></i>
                    </label>
                    <select name="theme_color" class="form-control">
                        <option value="light" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("theme_settings_defthemecolorlight");?>
</option>
                        <option value="dark"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("theme_settings_defthemecolordark");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_usertimezone");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line38");?>
"></i>
                    </label>
                    <select name="timezone" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['timezones'], 'timezone');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('timezone')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone'));?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')($_smarty_tpl->getValue('timezone'));?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_clockformat");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_clockformathelp");?>
"></i>
                    </label>
                    <select name="clock_format" class="form-control" data-live-search="true">
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_clockformatselect1");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_clockformatselect2");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_dateformat");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_dateformathelp");?>
"></i>
                    </label>
                    <select name="date_format" class="form-control" data-live-search="true">
                        <option value="1" selected>MM-DD-YYYY</option>
                        <option value="2">DD-MM-YYYY</option>
                        <option value="3">YYYY-MM-DD</option>
                        <option value="4">YYYY-DD-MM</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_dateseparator");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_dateseparatorhelp");?>
"></i>
                    </label>
                    <select name="date_separator" class="form-control" data-live-search="true">
                        <option value="1" selected>MM-DD-YYYY</option>
                        <option value="2">MM/DD/YYYY</option>
                        <option value="3">MM.DD.YYYY</option>
                        <option value="4">MM DD YYYY</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line49");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line49_1");?>
"></i>
                    </label>
                    <select name="country" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('country');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('country')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('country'));?>
"><?php echo $_smarty_tpl->getValue('country');?>
 (<?php echo $_smarty_tpl->getVariable('country')->key;?>
)</option>
                        <?php
$_smarty_tpl->setVariable('country', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line60");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line60_1");?>
"></i>
                    </label>
                    <select name="alertsound" class="form-control">
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adduser_role");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line70");?>
"></i>
                    </label>
                    <select name="role" class="form-control">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['roles'], 'role');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('role')->key => $_smarty_tpl->getVariable('role')->value) {
$foreach2DoElse = false;
$foreach2Backup = clone $_smarty_tpl->getVariable('role');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('role')->key;?>
"><?php echo $_smarty_tpl->getValue('role')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('role', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_language");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line81");?>
"></i>
                    </label>
                    <select name="language" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['languages'], 'language');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->key => $_smarty_tpl->getVariable('language')->value) {
$foreach3DoElse = false;
$foreach3Backup = clone $_smarty_tpl->getVariable('language');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('language')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('language')['token'];?>
"><?php echo $_smarty_tpl->getValue('language')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('language', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line92");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_user_line92_1");?>
"></i>
                    </label>
                    <select name="partner" class="form-control">
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addusertpl_credits");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addusertpl_creditsdesc");?>
"></i>
                    </label>
                    <input type="text" name="credits" class="form-control" placeholder="eg. 10">
                </div>
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
