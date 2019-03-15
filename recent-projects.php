<?php
include 'admin-login/setting.php';
include 'include/topheader.php';
$_GET['frid'];
?>
<body>
<?php
include "include/menubar.php";
?>
<section id="products-inn1" class="main-inn4">
<img src="<?=BASE_URL?>/images/pr-inn1.jpg" class="para" alt="Paris" data-parallax='{"y": 230}'/>
<div class="breadcrumb">
 <div class="container">
  <ul>
   <li><a href="<?=BASE_URL?>/"><i class="fa fa-home"></i></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active">Recent Projects</li>
  </ul>
 </div>
</div>

 <div class="container">
    <div class="col-md-12">
      <h2>Netpro Projects</h2>
      <p>NetPro provides end-to-end technology solutions, consultancy and training for the Corporate &amp; Financial Sector, Higher Education & Healthcare Industries, SMEs and Government Establishments. </p>
      
    </div>
    <div class="clearfix"></div>
   
  </div>

</section>

 <script src="<?=BASE_URL?>/js/photo-gallery.js"></script>
<section id="white" class="main-inn1">
<div class="container">
<ul class="row">
            <?php
			$sql="select * from homerecent_projects";
			$sql=mysql_query($sql);
			while($sqlRow=mysql_fetch_assoc($sql))
			
			 {
			 //echo $sqlRow['proimg'];
			?>
            
            <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['proimg'];?>" style="width:262px; height:181px;">
            </li>
			<?php } ?>
           <!--<li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-1471528-insant-camera-kid-xs.jpg">
            </li>
           <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-2255072-relaxed-man-xs.jpg">
            </li>
            <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-2360379-colors-xs.jpg">
            </li>
            <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-2360571-jump-xs.jpg">
            </li>
            <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-2361384-culture-for-business-xs.jpg">
            </li>
            <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
            </li>
           <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-2943363-budget-xs.jpg">
            </li>
         
         
            <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-3552322-insurance-xs.jpg">
            </li>
           <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-3807845-food-s.jpg">
            </li>
            <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-3835655-down-office-worker-xs.jpg">
            </li>
           <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-4619216-ui-control-knob-regulators-xs.jpg">
            </li>
            <li class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                <img class="img-responsive img-thumbnail" src="images/photodune-5771958-health-xs.jpg">
            </li>-->
           
           
          </ul>
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
    </div>
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
