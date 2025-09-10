<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:19:50
  from 'file:dashboard/widgets/modals/add.contact.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894dc60a9c36_73658617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded1a35df87cb0ad69fcd2fd9b4396c6b32626e9' => 
    array (
      0 => 'dashboard/widgets/modals/add.contact.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67894dc60a9c36_73658617 (\Smarty\Template $_smarty_tpl) {
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
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_con_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_auto_line19");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_number");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_con_line24");?>
"></i>
                    </label>
                    <input type="text" name="phone" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getValue('data')['number'];?>
">
                </div>
                
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_group");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_con_line31");?>
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
"><?php echo $_smarty_tpl->getValue('group')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('group', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
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
