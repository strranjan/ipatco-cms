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
							<li class="breadcrumb-item"><a href="#!">Reading</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Reading Settings</h5>
								</div>
								<div class="card-block">
									<form method="POST">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="post_page">Post Per Page</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="post_page" name="post_page" value="<?=(set_value('post_page'))?(set_value('post_page')):(siteInfo('post-per-page'));?>">
												<div class="col-form-label text-danger"><?=form_error('post_page');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="auto_comment">Auto Approve Comment</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="auto_comment" name="auto_comment">
													<option value="0" <?=(set_value('auto_comment'))?(set_value('auto_comment') == '0'?'selected':''):((siteInfo('auto-approve-comment') == '0')?'selected':'');?>>No</option>
													<option value="1" <?=(set_value('auto_comment'))?(set_value('auto_comment') == '1'?'selected':''):((siteInfo('auto-approve-comment') == '1')?'selected':'');?>>Yes</option>
												</select>
												<div class="col-form-label text-danger"><?=form_error('auto_comment');?></div>
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