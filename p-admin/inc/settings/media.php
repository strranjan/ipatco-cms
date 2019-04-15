<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header">
					<div class="page-header-title">
						<h4>Settings</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="index.html">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Settings</a></li>
							<li class="breadcrumb-item"><a href="#!">Media</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Media Settings</h5>
								</div>
								<div class="card-block">
									<form method="POST">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="thumbnail_height">Thumbnail Height (px)</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="thumbnail_height" name="thumbnail_height" value="<?=(set_value('thumbnail_height'))?(set_value('thumbnail_height')):(siteInfo('thumbnail-height'));?>">
												<div class="col-form-label text-danger"><?=form_error('thumbnail_height');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="thumbnail_width">Thumbnail Width (px)</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="thumbnail_width" name="thumbnail_width" value="<?=(set_value('thumbnail_width'))?(set_value('thumbnail_width')):(siteInfo('thumbnail-width'));?>">
												<div class="col-form-label text-danger"><?=form_error('thumbnail_width');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="image_height">Image Height (px)</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="image_height" name="image_height" value="<?=(set_value('image_height'))?(set_value('image_height')):(siteInfo('image-height'));?>">
												<div class="col-form-label text-danger"><?=form_error('image_height');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="image_width">Image Width (px)</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="image_width" name="image_width" value="<?=(set_value('image_width'))?(set_value('image_width')):(siteInfo('image-width'));?>">
												<div class="col-form-label text-danger"><?=form_error('image_width');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="watermark">Watermark</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="watermark" name="watermark">
													<option value="0" <?=(set_value('watermark'))?(set_value('watermark') == '0'?'selected':''):((siteInfo('watermark') == '0')?'selected':'');?>>No</option>
													<option value="1" <?=(set_value('watermark'))?(set_value('watermark') == '1'?'selected':''):((siteInfo('watermark') == '1')?'selected':'');?>>Yes</option>
												</select>
												<div class="col-form-label text-danger"><?=form_error('watermark');?></div>
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