
									<li class="<?=sideMunuActive('dashboard');?>">
										<a href="<?=base_url('p-admin/dashboard');?>" data-i18n="nav.widget.main">
											<span class="pcoded-micon"><i class="ti-home"></i></span>
											<span class="pcoded-mtext">Dashboard</span>
											<span class="pcoded-mcaret"></span>
										</a>
									</li>
									<?php if(siteInfo('show-page')=='1'){ ?>
									<li class="pcoded-hasmenu <?= sideMunuOpen('pages'); ?>">
										<a href="javascript:void(0)">
											<span class="pcoded-micon"><i class="ti-files"></i></span>
											<span class="pcoded-mtext" data-i18n="nav.dash.main">Pages</span>
											<span class="pcoded-mcaret"></span>
										</a>
										<ul class="pcoded-submenu">
											<li class="<?=sideMunuActive('pages/add');?>">
												<a href="<?=base_url('p-admin/pages/add');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Add New</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?=sideMunuActive('pages/list');?>">
												<a href="<?=base_url('p-admin/pages/list');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Manage Pages</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
										</ul>
									</li>
									<?php } ?>
									<?php if(siteInfo('show-user')=='1'){ ?>
									<li class="pcoded-hasmenu <?= sideMunuOpen('users'); ?>">
										<a href="javascript:void(0)">
											<span class="pcoded-micon"><i class="ti-user"></i></span>
											<span class="pcoded-mtext" data-i18n="nav.dash.main">Users</span>
											<span class="pcoded-mcaret"></span>
										</a>
										<ul class="pcoded-submenu">
											<li class="<?=sideMunuActive('users/add');?>">
												<a href="<?=base_url('p-admin/users/add');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Add New</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?=sideMunuActive('users/list');?>">
												<a href="<?=base_url('p-admin/users/list');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Manage Users</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?=sideMunuActive('users/api-token');?>">
												<a href="<?=base_url('p-admin/users/api-token');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">API Token</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
										</ul>
									</li>
									<?php } ?>
									<?php if(siteInfo('show-blog')=='1'){ ?>
									<li class="pcoded-hasmenu <?= sideMunuOpen('blogs'); ?>">
										<a href="javascript:void(0)">
											<span class="pcoded-micon"><i class="ti-notepad"></i></span>
											<span class="pcoded-mtext" data-i18n="nav.dash.main">Blogs</span>
											<span class="pcoded-mcaret"></span>
										</a>
										<ul class="pcoded-submenu">
											<li class="<?=sideMunuActive('blogs/add');?>">
												<a href="<?=base_url('p-admin/blogs/add');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Add New</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?=sideMunuActive('blogs/list');?>">
												<a href="<?=base_url('p-admin/blogs/list');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Manage Blogs</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
										</ul>
									</li>
									<?php } ?>
									<li class="<?=sideMunuActive('contact-data');?>">
										<a href="<?=base_url('p-admin/contact-data');?>" data-i18n="nav.widget.main">
											<span class="pcoded-micon"><i class="ti-pencil"></i></span>
											<span class="pcoded-mtext">Contact Data</span>
											<?php $unReadContact = $this->Admin_model->countContactForm('x'); if($unReadContact>0){ ?>
											<span class="pcoded-badge label label-danger"><?=$unReadContact;?>
											<?php } ?></span>
											<span class="pcoded-mcaret"></span>
										</a>
									</li>
									<li class="pcoded-hasmenu <?= sideMunuOpen('settings'); ?>">
										<a href="javascript:void(0)">
											<span class="pcoded-micon"><i class="ti-settings"></i></span>
											<span class="pcoded-mtext" data-i18n="nav.dash.main">Settings</span>
											<span class="pcoded-mcaret"></span>
										</a>
										<ul class="pcoded-submenu">
											<li class="<?=sideMunuActive('settings/general');?>">
												<a href="<?=base_url('p-admin/settings/general');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">General</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?=sideMunuActive('settings/mail');?>">
												<a href="<?=base_url('p-admin/settings/mail');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Mail Server</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?=sideMunuActive('settings/reading');?>">
												<a href="<?=base_url('p-admin/settings/reading');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Reading</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?=sideMunuActive('settings/media');?>">
												<a href="<?=base_url('p-admin/settings/media');?>">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Media</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
										</ul>
									</li>