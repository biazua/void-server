<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:09:45
  from 'file:dashboard/widgets/modals/edit.user.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678002d9923f41_71857989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a00e17d5aa3cb05b0cc15b59ee91978f018574ef' => 
    array (
      0 => 'dashboard/widgets/modals/edit.user.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678002d9923f41_71857989 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-user-cog la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

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
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line19");?>
" value="<?php echo $_smarty_tpl->getValue('data')['user']['name'];?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_emailaddress");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line24");?>
"></i>
                    </label>
                    <input type="text" name="email" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line26");?>
" value="<?php echo $_smarty_tpl->getValue('data')['user']['email'];?>
">
                </div>
                
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_changepass");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line31");?>
"></i>
                    </label>
                    <input type="text" name="password" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_password_leave");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user_settings_defthemecolortitle");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("user_settings_defthemecolortooltip");?>
"></i>
                    </label>
                    <select name="theme_color" class="form-control">
                        <option value="light" <?php if ($_smarty_tpl->getValue('data')['user']['theme_color'] == "light") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("theme_settings_defthemecolorlight");?>
</option>
                        <option value="dark" <?php if ($_smarty_tpl->getValue('data')['user']['theme_color'] == "dark") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("theme_settings_defthemecolordark");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_usertimezone");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line38");?>
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
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone')) == $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('data')['user']['timezone'])) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')($_smarty_tpl->getValue('timezone'));?>
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
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['clock_format'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_clockformatselect1");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['clock_format'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_clockformatselect2");?>
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
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_format'] < 2) {?>selected<?php }?>>MM<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
DD<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
YYYY</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_format'] == 2) {?>selected<?php }?>>DD<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
MM<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
YYYY</option>
                        <option value="3" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_format'] == 3) {?>selected<?php }?>>YYYY<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
MM<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
DD</option>
                        <option value="4" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_format'] > 3) {?>selected<?php }?>>YYYY<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
DD<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
MM</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_dateseparator");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_edituser_dateseparatorhelp");?>
"></i>
                    </label>
                    <select name="date_separator" class="form-control" data-live-search="true">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_separator'] < 2) {?>selected<?php }?>>MM-DD-YYYY</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_separator'] == 2) {?>selected<?php }?>>MM/DD/YYYY</option>
                        <option value="3" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_separator'] == 3) {?>selected<?php }?>>MM.DD.YYYY</option>
                        <option value="4" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_separator'] > 3) {?>selected<?php }?>>MM DD YYYY</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line49");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line49_1");?>
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
" <?php if ($_smarty_tpl->getVariable('country')->key == $_smarty_tpl->getValue('data')['user']['country']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country');?>
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
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line60");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line60_1");?>
"></i>
                    </label>
                    <select name="alertsound" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['user']['alertsound'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['user']['alertsound'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adduser_role");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line70");?>
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
" <?php if ($_smarty_tpl->getVariable('role')->key == $_smarty_tpl->getValue('data')['user']['role']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('role')['name'];?>
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
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line81");?>
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
" <?php if ($_smarty_tpl->getVariable('language')->key == $_smarty_tpl->getValue('data')['user']['language']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('language')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('language', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line92");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_eduse_line92_1");?>
"></i>
                    </label>
                    <select name="partner" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['user']['partner'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['user']['partner'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addusertpl_credits");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addusertpl_creditsdesc2");?>
"></i>
                    </label>
                    <input type="text" name="credits" class="form-control" placeholder="eg. 10" value="<?php echo $_smarty_tpl->getValue('data')['user']['credits'];?>
">
                </div>

                <input type="hidden" name="current_email" value="<?php echo $_smarty_tpl->getValue('data')['user']['email'];?>
">
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
