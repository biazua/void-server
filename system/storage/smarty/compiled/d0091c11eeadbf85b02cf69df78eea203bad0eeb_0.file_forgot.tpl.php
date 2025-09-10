<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:14:54
  from 'file:dashboard/pages/auth/forgot.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894c9ee242f2_60562916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0091c11eeadbf85b02cf69df78eea203bad0eeb' => 
    array (
      0 => 'dashboard/pages/auth/forgot.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67894c9ee242f2_60562916 (\Smarty\Template $_smarty_tpl) {
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

            <p class="text-muted text-center mb-4">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_authenticate_forgotpagetagline");?>

            </p>

            <form system-authenticate-forgot>
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_emailaddress");?>
</label>
                    <input type="email" name="email" class="form-control" placeholder="name@domain.com">
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
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_retrieve");?>

                </button>

                <p class="text-center">
                    <small class="text-muted text-center">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_authenticate_loginpagedonthave");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth/register");?>
" <?php if (logged_theme_color == "dark") {?>class="text-white"<?php }?> system-nav><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_log_line54");?>
</a>
                    </small>
                </p>
            </form>
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
