<?php include('../connect.php');?>
<?php
	session_start();
	$output='';
	$output1='';
	$output2='';
	$output3='';
	$output4='';
	$output5='';
	$username="";
	$password="";
	$email="";
	$errors= array();
	if(isset($_POST['register'])) {
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password_1=$_POST['password_1'];
		$password_2=$_POST['password_2'];
		$key=$_POST['key'];

		if(empty($username)){
			array_push($errors,"Username is required");
			$output1='<span style="color: white; font-size: 30px;">'.' Username is Required !!'.'';
		}
		if(empty($email)){
			array_push($errors,"Email-ID is required");
			$output2='<span style="color: white; font-size: 30px;">'.' Email-ID is Required !!'.'';
		}
		if(empty($password_1)){
			array_push($errors,"Password is required");
			$output3='<span style="color: white; font-size: 30px;">'.' Password is Required !!'.'';
		}
		if($password_1 != $password_2){
			array_push($errors,"Password do not match");
			$output4='<span style="color: white; font-size: 30px;">'.' Password Do Not Match !!'.'';
		}
		if($key==5494){
			if(count($errors)==0){	
				$password=md5($password_1);
				$sql= "INSERT INTO users (username,email,password)
				VALUES('$username','$email','$password')";
				mysqli_query($db,$sql);
				$_SESSION['user']=$username;
				$_SESSION['success']="You are now logged in";
				header('location: index.php');
			}
		}
		else{
			array_push($errors,"Master Key do not match");
			$output5='<span style="color: white; font-size: 30px;">'.' Master Key Do Not Match !!'.'';
		}
	}

	if(isset($_POST['login']))
	{
		header('location: ../login/login.php');
	}

	if(isset($_POST['back']))
	{
		header('location: ../index.php');
	}

?>