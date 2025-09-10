<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:20:56
  from 'file:dashboard/widgets/modals/import.contacts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894e0896b0f5_89143570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0280c9d6b46f2edef148dd1bc3b24abc12a97250' => 
    array (
      0 => 'dashboard/widgets/modals/import.contacts.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67894e0896b0f5_89143570 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
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
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_excelfile");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_import_line17");?>
"></i>
                    </label>
                    <small class="text-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_import_line20");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("uploads/system/contacts_sample.xlsx");?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_import_line20_1");?>
</a>
                    </small>
                    <input type="file" name="excel" class="form-control pb-5">
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
