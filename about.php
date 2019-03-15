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
   <li class="active"><?php echo str_replace('-',' ',ucwords($_GET['frid']));?></li>
  </ul>
 </div>
</div>
 <div class="container">
<?php
$store="select * from staticpage where name ='".str_replace('-',' ',$_GET['frid'])."'";
	$storeres=mysql_query($store);
	$storeRow=mysql_fetch_assoc($storeres);
	echo $storeRow['description'];
?>

 </div>
</section>
<section id="white" class="main-inn1">

 <div class="container">
  <?php echo $storeRow['description1']; ?>

 </div>
</section>
<section id="white" class="main-inn1">

 <div class="container">
  <?php echo $storeRow['description2']; ?>
 

 </div>
</section>
<section id="white" class="main-inn1">

 <div class="container">
  <?php echo $storeRow['description3']; ?>
 

 </div>
</section>
<div class="container text-center abtmap center-block col-md-10 fl-none">


	<img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $storeRow['images'];?>" class="img-responsive p10 center-block"/>
    
</div>
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
