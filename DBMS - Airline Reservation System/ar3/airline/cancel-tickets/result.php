<?php include('../connect.php');?>
<?php
	$output='';
	$output1='';
	$r_price='';
	$errors= array();

	if(isset($_POST['back']))
	{
		header('location: ../index.php');
	}

	if(isset($_POST['submit'])){
		$key= $_POST['key'];

		if(empty($key)){
			array_push($errors,"tokenno is required");
			$output='<span style="color: white; font-size: 30px;">'.'Enter the Token number to Cancel the Ticket !!'.'';		
		}

		if(count($errors)==0){
			$r="SELECT * from details where token='$key'";
			$r1=mysqli_query($db,$r);
			$count = mysqli_num_rows($r1);

			if($count > 0){
				$sql = "DELETE FROM details WHERE token LIKE '%$key%'";
				$line1='Your Ticket is cancelled.';
			
				if($db->query($sql) === TRUE){
					$output='<span style="color: white; font-size: 30px;">'.$line1.'';
				}

				$a = " INSERT INTO refund (tokenno) VALUES ('$key') ";
				mysqli_query($db,$a);
					
				$p = " UPDATE refund SET refund_price = ( SELECT (price * 70)/100 FROM cost WHERE tokenno='$key' )
						WHERE tokenno='$key' ";
				mysqli_query($db,$p);

				$y = " SELECT * FROM refund WHERE tokenno='$key' ";
				$run = mysqli_query($db,$y);

				while($row = mysqli_fetch_array($run)){
					$r_price=$row['refund_price'];
				}

				$line2='The refundable amount is Rs.';
				$output1='<span style="color: white; font-size: 30px;">'.$line2. '' .$r_price. '';
			}
			
			else{
		    	$line2='Your Ticket is not yet Booked !!';
				$output ='<span style="color: white; font-size: 30px;">'.$line2.'';
			}
		}	
	}
?>	
