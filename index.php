<html>
<head>
<title>Product Info</title>
<link rel="stylesheet" href="style.css">
</head>
<body background="back4.jpg" >

<div class="contact-form">
<h2>Submit Product Info</h2>
<form method="post" action="">
	<input type="text" name="name" placeholder="Your Name" required>
	<input type="text" name="phone" placeholder="Phone No" required>
	<input type="text" name="email" placeholder="Your Email" required>
	<input type="text" name="type" placeholder="Product name" required>
	<input type="text" name="quantity" placeholder="Required No of products (Quantity)" required>
	<textarea name="message" placeholder="Leave a Message" required></textarea>
	<a href="index.html"><input type="submit" name="submit" value="Send Message" class="submit-btn">
</form>
<div class="status">
<?php
 if(isset($_POST['submit']))
 {
 	$user_name=$_POST['name'];
 	$phone=$_POST['phone'];
 	$user_email=$_POST['email'];
 	$user_type=$_POST['type'];
 	$user_quantity=$_POST['quantity'];
 	$user_message=$_POST['message'];


 	$email_from='SSDT.com';
 	$email_subject="New Form Submission";
 	$email_body="Name: #user_name.\n".
 	              "Phone No: $phone.\n".
 	               "Email Id: $user_email.\n".
 	               "Product Name: $user_type.\n".
 	               "Required Quantity: $user_quantity.\n".
 	               "User Message: $user_message.\n";

 	$to_email="suggulajaswanth@gmail.com";
 	$headers="From: $email_from \r\n";
 	$headers .="Reply-To: $user_email \r\n";
 	echo ".";
 	
}
?>

</div>





</div>



</body>
</html>
