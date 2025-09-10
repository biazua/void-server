<?php
/* Smarty version 5.4.3, created on 2025-01-19 07:38:42
  from 'file:dashboard/widgets/modals/admin.settings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678c8fe285aeb4_99003750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ed93503c1c64379c8321d31034383d04a8d08dc' => 
    array (
      0 => 'dashboard/widgets/modals/admin.settings.tpl',
      1 => 1736490097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678c8fe285aeb4_99003750 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-cog la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsite");?>
</h2>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssitename");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line21");?>
"></i>
                    </label>
                    <input type="text" name="site_name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line23");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['site_name'];?>
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssitedesc");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line28");?>
"></i>
                    </label>
                    <input type="text" name="site_desc" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line30");?>
"  value="<?php echo $_smarty_tpl->getValue('data')['system']['site_desc'];?>
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingspcode");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line35");?>
"></i>
                    </label>
                    <input type="text" name="purchase_code" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line37");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['purchase_code'];?>
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsanalytics");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line42");?>
"></i>
                    </label>
                    <input type="text" name="analytics_key" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line44");?>
" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_analytics_key");?>
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsprotocol");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line49");?>
"></i>
                    </label>
                    <select name="protocol" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['protocol'] < 2) {?>selected<?php }?>>HTTP</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['protocol'] > 1) {?>selected<?php }?>>HTTPS</option>  
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsdeflang");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line59");?>
"></i>
                    </label>
                    <select name="default_lang" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['languages'], 'language');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->key => $_smarty_tpl->getVariable('language')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('language');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('language')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('language')['token'];?>
" <?php if ($_smarty_tpl->getValue('data')['system']['default_lang'] == $_smarty_tpl->getVariable('language')->key) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('language')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('language', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line80");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line80_1");?>
"></i>
                    </label>
                    <select name="reset_mode" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['reset_mode'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line83");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['reset_mode'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line84");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line90");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line90_1");?>
"></i>
                    </label>
                    <select name="freemodel" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['freemodel'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['freemodel'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>  
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line127");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line127_1");?>
"></i>
                    </label>
                    <select name="admin_api[]" class="form-control" data-live-search="true" system-select-adminapi multiple>
                        <option value="0" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("0",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                        <option value="get_users" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("get_users",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>get_users</option>
                        <option value="get_roles" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("get_roles",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>get_roles</option>
                        <option value="get_packages" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("get_packages",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>get_packages</option>
                        <option value="get_vouchers" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("get_vouchers",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>get_vouchers</option>
                        <option value="get_subscriptions" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("get_subscriptions",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>get_subscriptions</option>
                        <option value="get_transactions" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("get_transactions",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>get_transactions</option>
                        <option value="get_languages" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("get_languages",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>get_languages</option>
                        <option value="create_user" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("create_user",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>create_user</option>
                        <option value="create_apikey" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("create_apikey",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>create_apikey</option>
                        <option value="create_role" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("create_role",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>create_role</option>
                        <option value="create_package" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("create_package",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>create_package</option>
                        <option value="create_voucher" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("create_voucher",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>create_voucher</option>
                        <option value="create_subscription" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("create_subscription",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>create_subscription</option>
                        <option value="edit_user" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("edit_user",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>edit_user</option>
                        <option value="edit_role" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("edit_role",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>edit_role</option>
                        <option value="edit_package" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("edit_package",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>edit_package</option>
                        <option value="delete_user" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("delete_user",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>delete_user</option>
                        <option value="delete_role" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("delete_role",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>delete_role</option>
                        <option value="delete_package" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("delete_package",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>delete_package</option>
                        <option value="delete_voucher" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("delete_voucher",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>delete_voucher</option>
                        <option value="delete_subscription" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("delete_subscription",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>delete_subscription</option>
                        <option value="delete_transaction" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("delete_transaction",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>delete_transaction</option>
                        <option value="redeem_voucher" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("redeem_voucher",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>redeem_voucher</option>
                        <option value="clear_cache" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("clear_cache",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_api"),","))) {?>selected<?php }?>>clear_cache</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_adminsettings_garbageretentitle");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_adminsettings_garbageretentitle_desc");?>
"></i>
                    </label>
                    <input type="number" name="garbage_retention" class="form-control" min="1" placeholder="eg. 10" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_garbage_retention");?>
">
                </div>

                <div class="form-group col-md-2">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line110");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line110_1");?>
"></i>
                    </label>
                    <select name="livechat" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['livechat'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['livechat'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settings_tawkchatlink");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line120");?>
"></i>
                    </label>
                    <input type="text" name="tawk_id" class="form-control" placeholder="eg. https://tawk.to/chat/5ead66fc10362a7578be7856/1f7tsdspq" value="<?php echo $_smarty_tpl->getValue('data')['system']['tawk_id'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <h4 class="text-uppercase">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("system_settings_adminapitoken_title");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("system_settings_adminapitoken_desc");?>
"></i>
                        <button type="button" class="btn btn-danger btn-sm" system-action="regenerate_admintoken"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line160");?>
</button>
                    </h4>
                    <code>
                        <p admin-api-token><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_admin_token");?>
</p>
                    </code>
                </div>

                <div class="form-group col-md-6">
                    <h4 class="text-uppercase">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_token");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("system_settings_systokenregen_desc");?>
"></i>
                        <button type="button" class="btn btn-danger btn-sm" system-action="regenerate_systoken"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line160");?>
</button>
                    </h4>
                    <code>
                        <p sys-token><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_token");?>
</p>
                    </code>
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsmailing");?>
</h2>
                </div>

                <div class="form-group col-md-2">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsmailfunc");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line173");?>
"></i>
                    </label>
                    <select name="mail_function" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['mail_function'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_native");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['mail_function'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_remotesmtp");?>
</option> 
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtpsecure");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line183");?>
"></i>
                    </label>
                    <select name="smtp_secure" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['smtp_secure'] < 2) {?>selected<?php }?>>TLS</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['smtp_secure'] > 1) {?>selected<?php }?>>SSL</option> 
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssitemail");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line193");?>
"></i>
                    </label>
                    <input type="text" name="site_mail" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line195");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['site_mail'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtphost");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line200");?>
"></i>
                    </label>
                    <small class="text-muted">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtp_small");?>

                    </small>
                    <input type="text" name="smtp_host" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line205");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['smtp_host'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtpport");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line210");?>
"></i>
                    </label>
                    <small class="text-muted">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtp_small");?>

                    </small>
                    <input type="text" name="smtp_port" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line215");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['smtp_port'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtpusername");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line220");?>
"></i>
                    </label>
                    <small class="text-muted">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtp_small");?>

                    </small>
                    <input type="text" name="smtp_username" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line225");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['smtp_username'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtppassword");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line230");?>
"></i>
                    </label>
                    <small class="text-muted">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssmtp_small");?>

                    </small>
                    <input type="password" name="smtp_password" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line235");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['smtp_password'];?>
">
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingspayments");?>
</h2>
                </div>

                <div class="form-group col-md-6 mb-0">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("widgets_viewbank_titlenew");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_adminsettings_offlinepaymenttooltipnew");?>
"></i>
                    </label>
                    <select name="offline_payment" class="form-control mb-4">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['offline_payment'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['offline_payment'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option> 
                    </select>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_adminsettings_systemcurrencynew");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_adminsettings_systemcurrencytooltipnew");?>
"></i>
                    </label>
                    <select name="currency" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['currencies'], 'currency');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('currency')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('currency');?>
" data-tokens="<?php echo $_smarty_tpl->getValue('currency');?>
" <?php if ($_smarty_tpl->getValue('data')['system']['currency'] == $_smarty_tpl->getValue('currency')) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('currency');?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-6 mb-0">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_adminsettings_banktransfer1new");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_adminsettings_banktransfer2new");?>
"></i>
                    </label>
                    <textarea name="bank_template" class="form-control mb-3" rows="10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_bank_template");?>
</textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_shortcodes");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modal_adminsettings_banktransfer3new");?>
"></i>
                    </label>
                    
                    <p>
                        <code><strong>{{user.name}}</strong>, <strong>{{user.email}}</strong>, <strong>{{user.country}}</strong>, <strong>{{order.price}}</strong></code>
                    </p>
                    
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssocialtitle");?>
</h2>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssocial");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line336");?>
"></i>
                    </label>
                    <select name="social_auth" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_social_auth") < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_social_auth") > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option> 
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssocialplatforms");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line346");?>
"></i>
                    </label>
                    <select name="social_platforms[]" class="form-control" multiple>
                        <option value="facebook" <?php if ($_smarty_tpl->getValue('data')['platforms']['facebook']) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line349");?>
</option>
                        <option value="google" <?php if ($_smarty_tpl->getValue('data')['platforms']['google']) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line350");?>
</option> 
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line357");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line357_1");?>
"></i>
                    </label>
                    <input type="text" name="facebook_id" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line359");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['facebook_id'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line364");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang-and_settings_line364_1");?>
"></i>
                    </label>
                    <input type="text" name="facebook_secret" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line366");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['facebook_secret'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line371");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line371_1");?>
"></i>
                    </label>
                    <input type="text" name="google_id" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line373");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['google_id'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line378");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang-and_settings_line378_1");?>
"></i>
                    </label>
                    <input type="text" name="google_secret" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line380");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['google_secret'];?>
">
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingssecurity");?>
</h2>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_authredi");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_authredidesc");?>
"></i>
                    </label>
                    <select name="auth_redirect" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['auth_redirect'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_authredihomepage");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['auth_redirect'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_authredidashboard");?>
</option>  
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_systemsettingshomepage");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line100");?>
"></i>
                    </label>
                    <select name="homepage" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['homepage'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['homepage'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>  
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsreg");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line70");?>
"></i>
                    </label>
                    <select name="registrations" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['registrations'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['registrations'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>  
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_defaultcoun");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_defaultcoundesc");?>
"></i>
                    </label>
                    <select name="default_country" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach2DoElse = false;
$foreach2Backup = clone $_smarty_tpl->getVariable('country');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('country')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('country'));?>
" <?php if ($_smarty_tpl->getVariable('country')->key == $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_default_country")) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country');?>
 (<?php echo $_smarty_tpl->getVariable('country')->key;?>
)</option>
                        <?php
$_smarty_tpl->setVariable('country', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_defaulttimezo");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_defaulttimezodesc");?>
"></i>
                    </label>
                    <select name="default_timezone" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['timezones'], 'timezone');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('timezone')->value) {
$foreach3DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone'));?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone')) == $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_default_timezone")) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')($_smarty_tpl->getValue('timezone'));?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_mailingtrig");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_mailingtrigdesc");?>
"></i>
                    </label>
                    <select name="mailing_triggers[]" class="form-control" data-live-search="true" system-select-mailing multiple>
                        <option value="0" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("0",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                        <option value="register_confirm" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("register_confirm",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>register_confirm</option>
                        <option value="admin_new_user" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("admin_new_user",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>admin_new_user</option>  
                        <option value="admin_new_device" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("admin_new_device",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>admin_new_device</option>  
                        <option value="admin_new_whatsapp" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("admin_new_whatsapp",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>admin_new_whatsapp</option>  
                        <option value="admin_package_buy" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("admin_package_buy",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>admin_package_buy</option>  
                        <option value="admin_credits_buy" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("admin_credits_buy",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>admin_credits_buy</option>  
                        <option value="admin_voucher_redeem" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("admin_voucher_redeem",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>admin_voucher_redeem</option>  
                        <option value="admin_payout_request" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("admin_payout_request",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>admin_payout_request</option>  
                        <option value="admin_build_gateway" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("admin_build_gateway",$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_mailing_triggers"),","))) {?>selected<?php }?>>admin_build_gateway</option>  
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_adminemail");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_adminemaildesc");?>
"></i>
                    </label>
                    <input type="text" name="mailing_address" class="form-control" placeholder="admin@email.com" value="<?php echo $_smarty_tpl->getValue('data')['system']['mailing_address'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_recaptchatitle");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_adminsettings_recaptchadesc");?>
"></i>
                    </label>
                    <select name="recaptcha" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['recaptcha'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['recaptcha'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>  
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsrecaptchakey");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line413");?>
"></i>
                    </label>
                    <input type="text" name="recaptcha_key" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line415");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['recaptcha_key'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsrecaptchasecret");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line420");?>
"></i>
                    </label>
                    <input type="text" name="recaptcha_secret" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line422");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['recaptcha_secret'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("system_settings_aimod_title");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("system_settings_aimod_desc");?>
"></i>
                    </label>
                    <select name="ai_moderation" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['system']['ai_moderation'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['system']['ai_moderation'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>  
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("system_settings_aimod_apikey_title");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("system_settings_aimod_apikey_desc");?>
"></i>
                    </label>
                    <input type="text" name="openai_apikey" class="form-control" placeholder="eg. sk-proj-DOSWJC4GeNM5VcLcJILhyObypIrBvRdTChHq-2dJoo0A6fiaE2y4EF-Q0du_fRmsg2LUzz0vJ2T3BlbkFJ1l_KzyTIHwvWaQD8rUxTNydG4M4L" value="<?php echo $_smarty_tpl->getValue('data')['system']['openai_apikey'];?>
">
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_systemsettings_messagestitle");?>
</h2>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsmessagemin");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line293");?>
"></i>
                    </label>
                    <input type="number" name="message_min" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line295");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['message_min'];?>
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsmessagemax");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line300");?>
"></i>
                    </label>
                    <input type="number" name="message_max" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line302");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['message_max'];?>
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_systemsettings_partnercommission");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_systemsettings_partnercommissionhelp");?>
"></i>
                    </label>
                    <input type="number" name="partner_commission" class="form-control" placeholder="eg. 3" value="<?php echo $_smarty_tpl->getValue('data')['system']['partner_commission'];?>
">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_systemsettings_partnerminimum");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_systemsettings_partnerminimumhelp");?>
"></i>
                    </label>
                    <input type="number" name="partner_minimum" class="form-control" placeholder="eg. 100" value="<?php echo $_smarty_tpl->getValue('data')['system']['partner_minimum'];?>
">
                </div>

                <div class="form-group col-md-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_settingsmessagemark");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line307");?>
"></i>
                    </label>
                    <input type="text" name="message_mark" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_settings_line309");?>
" value="<?php echo $_smarty_tpl->getValue('data')['system']['message_mark'];?>
">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_save");?>

            </button>
        </div>
    </div>
</form><?php }
}
