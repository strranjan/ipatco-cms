<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header">
					<div class="page-header-title">
						<h4>Vehicles</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="<?=site_url('p-admin/dashboard');?>">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/vehicles/list');?>">Vehicles</a></li>
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/vehicles/types/list');?>">Types</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="page-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-header">
											<h5>Add New Vehicle Type</h5>
										</div>
										<div class="card-block">
											<form method="POST" enctype="multipart/form-data">
												<div class="form-group row">
													<div class="col-sm-2">
														<label class="col-form-label" for="title">Title</label>
													</div>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="title" name="title" value="<?=set_value('title');?>">
														<div class="col-form-label text-danger"><?=form_error('title');?></div>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-2">
														<label class="col-form-label" for="userfile">Icon</label>
													</div>
													<div class="col-sm-10">
														<input type="file" class="form-control" id="userfile" name="userfile" value="">
														<div class="col-form-label text-danger"><?=form_error('userfile');?></div>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-2"></div>
													<div class="col-sm-10">
														<button type="submit" class="btn btn-info"><i class="icofont icofont-save"></i> Save Vehicle Type</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="page-body">
							<div class="card">
								<div class="card-header">
									<h5>Vehicle Types Listing</h5>
								</div>
								<div class="card-block">
									<table id="demo-foo-filtering" class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Icon</th>
												<th>Type</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if($users){ $cnt=1; foreach($users as $user){?>
												<tr>
													<td><?=$cnt++;?></td>
													<td><img class="imgThumbnail" src="<?=base_url('p-contents/uploads/').$user['categories_icon'];?>"></a></td>
													<td><?=$user['categories_name'];?></a></td>
													<td><span class="tag tag-danger"> <?=($user['categories_status']==0)?'Inactive':'Active';?></span></td>
													<td>
														<div class="btn-group " role="group">
															<!--<a href="javascript:;" onclick="use_modal('<?= $user['categories_id']; ?>', 'p-admin/vehicles/types/edit/model')" data-toggle="modal" data-target="#add-modal" class="btn btn-primary btn-sm">-->
															<a href="<?= base_url('p-admin/vehicles/types/edit/').$user['categories_id']; ?>" class="btn btn-primary btn-sm">
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
	</div>
</div>
<div class="modal fade md-effect-14" id="add-modal">
	
</div>