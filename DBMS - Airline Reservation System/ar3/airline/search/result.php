<?php include('../connect.php');?>
<?php
	$output='';
	$fname="";
	$lname="";
	$flight_type="";
	$fromsrc="";
	$flyon="";
	$tclass="";
	$errors= array();

	if(isset($_POST['back']))
	{
		header('location: ../index.php');
	}

	if(isset($_POST['submit'])){
		$key= $_POST['key'];

		if(empty($key)){
			array_push($errors,"tokenno is required");
			$output='<span style="color: white; font-size: 30px;">'.'Token number is required !!'.'';		
		}

		if(count($errors)==0){
			$query = "SELECT * FROM details WHERE token LIKE '%$key%'";
			$run=mysqli_query($db,$query);
			$count = mysqli_num_rows($run);
			$line1='Your Ticket is not yet Booked !!';

			if($count==0){
				$output='<span style="color: White; font-size: 30px;">'.$line1.'';
			}
			
			else{
				while($row = mysqli_fetch_array($run))	{
			    	$fname=$row['fname'];
			    	$lname=$row['lname'];
		    		$fromsrc=$row['fromsrc'];
	    			$flyon=$row['flyon'];
	    			$todest=$row['todest'];
	    		}
	    	
	    		$line2='Your Journey is confirmed - Mr. ';
				$output .='<span style="color: White; font-size: 30px;">'.$line2.''.$fname.' '.$lname.' From '.$fromsrc.' To '.$todest.' On '.$flyon.'';
			}
		}	
	}
?>	