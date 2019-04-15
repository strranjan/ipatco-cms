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
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/companies/list');?>">Companies</a></li>
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
											<h5>Add New Vehicle Company</h5>
										</div>
										<div class="card-block">
											<form method="POST" enctype="multipart/form-data">
												<div class="form-group row">
													<div class="col-sm-2">
														<label class="col-form-label" for="parents">Vehicle Type</label>
													</div>
													<div class="col-sm-10">
														<select size="1" class="form-control" id="parents" name="parents">
														<?php if($types){ foreach($types as $type){ ?>
															<option value="<?=$type['categories_id'];?>" <?=set_value('parents') == $type['categories_id']?'selected':'';?>><?=$type['categories_name'];?></option>
														<?php } } ?>
														</select>
														<div class="col-form-label text-danger"><?=form_error('parents');?></div>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-2">
														<label class="col-form-label" for="title">Name</label>
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
														<button type="submit" class="btn btn-info"><i class="icofont icofont-save"></i> Save Vehicle Company</button>
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
									<h5>Vehicle Models Listing</h5>
								</div>
								<div class="card-block">
									<table id="demo-foo-filtering" class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Icon</th>
												<th>Type</th>
												<th>Company</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if($companies){ $cnt=1; foreach($companies as $company){?>
												<tr>
													<td><?=$cnt++;?></td>
													<td><img class="imgThumbnail" src="<?=base_url('p-contents/uploads/').$company['categories_icon'];?>"></a></td>
													<td><?=getCategoryName($company['categories_parent']);?></a></td>
													<td><?=$company['categories_name'];?></a></td>
													<td><span class="tag tag-danger"> <?=($company['categories_status']==0)?'Inactive':'Active';?></span></td>
													<td>
														<div class="btn-group " role="group">
															<a href="javascript:;" onclick="use_modal('<?= $company['categories_id']; ?>', 'p-admin/vehicles/companies/edit/model')" data-toggle="modal" data-target="#add-modal" class="btn btn-primary btn-sm">
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