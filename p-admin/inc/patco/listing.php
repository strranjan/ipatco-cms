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
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="card">
						<div class="card-header">
							<h5>Vehicles Listing</h5>
						</div>
						<div class="card-block">
							<table id="demo-foo-filtering" class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th data-breakpoints="xs">For</th>
										<th>Title</th>
										<th data-breakpoints="xs">Type</th>
										<th data-breakpoints="xs">Purchased On</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if($vehicles){ $cnt=1; foreach($vehicles as $vehicle){?>
										<tr>
											<td><?=$cnt++;?></td>
											<td><?=$vehicle['vehicles_for'];?></td>
											<td><?=$vehicle['posts_title'];?></a></td>
											<td><?=getCategoryName($vehicle['vehicles_type']);?></td>
											<td><?=$vehicle['vehicles_launched_year'];?></td>
											<td><span class="tag tag-danger"> <?=($vehicle['posts_status']==0)?'Inactive':'Active';?></span></td>
											<td>
												<div class="btn-group " role="group">
													<a href="<?=base_url('p-admin/vehicles/edit/'.$vehicle['posts_id']);?>" class="btn btn-primary btn-sm">
														<i class="icofont icofont-ui-edit"></i>
													</a>
													<a class="btn btn-danger btn-sm" href="<?=base_url('p-admin/vehicles/delete/'.$vehicle['posts_id']);?>">
														<i class="icofont icofont-ui-delete"></i>
													</a>
													<button type="button" class="btn btn-info btn-sm">
														<i class="icofont icofont-info-circle"></i>
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