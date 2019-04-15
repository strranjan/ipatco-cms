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
							<li class="breadcrumb-item"><a href="#!">General</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>General Settings</h5>
								</div>
								<div class="card-block">
									<form method="POST">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="site_title">Site Title</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="site_title" name="site_title" value="<?=(set_value('site_title'))?(set_value('site_title')):(siteInfo('title'));?>">
												<div class="col-form-label text-danger"><?=form_error('site_title');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="tagline">Tagline</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="tagline" name="tagline" value="<?=(set_value('tagline'))?(set_value('tagline')):(siteInfo('tagline'));?>">
												<div class="col-form-label text-danger"><?=form_error('tagline');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="email">Email</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="email" name="email" value="<?=(set_value('email'))?(set_value('email')):(siteInfo('email'));?>">
												<div class="col-form-label text-danger"><?=form_error('email');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for=""> </label>
											</div>
											<div class="col-sm-3">
												<div class="checkbox-fade fade-in-info">
													<label>
														<input type="checkbox" value="1" name="pagess" <?=(set_value('pagess'))?((set_value('pagess')=='1')?'checked':''):((siteInfo('show-page')=='1')?'checked':'');?>>
														<span class="cr">
															<i class="cr-icon icofont icofont-ui-check txt-info"></i>
														</span> <span>Pages</span>
													</label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox-fade fade-in-info">
													<label>
														<input type="checkbox" value="1" name="userss" <?=(set_value('userss'))?((set_value('userss')=='1')?'checked':''):((siteInfo('show-user')=='1')?'checked':'');?>>
														<span class="cr">
															<i class="cr-icon icofont icofont-ui-check txt-info"></i>
														</span> <span>Users</span>
													</label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox-fade fade-in-info">
													<label>
														<input type="checkbox" value="1" name="blogss" <?=(set_value('blogss'))?((set_value('blogss')=='1')?'checked':''):((siteInfo('show-blog')=='1')?'checked':'');?>>
														<span class="cr">
															<i class="cr-icon icofont icofont-ui-check txt-info"></i>
														</span> <span>Blogs</span>
													</label>
												</div>
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