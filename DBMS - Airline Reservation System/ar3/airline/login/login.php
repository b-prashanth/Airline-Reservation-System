<?php include('server1.php');?>
<!DOCTYPE=html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>User login for admin pannel</title>

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
                        <form method="post" action="login.php">
                            <center><img src="img/login-banner.jpg" style="width:900px;height:250px;"></center>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span style="margin-left: 97% " class="form-label">Username</span>
                                        <input style="margin-left: 52% " type="text" name="username" class="form-control" placeholder="Enter the Username" value="<?php echo $username;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span style="margin-left: 97% " class="form-label">Password</span>
                                        <input style="margin-left: 52% " type="password" name="password" class="form-control" placeholder="Enter the Password">
                                    </div>
                                </div>
                            </div>
                            <center>
                            <div class="row">                       
                                <div class="col-md-3">
                                    <div class="form-btn">
                                        <button style="margin-left: 170% " class="submit-btn" type="submit" name="login">Log In</button>
                                    </div>
                                </div>
                            </div>
                            </center>
                            <?php print("$output");?>
                            <?php print("$output1");?>
                            <?php print("$output2");?>
                            <div class="row">                       
                                <div class="col-md-3">
                                    <div class="form-btn">
                                        <button class="submit-btn" name="signup">Sign Up</button>
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
