<?php
	session_start();
	
	### Login Process ###
	if(isset($_POST['logIn'])){
		require_once('function.php');
		$logIn = signIn($_POST);
		if($logIn['status'] == 'success'){
			$sSuccess = $logIn['message'];
		}else if($logIn['status'] == 'error'){
			$sError = $logIn['message'];
		}else if($logIn['status'] == 'data-error'){
			$sDataError = $logIn['message'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fahim_simpleEcommerceTemplate</title>

    <!-- CSS link part -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!--font awesome part-->
    <link rel="stylesheet" href="css/all.css">

    <!--company icon part-->
    <link rel="icon" href="img/logo.png" type="image/x-icon">

</head>
<body  data-spy="scroll" data-target="#main-manu" data-offset="100">
    <header>
        <!-- Company and logo -->
        <nav id="main-manu" class="navbar navbar-expand-sm fixed-top navbar-dark .bg-transparent-black">
                <a class="navbar-brand d-flex" href="#">
                    <img src="img/logo.png" alt="logo">
                    <h1 class="ml-2 my-auto">Deshi KFC</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainManu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                              
                <div class="collapse navbar-collapse text-uppercase" id="mainManu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'active';} ?>" href="index.php">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#shop">Shop</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#exclusive">Exclusive</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#upcoming">Upcoming</span></a>
                        </li>
                        <li class="nav-item btn-group">
                            <a class="btn btn-sm my-auto <?php if(basename($_SERVER['PHP_SELF']) == 'register.php'){ echo 'btn-outline-primary';}else{ echo 'btn-primary';} ?> " href="#" data-toggle="modal" data-target="#loginModal">
                                Login 
                            </a>
                            <a class="btn btn-sm my-auto <?php if(basename($_SERVER['PHP_SELF']) == 'register.php'){ echo 'btn-warning';}else{ echo 'btn-outline-warning';} ?> " href="register.php">
                                Register
                            </a>
                        </li>
                    </ul>
                </div>
        </nav> 
    </header>
<div class="modal fade" id="loginModal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SignIn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post">
		  <div class="form-group">
			<label for="sEmail">Email address</label>
			<input type="email" name="sEmail" class="form-control" id="sEmail" value="<?php if(isset($_COOKIE['userEmail'])){ echo $_COOKIE['userEmail']; } ?>" placeholder="Enter email">
		  </div>
		  <div class="form-group">
			<label for="sPassword">Password</label>
			<input type="password" name="sPassword" class="form-control" id="sPassword" value="<?php if(isset($_COOKIE['userPass'])){ echo $_COOKIE['userPass']; } ?>" placeholder="Password">
		  </div>
		  <div class="form-group form-check">
			<input type="checkbox" name="remember" id="remember" class="form-check-input" <?php if(isset($_COOKIE['userEmail'])){ echo 'checked'; } ?>>
			<label class="form-check-label" for="remember">Remember Me</label>
		  </div>
		  <button type="submit" name="logIn" class="btn btn-primary">SignIn</button>
		</form>
      </div>
    </div>
  </div>
</div>
    <main class="<?php if(basename($_SERVER['PHP_SELF']) != 'index.php'){echo 'mt-5 pt-5';} ?>">
	
	
	
	
	
	
	
	
	
	