<?php
/* Smarty version 5.1.0, created on 2024-07-08 14:41:18
  from 'file:dashboard/widgets/modals/update.plugin.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_668bde6e584f07_76874454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acdfe5e1cbf5b9f0462c5879ee92ff8e896cb811' => 
    array (
      0 => 'dashboard/widgets/modals/update.plugin.tpl',
      1 => 1710215332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668bde6e584f07_76874454 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-file-excel la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_upplug17");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_upplug17_1");?>
"></i>
                    </label>
                    <input type="file" name="plugin" class="form-control pb-5">
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
