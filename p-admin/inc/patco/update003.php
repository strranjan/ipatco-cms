<script>
	var post_id = "<?=$id;?>";
</script>
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
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/vehicles/edit/'.$id);?>">Edit Vehicle</a></li>
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/vehicles/edit/additional/'.$id.'/images');?>">Images</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Upload Vehicle's Images</h5>
									<div class="card-header-right">
										<i><a href="<?=site_url('p-admin/vehicles/edit/'.$id);?>">Edit Vehicle</a></i>
										<i><a href="<?=site_url('p-admin/vehicles/edit/additional/'.$id);?>">Additional Info</a></i>
										<i><a href="<?=site_url('p-admin/vehicles/edit/additional/'.$id.'/images');?>">Images</a></i>
									</div>
								</div>
								<div class="card-block">
									<input type="file" name="userfile[]" id="filer_input1" multiple="multiple">
								</div>
							</div>
							<?php if($files){  ?>
							<div class="card">
								<div class="card-header">
									<h5>Vehicle's Gallery</h5>
								</div>
								<div class="card-block">
									<div class="jFiler jFiler-theme-dragdropbox">
										<div class="jFiler-items jFiler-row">
											<ul class="jFiler-items-list jFiler-items-grid">
											<?php foreach($files as $file){ ?>
												<li class="jFiler-item" data-jfiler-index="1" style="">
													<div class="jFiler-item-container">
														<div class="jFiler-item-inner">
															<div class="jFiler-item-thumb">
																<div class="jFiler-item-thumb-image">
																	<img src="<?=base_url(MyUploads.$file['images_image']);?>" draggable="false">
																</div>
															</div>
															<div class="jFiler-item-assets jFiler-row">
																<ul class="list-inline pull-right">
																	<li><a class="icon-jfi-trash" href=""></a></li>
																</ul>
															</div>
														</div>
													</div>
												</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>