<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head> 
	<title>Admin Login</title>
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
		
	
	<body>
	<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $username;
			
			
			header("Location: index.php"); // Redirect user to index.php
            }else{
				header( "refresh:4;url=login.php" ); 
 echo "<div class='form'><h3 align='center' style='color:#009900'>Username/password is incorrect.</h3><br/></div>";
  echo "<h4 align='center'> You will be redirected in about 4 secs. If not, click <a href='login.php'>here</a></h4>";
          
				//echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
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
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
								</div>
							</div>
						</div>
						<div class="form-group" align="center">
						<input name="submit" type="submit" class="btn btn-primary btn-md login-button" value="Login" />
							
						</div>
						<div class="login-register">
						<p>Not registered yet ? <a href='registration.php'>Register Here</a></p>
						
						<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Dialog - Default functionality</title>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
   
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
      function DialogBox(){
        $( function() {
        $( "#a1" ).dialog();
      });
      }
    </script>
    <style>
      body{
        background-color:#C1E1A6;
		background:url(image/2.png);
		background-size:cover;
		opacity:0.9;
        font-family:sans-serif;
      }
      h1{
        text-align:center;
      }
      p{
        color:red;
      }
      #a1{
      display:none;
      }
    </style>
  
     <div id="a1" title="About Me!">
     <p>
      Hello Everybody ! My name is Payel Kundu . I am a student at Electronics and Communication Engineering (ECE)
       of Hajee Mohammad Danesh Science and Technology University (HSTU). This is my new website on Hospital Management System .
       Actually , Hospital Management System helps us in showing our Doctors and Patients and their appointments in a page .  
       I cordially thank our trainer sir <b>Suman Gangopadhay</b> and my friends in helping me .
	  </p> 
</div>
    <button id="btn1" onclick="DialogBox();">About</button>

			            
				         </div>
					</form>
				</div>
			</div>
		</div>
<?php } ?>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>