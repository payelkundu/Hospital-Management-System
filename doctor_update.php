 <?php
 include('db.php');
 include("auth.php"); 
 extract($_POST);
 
$rno=trim($_GET["rno"]);
$que=mysqli_query($con,"SELECT * from doctor where doctor_id='".$rno."'");

$row=mysqli_fetch_array($que);
if(isset($save))
{

 $query="update doctor set doctor_name='".$name."',doctor_spec='".$spec."' where doctor_id='".$rno."'";

if(mysqli_query($con,$query))
{

echo "<script>
	alert('Data update successfully')
	</script>";
		
		}
		else
		{
		echo "<script>
	alert('Data update unsuccessfully')
	</script>";
		}
		}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doctor Update</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
	<!--header start-->
	<div class="row">
    	<div class="col-sm-12">
        	<div class="header bg-white">            		
            			<h3 style="background:#990000;padding:20px;color:#FFFFFF;margin:0px">
	<span>Hello Pankaj !</span><span style="margin-left:350px">H.M.S</span>
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
					<td width="18%" align ="left" style="padding-left: 10px" valign="center">
					
						 <p>Welcome <?php echo $_SESSION['email']; ?>!</p>
					
					</td>
					<td  width="64%" align="center" valign="center">
					
					<?php require('header.php'); ?>
					
					</td>
				</tr>

			</table>
				<div align="center">
   
			<div style="background-color:white; width:500px; border-style:groove; border-color:#FF0099">
				<div style="background-color:#3366FF; width:494px; padding-top:1px; padding-bottom:1px;">
				<h3 style="color:#CC3300;"><b>Update Doctors</b></h3></div>
				 <hr>
<form method="post">
<table width="479" height="200" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <th scope="row">Enter Doctor Name </th>
    <td><input type="text" value="<?php echo $row['doctor_name'];?>" name="name" required /></td>
  </tr>
  
  <tr>
    <th scope="row">Enter Doctor Specilization </th>
    <td><input type="text" value="<?php echo $row['doctor_spec'];?>" name="spec" required /></td>
  </tr>
    
  <tr>
    <th colspan="2" scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"
	 name="save" value="Submit" />
	 	  </th>
  </tr>
</table>
</form>
</div>

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
                	<p align="center" style="padding-top:10px;">Copyright &copy; H.M.S 2018 &nbsp;&nbsp;&nbsp;<span style="color:#CC0033">contact:<a href="https://www.facebook.com/payel.kundu.710">facebook</a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
