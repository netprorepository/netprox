<?php
include 'admin-login/setting.php';
include 'include/topheader.php';
$_GET['frid'];
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
   <li class="active"><?php echo str_replace('-',' ',ucwords($_GET['frid'])); ?></a></li>
  </ul>
 </div>
</div>
<?php
$support="select * from staticpage where name='".$_GET['frid']."'";
$supportres=mysql_query($support);
$supportRow=mysql_fetch_assoc($supportres);
?>
 <div class="container sales">
 <?php
 echo $supportRow['description'];
 ?>
  <!--<h2>Welcome To Sales &amp; Support</h2>
  <div class="col-md-8">
   <p><strong>We supply portable devices,</strong> laptops, access control systems, security cameras, digtal signature pads, etc in bulk. We also brand and customize various mobile devices according to specification for clients. Feel free to visit us at our office or contact our sales department at <a href="mailto:sales@netpro.com.ng">sales@netpro.com.ng.</a></p>
   <p>You can get support for all our products and services by contacting us via <a href="mailto:support@netpro.ie">support@netpro.ie.</a></p>
  </div>
   
   <div class="col-md-4">
    <img src="<?=BASE_URL?>/images/support.jpg" class="img-responsive img-circle img-thumbnail" alt="" /> 
   </div> -->

 </div>
</section>


<section id="we-do" class="main-inn">
 <div class="container">
  <div class="col-md-12">
   <h2>How Can We Help You Today</h2>
   <p>Get a free quote with no obligation !</p>

  </div>
  <div class="clearfix"></div>
     <script src="<?=BASE_URL?>/scripts/gen_validatorv31.js" type="text/javascript"></script>
   <form method="POST" name="contact" action="<?=BASE_URL?>/contact-handler.php">
  <ul class="form-team">
   <li class="col-md-4"><label>Name <span>*</span></label>
    <input type="text" class="form-control" name="name" required />
   </li>
   
   <li class="col-md-4"><label>Phone <span>*</span></label>
    <input type="text" class="form-control" name="phone" />
   </li>
   
   <li class="col-md-4"><label>Email <span>*</span></label>
    <input type="text" class="form-control" name="email" required />
   </li>
   
   <li class="col-md-12"><label>Message <span>*</span></label>
    <textarea class="form-control" name="message" required></textarea>
   </li>
   
   <li class="col-md-12 ">
    <input type="submit" class="bigbtn btn center-block col-md-4 fl-none m-auto d-inherit">   
   </li>
  </ul>
  </form>
  
   <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
frmvalidator.addValidation("message","req","Please type your message"); 
</script> 

<div class="clearfix"></div>

 </div>
</section>

<section class="container-fluid quickCall">
  <div class="container">
	<?php
	$where="id=6";
	$contact=$objComm->findRecord('staticpage',$where);
  ?>
    <div class="col-md-6 col-sm-6 call"> <a href="<?=BASE_URL?>/contact-us/" class="bigbtn"> CONTACT US </a> </div>
    <div class="col-md-6 talk col-sm-6">
      <p>NEED TO TALK WITH US ?</p>
	  <?php
	  $need="select * from needto_talk";
	  $needres=mysql_query($need);
	  $needRow=mysql_fetch_assoc($needres);
	  ?>
      <p><span><?php echo $needRow['name'];?></span> <?php echo $needRow['phone'];?> </p>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<?php
include "include/footerscript.php";
?>
</body>
</html>
