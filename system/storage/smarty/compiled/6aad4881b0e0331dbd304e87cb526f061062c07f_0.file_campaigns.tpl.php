<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:24:27
  from 'file:dashboard/pages/user/whatsapp/campaigns.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894edb2b1d69_45772223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aad4881b0e0331dbd304e87cb526f061062c07f' => 
    array (
      0 => 'dashboard/pages/user/whatsapp/campaigns.tpl',
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
function content_67894edb2b1d69_45772223 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/whatsapp';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_whats_line10");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-coffee la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("pages_wacampaigns_header");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("table_btn_refresh");?>
" system-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_what_sent_15");?>
" system-toggle="whatsapp.bulk">
                            <i class="la la-mail-bulk la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_what_sent_17");?>

                        </button>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_what_sent_20");?>
" system-toggle="whatsapp.excel">
                            <i class="la la-file-excel la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_bulkexcel");?>

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
                    <table class="table table-striped" system-table="whatsapp.campaigns"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
