<?php

if(isset($_POST['submit']))
{  
	$msg = 'Name: ' .$_POST['name'] ."\n"
		
	.'Email: ' .$_POST['email'] ."\n"
		.'Message: ' .$_POST['message'];
	
	mail ('tanyahamner@yahoo.com', 'Contact Form from tanyahamner.com', $msg);
	header ('location: thankyou.php');
}
echo "Your message has been sent."
?>