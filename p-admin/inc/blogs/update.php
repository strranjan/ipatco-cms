<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header">
					<div class="page-header-title">
						<h4>Blogs</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="<?=site_url('p-admin/dashboard');?>">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="<?=site_url('p-admin/blogs/list');?>">Blogs</a></li>
							<li class="breadcrumb-item"><a href="javascript:;">Edit Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Edit Blog</h5>
								</div>
								<div class="card-block">
								<form method="POST" enctype="multipart/form-data" onsubmit="return postForm('description')">
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="title">Title</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="title" name="title" value="<?=(set_value('title'))?(set_value('title')):($blog['posts_title']);?>">
												<div class="col-form-label text-danger"><?=form_error('title');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="slug">Slug <input type="checkbox" class="slugToggle"></label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control slugInput" id="slug" name="slug" value="<?=(set_value('slug'))?(set_value('slug')):($blog['posts_slug']);?>" readonly>
												<div class="col-form-label text-danger"><?=form_error('slug');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="description">Description</label>
											</div>
											<div class="col-sm-10">
												<textarea class="form-control summernotes" id="description" name="description"><?=(set_value('description'))?(set_value('description')):($blog['blogs_description']);?></textarea>
												<div class="col-form-label text-danger"><?=form_error('description');?></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="userfile">Cover Image</label>
											</div>
											<div class="col-sm-10">
												<input type="file" class="form-control" id="userfile" name="userfile" value="">
												<div class="col-form-label text-danger"><?=form_error('userfile');?></div>
												<input type="hidden" name="oldPicture" value="<?=$blog['blogs_cover_pic'];?>">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2">
												<label class="col-form-label" for="comment">Enable Comment?</label>
											</div>
											<div class="col-sm-10">
												<select size="1" class="form-control" id="comment" name="comment">
													<option value="1"  <?=(set_value('comment'))?(set_value('comment') == '1'?'selected':''):(($blog['blogs_comment'] == '1')?'selected':'');?>>Yes</option>
													<option value="0"  <?=(set_value('comment'))?(set_value('comment') == '0'?'selected':''):(($blog['blogs_comment'] == '0')?'selected':'');?>>No</option>
												</select>
												<div class="col-form-label text-danger"><?=form_error('comment');?></div>
											</div>
										</div>
										<input type="hidden" name="blogId" value="<?=$blog['blogs_id'];?>">
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