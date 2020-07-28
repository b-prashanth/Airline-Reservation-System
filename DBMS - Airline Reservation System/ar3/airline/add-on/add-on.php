<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Add On</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- straps -->
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
						<form method="post" action="add-on.php">
							<center><img src="img/banner.jpg" style="width:900px;height:250px;"></center>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Token No</span>
										<input class="form-control" type="text" placeholder="Token No" name="tokenno" value="<?php echo $tokenno;?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Seat Type</span>
										<select class="form-control" name="tseat">
											<option>Window</option>
											<option>Middle</option>
											<option>Aisle</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Excess Baggage</span>
										<select class="form-control" name="baggage">
											<option>None</option>
											<option>10 Kg</option>
											<option>15 Kg</option>
											<option>20 Kg</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Refreshment</span>
										<select class="form-control" name="ref">
											<option>None</option>
											<option>Meal</option>
											<option>Milk</option>
											<option>Coffee</option>
											<option>Alcohol</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Checkin Type</span>
										<select class="form-control" name="tcheck">
											<option>Normal</option>
											<option>Priority</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Insurance</span>
										<select class="form-control" name="ins">
											<option>Yes</option>
											<option>No</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<?php print("$output");?>
							<div class="row">						
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit">Submit</button>
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