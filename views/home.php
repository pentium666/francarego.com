<div class="container-fluid">
	<?php if($christmas == true) {require("christmas-promo.php");} ?>
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
