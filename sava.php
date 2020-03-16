<?php
	include('connection.php');
	
	
	if(isset($_POST['submit'])){
		
		
		$bname = $_POST['bname'];
		$tname = $_POST['tname'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$contact = $_POST['contact'];
		$saddress = $_POST['saddress'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$code = $_POST['code'];
		$uk = $_POST['uk'];
		$bnumber = $_POST['bnumber'];
		$cuisine = $_POST['cuisine'];
		$restaurant = $_POST['restaurant'];
		$delivery = $_POST['delivery'];
		$check = $_POST['check'];
		$order = $_POST['order'];
		$check2 = $_POST['check2'];
		$webaddress = $_POST['webaddress'];
		$fee = $_POST['fee'];
		$account = $_POST['account'];
		$holder = $_POST['holder'];
		$scode = $_POST['scode'];
		$accnumber = $_POST['accnumber'];
		$eaddress = $_POST['eaddress'];
		
		
		$sql = "INSERT INTO client_form (bname, tname, fname, lname, contact, saddress, city, country, code, uk, bnumber, cuisine, restaurant, delivery, check, order, check2, webaddress, fee, account, holder, scode, accnumber, eaddress) VALUES('$bname', '$tname', '$fname', '$lname', '$contact', '$saddress', '$city', '$country', '$code', '$uk', '$bnumber', '$cuisine', '$restaurant', '$delivery', '$check', '$order', '$check2', '$webaddress', '$fee', '$account', '$holder', '$scode', '$accnumber', '$eaddress',)";
		
		if(mysqli_query ($conn,$sql) ){
				echo "<div>New record in database!</div>";
			}else {
				echo "Error:" . $query . "<br>" . mysqli_error($conn);
			}
			
	}
		
		mysqli_close($conn);
		
		
		
	
	
		
?>





<!DOCTYPE html>
<html>
	
	<head>
		<title>Client Submission - Savasaachi</title>
		
		<link rel="stylesheet" type="text/css" href="sava.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	</head>	
	
	<body>
		
		<div id="main">
			
			<div class="container">
			
				
					
					<p class="h1 p1"  style="text-align:center">Client Submission Form</p>
					
					
					
						<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data"> 
							
							<div class="form-group col-md-6">
								<label for="validationDefault01">Business Name</label>
								<span class="error">*</span>
								<input type="text" class="form-control" id="validationDefault01" placeholder="Enter Business Name" name="bname">
								
							</div>
							<div class="invalid-feedback">
								Please provide a valid Business Name.
							</div>
							
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Type of Business</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type of Business" name="tname">
							</div>
							
							
							<div class="form-group container-fluid">
								<label for="inputNameofOwner">Name of Owner</label>
								<span class="error">*</span>
							</div>
							<div class="form-row container-fluid">
								<div class="col-md-6">
									  	
									<input type="text" class="form-control" id="validationDefault01" placeholder="First Name" name="fname">
								</div>
								<div class="col-md-6">
									  	
									<input type="text" class="form-control" id="validationDefault01" placeholder="Last Name" name="lname">
								</div>
							</div>
							<br>
							
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Contact Number</label>
								<input type="text" class="form-control box" id="exampleFormControlInput1" placeholder="Contact Number" name="contact">
							</div>
							
							<div class="form-group col-md-12">
								<label for="exampleFormControlInput1">Business Address</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Street Address" name="saddress">
							</div>
							
							<div class="form-row col-md-12">
								<div class="col-md-6">
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="City" name="city">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Country/State" name="country">
								</div>
							</div>
							<br>
							<div class="form-row col-md-12 container-fluid">
								<div class="col-md-6">
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ZIP Postal Code" name="code">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="United Kingdom" name="uk">
								</div>
							</div>
							<br>
							
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Business Number</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Business Number" name="bnumber">
							</div>
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Cuisine Type</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cuisine Type" name="cuisine">
							</div>
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Restaurant & Takeaway</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Restaurant & Takeaway" name="restaurant">
							</div>
							<div class="form-group container-fluid">
								<label for="exampleFormControlInput1">Delivery Services</label>
								<input type="text" class="form-control" style= "height:150px;" id="exampleFormControlInput1" placeholder="Delivery Services" name="delivery">
							</div>
							
							<div class="form-group container-fluid">
							<label for="exampleFormControlInput1">Online Ordering</label>
							<div class="form-check">
							  <input class="form-check-input" name="check" type="checkbox" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
								Yes
							  </label>
							</div>
							
							<div class="form-group col-md-6" id="ifYes" style="display:none">
								<label for="exampleFormControlInput1">Online Order Link</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Online Order Link" name="order">
							</div>
							
							<div class="form-check">
							  <input class="form-check-input" type="checkbox"  name="check" value="" id="defaultCheck2">
							  <label class="form-check-label" for="defaultCheck2">
								No
							  </label>
							</div>
							</div> 
							<div class="form-group container-fluid">
								<label for="exampleFormControlInput1">Bar Services</label>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox"  name="check2" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
								Yes
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox"  name="check2" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
								No
							  </label>
							</div>
							<br>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Website Address</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Website Address" name="webaddress">
							</div>
							</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Admin Fee:</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin Fee" name="fee">
							</div>
							</div>
							
							<div class="pp">
								<p class="h3">Bank Details</p>
							</div>
							<br>
							<div class="form-row">							
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Name of Bank Account</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name of Bank Account" name="account">
							</div>
							</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Name of account holder</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name of account holder" name="holder">
							</div>
							</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Sort Code</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Sort Code" name="scode">
							</div>
							</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Account Number</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Account Number" name="accnumber">
							</div>
							</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleFormControlInput1">Email Address</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email Address" name="eaddress">
							</div>
							</div>
							
							<button type="button" class="btn btn-primary bb" name="submit">Submit</button>
							
						</form>
					
					
						
					<script src="jquery-3.3.1.js"></script>
					<script src="popper.js"></script>
					<script src="bootstrap.min.js"></script>
				
				
			</div><!--container-->
			
		</div><!--main-->
	</body>
</html>
