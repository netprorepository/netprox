<?php
include 'admin-login/setting.php';
include 'include/topheader.php';
$_GET['frid'];
?>
<body>
<?php
include "include/menubar.php";
?>

<section id="about" class="main-inn">
<div class="breadcrumb">
 <div class="container">
  <ul>
   <li><a href="<?=BASE_URL?>/"><i class="fa fa-home"></i></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active">Thank You</li>
  </ul>
 </div>
</div>
 <div class="container">
  <h2>Thanks for contacting Us!</h2>
    
    
    <p>Many thanks for your enquiry about our products &amp; services at NETPRO. </p>
    
    
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
      <p><span><?php echo $needRow['name'];?> </span> <?php echo $needRow['phone'];?> </p>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<?php 
include "include/footerscript.php";
include 'include/footer.php';
?>
</body>
</html>
