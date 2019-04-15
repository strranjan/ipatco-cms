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
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/vehicles/add');?>">Add New</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Add New Vehicle</h5>
								</div>
								<div class="card-block">
									<form method="POST" enctype="multipart/form-data">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_ad_type">Vehicle Ad Type</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="vehicle_ad_type" name="vehicle_ad_type">
													<option value="" <?=set_value('vehicle_ad_type') == ''?'selected':'';?>>Please Select</option>
													<option value="Sell" <?=set_value('vehicle_ad_type') == 'Sell'?'selected':'';?>>Sell</option>
													<option value="Rent" <?=set_value('vehicle_ad_type') == 'Rent'?'selected':'';?>>Rent</option>
												</select>
												<div class="col-form-label text-danger"><?=form_error('vehicle_ad_type');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_type">Vehicle Type</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="vehicle_type" name="vehicle_type" onchange="dynamicSelect('vehicle_type', 'p-admin/vehicles/companies/dynamic', 'vehicle_company')">
													<option value="" <?=set_value('vehicle_type') == ''?'selected':'';?>>Please Select</option>
													<?php if($types){ foreach($types as $type){ ?>
													<option value="<?=$type['categories_id'];?>" <?=set_value('vehicle_type') == $type['categories_id']?'selected':'';?>><?=$type['categories_name'];?></option>
													<?php } } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('vehicle_type');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_company">Company</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="vehicle_company" name="vehicle_company" onchange="dynamicSelect('vehicle_company', 'p-admin/vehicles/models/dynamic', 'vehicle_model')">
													<option value="" <?=set_value('vehicle_company') == ''?'selected':'';?>>Please Select</option>
													<?php if($companies){ foreach($companies as $company){ ?>
													<option value="<?=$company['categories_id'];?>" <?=set_value('vehicle_company') == $company['categories_id']?'selected':'';?>><?=$company['categories_name'];?></option>
													<?php } } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('vehicle_company');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_model">Model</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="vehicle_model" name="vehicle_model">
													<option value="" <?=set_value('vehicle_model') == ''?'selected':'';?>>Please Select</option>
													<?php if($models){ foreach($models as $model){ ?>
													<option value="<?=$model['categories_id'];?>" <?=set_value('vehicle_model') == $model['categories_id']?'selected':'';?>><?=$model['categories_name'];?></option>
													<?php } } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('vehicle_model');?></div>
											</div>
										</div>
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
												<label class="col-form-label" for="description">Description</label>
											</div>
											<div class="col-sm-10">
												<textarea class="form-control summernotes" id="description" name="description"><?=set_value('description');?></textarea>
												<div class="col-form-label text-danger"><?=form_error('description');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2"></div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-info"><i class="icofont icofont-save"></i> Save Vehicle</button>
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