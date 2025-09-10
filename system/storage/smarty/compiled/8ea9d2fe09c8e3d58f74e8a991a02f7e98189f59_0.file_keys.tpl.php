<?php
/* Smarty version 5.4.3, created on 2025-02-08 14:06:20
  from 'file:dashboard/pages/user/tools/keys.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67a748bc371e79_50769185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ea9d2fe09c8e3d58f74e8a991a02f7e98189f59' => 
    array (
      0 => 'dashboard/pages/user/tools/keys.tpl',
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
function content_67a748bc371e79_50769185 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/tools';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_tools_title");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_tools_tabkeystitle");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/docs");?>
" class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_tool_key_6");?>
" system-nav>
                            <i class="la la-book la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_tool_key_8");?>

                        </a>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_tool_key_11");?>
" system-toggle="add.apikey">
                            <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_addkey");?>

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
                    <table class="table" system-table="tools.keys"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
