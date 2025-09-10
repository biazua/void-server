<?php
/* Smarty version 5.1.0, created on 2024-07-08 14:40:10
  from 'file:dashboard/widgets/modals/edit.plugin.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_668bde2a5f83f8_22014824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa43608d15e4d970da8d209a3a7b347d81241f54' => 
    array (
      0 => 'dashboard/widgets/modals/edit.plugin.tpl',
      1 => 1714906788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668bde2a5f83f8_22014824 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-list la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['fields'], 'field');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field')->key => $_smarty_tpl->getVariable('field')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('field');
?>
                <div class="form-group <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['type'],array("text","select"))) {?>col-md-6<?php } else { ?>col-md-12<?php }?>">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('field')['label']);?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getValue('field')['description'];?>
"></i>
                    </label>
                    <?php if ($_smarty_tpl->getValue('field')['type'] == "select") {?>
                    <select name="<?php echo $_smarty_tpl->getVariable('field')->key;?>
" class="form-control">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['options'], 'option');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->key => $_smarty_tpl->getVariable('option')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('option');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('option')->key;?>
" <?php if ($_smarty_tpl->getValue('field')['value'] == $_smarty_tpl->getVariable('option')->key) {?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('option')->value;?>
</option>
                        <?php
$_smarty_tpl->setVariable('option', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php } else { ?>
                    <input type="text" name="<?php echo $_smarty_tpl->getVariable('field')->key;?>
" class="form-control <?php if ((null !== ($_smarty_tpl->getValue('field')['readonly'] ?? null)) && $_smarty_tpl->getValue('field')['readonly'] == "true") {?>text-muted<?php }?>" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('field')['label']);?>
" value="<?php echo $_smarty_tpl->getValue('field')['value'];?>
" <?php if ((null !== ($_smarty_tpl->getValue('field')['readonly'] ?? null)) && $_smarty_tpl->getValue('field')['readonly'] == "true") {?>disabled<?php }?>>
                    <?php }?>
                </div>
                <?php
$_smarty_tpl->setVariable('field', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
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
