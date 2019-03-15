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
   <!--<li><i class="fa fa-angle-double-right"></i></li>
   <li><a href="#">Tab Name</a></li>-->
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active">Latest News</li>
  </ul>
 </div>
</div>
<?php
$sql="select * from tbl_news where status='1'";
$sqlres=mysql_query($sql);
$sqlRow=mysql_fetch_assoc($sqlres);
?>
 <div class="container">
  <div class="col-md-12">
   <h2>Latest News</h2>
   <?php echo $sqlRow['description1']; ?> 
  </div>
  

 </div>
</section>
<section id="white" class="main-inn1">
<?php echo $sqlRow['description2']; ?>
 <!--<div class="container">
  <div class="col-md-8">
   <h3>Type your news here</h3>
   <p>Our Vision is to build the most credible brand in bespoke software and technology service provision in West Africa. This vision is backed by a robust corporate strategy and implementation plan.</p>
  </div>
  <div class="col-md-4 img-p">
   <img src="images/buystrip_hero_large.png" class="img-responsive" alt="" />
  </div>

 </div>-->
</section>
<section id="white" class="main-inn1">
<?php echo $sqlRow['description3']; ?>
<!--
 <div class="container">
  <div class="col-md-4 img-p">
   <img src="images/buystrip_hero_large.png" class="img-responsive" alt="" />
  </div>
  <div class="col-md-8">
   <h3>Type your news here</h3>
   <p>We believe that technology is a tool and enabler for organisational transformation. We promise to exceed the expectations of every client by offering outstanding, honest & flexible services that will certainly transform the way you do business.</p>
  </div>
 

 </div>-->
</section>
<section id="we-do" class="main-inn" style="background: url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['images'];?>)  no-repeat center center fixed;">
 <?php echo $sqlRow['description4']; ?>
 <!--<div class="container">
  <div class="col-md-12">
   <h2>Type your news here </h2>
   <p>NetPro provides end-to-end technology solutions, consultancy and training for the Corporate &amp; Financial Sector, Higher Education & Healthcare Industries, SMEs and Government Establishments. </p>

  </div>
  <div class="clearfix"></div>
  <ul class="what">
   <li class="col-md-2 ser-box"><a href="#">iEMS</a></li>
   <li class="col-md-2 ser-box"><a href="#">Netpro iLearn</a></li>
   <li class="col-md-2 ser-box"><a href="#">Netpro iDoc</a></li>
   <li class="col-md-2 ser-box"><a href="#">Netpro TT</a></li>
   <li class="col-md-2 ser-box"><a href="#">Netpro HoBo</a></li>
  </ul>
  
  
  

<div class="clearfix"></div>
<a href="#" class="read">More</a>
 </div>-->
</section>
<section id="white" class="main-inn1">
<?php echo $sqlRow['description5']; ?>
<!--
 <div class="container">
  <div class="col-md-4 img-p">
   <img src="images/buystrip_hero_large.png" class="img-responsive" alt="" />
  </div>
  <div class="col-md-8">
   <h3>What Makes Us Different</h3>
   <p>Our solutions and services will be designed, customised and optimised to meet your specific needs. Our cost model is flexible and allows us to deliver world-class services at affordable costs. Our team is made up of distinguished professionals in their individual fields. We value our clients and conduct our business with a strong sense of ethics and moral values.</p>
  </div>
 

 </div>-->
</section>
<section class="container-fluid quickCall">
<?php
	$where="id=6";
	$contact=$objComm->findRecord('staticpage',$where);
  ?>
  <div class="container">
    <div class="col-md-6 col-sm-6 call"> <a href="<?=BASE_URL?>/<?=$objComm->strToUrl($contact[0][1])?>/" class="bigbtn"> CONTACT US </a> </div>
    <div class="col-md-6 talk col-sm-6">
      <p>NEED TO TALK WITH US ?</p>
	  <?php
	  $need="select * from needto_talk";
	  $needres=mysql_query($need);
	  $needRow=mysql_fetch_assoc($needres);
	  ?>
      <p><span><?php echo $needRow['name'];?></span><?php echo $needRow['phone'];?> </p>
    </div>
    <div class="clearfix"></div>
  </div>
</section>


<?php 
include "include/footerscript.php";
?>
</body>
</html>
