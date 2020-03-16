<?php

	include('connection.php');

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Viewing Page</title>
		<link rel="stylesheet" href="bootstrap.min.css">
		
	</head>
	
	<body>
		<div class="container">
		
		<table class="table table-bordered" style="margin-top:100px;">
			<tr>
	
				<td scope="col">Business Name</td>
				<td scope="col">Type of Business</td>
				<td scope="col">Name of Owner</td>
				<td scope="col">Contact Number</td>
				<td scope="col">Business Number</td>
				<td scope="col">Details</td>
				
			</tr>
			
			
			<?php 
				
				$sql = "SELECT * FROM client_form";
				
				$result = mysqli_query ($conn, $sql);
				
				if (mysqli_num_rows($result)>0){
	
					while($row = mysqli_fetch_assoc($result)){
	
		
					
					$bname = $_row['bname'];
					$tname = $_row['tname'];
					$fname = $_row['fname'];
					$lname = $_row['lname'];
					$contact = $_POST['contact'];
					$bnumber = $_POST['bnumber'];
					
					
					
					
					
			?>

			<tr>
				
				<td><?php echo $bnmae; ?></td>
				<td><?php echo $tname ?></td>
				<td><?php echo $fname ?></td>
				<td><?php echo $lname ?></td>
				<td><?php echo $contact ?></td>
				<td><?php echo $bnumber; ?></td>
				
				<td><a href="sava_by_id.php?id=<?php echo $row['id'];?>">View Details</a></td>
				
				
				
			</tr>
	<?php
	}
	}
	?>
				
		
		</table>
	
		</div>
	
	</body>
</html>