<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header">
					<div class="page-header-title">
						<h4>Settings</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="index.html">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Settings</a></li>
							<li class="breadcrumb-item"><a href="#!">Mail</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Mail Settings</h5>
								</div>
								<div class="card-block">
									<form method="POST">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="mail_server">Mail Server</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="mail_server" name="mail_server" value="<?=(set_value('mail_server'))?(set_value('mail_server')):(siteInfo('email-server'));?>">
												<div class="col-form-label text-danger"><?=form_error('mail_server');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="port">Port</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="port" name="port" value="<?=(set_value('port'))?(set_value('port')):(siteInfo('email-port'));?>">
												<div class="col-form-label text-danger"><?=form_error('port');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="email">Login Name</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="email" name="email" value="<?=(set_value('email'))?(set_value('email')):(siteInfo('email-login'));?>">
												<div class="col-form-label text-danger"><?=form_error('email');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="password">Password</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="password" name="password" value="<?=(set_value('password'))?(set_value('password')):(siteInfo('email-password'));?>">
												<div class="col-form-label text-danger"><?=form_error('password');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2"></div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-info"><i class="icofont icofont-save"></i> Save Changes</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>