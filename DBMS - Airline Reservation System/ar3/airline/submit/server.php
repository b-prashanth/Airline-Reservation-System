<?php include('../connect.php');?>
<?php
	$fname="";
	$lname="";
	$flight_type="";
	$fromsrc="";
	$todest="";
	$flyon="";
	$returnon="";
	$adult="";
	$children="";
	$tclass="";
	$phno="";
	$email="";
	$flight_type="";
	$errors= array();
	$output='';
	$output1='';
	$output2='';
	$output3='';
	$output4='';
	$output5='';
	$output6='';
	$output7='';
	$output8='';
	$token="";
	$line='Thank You ! Your Ticket Token Number is : ';
	
	if(isset($_POST['next'])){
		$flight_type=$_POST['flight_type'];
		$fromsrc=$_POST['fromsrc'];
		$todest=$_POST['todest'];
		$flyon=$_POST['flyon'];
		$returnon=$_POST['returnon'];
		$tclass=$_POST['tclass'];

		if(empty($fromsrc)){
			array_push($errors,"Source is required");
			$output1='<span style="color: white; font-size: 30px;">'.'Please Enter the Source City !!'.'';		
		}

		if(empty($todest)){
			array_push($errors,"Destination is required");
			$output2='<span style="color: white; font-size: 30px;">'.'Please Enter the Destination City !!'.'';		
		}

		if(empty($flyon)){
			array_push($errors,"Departing Date is required");
			$output3='<span style="color: white; font-size: 30px;">'.'Please Enter the Departing Date!!'.'';		
		}

		if(empty($returnon)){
			array_push($errors,"Returning Date is required");
			$output4='<span style="color: white; font-size: 30px;">'.'Please Enter the Returning Date !!'.'';		
		}
	
		if(count($errors)==0){	
			$sql= "INSERT INTO query (flight_type,fromsrc,todest,flyon,returnon,tclass)
				VALUES('$flight_type','$fromsrc','$todest','$flyon','$returnon','$tclass')";
			mysqli_query($db,$sql);
			header('location:details.php');
		}
		
	}

	if(isset($_POST['submit'])){
		$fromsrc=$_POST['fromsrc'];
		$todest=$_POST['todest'];
		$flyon=$_POST['flyon'];
		$returnon=$_POST['returnon'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$adult=$_POST['adult'];
		$children=$_POST['children'];
		$phno=$_POST['phno'];
		$email=$_POST['email'];
		$flight_type=$_POST['flight_type'];

		if(empty($fromsrc)){
			array_push($errors,"Source is required");
			$output3='<span style="color: white; font-size: 30px;">'.'Please Enter the Source City !!'.'';		
		}

		if(empty($todest)){
			array_push($errors,"Destination is required");
			$output4='<span style="color: white; font-size: 30px;">'.'Please Enter the Destination City !!'.'';		
		}

		if(empty($fname)){
			array_push($errors,"First Name is required");
			$output1='<span style="color: white; font-size: 30px;">'.'Please Enter the First Name !!'.'';		
		}

		if(empty($lname)){
			array_push($errors,"Last Name is required");
			$output2='<span style="color: white; font-size: 30px;">'.'Please Enter the Last Name !!'.'';		
		}
		
		if(empty($phno)){
			array_push($errors,"Phone Number is required");
			$output5='<span style="color: white; font-size: 30px;">'.'Please Enter the Phone Number !!'.'';		
		}

		if(empty($email)){
			array_push($errors,"Email-ID is required");
			$output6='<span style="color: white; font-size: 30px;">'.'Please Enter the Email-ID !!'.'';		
		}

		if(empty($flyon)){
			array_push($errors,"Departing Date is required");
			$output7='<span style="color: white; font-size: 30px;">'.'Please Enter the Departing Date!!'.'';		
		}

		if(empty($returnon)){
			array_push($errors,"Returning Date is required");
			$output8='<span style="color: white; font-size: 30px;">'.'Please Enter the Returning Date !!'.'';		
		}

		if(count($errors)==0){	
			
			$sql= "INSERT INTO details (fname,lname,fromsrc,todest,flyon,returnon,adult,children,phno,email,flight_type)
				VALUES('$fname','$lname','$fromsrc','$todest','$flyon','$returnon','$adult','$children','$phno','$email','$flight_type')";
				//mysqli_query($db,$sql);
			if(mysqli_query($db,$sql)){
				$token=mysqli_insert_id($db);
				$output='<span style="color: White; font-size: 40px;">'.$line.''.$token.'';

				if ($flight_type=="Emirates-6000") {	
					$s= "INSERT INTO cost (tokenno,price) VALUES('$token',6000)";
					mysqli_query($db,$s);
				}

				if ($flight_type=="Lufthansa-7000") {	
					$s= "INSERT INTO cost (tokenno,price) VALUES('$token',7000)";
					mysqli_query($db,$s);
				}

				if ($flight_type=="Qatar Airways-8000") {	
					$s= "INSERT INTO cost (tokenno,price) VALUES('$token',8000)";
					mysqli_query($db,$s);
				}
			}
		}
	}

	if(isset($_POST['back'])){
		header('location:../index.php');
	}


?>