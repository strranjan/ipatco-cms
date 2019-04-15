<option value="">Please Select</option>
<?php if($categories){ foreach($categories as $category){ ?>
	<option value="<?=$category['categories_id'];?>"><?=$category['categories_name'];?></option>
<?php } } ?>