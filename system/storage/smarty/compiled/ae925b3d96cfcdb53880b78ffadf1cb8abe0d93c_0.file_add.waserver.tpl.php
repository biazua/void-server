<?php
/* Smarty version 5.1.0, created on 2024-05-13 15:49:32
  from 'file:dashboard/widgets/modals/add.waserver.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66421a6c155518_17729266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae925b3d96cfcdb53880b78ffadf1cb8abe0d93c' => 
    array (
      0 => 'dashboard/widgets/modals/add.waserver.tpl',
      1 => 1712192072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66421a6c155518_17729266 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_addeditserver_name");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_addeditserver_nametagline");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="eg. Free Server">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_addeditserver_accounts");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_addeditserver_accountstagline");?>
"></i>
                    </label>
                    <input type="number" name="accounts" class="form-control" placeholder="50">
                </div>
                
                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_addeditserver_packages");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_addeditserver_packagestagline");?>
"></i>
                    </label>
                    <select name="packages[]" class="form-control" data-live-search="true" multiple>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['packages'], 'package');
$_smarty_tpl->getVariable('package')->index = -1;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('package')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('package')->index++;
$foreach0Backup = clone $_smarty_tpl->getVariable('package');
?>
                        <option value="<?php echo $_smarty_tpl->getValue('package')['id'];?>
" <?php if ($_smarty_tpl->getVariable('package')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('package')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('package', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_addeditserver_serverurl");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_systemsettings_waserverhelp");?>
"></i>
                    </label>
                    <input type="text" name="url" class="form-control" placeholder="eg. http://127.0.0.1">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_addeditserver_serverport");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_systemsettings_waporthelp");?>
"></i>
                    </label>
                    <input type="text" name="port" class="form-control" placeholder="eg. 7001">
                </div>

                <div class="form-group col-md-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_secretkey");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_waserver_secretkeydesc");?>
"></i>
                    </label>
                    <input type="text" name="secret" class="form-control" placeholder="eg. Xg40V0ynJscNzZywSU8MwpPjaCi2BC">
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
