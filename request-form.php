<?php 
$errors = '';
$myemail = 'info@netpro.com.ng';//<-----Put Your email address here.
if(empty($_POST['organization'])  || 
   empty($_POST['name']) ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['services']) ||
   empty($_POST['country']))

{
    $errors .= "\n Error: all fields are required";
}

$organization = $_POST['organization'];
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$phone = $_POST['phone']; 
$services = $_POST['services'];
$country = $_POST['country'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
   $to = $myemail;
   
   $subject = "You have received a new enquiry ( Request a Demo ).";
   $message = "<html><head>";
   $message .= "</head><body>";
   $message .= "You have received a new message. ".
	
	"Here are the details:
	 <br />
	 \n Organization: $organization <br />
	 \n Name: $name<br />
	 \n Email: $email_address<br />
	 \n Phone: $phone<br />
	 \n Services: $services<br />
	 \n Country: $country
	 ";
	 
   $message .= "</body></html>";
   $headers = "From: info@netpro.com.ng\r\n";
   $headers .= "Reply-To: info@netpro.com.ng\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   mail( $to, $subject, $message, $headers );
	
	//redirect to the 'thank you' page
	header('Location: thanks.php');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>