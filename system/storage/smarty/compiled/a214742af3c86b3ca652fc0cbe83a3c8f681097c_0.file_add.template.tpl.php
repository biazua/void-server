<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:32:03
  from 'file:dashboard/widgets/modals/add.template.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678950a33f5245_07977272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a214742af3c86b3ca652fc0cbe83a3c8f681097c' => 
    array (
      0 => 'dashboard/widgets/modals/add.template.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678950a33f5245_07977272 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-wrench la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

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
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_temp_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_templatename_placeholder");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_templateformat");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_temp_line24");?>
"></i>
                    </label>
                    <textarea name="format" class="form-control" rows="5" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_templateformat_placeholder");?>
"></textarea>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_bulk_131");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_bulk_131_1");?>
"></i>
                    </label>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_sms_bulk_135");?>
</small> <code>Tom is a <strong>{good|bad}</strong> cat</code>
                    </p>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("form_literal_spintaxdesc2"),array("<strong>good</strong>","<strong>bad</strong>"));?>
</small>
                    </p>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_shortcodes");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_temp_line43");?>
"></i>
                    </label>
                    
                    <p>
                        <code><strong>{{contact.name}}</strong>, <strong>{{contact.number}}</strong>, <strong>{{group.name}}</strong>, <strong>{{date.now}}</strong>, <strong>{{date.time}}</strong>, <strong>{{unsubscribe.command}}</strong>, <strong>{{unsubscribe.link}}</strong></code>
                    </p>
                    
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
