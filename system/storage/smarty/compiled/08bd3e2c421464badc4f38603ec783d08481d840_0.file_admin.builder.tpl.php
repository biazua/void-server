<?php
/* Smarty version 5.1.0, created on 2024-05-13 16:50:46
  from 'file:dashboard/widgets/modals/admin.builder.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_664228c669ae12_74824353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08bd3e2c421464badc4f38603ec783d08481d840' => 
    array (
      0 => 'dashboard/widgets/modals/admin.builder.tpl',
      1 => 1710215332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_664228c669ae12_74824353 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-tools la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line16");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_builderpackagename");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line21");?>
"></i>
                    </label>
                    <input type="text" name="package_name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line23");?>
" value="<?php echo $_smarty_tpl->getValue('data')['builder']['package_name'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_builderappname");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line28");?>
"></i>
                    </label>
                    <input type="text" name="app_name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line30");?>
" value="<?php echo $_smarty_tpl->getValue('data')['builder']['app_name'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_builderappdesc");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line35");?>
"></i>
                    </label>
                    <input type="text" name="app_desc" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_builderappdesc_placeholder");?>
" value="<?php echo $_smarty_tpl->getValue('data')['builder']['app_desc'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line42");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line42_1");?>
"></i>
                    </label>
                    <input type="color" name="app_color" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line44");?>
" value="<?php echo $_smarty_tpl->getValue('data')['builder']['app_color'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line49");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line_49_1");?>
"></i>
                    </label>
                    <input type="text" name="apk_version" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line51");?>
" value="<?php echo $_smarty_tpl->getValue('data')['builder']['apk_version'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line56");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line_56_1");?>
"></i>
                    </label>
                    <input type="text" name="build_email" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line58");?>
" value="<?php echo $_smarty_tpl->getValue('data')['builder']['build_email'];?>
">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line62");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line67");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line67_1");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['google']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="google" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line75");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line75_1");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['firebase']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="firebase" class="form-control pb-5">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line82");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_builderapplogo");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line87");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['logo']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="app_logo" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line95");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line95_1");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['logo_login']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="app_logo_login" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_builderappicon");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line103");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['icon']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="app_icon" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_builderappsplash");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line111");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['splash']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="app_splash" class="form-control pb-5">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line118");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line123");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line123_1");?>
"></i>
                    </label>
                    <textarea name="script" class="form-control mb-3" rows="13" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line125");?>
"><?php echo system_app_js;?>
</textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line130");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line130_1");?>
"></i>
                    </label>
                    <textarea name="css" class="form-control mb-3" rows="13" placeholder="eg., body { display: none; }"><?php echo system_app_css;?>
</textarea>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line137");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line137_1");?>
"></i>
                    </label>
                    <textarea name="layout" class="form-control mb-3" rows="20" placeholder="eg., alert.success('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_build_line139");?>
');"><?php echo $_smarty_tpl->getValue('data')['layout'];?>
</textarea>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
