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
								<a href="">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="">Users</a></li>
							<li class="breadcrumb-item"><a href="">Listing</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="card">
						<div class="card-header">
							<h5>Users Listing</h5>
						</div>
						<div class="card-block">
							<table id="demo-foo-filtering" class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th data-breakpoints="xs">Email</th>
										<th data-breakpoints="xs">Phone</th>
										<th data-breakpoints="xs">Role</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if($users){ $cnt=1; foreach($users as $user){?>
										<tr>
											<td><?=$cnt++;?></td>
											<td><?=$user['users_name'];?></a></td>
											<td><?=$user['users_email'];?></td>
											<td><?=$user['users_phone'];?></td>
											<td><?=($user['users_role']==121)?'Admin':'User';?></td>
											<td><span class="tag tag-danger"> <?=($user['users_status']==0)?'Inactive':'Active';?></span></td>
											<td>
												<div class="btn-group " role="group">
													<a href="<?=base_url('p-admin/users/edit/'.$user['users_id']);?>" class="btn btn-primary btn-sm">
														<i class="icofont icofont-ui-edit"></i>
													</a>
													<button type="button" class="btn btn-danger btn-sm">
														<i class="icofont icofont-ui-delete"></i>
													</button>
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