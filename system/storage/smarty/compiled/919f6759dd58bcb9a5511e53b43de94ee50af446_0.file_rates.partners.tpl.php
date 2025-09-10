<?php
/* Smarty version 5.4.3, created on 2025-01-17 01:54:31
  from 'file:dashboard/pages/misc/rates.partners.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678947d7816940_54785535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '919f6759dd58bcb9a5511e53b43de94ee50af446' => 
    array (
      0 => 'dashboard/pages/misc/rates.partners.tpl',
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
function content_678947d7816940_54785535 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/misc';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_title_default");?>

                        </h6>
                        
                        <h1 class="header-title">
                            <i class="la la-handshake la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_rate_partner_3");?>

                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table class="table" system-table="rates.partners"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
