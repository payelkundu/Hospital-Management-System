<!DOCTYPE html>
<html lang="en">
    <head> 
	<title>Change Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		
		<style>
body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
</style>
		
	</head>
	<body>
	
	<?php
session_start();
require ('db.php');
$OTP=$_SESSION['OTP'];
 if(isset($_POST['submit']))
{

	$OTP1=$_POST['otp'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$email=$_SESSION['email_id'];
	if($OTP==$OTP1)
	{
		if($pass==$cpass)
		{
			
	$sql = "UPDATE users SET password='".md5($pass)."' where email='$email'" ;
	
	if (mysqli_query($con, $sql)) {
    //echo "Password Successfully Changed";
	header("refresh:0;url=login.php");
} else {
    echo "Error updating record: " . mysqli_error($con);
}
	}
}else
	{
		
 echo "<div class='form'><h3 align='center' style='color:#009900'>OTP/Password is incorrect.</h3><br/></div>";
 
	}
}
//mysqli_close($con);

?>
	
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">H.M.S</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">OTP</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="otp" id="username"  placeholder="Enter your Username" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="pass" id="email"  placeholder="Enter your Email" required/>
								</div>
							</div>
						</div>
		
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Re-Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="cpass" id="password"  placeholder="Enter your Password" required/>
								</div>
							</div>
						</div>

						<div class="form-group" align="center">
							<input name="submit"  type="submit" class="btn btn-primary btn-md  register-button" value="Register" />
						</div>
						
					</form>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>