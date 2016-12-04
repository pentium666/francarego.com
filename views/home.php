<div class="container-fluid">
	<?php foreach($rows as $row): ?>
		<div class="row">
				<?php foreach($row as $image): ?>
				  	<div class="col-sm-4 col-image">
						<img src="<?=$image?>" alt="Pure Art" class="feature-image">
					</div>
				<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
</div>
