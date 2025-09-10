<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:03:36
  from 'file:dashboard/widgets/modals/add.language.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6780016848d0e3_77230306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032e58145ddf6859a5a5c03ed1b9d2ed499781f7' => 
    array (
      0 => 'dashboard/widgets/modals/add.language.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6780016848d0e3_77230306 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-address-book la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_lang_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_lang_line19");?>
">
                </div>

                <div class="form-group col-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_countrycode");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_lang_line24");?>
"></i>
                    </label>
                    <select name="iso" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('country');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('country')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('country'));?>
" <?php if ($_smarty_tpl->getVariable('country')->key == logged_country) {?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('country')->key;?>
</option>
                        <?php
$_smarty_tpl->setVariable('country', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_lang_line35");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_lang_line35_1");?>
"></i>
                    </label>
                    <select name="rtl" class="form-control">
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_lang_line38");?>
</option>
                        <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_lang_line39");?>
</option>
                    </select>
                </div>
                
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_translations");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_lang_line45");?>
"></i>
                    </label>
                    <textarea name="translations" class="form-control" cols="100" rows="10" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_translations_placeholder");?>
"><?php echo $_smarty_tpl->getValue('data')['strings'];?>
</textarea>
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
