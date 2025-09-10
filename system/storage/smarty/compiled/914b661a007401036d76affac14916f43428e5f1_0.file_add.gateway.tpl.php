<?php
/* Smarty version 5.1.0, created on 2024-11-13 19:58:03
  from 'file:dashboard/widgets/modals/add.gateway.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6734e8abdd4f01_71086586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914b661a007401036d76affac14916f43428e5f1' => 
    array (
      0 => 'dashboard/widgets/modals/add.gateway.tpl',
      1 => 1710215332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6734e8abdd4f01_71086586 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-code la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line17");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line17_1");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line19");?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line24_1");?>
"></i>
                    </label>
                    <small class="text-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line27");?>
 <a href="https://github.com/titansys/zender-gateways" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_btnall_visitlink");?>
</a> 
                    </small>
                    <input type="file" name="controller" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line34");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line34_1");?>
"></i>
                    </label>
                    <select name="callback" class="form-control">
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line37");?>
</option>
                        <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line38");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line44");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line44_1");?>
"></i>
                    </label>
                    <small class="text-danger">
                       <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line47");?>

                    </small>
                    <input type="text" name="callback_id" class="form-control" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getSmarty()->getModifierCallback('uniqid')($_smarty_tpl->getSmarty()->getModifierCallback('time')(),true));?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line54");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line54_1");?>
"></i>
                    </label>
                    <small class="text-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line57");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("uploads/system/gateway.json");?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line57_1");?>
</a> 
                    </small>

                    <div zender-codeflask><?php echo $_smarty_tpl->getValue('data')['pricing'];?>
</div>
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
