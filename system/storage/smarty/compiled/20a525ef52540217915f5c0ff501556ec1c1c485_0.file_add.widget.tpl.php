<?php
/* Smarty version 5.1.0, created on 2024-07-08 14:48:06
  from 'file:dashboard/widgets/modals/add.widget.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_668be0067f97a2_02872786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20a525ef52540217915f5c0ff501556ec1c1c485' => 
    array (
      0 => 'dashboard/widgets/modals/add.widget.tpl',
      1 => 1710215332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668be0067f97a2_02872786 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-puzzle-piece la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetname_placeholder");?>
">
                </div>

                <div class="form-group col-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgeticon");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line24");?>
"></i>
                    </label>
                    <input type="text" name="icon" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line26");?>
">
                </div>

                <div class="form-group col-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgettype");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line31");?>
"></i>
                    </label>
                    <select name="type" class="form-control">
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line34");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line35");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetsize");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line41");?>
"></i>
                    </label>
                    <select name="size" class="form-control">
                        <option value="sm" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetsmall");?>
</option>
                        <option value="md"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetmedium");?>
</option>
                        <option value="lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetlarge");?>
</option>
                        <option value="xl"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetxlarge");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetposition");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line53");?>
"></i>
                    </label>
                    <select name="position" class="form-control">
                        <option value="center" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetcenter");?>
</option>
                        <option value="left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetleft");?>
</option>
                        <option value="right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetright");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_widgetcontent");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line64");?>
"></i>
                    </label>                    
                    <div zender-codeflask><p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_add_widget_line66");?>
</p></div>
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
