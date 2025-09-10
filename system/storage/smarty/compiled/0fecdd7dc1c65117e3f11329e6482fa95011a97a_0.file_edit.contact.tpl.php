<?php
/* Smarty version 5.4.3, created on 2025-01-23 16:27:14
  from 'file:dashboard/widgets/modals/edit.contact.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6791fd6210b263_95928339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fecdd7dc1c65117e3f11329e6482fa95011a97a' => 
    array (
      0 => 'dashboard/widgets/modals/edit.contact.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6791fd6210b263_95928339 (\Smarty\Template $_smarty_tpl) {
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
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_con_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_con_line19");?>
" value="<?php echo $_smarty_tpl->getValue('data')['contact']['name'];?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_number");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_con_line24");?>
"></i>
                    </label>
                    <input type="text" name="phone" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getValue('data')['number'];?>
" value="<?php echo $_smarty_tpl->getValue('data')['contact']['phone'];?>
">
                </div>
                
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_group");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_edit_con_line31");?>
"></i>
                    </label>
                    <select name="groups[]" class="form-control" data-live-search="true" multiple>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['groups'], 'group');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->key => $_smarty_tpl->getVariable('group')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('group');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('group')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('group')['token'];?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getVariable('group')->key,$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['contact']['groups'],","))) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('group')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('group', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <input type="hidden" name="current_phone" value="<?php echo $_smarty_tpl->getValue('data')['contact']['phone'];?>
">
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
