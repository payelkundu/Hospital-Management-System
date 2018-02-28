<?php include('db.php');
//error_reporting(1);
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
extract($_POST);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<titleAppointment Details/title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .btn-glyphicon {
padding:8px;
background:#ffffff;
margin-right:4px;
}
.icon-btn {
padding: 1px 15px 3px 2px;
border-radius:50px;
}
  </style>
  
</head>

<body style="background-color:#00F0F0">
	
				<h3 align="left" style="color:red;"><b>Appointmment List</b></h3>
	<hr>
<table class="table table-responsive table-bordered">
           
                <tr class="danger">
                    <th> Sl.no</th>                   
                    <th>Patient Name</th>
					<th>Doctor Name</th>
					<th>Time</th>
					<th>Date</th>
					<th>Option</th>
					</tr>
					
					<?php

$rs1=mysqli_query($con,"SELECT * from appointment where appointment_available='YES'");
$sno=1;
while( $row=mysqli_fetch_array($rs1)) {

$rs2=mysqli_query($con,"SELECT patient_name from patient where patient_id='$row[2]'");
$rs3=mysqli_query($con,"SELECT doctor_name from doctor where doctor_id='$row[1]'");
$que1=mysqli_fetch_assoc($rs2);
$que2=mysqli_fetch_assoc($rs3);
 echo "<tr class='success'><td>$sno</td>
 <td>$que1[patient_name]</td>
 <td>$que2[doctor_name]</td>
 <td>$row[3]</td>
 <td>$row[4]</td>
 <td><a class='btn icon-btn btn-danger' href=delete_appointment.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-trash img-circle text-danger'></span> Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td colspan='7' align='center'><font size=4 color=red>Records
Not Found</font></td></tr>";

?>
     </table>

<hr />

<h3 align="left" style="color:red;"><b>Deleted Records</b></h3>
				
	<hr>
<table class="table table-responsive table-bordered">
           
                <tr class="danger">
                   <th> Sl.no</th>
				   <th>Patient Name</th>
                   <th>Doctor Name</th>                    
				   <th>Time</th>
				   <th>Date</th>
			       <th>Options</th>
					
					</tr>							
	<?php

$rs1=mysqli_query($con,"SELECT * from delete_appointment where appointment_available='YES'");
$sno=1;
while( $row=mysqli_fetch_array($rs1)) {

$rs2=mysqli_query($con,"SELECT patient_name from patient where patient_id='$row[2]'");
$rs3=mysqli_query($con,"SELECT doctor_name from doctor where doctor_id='$row[1]'");
$que1=mysqli_fetch_assoc($rs2);
$que2=mysqli_fetch_assoc($rs3);
 echo "<tr class='success'><td>$sno</td>
 <td>$que1[patient_name]</td>
 <td>$que2[doctor_name]</td>
 <td>$row[3]</td>
 <td>$row[4]</td>
 <td><a class='btn icon-btn btn-danger' href=undelete_appointment.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-trash img-circle text-danger'></span>UnDelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td colspan='7' align='center'><font size=4 color=red>Records
Not Found</font></td></tr>";

?>   
        </table>
		
</body>

</html>