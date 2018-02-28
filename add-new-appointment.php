<?php
 include('db.php');
 if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
 extract($_POST);

if(isset($save))
{
		$query="insert into appointment values('','$doc','$pat','$time','$date','YES')";
		if(mysqli_query($con,$query))
		{
			echo "<script>
	alert('Data saved successfully')
	</script>";
		
		
		}
		else
		{
		echo "<script>
	alert('Data saved unsuccessfully')
	</script>";
		}
	}
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Appointment</title>
<!-- Website CSS style -->
</head>
<body>
<div style="background-color:white; width:500px; border-style:groove; border-color:#FF0099">
  <div style="background-color:#3366FF; width:494px; padding-top:1px; padding-bottom:1px;">
    <h3 style="color:#CC3300;"><b>Add New Appointments</b></h3>
  </div>
  <hr>
  <form method="post">
    <table width="479" height="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="row">Select Doctor Name </th>
        <td><select name="doc" required="required " style="height:30px; width:175px;">
		  <?php


			$que=mysqli_query($con,"SELECT * from doctor where doctor_available ='YES' order by doctor_name;");
			
			?>
            <option value="" >None</option>
			 <?php
				while( $row=mysqli_fetch_array($que)) {
				 $doctor_id=$row[0];
				 $doctor=$row[1];
				 ?>
            <option value="<?php echo $doctor_id ?>"><?php echo $doctor_id."  :  ".$doctor ?></option>
            <?php
			
			}
			?>
			
          </select>
        </td>
      </tr>
      <tr>
        <th scope="row">Select Patient Name</th>
        <td><select name="pat" required style="height:30px; width:175px;">
            <?php


			$que=mysqli_query($con,"SELECT * from patient where patient_available ='YES' order by patient_name;");
			
			?>
             <option value="" >None</option>
            <?php
				while( $row=mysqli_fetch_array($que)) {
				 $patient_id=$row[0];
				 $patient=$row[1];
				 ?>
            <option value="<?php echo $patient_id ?>"><?php echo $patient_id."  :  ".$patient ?></option>
            <?php
			
			}
			?>
					  </select>
        </td>
      </tr>
      <tr>
        <th scope="row">Enter Time </th>
        <td><input type="time" name="time" required style="width:175px;" /></td>
      </tr>
      <tr>
        <th scope="row">Enter Date </th>
        <td><input type="date" name="date" required style="width:175px;"/></td>
      </tr>
      <tr>
        <th colspan="2" scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit"
	 name="save" value="Submit" />
        </th>
      </tr>
    </table>
  </form>
</div>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>
