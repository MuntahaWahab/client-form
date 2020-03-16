<?php
	
	$fname = $lname = $email = $mobile = $subject = $message = "";
	$fname = $lanme = $email = $mobile = $subject = $message = "";
	
	
	if (empty($_POST["email"])) {
    $email = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email = "Invalid email format";
    }
  }
  
  
	$fname = $_POST['fname'];	
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$error_message = "";
	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
	
  
  
	if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $fname . " " . $lname . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $fname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>




<!DOCTYPE html>
<html>

	<head>
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	</head>
	
	<body>
	
		<div id="container">
		
			<div class="container-fluid">
				
			<div class="row">
					
				<div class="col-md-3">
				</div>
				
				<div class="col-md-6">
							
					<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
								
						<h1>Registration Form:</h1><br>
								
								<div class="form-row">

									<div class="form-group col-md-6">
									  <label for="name">First Name</label>
									  <input type="text" class="form-control" value="<?php echo $fname;?>" id="inputEmail4" placeholder="FirstName" name="fname">
									</div>
									<div class="form-group col-md-6">
									  <label for="name">Last Name</label>
									  <input type="text" class="form-control" value="<?php echo $lname;?>" id="inputPassword4" placeholder="LastName" name="lname">
									</div>
									</div>
									
									<div class="form-group">
										<label for="exampleFormControlInput1">Email address</label>
										<input type="email" class="form-control" value="<?php echo $email;?>" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
									</div>
									<div class="form-group">
										<label for="exampleFormControlInput1">Mobile</label>
										<input type="text" class="form-control" value="<?php echo $mobile;?>" id="exampleFormControlInput1" placeholder="Mobile" name="mobile">
									</div>
									<div class="form-group">
										<label for="exampleFormControlInput1">Subject</label>
										<input type="text" class="form-control" value="<?php echo $subject;?>" id="exampleFormControlInput1" placeholder="Subject" name="subject">
									</div>
									
									<div class="form-group">
										<label for="exampleFormControlTextarea1">Message</label>
										<textarea class="form-control" value="<?php echo $message;?>" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
									</div>
								
									<br>
									<button type="submit" class="btn btn-success" name="submit">Submit</button>
									
				
				
					</form>
				</diV>
				
				<div class="col-md-3">
				</div>
			
			</div><!--row-->
			
			
			</div><!--contfluid-->
			
			<script src="jquery-3.3.1.js"></script>
			<script src="bootstrap.min.js"></script>
			<script src="popper.js"></script>
			
			
			
		
		</div><!--container-->
	</body>
</html>