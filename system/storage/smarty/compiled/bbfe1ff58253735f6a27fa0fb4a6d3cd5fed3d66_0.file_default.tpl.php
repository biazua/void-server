<?php
/* Smarty version 5.1.0, created on 2024-05-13 13:37:52
  from 'file:_install/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_664217b03dffd7_46054738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbfe1ff58253735f6a27fa0fb4a6d3cd5fed3d66' => 
    array (
      0 => '_install/default.tpl',
      1 => 1712991902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_664217b03dffd7_46054738 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/_install';
?><!DOCTYPE html>
<html lang="en">

<head>
	<link rel="dns-prefetch" href="//fonts.googleapis.com">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="icon" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')("favicon");?>
">

	<title>Installation &middot; Zender</title>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/dashboard/assets/css/fonts/feather/feather.css");?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/css/libs/line-awesome.min.css");?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/css/libs/flag-icon.min.css");?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/dashboard/assets/css/libs/bootstrap.min.css");?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/dashboard/assets/css/style.min.css");?>
" />

	<?php echo '<script'; ?>
>
		window.site_url = "<?php echo site_url;?>
";
	<?php echo '</script'; ?>
>
</head>

<body class="d-flex align-items-center bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-9 my-5">
				<h1 class="display-4 text-center text-white mb-3 install-title">
					Installation
				</h1>

				<!-- Subheading -->
				<p class="text-muted text-center mb-5 install-tagline">
					Please fill-up the form below to install Zender
				</p>

				<!-- Form -->
				<form zender-install>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h2 class="text-uppercase">System</h2>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>
													Site Name
												</label>
												<input type="text" name="site_name" class="form-control" placeholder="eg. Zender">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>
													Protocol
												</label>
												<select name="protocol" class="form-control">
													<option value="http">HTTP</option>
													<option value="https">HTTPS</option>
												</select>
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label>
													Site Description
												</label>
												<input type="text" name="site_desc" class="form-control" placeholder="eg. This is my marketing platform">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label>
													Purchase Code
												</label>
												<input type="text" name="purchase_code" class="form-control" placeholder="eg. pt64c343-c7yq-4f59-853e-h754301675ed">
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h2 class="text-uppercase">Database</h2>
											</div>
										</div>

										<div class="col-md-8">
											<div class="form-group">
												<label>
													Host
												</label>
												<input type="text" name="dbhost" class="form-control" placeholder="eg. localhost" value="localhost">
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label>
													Port
												</label>
												<input type="number" name="dbport" class="form-control" placeholder="eg. 3306" value="3306">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label>
													Name
												</label>
												<input type="text" name="dbname" class="form-control" placeholder="eg. zender_db">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>
													Username
												</label>
												<input type="text" name="dbuser" class="form-control" placeholder="eg. root">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>
													Password
												</label>
												<input type="password" name="dbpass" class="form-control" placeholder="eg. password">
											</div>
										</div>
									</div>
								</div>

								<div class="col-12">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h2 class="text-uppercase">Account</h2>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>
													Email Address
												</label>
												<input type="text" name="email" class="form-control" placeholder="eg. user@mail.com">
											</div>
	
											<div class="form-group">
												<label>
													Password
												</label>
												<input type="text" name="password" class="form-control" placeholder="eg. Password">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>
													Full Name
												</label>
												<input type="text" name="name" class="form-control" placeholder="eg. John Doe">
											</div>
											
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>
															Timezone
														</label>
														<select name="timezone" class="form-control" data-live-search="true">
															<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['timezones'], 'timezone');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('timezone')->value) {
$foreach0DoElse = false;
?>
															<option value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone'));?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone')) == "asia/manila") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')($_smarty_tpl->getValue('timezone'));?>
</option>
															<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>
															Country
														</label>
														<select name="country" class="form-control" data-live-search="true">
															<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('country');
?>
															<option value="<?php echo $_smarty_tpl->getVariable('country')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('country'));?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('country')) == "philippines") {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country');?>
 (<?php echo $_smarty_tpl->getVariable('country')->key;?>
)</option>
															<?php
$_smarty_tpl->setVariable('country', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Submit -->
						<div class="card-footer text-center">
							<button type="submit" class="btn btn-lg btn-primary lift">
								<i class="la la-wrench la-lg"></i> Install
							</button>
						</div>
					</div>
				</form>
			</div>
		</div> <!-- / .row -->

		<div zender-preloader>
			<div class="loadingio loadingio-spinner-ripple-c4xwekkbyc9">
				<div class="ldio-k6xrhuhg6o">
					<div></div>
					<div></div>
				</div>
			</div>
		</div>

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/libs/fetch.min.js");?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			window.lang_alert_attention = "Attention";
			window.lang_js_loader_pleasewait = "Please wait";
			window.alert_position = "topLeft";
			window.color_primary = "#333";
			window.overlap_alert_position = "bottomLeft";

			fetchInject([
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_install/assets/js/install.js");?>
"
			],
			fetchInject([
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/functions.js");?>
"
			],
			fetchInject([
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/libs/pjax.min.js");?>
",
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/libs/waves.min.js");?>
",
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/libs/topbar.min.js");?>
",
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/libs/izitoast.min.js");?>
",
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/libs/bootstrap-select.min.js");?>
",
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/libs/jquery.loading.min.js");?>
"
			],
			fetchInject([
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/dashboard/assets/js/libs/bootstrap.min.js");?>
"
			],
			fetchInject([
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/js/libs/jquery.min.js");?>
",
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/css/libs/waves.min.css");?>
",
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/css/libs/izitoast.min.css");?>
",
				"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("templates/_assets/css/libs/bootstrap-select.min.css");?>
"
			])))));
		<?php echo '</script'; ?>
>
</body>

</html><?php }
}
