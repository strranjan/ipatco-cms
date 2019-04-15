<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php auth(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$title;?> | iPatco CMS</title>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta name="description" content="#">
		<meta name="keywords" content="flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
		<meta name="author" content="Prashant Rijal @ iPatco Labs">
		<link rel="icon" href="<?= base_url(MyAdmin.'assets/images/favicon.ico'); ?>" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/icon/themify-icons/themify-icons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/icon/icofont/css/icofont.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/flag-icon/flag-icon.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/icon/SVG-animated/svg-weather.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/menu-search/css/component.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/dashboard/horizontal-timeline/css/style.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/dashboard/amchart/css/amchart.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/widget/calender/pignose.calendar.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/css/style.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/foo-table/css/footable.bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/foo-table/css/jquery.dataTables.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/foo-table/css/footable.standalone.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/summernote/summernote.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/pnotify/css/pnotify.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/pnotify/css/pnotify.brighttheme.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/pnotify/css/pnotify.buttons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/pnotify/css/pnotify.history.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/pnotify/css/pnotify.mobile.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/pnotify/notify.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyContents.'plugins/jquery.steps/css/jquery.steps.css'); ?>">
		<link href="<?= base_url(MyContents.'plugins/jquery.filer/css/jquery.filer.css'); ?>" type="text/css" rel="stylesheet" />
		<link href="<?= base_url(MyContents.'plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css'); ?>" type="text/css" rel="stylesheet" />

		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/css/linearicons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/css/simple-line-icons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/css/ionicons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/css/jquery.mCustomScrollbar.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url(MyAdmin.'assets/custom.css'); ?>">
		<script> var base_url = "<?= base_url();?>"; var post_id = ''; </script>
	</head>
	<body>
		<!-- 
		<div class="theme-loader">
			<div class="ball-scale">
				<div></div>
			</div>
		</div>
		-->
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<nav class="navbar header-navbar pcoded-header">
					<div class="navbar-wrapper">
						<div class="navbar-logo" data-navbar-theme="theme4">
							<a class="mobile-menu" id="mobile-collapse" href="javascript:void(0);">
								<i class="ti-menu"></i>
							</a>
							<a class="mobile-search morphsearch-search" href="javascript:void(0);">
								<i class="ti-search"></i>
							</a>
							<a href="<?= '';//base_url(MyAdmin.'dashboard');?>">
								<img class="img-fluid" src="<?= base_url(MyAdmin.'assets/'); ?>images/logo.png" alt="Theme-Logo" />
							</a>
							<a class="mobile-options">
								<i class="ti-more"></i>
							</a>
						</div>
						<div class="navbar-container container-fluid">
							<div>
								<ul class="nav-left">
									<li>
										<div class="sidebar_toggle">
											<a href="javascript:void(0)">
												<i class="ti-menu"></i>
											</a>
										</div>
									</li>
									<li>
										<a href="javascript:void(0);" onclick="javascript:toggleFullScreen()">
											<i class="ti-fullscreen"></i>
										</a>
									</li>
								</ul>
								<ul class="nav-right">
									<li class="user-profile header-notification">
										<a href="javascript:void(0);">
											<img src="<?= base_url(MyUploads.get_cookie('user_profile')); ?>" alt="Profile-Image">
											<span><?=get_cookie('user_name');?></span>
											<i class="ti-angle-down"></i>
										</a>
										<ul class="show-notification profile-notification">
											<li>
												<a href="javascript:void(0);">
													<i class="ti-settings"></i> Settings
												</a>
											</li>
											<li>
												<a href="user-profile.html">
													<i class="ti-user"></i> Profile
												</a>
											</li>
											<li>
												<a href="email-inbox.html">
													<i class="ti-email"></i> My Messages
												</a>
											</li>
											<li>
												<a href="<?=site_url('p-logout.php/lock');?>">
													<i class="ti-lock"></i> Lock Screen
												</a>
											</li>
											<li>
												<a href="<?=site_url('p-logout.php');?>">
													<i class="ti-layout-sidebar-left"></i> Logout
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>

				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<nav class="pcoded-navbar">
							<div class="sidebar_toggle"><a href="javascript:void(0);"><i class="icon-close icons"></i></a></div>
							<div class="pcoded-inner-navbar main-menu">
								<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
								<ul class="pcoded-item pcoded-left-item">
									<?php
										$scanRoutes = scandir(MyAdmin.'menus');
										foreach($scanRoutes as $file){
											$ext = new SplFileInfo($file);
											$ext = $ext->getExtension();
											$priority = explode('-', $file);
											if(is_numeric($priority[0]) && $ext == 'php'){
												include(MyAdmin.'menus/'.$file);
											}
										}
									?>
								</ul>
							</div>
						</nav>


						<!-- Page Here -->
						<?php admin(false,'inc/'.$page); ?>
						<!-- Page Here -->


					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/jquery/js/jquery.min.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/jquery-ui/js/jquery-ui.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/popper.js/js/popper.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/jquery-slimscroll/js/jquery.slimscroll.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/modernizr/js/modernizr.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/modernizr/js/css-scrollbars.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/moment/js/moment.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/widget/calender/pignose.calendar.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/classie/js/classie.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/c3/js/c3.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/chart/knob/jquery.knob.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/widget/jquery.sparkline.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/d3/js/d3.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/rickshaw/js/rickshaw.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/raphael/js/raphael.min.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/morris.js/js/morris.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/todo/todo.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/chart/float/jquery.flot.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/chart/float/jquery.flot.categories.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/chart/float/jquery.flot.pie.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/foo-table/js/footable.min.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/foo-table/js/foo-table-custom.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/chart/echarts/js/echarts-all.js'); ?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/dashboard/horizontal-timeline/js/main.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/dashboard/amchart/js/amcharts.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/dashboard/amchart/js/serial.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/dashboard/amchart/js/light.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/dashboard/amchart/js/custom-amchart.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/i18next/js/i18next.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/dashboard/custom-dashboard.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/summernote/summernote.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/summernote/custom-note.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.desktop.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.buttons.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.confirm.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.callbacks.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.animate.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.history.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.mobile.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/js/pnotify.nonblock.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/pnotify/notify.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/jquery.filer/js/jquery.filer.min.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/filer/custom-filer.js'); ?>" type="text/javascript"></script>
		<script src="<?= base_url(MyContents.'plugins/filer/jquery.fileuploads.init.js'); ?>" type="text/javascript"></script>

		<script src="<?= base_url(MyContents.'plugins/jquery.cookie/js/jquery.cookie.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/jquery.steps/js/jquery.steps.js'); ?>"></script>
		<script src="<?= base_url(MyContents.'plugins/jquery-validation/js/jquery.validate.js'); ?>"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
		<script type="text/javascript" src="<?= base_url(MyContents.'plugins/form-validation/validate.js'); ?>"></script>

		<script src="<?= base_url(MyContents.'plugins/forms-wizard-validation/form-wizard.js'); ?>"></script>
		<script>var site_title = "<?=$title;?>";</script>
		<script type="text/javascript" src="<?= base_url(MyAdmin.'assets/js/script.js'); ?>"></script>
		<script src="<?= base_url(MyAdmin.'assets/js/pcoded.min.js'); ?>"></script>
		<script src="<?= base_url(MyAdmin.'assets/js/demo-12.js'); ?>"></script>
		<script src="<?= base_url(MyAdmin.'assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
		<script src="<?= base_url(MyAdmin.'assets/js/jquery.mousewheel.min.js'); ?>"></script>
		<script src="<?= base_url(MyAdmin.'assets/custom.js'); ?>"></script>
	</body>
</html>