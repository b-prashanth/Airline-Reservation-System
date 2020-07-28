<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Contact Us</title>

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
						<form method="post" action="submit.php">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Token No</span>
										<input class="form-control" type="text" placeholder="Token No" name="tokenno" value="<?php echo $tokenno;?>" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" placeholder="Your Name" name="name" value="<?php echo $name;?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Contact</span>
										<input class="form-control" type="text" placeholder="Contact Number" name="contact" value="<?php echo $contact;?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Your Email" name="email" value="<?php echo $email;?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<span class="form-label">Message</span>
										<input class="form-control" type="text" placeholder="Your Message" name="message" value="<?php echo $message;?>">
									</div>
								</div>
							</div>
							<?php print("$output");?>
							<?php print("$output1");?>
							<?php print("$output2");?>
							<?php print("$output3");?>
							<?php print("$output4");?>
							<?php print("$output5");?>
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