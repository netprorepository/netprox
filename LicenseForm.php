<?php
 
if(isset($_POST['submit'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "temidayo@netpro.com.ng";
 
    $email_subject = "Your email subject line";
 
     
 
     
 
   
 
     
 
    // validation expected data exists
 
  $institution = $_POST['institution']; // required
 
    $url = $_POST['url']; // required
 
    $adminname = $_POST['adminname']; // required
 
    $adminphone = $_POST['adminphone']; // not required
 
    $adminemail = $_POST['adminemail']; // required
 
 $techname = $_POST['techname']; // required
 
    $techphone = $_POST['techphone']; // required
 
    $techemail = $_POST['techemail']; // required
 
    $staff = $_POST['staff']; // not required
 
    $student = $_POST['student']; // required
 
 $nwsos = $_POST['nwsos']; // required
 
    $wsos = $_POST['wsos']; // required
 
    $nwdos = $_POST['nwdos']; // required
 
    $Wdos = $_POST['Wdos']; // not required
 
    $nmso = $_POST['nmso']; // required
 
     
 
    $mso = $_POST['mso']; // required
 
    $ACL = $_POST['ACL']; // required
 
    $ltype = $_POST['ltype']; // required
 
    
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  
 
 
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name of Institution: ".clean_string($institution)."\n";
 
    $email_message .= "Website URL: ".clean_string($url)."\n";
 
    $email_message .= "Administrative Contact: ".clean_string($adminname)."\n";
 
    $email_message .= "Phone No: ".clean_string($adminphone)."\n";
 
    $email_message .= "Email: ".clean_string($adminemail)."\n";
	
	$email_message .= "Technical Contact: ".clean_string($techname)."\n";
 
    $email_message .= "Phone No: ".clean_string($techphone)."\n";
 
    $email_message .= "Email: ".clean_string($techemail)."\n";
 
    $email_message .= "Number of Staff: ".clean_string($staff)."\n";
 
    $email_message .= "Number of Students: ".clean_string($student)."\n";
 
    $email_message .= "Number of Licensed Windows Server Operating System: ".clean_string($nwsos)."\n";
 
    $email_message .= "What Version of Windows Server OS: ".clean_string($wsos)."\n";
 
    $email_message .= "Number of Licensed Windows Desktop Operating System: ".clean_string($nwdos)."\n";
 
    $email_message .= "What Version of Windows Desktop OS: ".clean_string($Wdos)."\n";
 
    $email_message .= "Number of Licensed Microsoft Office Package: ".clean_string($nmso)."\n";
 
    $email_message .= "What Version of Microsoft Office Package: ".clean_string($mso)."\n";
 
    $email_message .= "Do you currently have an Academic Volume Licensing?: ".clean_string($ACL)."\n";
 
    $email_message .= "If yes, please indicate the License Type: ".clean_string($ltype)."\n";
 
    
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$adminemail."\r\n".
 
'Reply-To: '.$adminemail."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Net Pro</title>
<style type="text/css">
#form1 p strong {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 24px;
}
#form1 table {
	text-align: left;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.hd {
	text-align: center;
}
</style>
</head>

<body>
<header>
<p class="hd"><img src="nlogo.png" alt="" width="244" height="62" /></p>
<p class="hd"><img src="maep.png" alt="" width="528" height="71" /></p>
<form id="form1" name="form1" method="post" action="">
  <p align="center"><strong>VOLUME LICENSING APPLICATION FORM</strong></p>
  <table width="724" border="0" align="center">
    <tr>
      <td width="370"><strong>Name of   Institution</strong></td>
      <td width="309"><label for="institution"></label>
      <input name="institution" type="text" id="institution" size="50"  required="required"/></td>
    </tr>
    <tr>
      <td><strong>Website  URL</strong></td>
      <td><label for="url"></label>
      <input name="url" type="text" id="url" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Administrative Contact   :</strong></td>
      <td><label for="adminname"></label>
      <input name="adminname" type="text" id="adminname" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Phone No:</strong></td>
      <td><input name="adminphone" type="text" id="adminphone" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Email: </strong></td>
      <td><input name="adminemail"  type="email" id="adminemail" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Technical Contact   :</strong></td>
      <td><input name="techname" type="text" id="techname" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Phone No:</strong></td>
      <td><input name="techphone" type="text" id="techphone" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Email: </strong></td>
      <td><input name="techemail" type="email" id="techemail" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Number of   Staff:</strong></td>
      <td><input name="staff" type="text" id="staff" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Number of   Students:</strong></td>
      <td><input name="student" type="text" id="student" size="50" required="required"/></td>
    </tr>
    <tr>
      <td><strong>Number of   Licensed Windows Server Operating System:</strong></td>
      <td><input name="nwsos" type="text" id="nwsos" size="50" required="required" /></td>
    </tr>
    <tr>
      <td><strong>What   Version of Windows Server OS:</strong></td>
      <td><select name="wsos" id="wsos" required="required">
        <option value="Windows 2003 R2">Windows 2003 R2</option>
        <option value="Windows 2008">Windows 2008 </option>
        <option value="Windows 2008 R2">Windows 2008 R2</option>
        <option value="Windows 2012">Windows 2012</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>Number of Licensed   Windows Desktop Operating System:</strong></td>
      <td><input name="nwdos" type="text" id="nwdos" size="50" required="required" /></td>
    </tr>
    <tr>
      <td><strong>What   Version of Windows Desktop OS</strong></td>
      <td><select name="Wdos" id="Wdos" required="required">
        <option value="Windows 7">Windows 7</option>
        <option value="Windows 8">Windows 8</option>
        <option value="Windows 8.1">Windows 8.1</option>
        <option value="Windows 10">Windows 10</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>Number of Licensed Microsoft Office Package :</strong></td>
      <td><input name="nmso" type="text" id="nmso" size="50" required="required" /></td>
    </tr>
    <tr>
      <td><strong>What   Version of Microsoft Office Package: </strong></td>
      <td><label for="mso"></label>
        <select name="mso" id="mso" required="required">
          <option value="Office 2007">Office 2007</option>
          <option value="Office 2010">Office 2010</option>
          <option value="Office 2013">Office 2013</option>
          <option value="Office 2016">Office 2016</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>Do  you currently have an Academic Volume Licensing?</strong></td>
      <td><p>
          <label>
            <input type="radio" name="ACL" value="Yes" id="ACL_0" required="required" />
            Yes</label>
          <br />
          <label>
            <input type="radio" name="ACL" value="No" id="ACL_1" required="required"/>
            No</label>
          <br />
      </p></td>
    </tr>
    <tr>
      <td><strong>If  yes, please indicate the License Type</strong></td>
      <td><input type="text" name="ltype" id="ltype" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>