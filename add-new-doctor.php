 <?php
 include('db.php');
 extract($_POST);

if(isset($save))
{
		$query="insert into doctor values('','$name','$spec','YES')";
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
	<title>Add New Doctors</title>
		
		<!-- Website CSS style -->
			
	</head>
	<body>
	  
			<div style="background-color:white; width:500px; border-style:groove; border-color:#FF0099">
				<div style="background-color:#3366FF; width:494px; padding-top:1px; padding-bottom:1px;">
				<h3 style="color:#CC3300;"><b>Add New Doctors</b></h3></div>
				 <hr>
<form method="post">
<table width="479" height="200" border="0" cellspacing="0" cellpadding="0">
 
  <tr>
    <th scope="row">Enter Doctor Name </th>
    <td><input type="text" name="name" required/></td>
  </tr>
  
  <tr>
    <th scope="row">Enter Doctor Specilization </th>
    <td><input type="text" name="spec" required/></td>
  </tr>
  
  <tr>
    <th colspan="2" scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"
	 name="save" value="Submit" />
	 	 
	  </th>
  </tr>
</table>
</form>
</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>