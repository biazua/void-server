<?php
/* Smarty version 5.4.3, created on 2025-01-25 12:36:17
  from 'file:dashboard/pages/auth/register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67946a4177b420_53239137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae51762c67e321f10e417e6b3fef5e9324a09b78' => 
    array (
      0 => 'dashboard/pages/auth/register.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67946a4177b420_53239137 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/auth';
?><div class="container-fluid" system-wrapper>
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 align-self-center px-lg-6 my-5">
            <div class="display-4 text-center mb-3">
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth");?>
" system-nav>
                    <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')(logged_theme_color == "dark" ? "logo_light" : "logo_dark");?>
">
                </a>
            </div>

            <p class="text-muted text-center mb-3">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_authenticate_regpagetagline");?>

            </p>

            <?php if (!$_smarty_tpl->getValue('data')['confirm']) {?>
            <div system-register-confirm>
                <form system-authenticate-register>
                    <div class="form-group">

                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_fullname");?>
</label>

                        <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_fullname");?>
">
                    </div>

                    <div class="form-group">

                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_emailaddress");?>
</label>

                        <input type="text" name="email" class="form-control" placeholder="name@domain.com">
                    </div>

                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_password");?>
</label>

                        <input type="password" name="password" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_password");?>
">
                    </div>

                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_cpassword");?>
</label>

                        <input type="password" name="cpassword" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_cpassword");?>
">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_usertimezone");?>
</label>
                                <select name="timezone" class="form-control" data-live-search="true">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['timezones'], 'timezone');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('timezone')->value) {
$foreach0DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone'));?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone')) == $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_default_timezone")) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')($_smarty_tpl->getValue('timezone'));?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_countrycode");?>
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
" <?php if ($_smarty_tpl->getVariable('country')->key == $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_default_country")) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country');?>
 (<?php echo $_smarty_tpl->getVariable('country')->key;?>
)</option>
                                    <?php
$_smarty_tpl->setVariable('country', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_recaptcha",2) < 2) {?>
                    <?php if (!false == $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_recaptcha_key") || !false == $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_recaptcha_secret")) {?>
                    <div class="form-group text-center">
                        <div class="g-recaptcha w-100" data-sitekey="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_recaptcha_key");?>
"></div>
                        <?php echo '<script'; ?>
 src="https://www.recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
                    </div>
                    <?php }?>
                    <?php }?>

                    <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_signup");?>

                    </button>

                    <p class="text-center">
                        <small class="text-muted text-center">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_authenticate_regpagehave");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth");?>
" <?php if (logged_theme_color == "dark") {?>class="text-white"<?php }?> system-nav><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_signin");?>
</a>
                        </small>
                    </p>
                </form>
            </div>
            <?php } else { ?>
            <div class="alert alert-success text-justify mb-3 pb-0">
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_registerconfirm_desc");?>
</p>
            </div>

            <p class="text-center">
                <small class="text-muted text-center">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_authenticate_regpagehave");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth");?>
" <?php if (logged_theme_color == "dark") {?>class="text-white"<?php }?> system-nav><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_signin");?>
</a>
                </small>
            </p>
            <?php }?>
        </div>

        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100 mt-n1 mr-n3 position-relative" style="background-image: url(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')("bg");?>
);">
                <div class="position-absolute w-100 h-100 bg-cover-layer"></div>
            </div>
        </div>
    </div>
</div><?php }
}
