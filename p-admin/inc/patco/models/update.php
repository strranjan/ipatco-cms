<div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-body">
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Edit Vehicle Model</h5>
								<a href="<?=base_url('p-admin/vehicles/models/list');?>" class="close">
									<span aria-hidden="true">&times;</span>
								</a>
							</div>
							<div class="card-block">
								<form method="POST" action="<?=base_url('p-admin/vehicles/models/edit/'.$model['categories_id']);?>">
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="types">Vehicle Type</label>
											<select size="1" class="form-control" id="types" name="types" onchange="dynamicSelect('types', 'p-admin/vehicles/companies/dynamic', 'parents')">
												<option value="">Please Select</option>
											<?php if($types){ foreach($types as $type){ ?>
												<option value="<?=$type['categories_id'];?>" <?=$typeSel == $type['categories_id']?'selected':'';?>><?=$type['categories_name'];?></option>
											<?php } } ?>
											</select>
											<div class="col-form-label text-danger"><?=form_error('types');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="parents">Company</label>
											<select size="1" class="form-control" id="parents" name="parents">
											<?php if($companies){ foreach($companies as $company){ ?>
												<option value="<?=$company['categories_id'];?>" <?=$model['categories_parent'] == $company['categories_id']?'selected':'';?>><?=$company['categories_name'];?></option>
											<?php } } ?>
											</select>
											<div class="col-form-label text-danger"><?=form_error('parents');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="title">Name</label>
											<input type="text" class="form-control" id="title" name="title" value="<?=(set_value('title'))?(set_value('title')):($model['categories_name']);?>">
											<div class="col-form-label text-danger"><?=form_error('title');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="slug">Slug</label>
											<input type="text" class="form-control slugInput" id="slug" name="slug" value="<?=(set_value('slug'))?(set_value('slug')):($model['categories_slug']);?>">
											<div class="col-form-label text-danger"><?=form_error('slug');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="launcled_year">Launched Year</label>
											<input type="hidden" name="arrayKey[]" value="_vehicle_launcled_year">
											<input type="text" class="form-control" id="launcled_year" name="arrayValue[]" value="<?=(set_value('arrayValue[0]'))?(set_value('arrayValue[0]')):(CategoriesMeta($model['categories_id'], '_vehicle_launcled_year'));?>">
											<div class="col-form-label text-danger"><?=form_error('arrayValue[0]');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="colour">Colors</label>
											<input type="hidden" name="arrayKey[]" value="_vehicle_colour">
											<textarea class="form-control" id="colour" name="arrayValue[]" placeholder="One per line"><?=(set_value('arrayValue[1]'))?(set_value('arrayValue[1]')):(CategoriesMeta($model['categories_id'], '_vehicle_colour'));?></textarea>
											<div class="col-form-label text-danger"><?=form_error('arrayValue[1]');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="price">New Vehicle Price</label>
											<input type="hidden" name="arrayKey[]" value="_vehicle_price">
											<input type="text" class="form-control" id="price" name="arrayValue[]" value="<?=(set_value('arrayValue[2]'))?(set_value('arrayValue[2]')):(CategoriesMeta($model['categories_id'], '_vehicle_price'));?>">
											<div class="col-form-label text-danger"><?=form_error('arrayValue[2]');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="userfile">Icon</label>
											<input type="file" class="form-control" id="userfile" name="userfile" value="">
											<div class="col-form-label text-danger"><?=form_error('userfile');?></div>
											<input type="hidden" name="oldPicture" value="<?=$model['categories_icon'];?>">
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