<?php

session_start();

$user = [
	"user" => "Loker Admin",
	"pass"=>"secretadmin"            
];

if(isset($_POST['submit'])){

	if ($_POST['username'] == $user['user']){
		
		$_SESSION["username"] = $_POST['username']; 
		header('location:../dashboard.php');

		if($_POST['password'] == $user['pass']){

		}else {

			$_SESSION['message'] = 
			'<div class="alert alert-danger mt-1 text-center"  role="alert">
			Password Wrong!
			</div>';
			header('location:../index.php');
		}

	}else{

		$_SESSION['message'] = 
		'<div class="alert alert-danger mt-1 text-center"  role="alert">
		Username Not Registered!
		</div>';
		header('location:../index.php');
		
	}
}
?>