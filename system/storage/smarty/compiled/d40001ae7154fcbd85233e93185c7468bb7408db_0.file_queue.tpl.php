<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:03:32
  from 'file:dashboard/pages/user/sms/queue.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678949f4479a82_04127258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40001ae7154fcbd85233e93185c7468bb7408db' => 
    array (
      0 => 'dashboard/pages/user/sms/queue.tpl',
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
function content_678949f4479a82_04127258 (\Smarty\Template $_smarty_tpl) {
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
                            <i class="la la-tasks la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("tabs_smspage_queuetitle");?>

                        </h1>
                    </div>
                    
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("table_btn_refresh");?>
" system-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-danger lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_sent_6");?>
" system-trash="sms.sent">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_sent_14");?>
" system-toggle="sms.quick">
                            <i class="la la-telegram la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_droid_sent_16");?>

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
                    <table class="table" system-table="sms.queue"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
