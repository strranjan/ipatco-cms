<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header">
					<div class="page-header-title">
						<h4>iPatco Dashboard</h4>
					</div>
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
						</ul>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<?php foreach($cardBlockData as $data){ ?>
							<div class="col-md-6 col-xl-3">
								<div class="card client-blocks <?= $data[0]; ?>-border">
									<div class="card-block">
										<h5><?= $data[1]; ?></h5>
										<ul>
											<li><i class="icofont icofont-<?= $data[2]; ?>  text-<?= $data[0]; ?>"></i></li>
											<li class="text-right text-<?= $data[0]; ?>"><?= $data[3]; ?></li>
										</ul>
									</div>
								</div>
							</div>
						<?php } ?>
						<div class="col-md-6 col-xl-3">
							<div class="card client-blocks">
								<div class="card-block">
									<h5>Users</h5>
									<ul>
										<li><i class="icofont icofont-hotel-boy text-primary"></i></li>
										<li class="text-right text-primary"><?=$totalUser;?></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>