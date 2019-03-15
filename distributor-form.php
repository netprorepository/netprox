<?php 
$errors = '';
$myemail = 'pankaj.choursia0001@gmail.com';//<-----Put Your email address here.
if(empty($_POST['surname'])  || 
   empty($_POST['lastname']) ||
   empty($_POST['date']) ||
   empty($_POST['gender']) ||
   empty($_POST['country']) ||
   empty($_POST['state']) ||
   empty($_POST['address']) ||
   empty($_POST['phone']) ||
   empty($_POST['email']) ||
   empty($_POST['companyname']) ||
   empty($_POST['jobtitle']) ||
   empty($_POST['companyoremail']) ||
   empty($_POST['additional']))

{
    $errors .= "\n Error: all fields are required";
}

$surname = $_POST['surname'];
$lastname = $_POST['lastname']; 
$middlename = $_POST['middlename']; 
$date = $_POST['date']; 
$gender = $_POST['gender'];
$country = $_POST['country'];
$state = $_POST['state'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email_address = $_POST['email']; 
$companyname = $_POST['companyname'];
$jobtitle = $_POST['jobtitle'];
$companyoremail = $_POST['companyoremail'];
$additional = $_POST['additional'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail;
   
   $subject = "You have received a new enquiry ( Distributor Form ).";
   $message = "<html><head>";
   $message .= "</head><body>";
   $message .= "You have received a new message. ".
	
	"Here are the details:
	 <br />
	 \n Surname: $surname <br />
	 \n Last Name: $lastname<br />
	 \n Middle Name: $middlename<br />
	 \n Date: $date<br />
	 \n Gender: $gender<br />
	 \n Country: $country<br />
	 \n State: $state<br />
	 \n Address: $address<br />
	 \n Phone: $phone<br />
	 \n Email: $email_address<br />
	 \n Company Name: $companyname<br />
	 \n Job Title: $jobtitle<br />
	 \n Company Name or Email: $companyoremail<br />
	 \n Additional Information: $additional
	 ";
	 
   $message .= "</body></html>";
   $headers = "From: info@deliciousweb.in\r\n";
   $headers .= "Reply-To: info@deliciousweb.in\r\n";
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