<?php
/* Smarty version 5.4.3, created on 2025-01-10 01:13:07
  from 'file:dashboard/pages/user/ai/keys.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678003a3a86a71_78684256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa22b9087c269e019211636b0a99814e75cdc21' => 
    array (
      0 => 'dashboard/pages/user/ai/keys.tpl',
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
function content_678003a3a86a71_78684256 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/ai';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("template_sidebar_ai");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("template_sidebar_ai_keys");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dasboard_aipage_addkeybtn");?>
" system-toggle="add.ai.key">
                            <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dasboard_aipage_addkeybtn");?>

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
                    <table class="table" system-table="ai.keys"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
