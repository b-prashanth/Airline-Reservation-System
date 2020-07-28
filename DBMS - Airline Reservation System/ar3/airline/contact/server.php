<?php include('../connect.php');?>
<?php
	$tokenno="";
	$name="";
	$email="";
	$contact="";
	$message="";
	$errors= array();
	$output="";
	$output1="";
	$output2="";
	$output3="";
	$output4="";
	$output5="";
	
	if(isset($_POST['submit'])){
		$tokenno=$_POST['tokenno'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$message=$_POST['message'];

		if(empty($tokenno)){
			array_push($errors,"tokenno is required");
			$output1='<span style="color: white; font-size: 30px;">'.'Token number is required !!'.'';		
		}

		if(empty($name)){
			array_push($errors,"name is required");
			$output2='<span style="color: white; font-size: 30px;">'.'Name is required !!'.'';		
		}

		if(empty($email)){
			array_push($errors,"phone number is required");
			$output3='<span style="color: white; font-size: 30px;">'.'Phone Number is required !!'.'';
		}

		if(empty($contact)){
			array_push($errors,"email is required");
			$output4='<span style="color: white; font-size: 30px;">'.'Email-ID is required !!'.'';
		}

		if(empty($message)){
			array_push($errors,"message is required");
			$output5='<span style="color: white; font-size: 30px;">'.'Type a Message to be Sent !!'.'';		
		}

		if(count($errors)==0){		
			$sql= "INSERT INTO contact (tokenno,name,email,contact,message)
				VALUES('$tokenno','$name','$email','$contact','$message')";
			mysqli_query($db,$sql);
			{
				$query = "SELECT * FROM contact WHERE tokenno LIKE '%$tokenno%'";
				$run=mysqli_query($db,$query);
				$count = mysqli_num_rows($run);
				$line1='Your Message is Sent';
				if($count==1){
					$output='<span style="color: white; font-size: 30px;">'.$line1.'';
				}
				else{
			    	$line2='Your Token is not Found !!';
					$output .='<span style="color: white; font-size: 30px;">'.$line2.'';
				}
			}		
		}
	}

	if(isset($_POST['back']))
	{
		header('location:../index.php');
	}
	
?>