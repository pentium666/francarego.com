<div class="container-fluid">
	<?php foreach($rows as $row): ?>
		<div class="row">
				<?php foreach($row as $image): ?>
				  	<div class="col-sm-4">
						<img src="<?=$image?>">
					</div>
				<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
</div>
