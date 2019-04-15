<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mash Able - Premium Admin Template</title>
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
		<link rel="icon" href="<?= base_url('p-contents/themes/admin/assets/images/favicon.ico'); ?>" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/plugins/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/themes/admin/assets/icon/themify-icons/themify-icons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/themes/admin/assets/icon/icofont/css/icofont.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('p-contents/themes/admin/assets/css/style.css'); ?>">
	</head>
	<body class="fix-menu">
		<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="login-card card-block auth-body m-auto">
							<form class="md-float-material">
								<div class="text-center">
									<img src="<?= base_url('p-contents/themes/admin/assets/images/logo.png'); ?>" alt="logo.png">
								</div>
								<div class="auth-box">
									<div class="row m-b-20">
										<div class="col-md-12">
											<h3 class="text-left txt-primary">Forgot Password</h3>
										</div>
									</div>
									<hr />
									<div class="input-group">
										<input type="email" class="form-control" placeholder="Your Email Address" name="email">
										<span class="md-line"></span>
									</div>
									<div class="row m-t-30">
										<div class="col-md-12">
											<button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset Password</button>
										</div>
									</div>
									<hr />
									<div class="row">
										<div class="col-9">
											<p class="text-inverse text-left m-b-0"><?=base64_decode('UHJhc2hhbnQgUmlqYWwgQ3JlYXRpb24=');?></p>
											<p class="text-inverse text-left"><b>&copy; <?=date('Y');?> | iPatco Inc.</b></p>
										</div>
										<div class="col-3">
											<img src="<?= base_url('p-contents/themes/admin/assets/images/auth/Logo-small-bottom.png'); ?>" alt="small-logo.png">
										</div>
									</div>
								</div>
							</form>
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
		<script type="text/javascript" src="<?= base_url('p-contents/plugins/jquery-i18next/js/jquery-i18next.min.js'); ?>"></script>
	</body>
</html>