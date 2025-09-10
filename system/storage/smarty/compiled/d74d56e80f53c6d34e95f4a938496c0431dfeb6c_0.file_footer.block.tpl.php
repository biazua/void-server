<?php
/* Smarty version 5.4.0, created on 2024-12-19 13:47:48
  from 'file:/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/default/./modules/footer.block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_6763b384b98211_39053286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd74d56e80f53c6d34e95f4a938496c0431dfeb6c' => 
    array (
      0 => '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/default/./modules/footer.block.tpl',
      1 => 1734540052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6763b384b98211_39053286 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/default/modules';
?><footer class="bg-light">
    <div class="container pt-13 pt-md-15 pb-7">
        <div class="row gy-6 gy-lg-0">
            <div class="col-lg-4">
                <div class="widget">
                    <h3 class="h2 text-capitalize mb-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_def_f_blck_6");?>
</h3>
                    <p class="lead text-capitalize mb-5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_def_f_blck_7");?>
</p>
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth/register");?>
" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_def_f_blck_8");?>
</a>
                </div>
            </div>

            <div class="col-md-4 col-lg-2 offset-lg-2">
                <div class="widget">
                    <h4 class="widget-title mb-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_landing_footer_ourcompnew");?>
</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="#" zender-page="3/about"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_landing_footer_about");?>
</a></li>
                        <li><a href="#" zender-page="5/privacy-policy"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_landing_footer_privacy");?>
</a></li>
                        <li><a href="#" zender-page="4/terms-of-service"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_landing_footer_tos");?>
</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="widget">
                    <h4 class="widget-title mb-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_landing_footer_links");?>
</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth/login");?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_landing_footer_login");?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth/register");?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_landing_footer_register");?>
</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="widget">
                    <h4 class="widget-title mb-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_def_f_blck_35");?>
</h4>
                    <address>1231 Tomas Mapua St, Santa Cruz, Manila, 1003 Metro Manila, Philippines</address>
                    <a href="mailto:mail@company.com">mail@company.com</a><br />
                    +12 123 456 7890
                </div>
            </div>
        </div>

        <hr class="mt-13 mt-md-15 mb-7" />
        <div class="d-md-flex align-items-center justify-content-between">
            <p class="mb-2 mb-lg-0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_landing_footer_copyright");?>
 &copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')("Y");?>
</p>
            <nav class="nav social text-md-end">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-github"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
        </div>
    </div>
</footer><?php }
}
