<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:01:42
  from 'file:dashboard/widgets/modals/admin.theme.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678000f6c4d211_90557743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6026fed076821235dd0645394b22ea5284d1ba61' => 
    array (
      0 => 'dashboard/widgets/modals/admin.theme.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678000f6c4d211_90557743 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
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
                <div class="form-group col-md-5">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("theme_settings_defthemecolortitle");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("theme_settings_defthemecolortooltip");?>
"></i>
                    </label>
                    <select name="default_scheme" class="form-control mb-3">
                        <option value="light" <?php if ($_smarty_tpl->getValue('data')['system']['default_scheme'] == "light") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("theme_settings_defthemecolorlight");?>
</option>
                        <option value="dark" <?php if ($_smarty_tpl->getValue('data')['system']['default_scheme'] == "dark") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("theme_settings_defthemecolordark");?>
</option>
                    </select>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line17");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line17_1");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['logo_light']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="logo_light_img" class="form-control pb-5 mb-3">

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line23");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line223_1");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['logo_dark']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="logo_dark_img" class="form-control pb-5 mb-3">

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_theme_favicon");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line29");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['favicon']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="favicon_img" class="form-control pb-5 mb-3">

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line35");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line35_1");?>
"></i>
                        <?php if ($_smarty_tpl->getValue('data')['assets']['background']) {?><span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="bg_img" class="form-control pb-5 mb-3">

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_themebg");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line41");?>
"></i>
                    </label>
                    <input type="color" name="theme_background" class="form-control mb-3" value="<?php echo $_smarty_tpl->getValue('data')['system']['theme_background'];?>
">

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_themetext");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line46");?>
"></i>
                    </label>
                    <input type="color" name="theme_highlight" class="form-control mb-3" value="<?php echo $_smarty_tpl->getValue('data')['system']['theme_highlight'];?>
">

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line51");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line51_1");?>
"></i>
                    </label>
                    <input type="color" name="theme_spinner" class="form-control mb-3" value="<?php echo $_smarty_tpl->getValue('data')['system']['theme_spinner'];?>
">
                </div>

                <div class="form-group col-md-7">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line58");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line58_1");?>
"></i>
                    </label>
                    <textarea name="script" class="form-control mb-3" rows="13" placeholder="eg., alert.success('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line60");?>
');"><?php echo $_smarty_tpl->getValue('data')['script'];?>
</textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line63");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_theme_line63_1");?>
"></i>
                    </label>
                    <textarea name="css" class="form-control" rows="12" placeholder="eg., body { display: none; }"><?php echo $_smarty_tpl->getValue('data')['css'];?>
</textarea>
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
