<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:01:23
  from 'file:dashboard/widgets/modals/add.whatsapp.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894973e5dc62_80805728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '388bf9bfff8381c3882e5030c5c6f51c1f83b011' => 
    array (
      0 => 'dashboard/widgets/modals/add.whatsapp.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67894973e5dc62_80805728 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" system-wa-link-title>
            <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

        </h3>
    </div>
    
    <div class="modal-body mb-2">
        <div class="text-center">
            <div id="wa_intro">
                <p class="px-5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("widgets_addwhatsapp_newmodal"),array($_smarty_tpl->getValue('data')['linkbtn']));?>
</p>
                <div class="row">
                    <div class="col-12">
                        <select class="form-control mb-3 w-50" system-wa-server>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['wa_servers'], 'wa_server');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('wa_server')->value) {
$foreach0DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('wa_server')['id'];?>
"><?php echo $_smarty_tpl->getValue('wa_server')['name'];?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary mb-3" system-whatsapp-link>
                            <i class="la la-chain"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_whatsapp_line16");?>

                        </button>

                        <button class="btn btn-danger mb-3" data-dismiss="modal">
                            <i class="la la-close"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("widgets_addwhatsapp_newmodal4");?>

                        </button>
                    </div>
                </div>
            </div>

            <div id="wa_link">
                <div class="mt-2 mb-3" id="wa_qrcode"></div>
                <h1 id="wa_countdown"></h1>
            </div>
        </div>
    </div>
</div><?php }
}
