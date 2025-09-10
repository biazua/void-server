<?php
/* Smarty version 5.4.3, created on 2025-01-17 02:19:45
  from 'file:dashboard/pages/user/contacts/saved.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67894dc15d94a6_75165213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e7bccf4c5e0b03d81bf9687be5c145b30b8987' => 
    array (
      0 => 'dashboard/pages/user/contacts/saved.tpl',
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
function content_67894dc15d94a6_75165213 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/pages/user/contacts';
?><div class="main-content" system-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_contacts_title");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-address-book la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_contacts_tabsavedtitle");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_con_sav_6");?>
" system-trash="contacts.saved">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_con_sav_10");?>
" system-toggle="add.contact">
                            <i class="la la-address-book la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("dashboard_btn_addcontact");?>

                        </button>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_con_sav_15");?>
" system-toggle="import.contacts">
                            <i class="la la-upload la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("import_btn");?>

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
                    <table class="table" system-table="contacts.saved"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
