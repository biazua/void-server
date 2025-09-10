<?php
/* Smarty version 5.4.0, created on 2024-12-19 13:47:48
  from 'file:default/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6763b384b3b267_91718868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fed698eddc25a9e97c0a42f67f55edaaf4475fe' => 
    array (
      0 => 'default/footer.tpl',
      1 => 1734540052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modules/footer.block.tpl' => 1,
  ),
))) {
function content_6763b384b3b267_91718868 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/default';
?>    <?php $_smarty_tpl->renderSubTemplate("file:./modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div zender-preloader>
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
        window.site_url = "<?php echo site_url;?>
";
        window.template = "<?php echo template;?>
";
        window.tawk_id = "<?php echo system_tawk_id;?>
";
        window.titansys_echo = "<?php echo titansys_echo;?>
";
        window.alertsound = <?php if (logged_alertsound < 2) {?>true<?php } else { ?>false<?php }?>;
        window.color_primary = "<?php echo system_theme_background;?>
";
        window.alert_position = "<?php if (language_rtl) {?>topRight<?php } else { ?>topLeft<?php }?>";
        window.overlap_alert_position = "<?php if (language_rtl) {?>bottomRight<?php } else { ?>bottomLeft<?php }?>";
        window.consent_position = "<?php if (language_rtl) {?>bottom-right<?php } else { ?>bottom-left<?php }?>";
        window.theme_color = "light";
        
        var lang_response_went_wrong = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_response_went_wrong");?>
",
            lang_alert_attention = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_alert_attention");?>
",
            lang_cookieconsent_message = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_cookieconsent_message");?>
",
            lang_cookieconsent_link = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_cookieconsent_link");?>
",
            lang_cookieconsent_dismiss = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_cookieconsent_dismiss");?>
",
            lang_js_processing_dataloader = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_js_processing_dataloader");?>
",
            lang_js_loader_pleasewait = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_js_loader_pleasewait");?>
",
            lang_response_session_false = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_response_session_false");?>
";

        fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/template.default.js");?>
", <?php echo plugin_scripts;?>

        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/custom.run.js",true);?>
", <?php echo plugin_styles;?>

        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/functions.js");?>
",
        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/mfb.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("js/template.js");?>
"
        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/pjax.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/aos.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/waves.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/nprogress.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/jquery.loading.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/scrollto.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/izitoast.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/cookieconsent.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/bootstrap-select.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/iframeResizer.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/tooltipster.bundle.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/alertsound.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/echo.min.js");?>
"
        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("js/libs/bootstrap.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('assets')("js/plugins.js");?>
"
        ], fetchInject([
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("js/libs/jquery.min.js");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/custom.css",true);?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/aos.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/waves.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/izitoast.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/bootstrap-select.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/cookieconsent.min.css");?>
",
            "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/tooltipster.bundle.min.css");?>
",
            "<?php if (language_rtl) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/mfb.rtl.min.css");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('_assets')("css/libs/mfb.min.css");
}?>"
        ])))))));
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
