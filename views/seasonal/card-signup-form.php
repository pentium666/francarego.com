<div class="container container-fluid">
	<div class="page-header">
		<h1 style="padding-bottom: 2%">Enter your address to receive a free French King Photography Christmas card:</h1>
	</div>
	<form action="/seasonal/card-signup.php" method="post">
		<div class="form-group row">
			<label for="inputFirstName" class="col-sm-2 col-form-label form-label">First Name</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="inputFistName">
			</div>
			<label for="inputLastName" class="col-sm-2 col-form-label form-label">Last Name</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="inputLastName">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputAddress1" class="col-sm-2 col-form-label form-label">Address</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="inputAddress1">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="inputAddress2">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputCity" class="col-sm-2 col-form-label form-label">City</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="inputCity">
			</div>
			<label for="inputState" class="col-sm-2 col-form-label form-label">State/Territory</label>
			<div class="col-sm-2">
				<select class="form-control" id="inputState">
					<option></option>
					<?php foreach($states as $state): ?>
						<option><?=$state?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputZip" class="col-sm-2 col-form-label form-label">Zip Code</label>
			<div class="col-sm-2">
				<input type="text" class="form-control" id="inputZip">
			</div>
			<div class="col-sm-4"></div>
			<div class="col-sm-2">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
	<img src="/images/snow.png" class="img-fluid">
</div>
