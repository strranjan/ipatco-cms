<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header">
					<div class="page-header-title">
						<h4>Contact Us Data</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="<?=site_url('p-admin/dashboard');?>">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/contact-data');?>">Contact Us Data</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="card">
						<div class="card-header">
							<h5>Contact Us Data</h5>
						</div>
						<div class="card-block">
							<table id="demo-foo-filtering" class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th data-breakpoints="xs">Email</th>
										<th data-breakpoints="xs">Phone</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if($contacts){ $cnt=1; foreach($contacts as $contact){?>
										<tr>
											<td><?=$cnt++;?></td>
											<td><?=$contact['contact_name'];?></a></td>
											<td><?=$contact['contact_email'];?></td>
											<td><?=$contact['contact_phone'];?></td>
											<td><span class="tag tag-danger"> <?=($contact['contact_status']==0)?'Not Read':'Read';?></span></td>
											<td>
												<div class="btn-group " role="group">
													<button type="button" onclick="use_modal('<?=$contact['contact_id'];?>', 'p-admin/contact-single');" class="btn btn-info btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="icofont icofont-eye"></i></button>
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


<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Modal Heading</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" id="add-modal">
				Please Wait while processing...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>