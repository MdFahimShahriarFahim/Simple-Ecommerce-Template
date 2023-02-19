<?php
	include('header.php');
	//require('header.php');
	
	### Registration Process ###
	if(isset($_POST['register'])){
		require_once('function.php');
		$register = register($_POST);
		if($register['status'] == 'success'){
			$rSuccess = $register['message'];
		}else if($register['status'] == 'error'){
			$rError = $register['message'];
		}else if($register['status'] == 'data-error'){
			$rDataError = $register['message'];
		}
		//print_r($register);
		//echo 'hello';
	}

?>

<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header display-4 font-weight-bold">
						Registration
					</div>
					<?php
						if(isset($rSuccess)){
							?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Success!</strong> <?php echo $rSuccess; ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?php
						}
						if(isset($rDataError)){
							?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Alert!</strong> <?php echo $rDataError; ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?php
						}
					?>
					<form class="card-body" method="post">
						  <div class="form-row">
							<div class="col form-group">
							  <label for="name">Name</label>
							  <input type="text" id="name" name="name" class="form-control" placeholder="Name">
							  <?php
								if(isset($rError) && isset($rError['name'])){
								?>
									<p class="small text-danger mb-0"><?php echo $rError['name']; ?></p>
								<?php
								}
							  ?>
							</div>
							<div class="col form-group">
							  <label for="email">Email</label>
							  <input type="email" id="email" name="email" class="form-control" placeholder="Email">
							  <?php
								if(isset($rError) && isset($rError['email'])){
								?>
									<p class="small text-danger mb-0"><?php echo $rError['email']; ?></p>
								<?php
								}
							  ?>
							</div>
						  </div>
						  <div class="form-row">
							<div class="form-group col-sm-6">
								<label for="phone">Phone</label>
								<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
								<?php
								if(isset($rError) && isset($rError['phone'])){
								?>
									<p class="small text-danger mb-0"><?php echo $rError['phone']; ?></p>
								<?php
								}
							  ?>
							</div>
							<div class="form-group col-sm-6">
								<label for="address">Address</label>
								<input type="text" name="address" class="form-control" id="address" placeholder="Address">
								<?php
								if(isset($rError) && isset($rError['address'])){
								?>
									<p class="small text-danger mb-0"><?php echo $rError['address']; ?></p>
								<?php
								}
							  ?>
							</div>
							<div class="form-group col-md-6">
							  <label for="password">Password</label>
							  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
							  <?php
								if(isset($rError) && isset($rError['password'])){
								?>
									<p class="small text-danger mb-0"><?php echo $rError['password']; ?></p>
								<?php
								}
							  ?>
							</div>
							<div class="form-group col-md-6">
							  <label for="cPassword">Confirm Password</label>
							  <input type="password" name="cPassword" class="form-control" id="cPassword" placeholder="Confirm Password">
							  <?php
								if(isset($rError) && isset($rError['cPassword'])){
								?>
									<p class="small text-danger mb-0"><?php echo $rError['cPassword']; ?></p>
								<?php
								}
							  ?>
							</div>
						  </div>
						  <button type="submit" name="register" class="btn btn-primary">Submit</button>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</section>      
	
	
<?php
	
	
	include('footer.php');
?>