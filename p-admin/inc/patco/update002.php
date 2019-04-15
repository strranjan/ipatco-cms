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
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/vehicles/edit/additional/'.$id);?>">Additional Information</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Vehicle's Additional Information</h5>
									<div class="card-header-right">
										<i><a href="<?=site_url('p-admin/vehicles/edit/'.$id);?>">Edit Vehicle</a></i>
										<i><a href="<?=site_url('p-admin/vehicles/edit/additional/'.$id);?>">Additional Info</a></i>
										<i><a href="<?=site_url('p-admin/vehicles/edit/additional/'.$id.'/images');?>">Images</a></i>
									</div>
								</div>
								<div class="card-block">
									<form method="POST" enctype="multipart/form-data">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="fuel_type">Fuel Type</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="fuel_type" name="fuel_type">
													<option value="" <?=set_value('fuel_type') == ''?'selected':'';?>>Please Select</option>
													<?php if($fuels){ foreach($fuels as $fuel){ ?>
													<option value="<?=$fuel;?>" <?=set_value('fuel_type') == $fuel?'selected':(($edit['vehicles_fuel'] == $fuel)?'selected':'');?>><?=$fuel;?></option>
													<?php } } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('fuel_type');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="body_type">Body Type</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="body_type" name="body_type">
													<option value="" <?=set_value('body_type') == ''?'selected':'';?>>Please Select</option>
													<?php if($bodies){ foreach($bodies as $body){ ?>
													<option value="<?=$body;?>" <?=set_value('body_type') == $body?'selected':(($edit['vehicles_body'] == $body)?'selected':'');?>><?=$body;?></option>
													<?php } } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('body_type');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="transmission_type">Transmission Type</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="transmission_type" name="transmission_type">
													<option value="" <?=set_value('transmission_type') == ''?'selected':'';?>>Please Select</option>
													<?php if($transmissions){ foreach($transmissions as $transmission){ ?>
													<option value="<?=$transmission;?>" <?=set_value('transmission_type') == $transmission?'selected':(($edit['vehicles_transmission'] == $transmission)?'selected':'');?>><?=$transmission;?></option>
													<?php } } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('transmission_type');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="color">Color</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="color" name="color">
													<option value="" <?=set_value('color') == ''?'selected':'';?>>Please Select</option>
													<?php if($colors){ foreach($colors as $color){ ?>
													<option value="<?=$color;?>" <?=set_value('color') == $color?'selected':(($edit['vehicles_color'] == $color)?'selected':'');?>><?=$color;?></option>
													<?php } } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('color');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_ownership">Ownership</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="vehicle_ownership" name="vehicle_ownership">
													<option value="" <?=set_value('vehicle_ownership') == ''?'selected':'';?>>Please Select</option>
													<option value="First Hand" <?=set_value('vehicle_ownership') == 'First Hand'?'selected':(($edit['vehicles_ownership'] == 'First Hand')?'selected':'');?>>First Hand</option>
													<option value="Second Hand" <?=set_value('vehicle_ownership') == 'Second Hand'?'selected':(($edit['vehicles_ownership'] == 'Second Hand')?'selected':'');?>>Second Hand</option>
													<option value="Third Hand" <?=set_value('vehicle_ownership') == 'Third Hand'?'selected':(($edit['vehicles_ownership'] == 'Third Hand')?'selected':'');?>>Third Hand</option>
													<option value="Above Fourth Hand" <?=set_value('vehicle_ownership') == 'Above Fourth Hand'?'selected':(($edit['vehicles_ownership'] == 'Above Fourth Hand')?'selected':'');?>>Above Fourth Hand</option>
												</select>
												<div class="col-form-label text-danger"><?=form_error('vehicle_ownership');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_engine">Engine Displacement in CC</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="vehicle_engine" name="vehicle_engine" value="<?=set_value('vehicle_engine')?set_value('vehicle_engine'):($edit['vehicles_engine']);?>">
												<div class="col-form-label text-danger"><?=form_error('vehicle_engine');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_varient">Vehicle Varient</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="vehicle_varient" name="vehicle_varient" value="<?=set_value('vehicle_varient')?set_value('vehicle_varient'):($edit['vehicles_varient']);?>">
												<div class="col-form-label text-danger"><?=form_error('vehicle_varient');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_insurance">Insurance Till</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="vehicle_insurance" name="vehicle_insurance" value="<?=set_value('vehicle_insurance')?set_value('vehicle_insurance'):($edit['vehicles_insurance']);?>">
												<div class="col-form-label text-danger"><?=form_error('vehicle_insurance');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_km_driven">Kilometer Driven</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="vehicle_km_driven" name="vehicle_km_driven" value="<?=set_value('vehicle_km_driven')?set_value('vehicle_km_driven'):($edit['vehicles_km']);?>">
												<div class="col-form-label text-danger"><?=form_error('vehicle_km_driven');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_year">Purchased Year</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="vehicle_year" name="vehicle_year">
													<option value="" <?=set_value('vehicle_year') == ''?'selected':'';?>>Please Select</option>
													<?php for($year = Date('Y'); $year >= $pYear ; $year--){ ?>
													<option value="<?=$year;?>" <?=set_value('vehicle_year') == $year?'selected':(($edit['vehicles_launched_year'] == $year)?'selected':'');?>><?=$year;?></option>
													<?php } ?>
												</select>
												<div class="col-form-label text-danger"><?=form_error('vehicle_year');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="vehicle_price">Price Expected</label>
											</div>
											<div class="col-sm-10">
												<input type="number" max="<?=$price;?>" class="form-control" id="vehicle_price" name="vehicle_price" value="<?=set_value('vehicle_price')?set_value('vehicle_price'):($edit['vehicles_price']);?>">
												<div class="col-form-label text-danger"><?=form_error('vehicle_price');?></div>
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