<?php


function db_connection(){
	## Database Details ##
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'simpleecommercetemplate';
	
	$db_connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	
	if(mysqli_connect_error($db_connect)){
		die('Database Error: '.mysqli_connect_error($db_connect));
	}else{
		return $db_connect;
		//echo 'Hurray connect Hoise';
	}
}

?>