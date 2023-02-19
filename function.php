<?php
require_once('connection.php');
function register($data){
	//echo '<pre>';
	//print_r($data);
	//echo '</pre>';
	
	$name= $data['name'];
	$email= $data['email'];
	$phone= $data['phone'];
	$address= $data['address'];
	$password= $data['password'];
	$cPassword= $data['cPassword'];
		
	$error= [];
	// Password Validation //
	if($password != $cPassword){
		$error['cPassword'] = 'Password and Confirm Password Does not Match';
	}
	if(strlen($password) < 8 || strlen($password) > 30){
		$error['password'] = 'Password will be in 8-30 Characters';
	}
	
	// Name Validation //
	if(strlen($name) < 3 || strlen($name) > 100 || str_word_count($name) < 2){
		$error['name'] = 'Name will be in 3-100 characters and atleast 2 Words';
	}
	
	// Email Validation //
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error['email'] = 'Pls insert a valid email';
	}
	
	// Phone Validation // "/\(\d{3}\)\d{3}-\d{4}/";
	if(strlen($phone) < 11 || strlen($phone) > 14 || !preg_match('/\d{11}/',$phone)){
		$error['phone'] = 'Pls insert a valid phone number';
	}
	
	// Address Validation //
	if(strlen($address) < 3 || strlen($address) > 300){
		$error['address'] = 'Address will be in 3-300 characters and atleast 2 Words';
	}
	
	if(count($error) > 0){
		$action=[
			'status'=> 'error',
			'message' => $error,
		];
		
		return $action;
	}else{
		
		$dbConnect = db_connection();
		
		$sql_insert = "INSERT INTO user(name, email, phone, address, password) VALUES ('$name','$email','$phone','$address','$password')";
		
		$result = mysqli_query($dbConnect,$sql_insert);
		
		if(mysqli_error($dbConnect)){
			$action=[
				'status'=> 'data-error',
				'message' => mysqli_error($dbConnect),
			];
			
			return $action;
		}
		$action=[
			'status'=> 'success',
			'message' => 'Registration Complete Successfully',
		];
		
		return $action;
	}

	
}
	
function signIn($data){
	$email = $data['sEmail'];
	$password = $data['sPassword'];
	
	$dbConnect = db_connection();
		
		$sql_select = "SELECT * FROM user WHERE email = '$email' && password = '$password'";
		
		$result = mysqli_query($dbConnect,$sql_select);
		
		if(mysqli_error($dbConnect)){
			$action=[
				'status'=> 'error',
				'message' => mysqli_error($dbConnect),
			];
			
			return $action;
		}
		
		if(mysqli_num_rows($result) > 0){
			$details = mysqli_fetch_assoc($result);
			
			########### Session ###########
			$_SESSION['userName'] = $details['name'];
			$_SESSION['userEmail'] = $email;
			$_SESSION['logInHoisi'] = 1;
			
			########### Cookie ############
			if(isset($data['remember'])){
				setcookie('userEmail',$email,(60)+time(),'/');
				setcookie('userPass',$password,(60)+time(),'/');
			}else{
				setcookie('userEmail','',5+time(),'/');
				setcookie('userPass','',5+time(),'/');
			}
			
	
			header('Location: dashboard/dashboard.php');
		}else{
			
			$action=[
				'status'=> 'error',
				'message' => 'Email/Password is Invalid',
			];
			
			return $action;
		}
		
}
	
function signOut(){
	session_destroy();
	session_unset();
	header('Location: ../index.php');
}


?>