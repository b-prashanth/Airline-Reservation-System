<?php include('../connect.php');?>
<?php
	session_start();
	$output='';
	$output1='';
	$output2='';
	$username="";
	$password="";
	$errors= array();

	//login page login

	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		if(empty($username)){
			array_push($errors,"Username is required");
			$output1='<span style="color: white; font-size: 30px;">'.' Username is Required !!'.'';
		}
		if(empty($password)){
			array_push($errors,"Password is required");
			$output2='<span style="color: white; font-size: 30px;">'.' Password is Required !!'.'';
		}
		if(count($errors)==0){
			$password=md5($password);
			$query="SELECT * FROM login WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db,$query);
			if (mysqli_num_rows($result)==1){
				//log user in
				$_SESSION['user']=$username;
				$_SESSION['success']="You are now logged in";
				header('location: index.php');
			}
			else{
				array_push($errors,"Wrong username or password");
				$output='<span style="color: white; font-size: 30px;">'.'Wrong username or password !!'.'';	
			}

		}
	}

	if(isset($_POST['signup']))
	{
		header('location: ../login/register.php');
	}

	if(isset($_POST['back']))
	{
		header('location: ../index.php');
	}

?>