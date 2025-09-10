<?php
/* Smarty version 5.1.0, created on 2024-07-08 14:48:19
  from 'file:dashboard/pages/admin/marketing.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_668be0138a8e89_87624116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0109ed4a833dc18917e0da190cf7f7673e9fae48' => 
    array (
      0 => 'dashboard/pages/admin/marketing.tpl',
      1 => 1710911888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../modules/header.block.tpl' => 1,
    'file:../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_668be0138a8e89_87624116 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/admin';
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dashboard_modules_header_line45");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-bullhorn la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_mark_3");?>

                        </h1>
                    </div>
                    
                    <div class="col-auto">
                        <button class="btn btn-danger lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_mark_6");?>
" zender-trash="administration.marketing">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_adminmarketing_pushbtndesc");?>
" zender-toggle="zender.add.push">
                            <i class="la la-android la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_mark_12");?>

                        </button>
            
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_adminmarketing_notifybtndesc");?>
" zender-toggle="zender.add.notify">
                            <i class="la la-chrome la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_mark_17");?>

                        </button>
            
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_adminmarketing_mailerbtndesc");?>
" zender-toggle="zender.add.mailer">
                            <i class="la la-envelope la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_admin_mark_22");?>

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
                    <table class="table" zender-table="administration.marketing"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
<?php }
}
