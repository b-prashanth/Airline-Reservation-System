<?php include('../connect.php');?>
<?php
	$tokenno="";
	$baggage="";
	$tseat="";
	$tcheck="";
	$ins="";
	$ref="";
	$output="";
	$errors= array();
	
	if(isset($_POST['submit'])){
		$tokenno=$_POST['tokenno'];
		$baggage=$_POST['baggage'];
		$tseat=$_POST['tseat'];
		$tcheck=$_POST['tcheck'];
		$ins=$_POST['ins'];
		$ref=$_POST['ref'];

		if(empty($tokenno)){
			array_push($errors,"tokenno is required");
			$output='<span style="color: white; font-size: 30px;">'.'Token number is required !!'.'';
				
		}
	
		if(count($errors)==0){	
			$sql= "INSERT INTO add_on (tokenno,tseat,baggage,tcheck,ins,ref)
				VALUES('$tokenno','$tseat','$baggage','$tcheck','$ins','$ref')";
			mysqli_query($db,$sql);
			{
				$query = "SELECT * FROM add_on WHERE tokenno LIKE '%$tokenno%'";
				$run=mysqli_query($db,$query);
				$count = mysqli_num_rows($run);
				$line1='Your Request is Submitted';
				if($count==1){
					$output='<span style="color: white; font-size: 30px;">'.$line1.'';
				}
				else{
			    	$line2='Your Token is not Found !!';
					$output ='<span style="color: white; font-size: 30px;">'.$line2.'';
				}
			}		
		}
	}
	if(isset($_POST['back']))
	{
		header('location:../index.php');
	}
	

?>