<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header">
					<div class="page-header-title">
						<h4>Pages</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="<?=site_url('p-admin/dashboard');?>">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/pages/list');?>">Pages</a></li>
							<li class="breadcrumb-item"><a href="javascript:;">Listing</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="card">
						<div class="card-header">
							<h5>Pages Listing</h5>
						</div>
						<div class="card-block">
							<table id="demo-foo-filtering" class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Title</th>
										<th data-breakpoints="xs">Posted By</th>
										<th data-breakpoints="xs">Posted On</th>
										<th data-breakpoints="xs">Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if($pages){ $cnt=1; foreach($pages as $page){?>
										<tr>
											<td><?=$cnt++;?></td>
											<td><?=character_limiter($page['posts_title'],25);?></td>
											<td><?=$page['users_name'];?></a></td>
											<td><?=$page['posts_created_on'];?></td>
											<td><span class="tag tag-danger"> <?=($page['posts_status']==0)?'Inactive':'Active';?></span></td>
											<td>
												<div class="btn-group " role="group">
													<a href="<?=base_url('p-admin/pages/edit/'.$page['posts_id']);?>" class="btn btn-primary btn-sm">
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