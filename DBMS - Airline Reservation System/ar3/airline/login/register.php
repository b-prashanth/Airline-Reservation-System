<?php include('server2.php');?>
<!DOCTYPE=html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>User registration for admin pannel</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

    <!-- straps -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body style="background-image: url(/img/bg3.jpg) ; text-align:center; background-size: cover; background-position: center;">
    <div id="booking" class="section">
            <div class="container">
                    <div class="booking-form">
                        <form method="post" action="register.php">
                            <center><img src="img/register-banner.png" style="width:900px;height:250px;"></center>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span  class="form-label">Username</span>
                                        <input type="text" name="username" class="form-control" placeholder="Enter the Username" value="<?php echo $username;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span  class="form-label">Email-ID</span>
                                        <input type="email" name="email" class="form-control" placeholder="Enter the Email-ID" value="<?php echo $email;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span  class="form-label">Password</span>
                                        <input  type="password" name="password_1" class="form-control" placeholder="Enter the Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span  class="form-label">Confirm Password</span>
                                        <input  type="password" name="password_2" class="form-control" placeholder="Re-Enter the Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-md-6">
                                    <div class="form-group">
                                        <span style="margin-left: 95% " class="form-label">Master_key</span>
                                        <input style="margin-left: 52% " type="password" name="key" class="form-control" placeholder="Enter the Master Key">
                                    </div>
                                </div>
                            </div>
                            <center>
                            <div class="row">                       
                                <div class="col-md-3">
                                    <div class="form-btn">
                                        <button style="margin-left: 170% " class="submit-btn" name="register">Register</button>
                                    </div>
                                </div>
                            </div>
                            </center>
                            <?php print("$output");?>
                            <?php print("$output1");?>
                            <?php print("$output2");?>
                            <?php print("$output3");?>
                            <?php print("$output4");?>
                            <?php print("$output5");?>
                            <div class="row">                       
                                <div class="col-md-3">
                                    <div class="form-btn">
                                        <button class="submit-btn" name="login">log In</button>
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

</body>
</html>
