<?php
/* Smarty version 5.4.3, created on 2025-02-11 09:53:04
  from 'file:dashboard/pages/docs/actions.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ab0ff061c0d2_38896900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea0df5e3bcba3701216134588a7be31305285ff' => 
    array (
      0 => 'dashboard/pages/docs/actions.tpl',
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
function content_67ab0ff061c0d2_38896900 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/docs';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_pg_doc_line10");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-robot la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_doc_act_3");?>

                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <iframe class="pb-3 w-100 border-0" system-iframe="<?php echo site_url;?>
/templates/_mkdocs/actions/index.html"></iframe>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
