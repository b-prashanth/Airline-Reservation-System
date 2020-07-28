<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post" action="details.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">First Namer</span>
										<input class="form-control" type="text" placeholder="First Name" name="fname" value="<?php echo $fname;?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Last Namer</span>
										<input class="form-control" type="text" placeholder="Last Name" name="lname" value="<?php echo $lname;?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying from</span>
										<input class="form-control" type="text" placeholder="City or airport" name="fromsrc" value="<?php echo $fromsrc;?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flyning to</span>
										<input class="form-control" type="text" placeholder="City or airport" name="todest" value="<?php echo $todest;?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" name="flyon" value="<?php echo $flyon;?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
										<input class="form-control" type="date" name="returnon" value="<?php echo $returnon;?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Phone No</span>
										<input class="form-control" type="text" placeholder="Phone No" name="phno" value="<?php echo $phno;?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">With Adults (18+)</span>
										<select class="form-control" name="adult">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">With Children (0-17)</span>
										<select class="form-control" name="children">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo $email;?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Choose Flights</span>
										<select class="form-control" name="flight_type">
											<option>Emirates-6000</option>
											<option>Lufthansa-7000</option>
											<option>Qatar Airways-8000</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<?php print("$output");?>
							<?php print("$output1");?>
							<?php print("$output2");?>
							<?php print("$output3");?>
							<?php print("$output4");?>
							<?php print("$output5");?>
							<?php print("$output6");?>
							<?php print("$output7");?>
							<?php print("$output8");?>
							<div class="row">						
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit">Book</button>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button style="margin-left: 220%" class="submit-btn" name="back">Go Back</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>