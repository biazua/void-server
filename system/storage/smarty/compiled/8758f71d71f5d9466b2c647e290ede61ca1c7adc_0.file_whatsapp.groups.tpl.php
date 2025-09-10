<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:19:50
  from 'file:dashboard/widgets/modals/whatsapp.groups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894dc6571114_88512426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8758f71d71f5d9466b2c647e290ede61ca1c7adc' => 
    array (
      0 => 'dashboard/widgets/modals/whatsapp.groups.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67894dc6571114_88512426 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-telegram la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_groupsimportname");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_groupsimportnamehelp");?>
"></i>
                    </label>
                    <select name="account" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['accounts'], 'account');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('account')->key => $_smarty_tpl->getVariable('account')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('account');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('account')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('account')['token'];?>
"><?php echo $_smarty_tpl->getValue('account')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('account', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-layer-group la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("forms_whatsapp_groupsimportbutton");?>

            </button>
        </div>
    </div>
</form><?php }
}
