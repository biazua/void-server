<?php
/* Smarty version 5.4.3, created on 2025-01-09 19:09:39
  from 'file:dashboard/pages/admin/users.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678002d3685a51_42941450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a066db82111baff3511da328d75dfc7decbe697' => 
    array (
      0 => 'dashboard/pages/admin/users.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../modules/header.block.tpl' => 1,
    'file:../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_678002d3685a51_42941450 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/admin';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dashboard_modules_header_line45");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-users la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_admin_tabuserstitle");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" system-toggle="add.user">
                            <i class="la la-user la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_adduser");?>

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
                    <table class="table" system-table="administration.users"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
