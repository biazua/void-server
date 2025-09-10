<?php
/* Smarty version 5.4.3, created on 2025-01-28 19:15:22
  from 'file:dashboard/widgets/modals/setup.cron.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_679910aa227975_16100668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb00cec97be7768b799f2ce921f0d487293a77b1' => 
    array (
      0 => 'dashboard/widgets/modals/setup.cron.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_679910aa227975_16100668 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-broom la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="alert alert-info d-flex mt-3 mb-0">
                <i class="la la-info-circle la-lg mr-2 my-auto"></i> This is not translated because it is only for setup purposes.
            </div>

            <h2 class="mt-4">Quota Cleaner <span class="badge badge-primary mt-2 mt-lg-0">Last Run: <?php echo $_smarty_tpl->getValue('data')['cron']['quota'];?>
</span></h2>
            <p class="mt-3">Cron Command:</p>
            <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                <p class="m-0">
                curl -m 180 -s "<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_token");
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("cron/quota/".$_prefixVariable1,true);?>
" > /dev/null 2>&1
                </p>
            </div>
            <p class="mt-3">Cron Settings:</p>
            <div class="alert alert-primary d-flex mt-3 mb-0">
                <i class="la la-info-circle la-lg mr-2 my-auto"></i> 
                This cron settings depends on the Package Reset Mode you choose in the system settings.<br>
                You choosed <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {?>Daily<?php } else { ?>Monthly<?php }?> reset mode.
            </div>
            <div class="mt-3">
                <img src="<?php echo site_url;?>
/uploads/system/cron/<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_reset_mode") < 2) {?>quota_daily<?php } else { ?>quota_monthly<?php }?>.png" class="img-fluid" alt="Cron Job">
            </div>
            <h2 class="mt-4">Sender <span class="badge badge-primary mt-2 mt-lg-0">Last Run: <?php echo $_smarty_tpl->getValue('data')['cron']['sender'];?>
</span></h2>
            <p class="mt-3">Cron Command:</p>
            <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                <p class="m-0">
                curl -m 180 -s "<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_token");
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("cron/sender/".$_prefixVariable2,true);?>
" > /dev/null 2>&1
                </p>
            </div>
            <p class="mt-3">Cron Settings:</p>
            <div class="mt-3">
                <img src="<?php echo site_url;?>
/uploads/system/cron/sender.png" class="img-fluid" alt="Cron Job">
            </div>
            <h2 class="mt-4">SMS Scheduled <span class="badge badge-primary mt-2 mt-lg-0">Last Run: <?php echo $_smarty_tpl->getValue('data')['cron']['sms_scheduled'];?>
</span></h2>
            <p class="mt-3">Cron Command:</p>
            <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                <p class="m-0">
                curl -m 300 -s "<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_token");
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("cron/sms.scheduled/".$_prefixVariable3,true);?>
" > /dev/null 2>&1
                </p>
            </div>
            <p class="mt-3">Cron Settings:</p>
            <div class="mt-3">
                <img src="<?php echo site_url;?>
/uploads/system/cron/sms_scheduled.png" class="img-fluid" alt="Cron Job">
            </div>
            <h2 class="mt-4">WhatsApp Scheduled <span class="badge badge-primary mt-2 mt-lg-0">Last Run: <?php echo $_smarty_tpl->getValue('data')['cron']['wa_scheduled'];?>
</span></h2>
            <p class="mt-3">Cron Command:</p>
            <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                <p class="m-0">
                curl -m 300 -s "<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_token");
$_prefixVariable4=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("cron/wa.scheduled/".$_prefixVariable4,true);?>
" > /dev/null 2>&1
                </p>
            </div>
            <p class="mt-3">Cron Settings:</p>
            <div class="mt-3">
                <img src="<?php echo site_url;?>
/uploads/system/cron/wa_scheduled.png" class="img-fluid" alt="Cron Job">
            </div>
            <h2 class="mt-4">Subscription Checker <span class="badge badge-primary mt-2 mt-lg-0">Last Run: <?php echo $_smarty_tpl->getValue('data')['cron']['subscription'];?>
</span></h2>
            <p class="mt-3">Cron Command:</p>
            <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                <p class="m-0">
                curl -m 300 -s "<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_token");
$_prefixVariable5=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("cron/subscription/".$_prefixVariable5,true);?>
" > /dev/null 2>&1
                </p>
            </div>
            <p class="mt-3">Cron Settings:</p>
            <div class="mt-3">
                <img src="<?php echo site_url;?>
/uploads/system/cron/subscription_checker.png" class="img-fluid" alt="Cron Job">
            </div>
            <h2 class="mt-4">Garbage Cleaner <span class="badge badge-primary mt-2 mt-lg-0">Last Run: <?php echo $_smarty_tpl->getValue('data')['cron']['cleaner'];?>
</span></h2>
            <p class="mt-3">Cron Command:</p>
            <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                <p class="m-0">
                curl -m 300 -s "<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_token");
$_prefixVariable6=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("cron/cleaner/".$_prefixVariable6,true);?>
" > /dev/null 2>&1
                </p>
            </div>
            <p class="mt-3">Cron Settings:</p>
            <div class="mt-3">
                <img src="<?php echo site_url;?>
/uploads/system/cron/cleaner.png" class="img-fluid" alt="Cron Job">
            </div>
            <h2 class="mt-4">Titan Echo <span class="badge badge-primary mt-2 mt-lg-0">Last Run: <?php echo $_smarty_tpl->getValue('data')['cron']['echo'];?>
</span></h2>
            <p class="mt-3">Cron Command:</p>
            <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                <p class="m-0">
                curl -m 180 -s "<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__s')("system_token");
$_prefixVariable7=ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("cron/echo/".$_prefixVariable7,true);?>
" > /dev/null 2>&1
                </p>
            </div>
            <p class="mt-3">Cron Settings:</p>
            <div class="mt-3">
                <img src="<?php echo site_url;?>
/uploads/system/cron/echo.png" class="img-fluid" alt="Cron Job">
            </div>
        </div>
    </div>
</form><?php }
}
