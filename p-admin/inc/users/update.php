<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header">
					<div class="page-header-title">
						<h4>Users</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="index.html">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Users</a></li>
							<li class="breadcrumb-item"><a href="#!">Edit User</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Edit User</h5>
								</div>
								<div class="card-block">
									<form method="POST">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="full_name">Full Name</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="full_name" name="full_name" value="<?=(set_value('full_name'))?(set_value('full_name')):($user['users_name']);?>">
												<div class="col-form-label text-danger"><?=form_error('full_name');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="email">Email</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="email" name="email" value="<?=(set_value('email'))?(set_value('email')):($user['users_email']);?>">
												<div class="col-form-label text-danger"><?=form_error('email');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="phone_number">Phone Number</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="phone_number" name="phone_number" value="<?=(set_value('phone_number'))?(set_value('phone_number')):($user['users_phone']);?>">
												<div class="col-form-label text-danger"><?=form_error('phone_number');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="user_role">User Role</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="user_role" name="user_role">
													<option value="121" <?=(set_value('user_role'))?(set_value('user_role') == '121'?'selected':''):(($user['users_role'] == '121')?'selected':'');?>>Admin</option>
													<option value="1" <?=(set_value('user_role'))?(set_value('user_role') == '1'?'selected':''):(($user['users_role'] == '1')?'selected':'');?>>User</option>
												</select>
												<div class="col-form-label text-danger"><?=form_error('user_role');?></div>
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