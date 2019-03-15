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
	$store="select * from staticpage where name='".$_GET['frid']."'";
	$storeres=mysql_query($store);
	$storeRow=mysql_fetch_assoc($storeres);
	echo $storeRow['description'];
	?>
 </div>
</section>
<section id="white1" class="main-inn1 p0">

 <div class="container-fluid p0">
  <?php
		$where="id=1";
		$proservice=$objComm->findRecord('staticpage',$where);
		
			$where="pageid='".$proservice[0][0]."'";
			$navmenu=$objComm->findRecord('category',$where);			
			for($j=0;$j<count($navmenu);$j++)
				{
				$product="select * from subcategory where catid='".$navmenu[$j][0]."' and pageid='".$proservice[0][0]."' limit 4";
					$productres=mysql_query($product);
					while($productRow=mysql_fetch_assoc($productres))
					  {
		?>
  
  <div class="col-md-6 box-p col-sm-6 col-xs-12">
  <img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $productRow['images'];?>" style="height:300px; width:100%;"/>
   <div class="inno col-md-6">
   
   <h3><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($navmenu[$j][2])?>/<?=$objComm->strToUrl($productRow['name'])?>/"><?php echo $productRow['name'];?></a></h3>
   <a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($navmenu[$j][2])?>/<?=$objComm->strToUrl($productRow['name'])?>/" class="readmore">Buy</a>

   </div>
  </div>
  <?php } } ?>
  <!--
 <div class="col-md-6 box-p col-sm-6 col-xs-12">
  <img src="<?=BASE_URL?>/images/test-3.jpg" />
   <div class="inno col-md-6 ne-1">
   <h3><a href="services.html">Classe365</a></h3>
   <a href="services.html" class="readmore">Buy</a>
   </div>
  </div>
 <div class="col-md-6 box-p col-sm-6 col-xs-12">
  <img src="<?=BASE_URL?>/images/iden-3.jpg" />
   <div class="inno col-md-6">
   
   <h3><a href="products.html">Identity Management</a></h3>
   <a href="products.html" class="readmore">Buy</a>

   </div>
  </div>
 <div class="col-md-6 box-p col-sm-6 col-xs-12">
  <img src="<?=BASE_URL?>/images/iems-34.jpg" />
   <div class="inno col-md-6 ne-1">
   <h3><a href="services.html">iEMS</a></h3>
   <a href="services.html" class="readmore">Buy</a>
   </div>
  </div>
 <div class="col-md-6 box-p col-sm-6 col-xs-12">
  <img src="<?=BASE_URL?>/images/learn-3.jpg" />
   <div class="inno col-md-6">
   
   <h3><a href="products.html">Learning Management System</a></h3>
   <a href="products.html" class="readmore">Buy</a>

   </div>
  </div>
 <div class="col-md-6 box-p col-sm-6 col-xs-12">
  <img src="<?=BASE_URL?>/images/pr-1.jpg" />
   <div class="inno col-md-6 ne-1">
   <h3><a href="services.html">Zohodox</a></h3>
   <a href="services.html" class="readmore">Buy</a>
   </div>
  </div>-->
  <div class="clearfix"></div> </div>
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
?>
</body>
</html>
