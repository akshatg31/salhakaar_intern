<!-- <?php
include "config.php";
date_default_timezone_set('Asia/Kolkata');
$current_datetime = date('Y-m-d H:i:s');

$data = array();
        $sql = $conn->query("SELECT * FROM employee WHERE is_delete = 0");
        while($row = $sql->fetch_assoc()){
            $data[] = $row;
        }

        print_r($data);
?> -->

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th>Employee ID</th>
		 <th>Full Name</th>
         <th>Department</th>
         <th>Email</th>
         <th>Mobile Number</th>
		 <th> </th>
		 <th> </th>

    </thead>
    <tbody>
	<?php
	
		include "config.php";
		date_default_timezone_set('Asia/Kolkata');
		$current_datetime = date('Y-m-d H:i:s');

		$sql = $conn->query("SELECT * FROM employee WHERE is_delete = 0");
		while($row = $sql->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['employeeID']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['department']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['contact']."</td>";
			
			echo "<td><a href='updateemp.php?id=".$row['employeeID']."' class='btn btn-primary'>Edit</a></td>";
			echo "<td><a href='deleteemp.php?id=".$row['employeeID']."' class='btn btn-danger'>Delete</a></td>";
			echo "</tr>";
		}
		
		$conn->close();
		?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
 