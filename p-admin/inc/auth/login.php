<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Login | iPatco CMS</title>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="#">
		<meta name="keywords" content="Flat ui, Admin, Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
		<meta name="author" content="#">
		<link rel="icon" href="<?= base_url('p-admin/assets/images/favicon.ico'); ?>" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/plugins/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-admin/assets/icon/themify-icons/themify-icons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/plugins/pnotify/css/pnotify.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/plugins/pnotify/css/pnotify.brighttheme.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/plugins/pnotify/css/pnotify.buttons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/plugins/pnotify/css/pnotify.history.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/plugins/pnotify/css/pnotify.mobile.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/plugins/pnotify/notify.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-admin/assets/css/simple-line-icons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-admin/assets/css/ionicons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-admin/assets/css/linearicons.css.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-admin/assets/icon/icofont/css/icofont.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-admin/assets/css/style.css'); ?>">
		<script>var base_url = "<?=base_url();?>";</script>
	</head>
	<body class="fix-menu">
		<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="login-card card-block auth-body m-auto">
							<div class="formLogin">
								<form class="md-float-material ajaxSubmitForm" method="post" if0="Login Failed" if1="Login Successful" if2="User not found" if3="User not activated" if4="User is Blocked" if5="User removed" if6="Invalid Password" redirect="p-admin/dashboard" action="p-admin/login.php">
									<div class="text-center">
										<img src="<?= base_url('p-admin/assets/images/logo.png'); ?>" alt="logo.png">
									</div>
									<div class="auth-box">
										<div class="row m-b-20">
											<div class="col-md-12">
												<h3 class="text-left txt-primary">Sign In</h3>
											</div>
										</div>
										<hr />
										<div class="input-group">
											<input type="email" class="form-control" placeholder="Your Email Address" name="email">
											<span class="md-line"></span>
										</div>
										<div class="input-group">
											<input type="password" class="form-control" placeholder="Password" name="password">
											<span class="md-line"></span>
										</div>
										<div class="row m-t-25 text-left">
											<div class="col-sm-7 col-xs-12">
												<div class="checkbox-fade fade-in-primary">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
														<span class="text-inverse">Remember me</span>
													</label>
												</div>
											</div>
											<div class="col-sm-5 col-xs-12 forgot-phone text-right">
												<a href="javascript:void(0);" class="text-right f-w-600 text-inverse clickForgotPassword"> Forgot Your Password?</a>
											</div>
										</div>
										<div class="row m-t-30">
											<div class="col-md-12">
												<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-9">
												<p class="text-inverse text-left m-b-0"><?=base64_decode('UHJhc2hhbnQgUmlqYWwgQ3JlYXRpb24=');?></p>
												<p class="text-inverse text-left"><b>&copy; <?=date('Y');?> | iPatco Inc.</b></p>
											</div>
											<div class="col-3">
												<img src="<?= base_url('p-admin/assets/images/auth/Logo-small-bottom.png'); ?>" alt="small-logo.png">
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="formForgot" style="display: none;">
								<form class="md-float-material ajaxSubmitFormX" method="post" if0="Login Failed" if1="Login Successful" if2="User not found" if3="User not activated" if4="User is Blocked" if5="User removed" if6="Invalid Password" redirect="p-admin/dashboard" action="p-admin/login.php">
									<div class="text-center">
										<img src="<?= base_url('p-admin/assets/images/logo.png'); ?>" alt="logo.png">
									</div>
									<div class="auth-box">
										<div class="row m-b-20">
											<div class="col-md-8">
												<h3 class="text-left txt-primary">Password Reset</h3>
											</div>
											<div class="col-md-4">
												<h3 class="text-right txt-primary"><a href="javascript:void(0);" class="backToLogin">Back to Login</a></h3>
											</div>
										</div>
										<hr />
										<div class="input-group">
											<input type="email" class="form-control" placeholder="Your Email Address" name="email" onclick="alert('Password Reset option is Currently Unavailable');" readonly>
											<span class="md-line"></span>
										</div>
										<div class="row m-t-30">
											<div class="col-md-12">
												<button type="button" onclick="alert('Password Reset option is Currently Unavailable');" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset my Password</button>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-9">
												<p class="text-inverse text-left m-b-0"><?=base64_decode('UHJhc2hhbnQgUmlqYWwgQ3JlYXRpb24=');?></p>
												<p class="text-inverse text-left"><b>&copy; <?=date('Y');?> | iPatco Inc.</b></p>
											</div>
											<div class="col-3">
												<img src="<?= base_url('p-admin/assets/images/auth/Logo-small-bottom.png'); ?>" alt="small-logo.png">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/jquery/js/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/jquery-ui/js/jquery-ui.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/popper.js/js/popper.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/jquery-slimscroll/js/jquery.slimscroll.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/modernizr/js/modernizr.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/modernizr/js/css-scrollbars.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/i18next/js/i18next.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/i18next-xhr-backend/js/i18nextXHRBackend.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js'); ?>"></script>
		<script>var site_title = "<?='Admin Login';?>";</script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.desktop.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.buttons.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.confirm.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.callbacks.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.animate.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.history.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.mobile.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/js/pnotify.nonblock.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/pnotify/notify.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/jquery-i18next/js/jquery-i18next.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('p-admin/assets/custom.js'); ?>"></script>
	</body>
</html>