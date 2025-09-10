<?php
/* Smarty version 5.4.3, created on 2025-02-08 14:06:23
  from 'file:dashboard/widgets/modals/add.apikey.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a748bf6a3447_10580528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68efb207f18f878e20c89fca267edaf8145e0ae5' => 
    array (
      0 => 'dashboard/widgets/modals/add.apikey.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67a748bf6a3447_10580528 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
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
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_api_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_api_line19");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_permissions");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_api_line24");?>
"></i>
                    </label>
                    <select name="permissions[]" class="form-control" data-live-search="true" multiple>
                        <option value="otp">otp</option>
                        <option value="sms_send" selected>sms_send</option>
                        <option value="sms_send_bulk">sms_send_bulk</option>
                        <option value="wa_send" selected>wa_send</option>
                        <option value="wa_send_bulk">wa_send_bulk</option>
                        <option value="ussd">ussd</option>
                        <option value="validate_wa_phone">validate_wa_phone</option>
                        <option value="get_credits">get_credits</option>
                        <option value="get_earnings">get_earnings</option>
                        <option value="get_subscription">get_subscription</option>
                        <option value="get_sms_pending">get_sms_pending</option>
                        <option value="get_wa_pending">get_wa_pending</option>
                        <option value="get_sms_received">get_sms_received</option>
                        <option value="get_wa_received">get_wa_received</option>
                        <option value="get_sms_sent">get_sms_sent</option>
                        <option value="get_sms_campaigns">get_sms_campaigns</option>
                        <option value="get_wa_sent">get_wa_sent</option>
                        <option value="get_wa_campaigns">get_wa_campaigns</option>
                        <option value="get_contacts" selected>get_contacts</option>
                        <option value="get_groups">get_groups</option>
                        <option value="get_ussd">get_ussd</option>
                        <option value="get_notifications">get_notifications</option>
                        <option value="get_wa_accounts">get_wa_accounts</option>
                        <option value="get_wa_groups" selected>get_wa_groups</option>
                        <option value="get_devices" selected>get_devices</option>
                        <option value="get_rates">get_rates</option>
                        <option value="get_shorteners">get_shorteners</option>
                        <option value="get_unsubscribed">get_unsubscribed</option>
                        <option value="create_whatsapp">create_whatsapp</option>
                        <option value="create_contact">create_contact</option>
                        <option value="create_group">create_group</option>
                        <option value="start_sms_campaign">start_sms_campaign</option>
                        <option value="stop_sms_campaign">stop_sms_campaign</option>
                        <option value="start_wa_campaign">start_wa_campaign</option>
                        <option value="stop_wa_campaign">stop_wa_campaign</option>
                        <option value="delete_contact">delete_contact</option>
                        <option value="delete_group">delete_group</option>
                        <option value="delete_sms_sent">delete_sms_sent</option>
                        <option value="delete_sms_campaign">delete_sms_campaign</option>
                        <option value="delete_wa_account">delete_wa_account</option>
                        <option value="delete_wa_sent">delete_wa_sent</option>
                        <option value="delete_wa_campaign">delete_wa_campaign</option>
                        <option value="delete_sms_received">delete_sms_received</option>
                        <option value="delete_wa_received">delete_wa_received</option>
                        <option value="delete_ussd">delete_ussd</option>
                        <option value="delete_unsubscribed">delete_unsubscribed</option>
                        <option value="delete_notification">delete_notification</option>
                    </select>
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
