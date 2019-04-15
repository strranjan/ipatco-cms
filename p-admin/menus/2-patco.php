<?php
	$totalVehicles = num_posts('patco');
	$value = "success{}iPatco{}car-alt-1{}".$totalVehicles;
	SaveJustMeta('_dashboard_card', $value, 'patco'); // 1. key; 2. value; 3. type;
?>

<li class="pcoded-hasmenu <?= sideMunuOpen('vehicles'); ?>">
	<a href="javascript:void(0)">
		<span class="pcoded-micon"><i class="ti-car"></i></span>
		<span class="pcoded-mtext" data-i18n="nav.dash.main">Vehicles</span>
		<span class="pcoded-mcaret"></span>
	</a>
	<ul class="pcoded-submenu">
		<li class="<?=sideMunuActive('vehicles/add');?>">
			<a href="<?=base_url('p-admin/vehicles/add');?>">
				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
				<span class="pcoded-mtext" data-i18n="nav.dash.default">Add New</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
		<li class="<?=sideMunuActive('vehicles/list');?>">
			<a href="<?=base_url('p-admin/vehicles/list');?>">
				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
				<span class="pcoded-mtext" data-i18n="nav.dash.default">Manage Vehicles</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
		<li class="<?=sideMunuActive('vehicles/types/list');?>">
			<a href="<?=base_url('p-admin/vehicles/types/list');?>">
				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
				<span class="pcoded-mtext" data-i18n="nav.dash.default">Manage Types</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
		<li class="<?=sideMunuActive('vehicles/companies/list');?>">
			<a href="<?=base_url('p-admin/vehicles/companies/list');?>">
				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
				<span class="pcoded-mtext" data-i18n="nav.dash.default">Manage Companies</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
		<li class="<?=sideMunuActive('vehicles/models/list');?>">
			<a href="<?=base_url('p-admin/vehicles/models/list');?>">
				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
				<span class="pcoded-mtext" data-i18n="nav.dash.default">Manage Models</span>
				<span class="pcoded-mcaret"></span>
			</a>
		</li>
	</ul>
</li>