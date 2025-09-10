<?php
/* Smarty version 5.4.3, created on 2025-02-08 14:44:07
  from 'file:dashboard/pages/user/sms/scheduled.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a751971f40e2_79519446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f537aef3d7eae82085a5c70c31f4f0c0f87ba79e' => 
    array (
      0 => 'dashboard/pages/user/sms/scheduled.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_67a751971f40e2_79519446 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/sms';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashpages_sms_headertitle");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-clock la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("messages_scheduled_title");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("modals_addnewsmssched_tooltip");?>
" system-toggle="add.sms.scheduled">
                            <i class="la la-calendar me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("messages_scheduled_schedule");?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table class="table table-striped" system-table="sms.scheduled"></table>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
