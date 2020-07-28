<?php include('../connect.php');?>
<!DOCTYPE=html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Booking data for admin</title>
	<link rel="stylesheet" type="text/css" href="style1.css">

	<style>

		body{
			background-image: url(/img/bg2.jpg);
		}
		table{
			width:1500px;
			margin:auto;
			text-align: center;
			table-layout:fixed;
			padding:  auto;
			background:dodgerblue; 
		}
		tr,td,th{
			padding:20px auto;
			margin:20px auto;
			color:white;
			border:1px solid #080808;
			border-color: white;
			border-collapse: collapse;
			font-size: 18px;
			font-family: Arial;
			background: linear-gradient(top, #697ae5 0%, #697ae5 100%)
			background:-webkit-linear-gradient(top, #697ae5 0%, #697ae5 100%)
		}
		td:hover{
			background: coral;
		}
		


	</style>
</head>
<body style="background-image:url(img/bg5.jpg)">
	<div class="header">
		<h2>Registered Data</h2>
	</div>
		<div align="center">
			<br><h2>
		<a href="index.php" style="color:red;">Refresh</a></h2><br></br>
		<h2>Passengers Details </h2> <br>
	</div>
	<table>
		<tr>
			<th>Token No</th>
			<th>F.Name</th>
			<th>L.Name</th>
			<th>From</th>
			<th>To</th>
			<th>Departing</th>
			<th>Returning</th>
			<th>Adults</th>
			<th>Children</th>
			<th>PhNo</th>
			<th>Booking Time</th>
			<th>Actions</th>
		</tr>
		<?php
		$sql= "SELECT * from details";
		$run=mysqli_query($db,$sql);
		
		while($row=mysqli_fetch_array($run))
		{
			?>
			<tr>
			<td><?php echo $row['token']; ?></td>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['lname']; ?></td>
			<td><?php echo $row['fromsrc']; ?></td>
			<td><?php echo $row['todest']; ?></td>
			<td><?php echo $row['flyon']; ?></td>
			<td><?php echo $row['returnon']; ?></td>
			<td><?php echo $row['adult']; ?></td>
			<td><?php echo $row['children']; ?></td>
			<td><?php echo $row['phno']; ?></td>
			<td><?php echo $row['booking_date']; ?></td>
			<td> <a href="index.php?delete1=<?php echo $row['fname']; ?>" onclick="return confirm('Are you sure?');">Delete</a> </td>
			</tr>
			</tr>
			<?php
	}
	if(isset($_GET['delete1'])){
		$delete_id= $_GET['delete1'];
		mysqli_query($db,"DELETE FROM details WHERE fname='$delete_id'");
		header('location:index.php');
	}
	?>
	</table>
	<br><br>
	<br><br>
	<div style="text-align: center;">
	<h2>Query Asked </h2>
	</div> <br></br>
	<table>
		<tr>
			<th>Token</th>
			<th>Name</th>
			<th>Email</th>
			<th>Contact No</th>
			<th>Message</th>
			<th>Action</th>
		</tr>
		<?php
		$sql= "SELECT * from contact";
		$run=mysqli_query($db,$sql);
		
		while($row=mysqli_fetch_array($run))
		{
			?>
			<tr>
			<td><?php echo $row['tokenno']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			<td><?php echo $row['message']; ?></td>
			<td><a href="index.php?delete2=<?php echo $row['name']; ?>" onclick="return confirm('Are you sure?');">Delete</a> </td>
			</tr>

			<?php	
	    }

	    
	if(isset($_GET['delete2'])){
		$delete_id= $_GET['delete2'];
		mysqli_query($db,"DELETE FROM contact WHERE name='$delete_id'");
		header('location:index.php');
	}
	?>
	</table>
	<br><br>
	<br><br>
	<div style="text-align: center;">
	<h2>Add On Requested </h2>
	</div> <br></br>
	<table border="2" width"2000">
		<tr>
			<th>Token No</th>
			<th>Seat Type</th>
			<th>Baggage</th>
			<th>Checkin Type</th>
			<th>Insurance</th>
			<th>Refereshment</th>
			<th>Action</th>
		</tr>
		<?php
		$sql="SELECT * FROM add_on";
		$run=mysqli_query($db,$sql);
		while($row=mysqli_fetch_array($run) )
		{
			?>
			<tr>
			<td><?php echo $row['tokenno']; ?></td>
			<td><?php echo $row['tseat']; ?></td>
			<td><?php echo $row['baggage']; ?></td>
			<td><?php echo $row['tcheck']; ?></td>
			<td><?php echo $row['ins']; ?></td>
			<td><?php echo $row['ref']; ?></td>
			<td><a href="index.php?delete3=<?php echo $row['tokenno']; ?>" onclick="return confirm('Are you sure?');">Delete</a> </td>
			</tr>
			<?php
	    }
	if(isset($_GET['delete3'])){
		$delete_id= $_GET['delete3'];
		mysqli_query($db,"DELETE FROM add_on WHERE tokenno='$delete_id'");
		header('location:index.php');
	}
	?>
	</table>
	<br><br>
	<br><br>
	<div style="text-align: center;">
	<h2>Query Searched </h2>
	</div> <br></br>
	<table border="2" width"2000">
		<tr>
			<th>From</th>
			<th>To</th>
			<th>Class</th>
			<th>Fly On</th>
		</tr>
		<?php
		$sql= "CALL `displayquery`();";
		$run=mysqli_query($db,$sql);
		
		while($row=mysqli_fetch_array($run) )
		{
			?>
			<tr>
			<td><?php echo $row['fromsrc']; ?></td>
			<td><?php echo $row['todest']; ?></td>
			<td><?php echo $row['tclass']; ?></td>
			<td><?php echo $row['flyon']; ?></td>
			</tr>
			<?php
	    }
	
	?>
	</table>
	
</div>
	<br></br>
	<div align="center"><h3>
	<a href="../index.php" style="color:red;">Logout</a></h3><br>
</body>
