<?php
include("auth.php"); 
require 'db.php';
$email=$_SESSION["email"];
$sql=mysqli_query($con,"select *from users where email='$email'");

$s=mysqli_fetch_array($sql);

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hospital Management System</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />

<script>
var blink_speed = 500; var t = setInterval(function () { var ele = document.getElementById('blinker'); ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden'); }, blink_speed);

</script>
</head>

<body >

<div class="container">
	<!--header start-->
	<div class="row">
    	<div class="col-sm-12">
        	<div class="header bg-white">            		
            			<h3 style="background:#990000;padding:20px;color:#FFFFFF;margin:0px">
						<a href="index.php"><img src="image/home.jpg"></a>
	<span>Hello <?php echo $s['username']; echo " !";?></span>
							<span id="blinker"><span style="font-size:15px; color:#FFFFFK";><?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; 
							?></span></span>
						<span style="margin-left:230px">H.M.S</span>
  					
	<span style="float:right"><a style="color:#FFFFFF" href="logout.php">Logout</a></span>
</h3>
						         	
            </div>
        </div>
    </div>
    
    <!--sidebar and content-->
  	<div class="row">
    	<!--left sidebar-->
		<div class="col-sm-1">
        	<div class="left-sidebar bg-white"></div>
       
        </div>                
        
            <!--main content-->           
           
            	<div class="col-sm-10">
             
					<table class="table table-bordered"  border="1" width ="850px" height="30px" align ="center">
				<tr class="danger">
					<td width="20%" align ="left" style="padding-left: 10px" valign="center">
					
						 <p>Welcome <?php echo $_SESSION['email'];?>!</p>
					
					</td>
					<td  width="64%" align="center" valign="center">
					
					<?php require('header.php'); ?>
					
					</td>
				</tr>

			</table>
				<div align="center">
					<?php
		 @$page= $_GET['page'];
		 if($page!="")
		 {
			 switch($page)
			 {
			 case 'add-doctor':
			 include('add-new-doctor.php');
			 break;
			 
			 case 'doctor-list':
			 include('doctor_details.php');
			 break;
		
			case 'add-patient':
			 include('add-new-patient.php');
			 break;
			 
			 case 'patient-list':
			 include('patient_details.php');
			 break;
			 
			 case 'add-appointment':
			 include('add-new-appointment.php');
			 break;
			 
			 case 'appointment-list':
			 include('appointment_details.php');
			 break;
			 
			 }
		 }
		 else
		 {
		 ?>

		 <?php 
		 }
		  ?>
		  
		  <br>
		  
                </div>
           </div>
                                                         
        <!--right sidebar-->   
        <div class="col-sm-1">
        	<div class="main-content bg-white"></div>
				                   
        </div> 
  	</div>
        
		
		
    <!--footer start-->
    <div class="row">  
    	<div class="col-sm-12">
        	<div class="footer bg-white">
            	<div class="copyright">
                	<p align="center" style="padding-top:10px;">Copyright &copy; H.M.S 2018 &nbsp;&nbsp;&nbsp;<span style="color:#CC0033">contact : <a href="https://www.facebook.com/payel.kundu.710">facebook</a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
