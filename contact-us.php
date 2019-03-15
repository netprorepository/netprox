<?php
include 'admin-login/setting.php';
include 'include/topheader.php';
$_GET['frid'];
$contact = str_replace("-"," " ,$_GET['frid']);
?>
<body>
<?php
include "include/menubar.php";
?>

<section id="about" class="main-inn ">
<div class="breadcrumb">
 <div class="container">
  <ul>
   <li><a href="<?=BASE_URL?>/"><i class="fa fa-home"></i></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active"><?php echo str_replace("-"," " ,ucwords($_GET['frid'])); ?></li>
  </ul>
 </div>
</div>
<?php
$contact="select * from contact";
$contactres=mysql_query($contact);
$contactRow=mysql_fetch_assoc($contactres);
?>
 <div class="container sales">
    <h2><?php echo str_replace("-"," " ,$_GET['frid']); ?></h2>
  <div class="col-md-4 col-sm-4">
  <?php
  echo $contactRow['address'];
  ?>
<!--<p><strong>NetPro International Limited</strong><br />
29 Umaru Dikko Street, Jabi<br />
Abuja, FCT<br />
Nigeria <br />
P: +234-(0)9-2917-404</p>-->

<ul class="soc m0">
		<?php
			$social="select * from social_media";
			$socialres=mysql_query($social);
			$socialRow=mysql_fetch_assoc($socialres);
		?>
      <div class="shoma">
      <a href="<?php echo $socialRow['facebook']; ?>" class="hovicon effect-4 sub-b"><li><i class="fa fa-facebook"></i></li></a>
      <a href="<?php echo $socialRow['twitter']; ?>" class="hovicon effect-4 sub-b"><li><i class="fa fa-twitter"></i></li></a>
      <a href="<?php echo $socialRow['linkedin']; ?>" class="hovicon effect-4 sub-b"><li><i class="fa fa-linkedin"></i></li></a>
     </div>
    </ul>
  </div>
  
  <div class="col-md-8 col-sm-8">
  <?php
  echo $contactRow['telephone'];
  echo $contactRow['email'];
  ?>
<!--<p><strong>Telephone:</strong> <br />
General Enquiries: +234 (0)9 291 7404<br />
Sales: +234 (0)703 61 14 567; +234 (0)811 11 13 454<br />
Support: +234 (0)805 22 55 000<br />
South Africa: +27 1 0500 1859<br />
Ireland: +353 1 4370944

</p>-->
  
  
<!--<p><strong>E-mail:</strong> <br />
<span>General Enquiries:</span> info@netpro.com.ng; info@netpro.ie<br />
<span>Sales:</span>< sales@netpro.com.ng; sales@netpro.ie<br />
<span>Support:</span> support@netpro.com.ng; support@netpro.ie</span></p>-->
  </div>
   
   <h2>Contact Form</h2>
   <script src="<?=BASE_URL?>/scripts/gen_validatorv31.js" type="text/javascript"></script>
   <form method="POST" name="contact" action="<?=BASE_URL?>/contact-handler.php">
<ul class="form-team">
   <li class="col-md-6"><label>First Name <span>*</span></label>
    <input type="text" class="form-control" name="name" required />
   </li>
   
   <li class="col-md-6"><label>Last <span>*</span></label>
    <input type="text" class="form-control" name="lastname" required />
   </li>
   
   <li class="col-md-6"><label>Phone <span>&nbsp;</span></label>
    <input type="text" class="form-control" name="phone" />
   </li>
   
   <li class="col-md-6"><label>Email <span>*</span></label>
    <input type="text" class="form-control" name="email" required />
   </li>
   
   <li class="col-md-12"><label>Message <span>*</span></label>
    <textarea class="form-control" name="message" required ></textarea>
   </li>
   
   <li class="col-md-12 ">
    <input type="submit" class="bigbtn btn center-block col-md-4 fl-none m-auto d-inherit">   
   </li>
  </ul>
  </form>
 </div>
</section>
 <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("lastname","req","Please provide your last name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
frmvalidator.addValidation("message","req","Please type your message"); 
</script> 

<?php
include "include/footerscript.php";
?>
</body>
</html>
