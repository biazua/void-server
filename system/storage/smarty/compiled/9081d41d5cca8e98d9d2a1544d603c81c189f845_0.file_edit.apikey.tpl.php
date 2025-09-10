<?php
/* Smarty version 5.4.0, created on 2024-12-21 20:29:26
  from 'file:dashboard/widgets/modals/edit.apikey.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_67670906df9174_65326032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9081d41d5cca8e98d9d2a1544d603c81c189f845' => 
    array (
      0 => 'dashboard/widgets/modals/edit.apikey.tpl',
      1 => 1734540059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67670906df9174_65326032 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
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
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_apikey_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_apikey_line19");?>
" value="<?php echo $_smarty_tpl->getValue('data')['key']['name'];?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_permissions");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_apikey_line24");?>
"></i>
                    </label>
                    <select name="permissions[]" class="form-control" data-live-search="true" multiple>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['permissions'], 'permission');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('permission')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('permission');?>
" data-tokens="<?php echo $_smarty_tpl->getValue('permission');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('permission'),$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['key']['permissions'],","))) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('permission');?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
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
