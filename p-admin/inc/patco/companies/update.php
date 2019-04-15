<div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-body">
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Edit Vehicle Company</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="card-block">
								<form method="POST" action="<?=base_url('p-admin/vehicles/companies/edit/'.$company['categories_id']);?>">
									<div class="form-group row">
										<div class="col-sm-2">
											<label class="col-form-label" for="parents">Vehicle Type</label>
										</div>
										<div class="col-sm-10">
											<select size="1" class="form-control" id="parents" name="parents">
											<?php if($types){ foreach($types as $type){ ?>
												<option value="<?=$type['categories_id'];?>" <?=$company['categories_parent'] == $type['categories_id']?'selected':'';?>><?=$type['categories_name'];?></option>
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
											<input type="text" class="form-control" id="title" name="title" value="<?=(set_value('title'))?(set_value('title')):($company['categories_name']);?>">
											<div class="col-form-label text-danger"><?=form_error('title');?></div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-2">
											<label class="col-form-label" for="slug">Slug</label>
										</div>
										<div class="col-sm-10">
											<input type="text" class="form-control slugInput" id="slug" name="slug" value="<?=(set_value('slug'))?(set_value('slug')):($company['categories_slug']);?>">
											<div class="col-form-label text-danger"><?=form_error('slug');?></div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-2">
											<label class="col-form-label" for="userfile">Icon</label>
										</div>
										<div class="col-sm-10">
											<input type="file" class="form-control" id="userfile" name="userfile" value="">
											<div class="col-form-label text-danger"><?=form_error('userfile');?></div>
											<input type="hidden" name="oldPicture" value="<?=$company['categories_icon'];?>">
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