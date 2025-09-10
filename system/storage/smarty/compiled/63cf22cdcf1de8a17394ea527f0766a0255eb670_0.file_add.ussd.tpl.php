<?php
/* Smarty version 5.1.0, created on 2024-07-05 18:00:16
  from 'file:dashboard/widgets/modals/add.ussd.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_668818902f04f6_78726877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63cf22cdcf1de8a17394ea527f0766a0255eb670' => 
    array (
      0 => 'dashboard/widgets/modals/add.ussd.tpl',
      1 => 1710215332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668818902f04f6_78726877 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-satellite-dish la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_ussd_line17");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_ussd_line17_1");?>
"></i>
                    </label>
                    <input type="text" name="code" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_ussd_line19");?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_sim");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_ussd_line24");?>
"></i>
                    </label>
                    <select name="sim" class="form-control">
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_ussd_line27");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_ussd_line28");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_device");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_ussd_line34");?>
"></i>
                    </label>
                    <select name="device" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devices'], 'device');
$_smarty_tpl->getVariable('device')->index = -1;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('device')->index++;
$foreach0Backup = clone $_smarty_tpl->getVariable('device');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" data-content="<?php echo $_smarty_tpl->getValue('device')['name'];?>
 <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_offline");
}?></span>" <?php if ($_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('device', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
            <i class="la la-satellite-dish la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_ussd_line47");?>

            </button>
        </div>
    </div>
</form><?php }
}
