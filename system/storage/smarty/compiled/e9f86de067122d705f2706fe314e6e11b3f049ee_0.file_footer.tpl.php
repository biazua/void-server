<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:01:04
  from 'file:dashboard/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678000d049a495_77921601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f86de067122d705f2706fe314e6e11b3f049ee' => 
    array (
      0 => 'dashboard/footer.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678000d049a495_77921601 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard';
?>    <div class="preloader-<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("logged_theme_color","light");?>
" system-preloader>
        <div class="loadingio loadingio-spinner-ripple-c4xwekkbyc9">
            <div class="ldio-k6xrhuhg6o">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/fetch.min.js");?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer>
        window.template = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("template");?>
";
        window.site_url = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("site_url");?>
";
        window.tawk_id = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_tawk_id");?>
";
        window.titansys_echo = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("titansys_echo");?>
";
        window.alertsound = <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("logged_alertsound",1) < 2) {?>true<?php } else { ?>false<?php }?>;
        window.message_max = <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_message_max");?>
;
        window.color_primary = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_theme_background");?>
";
        window.alert_position = "<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("language_rtl")) {?>topRight<?php } else { ?>topLeft<?php }?>";
        window.overlap_alert_position = "<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("language_rtl")) {?>bottomRight<?php } else { ?>bottomLeft<?php }?>";
        window.consent_position = "<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("language_rtl")) {?>bottom-right<?php } else { ?>bottom-left<?php }?>";
        window.theme_color = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("logged_theme_color","light");?>
";
        window.recaptcha_status = <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_recaptcha",2) < 2) {
if (false == $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_recaptcha_key") || false == $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_recaptcha_secret")) {?>false<?php } else { ?>true<?php }
} else { ?>false<?php }?>;

        var lang_datatable_processing = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_processing");?>
",
            lang_datatable_length = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_length_v38");?>
",
            lang_datatable_info = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_info_v38");?>
",
            lang_datatable_empty = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_empty_v38");?>
",
            lang_datatable_filtered = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_filtered_v38");?>
",
            lang_datatable_loading = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_loading");?>
",
            lang_datatable_zero = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_zero");?>
",
            lang_datatable_null = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_null");?>
",
            lang_datatable_first = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_first");?>
",
            lang_datatable_prev = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_prev");?>
",
            lang_datatable_next = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_next");?>
",
            lang_datatable_last = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_last");?>
",
            lang_response_went_wrong = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("response_went_wrong");?>
",
            lang_delete_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("delete_title");?>
",
            lang_delete_tagline = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("delete_tagline");?>
",
            lang_validate_cannotemp = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("validate_cannotemp");?>
",
            lang_alert_attention = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("alert_attention");?>
",
            lang_date_today = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("date_today");?>
",
            lang_date_yesterday = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("date_yesterday");?>
",
            lang_date_7days = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("date_7days");?>
",
            lang_date_30days = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("date_30days");?>
",
            lang_date_month = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("date_month");?>
",
            lang_date_lmonth = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("date_lmonth");?>
",
            lang_date_custom = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("date_custom");?>
",
            lang_copy_data = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("copy_data");?>
",
            lang_unknown_action_method = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("unknown_action_method");?>
",
            lang_btn_confirm = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_confirm");?>
",
            lang_btn_cancel = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_cancel");?>
",
            lang_suspend_user_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("suspend_user_title");?>
",
            lang_suspend_user_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("suspend_user_desc");?>
",
            lang_unsuspend_user_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("unsuspend_user_title");?>
",
            lang_unsuspend_user_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("unsuspend_user_desc");?>
",
            lang_response_session_false = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("response_session_false");?>
",
            lang_require_name = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("require_name");?>
",
            lang_require_email = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("require_email");?>
",
            lang_require_password = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("require_password");?>
",
            lang_require_cpassword = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("require_cpassword");?>
",
            lang_validate_cannotemp = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("validate_cannotemp");?>
",
            lang_alert_attention = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("alert_attention");?>
",
            lang_cookieconsent_message = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("cookieconsent_message");?>
",
            lang_cookieconsent_link = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("cookieconsent_link");?>
",
            lang_cookieconsent_dismiss = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("cookieconsent_dismiss");?>
",
            lang_pendingdelete_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pendingdelete_title");?>
",
            lang_pendingdelete_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pendingdelete_desc");?>
",
            lang_js_loader_pleasewait = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_loader_pleasewait");?>
",
            lang_js_userstatus_online = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_userstatus_online");?>
",
            lang_js_userstatus_offline = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_userstatus_offline");?>
",
            lang_js_whatsapp_linksuccess = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_whatsapp_linksuccess");?>
",
            lang_js_whatsapp_linkfailed = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_whatsapp_linkfailed");?>
",
            lang_js_whatsapp_linkexist = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_whatsapp_linkexist");?>
",
            lang_js_whatsapp_loaderprocessing = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_whatsapp_loaderprocessing");?>
",
            lang_js_clearpending_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_clearpending_title");?>
",
            lang_js_clearpending_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_clearpending_desc");?>
",
            lang_js_clearpending_processing = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_clearpending_processing");?>
",
            lang_js_authenticate_processing = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_authenticate_processing");?>
",
            lang_js_actiontrigger_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontrigger_title");?>
",
            lang_js_actiontrigger_typetitle = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontrigger_typetitle");?>
",
            lang_js_actiontrigger_typesms = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontrigger_typesms");?>
",
            lang_js_actiontrigger_typewa = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontrigger_typewa");?>
",
            lang_js_actiontrigger_typeussd = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontrigger_typeussd");?>
",
            lang_js_actiontrigger_typenoti = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontrigger_typenoti");?>
",
            lang_js_actiontrigger_loader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontrigger_loader");?>
",
            lang_js_actiontranslator_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontranslator_title");?>
",
            lang_js_actiontranslator_from = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontranslator_from");?>
",
            lang_js_actiontranslator_to = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontranslator_to");?>
",
            lang_js_actiontranslator_loader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actiontranslator_loader");?>
",
            lang_js_actionregen_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actionregen_title");?>
",
            lang_js_actionregen_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actionregen_desc");?>
",
            lang_js_actionregen_loader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actionregen_loader");?>
",
            lang_js_actionclear_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actionclear_title");?>
",
            lang_js_actionclear_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_actionclear_desc");?>
",
            lang_js_processing_dataloader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_processing_dataloader");?>
",
            lang_js_build_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_build_title");?>
",
            lang_js_build_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_build_desc");?>
",
            lang_js_build_btnbuild = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_build_btnbuild");?>
",
            lang_js_reorder_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_reorder_title");?>
",
            lang_js_reorder_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_reorder_desc");?>
",
            lang_js_deletetrash_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_deletetrash_title");?>
",
            lang_js_deletetrash_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_deletetrash_desc");?>
",
            lang_js_tablesexport_copy = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_tablesexport_copy");?>
",
            lang_js_tablesexport_excel = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_tablesexport_excel");?>
",
            lang_js_tablesexport_pdf = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_tablesexport_pdf");?>
",
            lang_requests_build_submitrequest = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("requests_build_submitrequest");?>
",
            lang_requests_reorder_loader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("requests_reorder_loader");?>
",
            lang_requests_deleteitem_loader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("requests_deleteitem_loader");?>
",
            lang_js_calendarall_option = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_option");?>
",
            lang_js_calendarall_apply = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_apply");?>
",
            lang_js_calendarall_cancel = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_cancel");?>
",
            lang_js_calendarall_from = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_from");?>
",
            lang_js_calendarall_to = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_to");?>
",
            lang_js_calendarall_week = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_week");?>
",
            lang_js_calendarall_daysu = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_daysu");?>
",
            lang_js_calendarall_daymo = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_daymo");?>
",
            lang_js_calendarall_daytu = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_daytu");?>
",
            lang_js_calendarall_daywe = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_daywe");?>
",
            lang_js_calendarall_dayth = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_dayth");?>
",
            lang_js_calendarall_dayfr = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_dayfr");?>
",
            lang_js_calendarall_daysa = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_daysa");?>
",
            lang_js_calendarall_monjan = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monjan");?>
",
            lang_js_calendarall_monfeb = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monfeb");?>
",
            lang_js_calendarall_monmar = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monmar");?>
",
            lang_js_calendarall_monapr = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monapr");?>
",
            lang_js_calendarall_monmay = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monmay");?>
",
            lang_js_calendarall_monjun = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monjun");?>
",
            lang_js_calendarall_monjul = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monjul");?>
",
            lang_js_calendarall_monaug = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monaug");?>
",
            lang_js_calendarall_monsep = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monsep");?>
",
            lang_js_calendarall_monoct = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monoct");?>
",
            lang_js_calendarall_monnov = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_monnov");?>
",
            lang_js_calendarall_mondec = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_calendarall_mondec");?>
",
            lang_response_whatsapp_creatingqr = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("response_whatsapp_creatingqr");?>
",
            lang_datatable_addedtoclipboard = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_addedtoclipboard");?>
",
            lang_datatable_addedtoclipboardkeys = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_addedtoclipboardkeys");?>
",
            lang_datatable_addedtoclipboardmulti = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_addedtoclipboardmulti");?>
",
            lang_datatable_addedtoclipboardsingle = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("datatable_addedtoclipboardsingle");?>
",
            lang_js_response_titanechorefreshdesc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_response_titanechorefreshdesc");?>
",
            lang_campaign_popup_titleresume = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("campaign_popup_titleresume");?>
",
            lang_campaign_popup_titlestop = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("campaign_popup_titlestop");?>
",
            lang_campaign_popup_descsmsresume = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("campaign_popup_descsmsresume");?>
",
            lang_campaign_popup_descsmsstop = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("campaign_popup_descsmsstop");?>
",
            lang_campaign_popup_descwaresume = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("campaign_popup_descwaresume");?>
",
            lang_campaign_popup_descwastop = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("campaign_popup_descwastop");?>
",
            lang_plugin_mpg_popuppayumoneymobilenumber = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("plugin_mpg_popuppayumoneymobilenumber");?>
",
            lang_js_wa_form_audiotype_entermsg = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_wa_form_audiotype_entermsg");?>
",
            lang_js_wa_form_audionotavail_disinput = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_wa_form_audionotavail_disinput");?>
",
            lang_apexcharts_locale_monthjanuary = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthjanuary");?>
",
            lang_apexcharts_locale_monthfebruary = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthfebruary");?>
",
            lang_apexcharts_locale_monthmarch = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthmarch");?>
",
            lang_apexcharts_locale_monthapril = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthapril");?>
",
            lang_apexcharts_locale_monthmay = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthmay");?>
",
            lang_apexcharts_locale_monthjune = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthjune");?>
",
            lang_apexcharts_locale_monthjuly = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthjuly");?>
",
            lang_apexcharts_locale_monthaugust = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthaugust");?>
",
            lang_apexcharts_locale_monthseptember = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthseptember");?>
",
            lang_apexcharts_locale_monthoctober = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthoctober");?>
",
            lang_apexcharts_locale_monthnovember = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthnovember");?>
",
            lang_apexcharts_locale_monthdecember = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthdecember");?>
",
            lang_apexcharts_locale_monthjanshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthjanshort");?>
",
            lang_apexcharts_locale_monthfebshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthfebshort");?>
",
            lang_apexcharts_locale_monthmarshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthmarshort");?>
",
            lang_apexcharts_locale_monthaprshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthaprshort");?>
",
            lang_apexcharts_locale_monthmayshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthmayshort");?>
",
            lang_apexcharts_locale_monthjunshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthjunshort");?>
",
            lang_apexcharts_locale_monthjulshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthjulshort");?>
",
            lang_apexcharts_locale_monthaugshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthaugshort");?>
",
            lang_apexcharts_locale_monthsepshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthsepshort");?>
",
            lang_apexcharts_locale_monthoctshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthoctshort");?>
",
            lang_apexcharts_locale_monthnovshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthnovshort");?>
",
            lang_apexcharts_locale_monthdecshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_monthdecshort");?>
",
            lang_apexcharts_locale_daymonday = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daymonday");?>
",
            lang_apexcharts_locale_daytuesday = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daytuesday");?>
",
            lang_apexcharts_locale_daywednesday = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daywednesday");?>
",
            lang_apexcharts_locale_daythursday = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daythursday");?>
",
            lang_apexcharts_locale_dayfriday = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_dayfriday");?>
",
            lang_apexcharts_locale_daysaturday = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daysaturday");?>
",
            lang_apexcharts_locale_daysunday = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daysunday");?>
",
            lang_apexcharts_locale_daymondayshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daymondayshort");?>
",
            lang_apexcharts_locale_daytuesdayshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daytuesdayshort");?>
",
            lang_apexcharts_locale_daywednesdayshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daywednesdayshort");?>
",
            lang_apexcharts_locale_daythursdayshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daythursdayshort");?>
",
            lang_apexcharts_locale_dayfridayshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_dayfridayshort");?>
",
            lang_apexcharts_locale_daysaturdayshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daysaturdayshort");?>
",
            lang_apexcharts_locale_daysundayshort = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_daysundayshort");?>
",
            lang_apexcharts_locale_exportsvg = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_exportsvg");?>
",
            lang_apexcharts_locale_exportpng = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_exportpng");?>
",
            lang_apexcharts_locale_menu = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_menu");?>
",
            lang_apexcharts_locale_selection = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_selection");?>
",
            lang_apexcharts_locale_selectionzoom = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_selectionzoom");?>
",
            lang_apexcharts_locale_zin = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_zin");?>
",
            lang_apexcharts_locale_zout = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_zout");?>
",
            lang_apexcharts_locale_pan = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_pan");?>
",
            lang_apexcharts_locale_reset = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("apexcharts_locale_reset");?>
",
            lang_waexport_loader_exporting = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("waexport_loader_exporting");?>
",
            lang_actions_waexportgroupcontacts_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("actions_waexportgroupcontacts_title");?>
",
            lang_actions_waexportgroupcontacts_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("actions_waexportgroupcontacts_desc");?>
"
            lang_impersonate_userentry_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("impersonate_userentry_title");?>
",
            lang_impersonate_userentry_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("impersonate_userentry_desc");?>
",
            lang_impersonate_userentry_loader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("impersonate_userentry_loader");?>
",
            lang_impersonate_userexit_loader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("impersonate_userexit_loader");?>
",
            lang_plugins_btn_pluginsdefopagegeneric = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("plugins_btn_pluginsdefopagegeneric");?>
",
            lang_js_regenerate_admintoken = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_regenerate_admintoken");?>
",
            lang_js_regenerate_admintoken_desc = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("js_regenerate_admintoken_desc");?>
";

        fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/template.dashboard.js");?>
", <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("plugin_scripts");?>

        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/custom.run.js",true);?>
", <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("plugin_styles");?>

        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/system.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/he.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/mfb.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/card.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/daterangepicker.min.js");?>
"
        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/pjax.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/moment.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/waves.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/nprogress.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/jquery.loading.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/qrcode.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/scrollto.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/izitoast.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/codeflask.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/clipboard.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/autocomplete.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/iframeResizer.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/bootstrap-select.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/bootstrap-toggle.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/jquery.word-and-character-counter.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/cookieconsent.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/datatables.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/tooltipster.bundle.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/alertsound.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/jsoneditor.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/echo.min.js");?>
"
        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("js/libs/bootstrap.min.js");?>
"
        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/jquery.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/custom.css",true);?>
",
            "<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("language_rtl")) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/mfb.rtl.min.css");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/mfb.min.css");
}?>",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/waves.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/animate.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/izitoast.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/datatables.min.css");?>
",
            "<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("logged_theme_color","light") == "dark") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/daterangepicker.dark.min.css");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/daterangepicker.min.css");
}?>",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/bootstrap-select.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/bootstrap-toggle.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/cookieconsent.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/tooltipster.bundle.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/jsoneditor.min.css");?>
"
        ]))))));
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
