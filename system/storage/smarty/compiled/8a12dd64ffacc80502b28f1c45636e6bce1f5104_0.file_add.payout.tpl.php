<?php
/* Smarty version 5.4.0, created on 2024-12-26 19:09:15
  from 'file:dashboard/widgets/modals/add.payout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_676d719b873989_19822238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a12dd64ffacc80502b28f1c45636e6bce1f5104' => 
    array (
      0 => 'dashboard/widgets/modals/add.payout.tpl',
      1 => 1734540059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_676d719b873989_19822238 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-exchange-alt la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line17");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line17_1");?>
"></i>
                    </label>
                    <input type="number" name="amount" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line19");?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line24_1");?>
"></i>
                    </label>
                    <select name="provider" class="form-control">
                        <option value="paypal" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line27");?>
</option>
                        <option value="payoneer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line28");?>
</option>
                    </select>
                </div>
                
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line34");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line34_1");?>
"></i>
                    </label>
                    <input type="text" name="address" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line36");?>
">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_payout_line43");?>

            </button>
        </div>
    </div>
</form><?php }
}
