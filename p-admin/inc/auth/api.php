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
								<a href="<?=site_url('p-admin/dashboard');?>">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/users/list');?>">Users</a></li>
							<li class="breadcrumb-item"><a href="javascript:;">API Token</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Generate API Token</h5>
								</div>
								<div class="card-block">
									<form method="POST">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="user">Choose User</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="user" name="user">
													<option value="">Please Choose</option>
													<?php foreach($users as $user){ ?>
														<option value="<?=$user['users_id'];?>" <?=set_value('user') == '121'?"selected":"";?>><?=($user['users_name'] == "")?($user['users_email']):($user['users_name'].' ( '.$user['users_email'].' )');?></option>';
													<?php } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('user');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="api_token">API Token</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="api_token" name="api_token" value="<?=(set_value('api_token') == "")?('p_'.random_string('alnum', 25)):set_value('api_token');?>" readonly>
												<div class="col-form-label text-danger"><?=form_error('api_token');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="valid_for">Valid For</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="valid_for" name="valid_for" value="<?=set_value('valid_for');?>">
												<div class="col-form-label text-danger"><?=form_error('valid_for');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="activate">Activate</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="activate" name="activate">
													<option value="1" <?=set_value('activate') == '1'?'selected':'';?>>Yes</option>
													<option value="0" <?=set_value('activate') == '0'?'selected':'';?>>No</option>
												</select>
												<div class="col-form-label text-danger"><?=form_error('activate');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2"></div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-info"><i class="icofont icofont-save"></i> Save API Token</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>All Generated API Tokens</h5>
								</div>
								<div class="card-block">
									<table id="demo-foo-filtering" class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>User</th>
												<th data-breakpoints="xs">Token</th>
												<th data-breakpoints="xs">Status</th>
												<th data-breakpoints="xs">Valid For</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if($apis){ $cnt=1; foreach($apis as $api){?>
												<tr>
													<td><?=$cnt++;?></td>
													<td><?=$api['users_name'].' ('.$api['users_email'].')';?></td>
													<td><?=$api['api_token'];?></a></td>
													<td><span class="tag tag-danger"> <?=($api['api_authorized']==0)?'Unauthorized':'Authorized';?></span></td>
													<td><?=$api['api_valid'];?></td>
													<td>
														<div class="btn-group " role="group">
															<a href="<?=site_url('p-admin/users/api-token/delete/'.$api['api_id'].'/'.$api['api_token']);?>" class="btn btn-danger btn-sm">
																<i class="icofont icofont-ui-delete"></i>
															</a>
														</div>
													</td>
												</tr>
											<?php } } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>