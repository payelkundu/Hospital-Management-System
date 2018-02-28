<?php include 'session.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>online_examnation</title>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="../css/file.css">
  <script>
  
  function manage()
  {
  	window.location = 'question.php';

  }
  
  </script>

</head>

<body>
<?php include 'header.php';?>

<div class="container">
  
  <div class="row">
    <div class="col-sm-2" >
      
    </div>
    <div class="col-sm-8" >
     <h3> Subject Listing</h3><hr>
    </div>
	 <div class="col-sm-2">
      
    </div>
  </div>
</div>

<div class="panel panel-primary" style="width:1200px; margin:auto">
  <!-- Default panel contents -->
  <div class="panel-heading"><i class="glyphicon glyphicon-cog"></i>  Subject Listing</div>
  <div class="row">
    <div class="col-sm-1" >
      
    </div>
    <div class="col-sm-10" > 
  <?php
  
  require 'connect.php';
  
 
 // mysqli_query($con,"delete from cat_list where sub_name='$subname'");
$sql = "SELECT *FROM cat_list";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    
		echo "<table class='table' width='800px'>";
	echo "<tr>";
	echo"<th>"."Subject Name"."</th>"."<th>"."Status"."</th>"."<th>"."<center>"."Action"."<center>"."</th>"."<th>"."Delete"."</th>"."<th>"."Manage Question"."</th>". "<th>"."Duration"."</th>". "</tr>";
		
    while($row = $result->fetch_assoc())
	 {
	    
  		echo "<tr>";
 	     echo "<td>";
	  	 echo $row["sub_name"];
	  	echo "</td>";
		echo "<td>";
		
		  
		if($row["status"]==1)
		echo "<a href='#?id=".$row['sub_id']."'><button name='active' value='' class='btn btn-warning btn-md' style='height:35px; width:100px;' >"."<i class='glyphicon glyphicon-edit'>"."Active"."</i>"."</button></a>";
		else
		echo "<button name='deactive' value='' class='btn btn-danger btn-md' style='height:35px; width:100px;' onclick='ad()'>"."<i class='glyphicon glyphicon-trash'>"."Deactive"."</i>"."</button>";
	    
		echo "</td>";
		echo "<td>";  
		echo"<a href='updatequestion.php?id=".$row['sub_id']."'>";
		echo "<button name='edit' value='Edit' class='btn btn-warning' style='height:35px;'>"."<i class='glyphicon glyphicon-edit'>"." Edit"."</i>"."</button>";
		echo"</a>";
		echo"</td>";		
		echo"<td>";
		?>
		
	   <a href="delete.php?id=<?php echo $row["sub_id"]; ?>" onClick="return confirm('sure to delete !');" ><button name='delete' value='' class='btn btn-danger' style='height:35px;'><i class='glyphicon glyphicon-trash'>Delete</i></button></a>		
		
		<?php 
		echo"</td>";
			
		echo"<td>";
		echo "<a href='question.php?id=".$row['sub_id']."'><button name='manageQuestion' value='' class='btn btn-primary' style='height:35px;' onclick='manage()'>"."<i class='glyphicon glyphicon-cog'>"."Manage Question"."</i>"."</button></a>";
		echo "</td>";			
			echo "<td>";
			echo $row['duration']." Min";
			echo "</td>";	
	echo "<tr>";
    }
	
	echo "</table>";
	} 
?>
    </div>
	 <div class="col-sm-1">
      
    </div>
  </div>
</div>
  
  </div>

</body>


</html>

