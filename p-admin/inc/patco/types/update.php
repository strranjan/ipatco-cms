<div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-body">
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Edit Vehicle Type</h5>
								<a href="<?=base_url('p-admin/vehicles/types/list/');?>" class="close">
									<span aria-hidden="true">&times;</span>
								</a>
							</div>
							<div class="card-block">
								<form method="POST" action="<?=base_url('p-admin/vehicles/types/edit/'.$type['categories_id']);?>" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="title">Type</label>
											<input type="text" class="form-control" id="title" name="title" value="<?=(set_value('title'))?(set_value('title')):($type['categories_name']);?>">
											<div class="col-form-label text-danger"><?=form_error('title');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="slug">Slug</label>
											<input type="text" class="form-control slugInput" id="slug" name="slug" value="<?=(set_value('slug'))?(set_value('slug')):($type['categories_slug']);?>">
											<div class="col-form-label text-danger"><?=form_error('slug');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="fuel">Fuel Type</label>
											<input type="hidden" name="arrayKey[]" value="_vehicle_fuel_type">
											<textarea class="form-control" id="fuel" name="arrayValue[]" placeholder="One per line"><?=(set_value('fuel'))?(set_value('fuel')):(CategoriesMeta($type['categories_id'], '_vehicle_fuel_type'));?></textarea>
											<div class="col-form-label text-danger"><?=form_error('arrayValue[0]');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="body_type">Body Type</label>
											<input type="hidden" name="arrayKey[]" value="_vehicle_body_type">
											<textarea class="form-control" id="body_type" name="arrayValue[]" placeholder="One per line"><?=(set_value('body_type'))?(set_value('body_type')):(CategoriesMeta($type['categories_id'], '_vehicle_body_type'));?></textarea>
											<div class="col-form-label text-danger"><?=form_error('arrayValue[1]');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="transmission_type">Transmission Type</label>
											<input type="hidden" name="arrayKey[]" value="_vehicle_transmission_type">
											<textarea class="form-control" id="transmission_type" name="arrayValue[]" placeholder="One per line"><?=(set_value('transmission_type'))?(set_value('transmission_type')):(CategoriesMeta($type['categories_id'], '_vehicle_transmission_type'));?></textarea>
											<div class="col-form-label text-danger"><?=form_error('arrayValue[2]');?></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label class="col-form-label" for="userfile">Cover Image</label>
											<input type="file" class="form-control" id="userfile" name="userfile" value="">
											<div class="col-form-label text-danger"><?=form_error('userfile');?></div>
											<input type="hidden" name="oldPicture" value="<?=$type['categories_icon'];?>">
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