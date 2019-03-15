<?php
include 'admin-login/setting.php';
include "include/topheader1.php";
?>
<body>
<?php
include "include/menubar.php";
?>
<section class="container-fluid hero p0 see-12">
<div class="container see-13">
<!-- <a href="#" class="see-demo">SEE DEMO</a> -->
<!-- <a href="#" class="see-demo1">Pause DEMO</a>-->
    <a href="<?=BASE_URL?>/request-a-demo/" class="see-demo">Request a live demo</a>
  </div>
<video width="100%" autoplay loop id="my-video">
<?php
$slider="select * from slider where status='1'";
$slideres=mysql_query($slider);
while($sliderRow=mysql_fetch_assoc($slideres))
 {
?>
  <source src="admin-login/video/<?php echo $sliderRow['video_link']; ?>" type="video/mp4" width="100%" height="100%">
  <?php } ?>
  <!--<source src="video.ogg" type="video/ogg" width="100%" height="100%">-->
  Your browser does not support the video tag.
</video>

</section>


<section class="services">
  <hggroup>
    <h2>Our various services and products</h2>
   
  </hggroup>
  <div class="container">
    <div class="col-md-10 fl-none m-auto">
      <div class="crsl-items2" data-navigation="navbtns2">
        <div class="crsl-wrap">
		<?php
			$products="select * from product_services where status='1'";
			$productsres=mysql_query($products);
			while($productsRow=mysql_fetch_assoc($productsres))
			 {
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
          <div class="crsl-item">
            <div class="thumbnail">
              <figure> <a><img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $productsRow['images']; ?>" alt="" class="img-responsive" /></a> </figure>
              <div class="tirt"> <a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($navmenu[$j][2])?>/<?=$objComm->strToUrl($productRow['name'])?>/"><?php echo $productRow['name']; ?></a> </div>
            </div>
          </div>
		  <?php } }}?>
          <!--<div class="crsl-item">
            <div class="thumbnail">
              <figure> <a href="netpro-ilearn.html"><img src="images/s2.png" alt="" class="img-responsive" /></a> </figure>
              <div class="tirt"> <a href="classe365.html">Classe365</a> </div>
            </div>
          </div>
          <div class="crsl-item">
            <div class="thumbnail">
              <figure> <a href="netpro-idoc.html"><img src="images/s3.png" alt="" class="img-responsive" /></a> </figure>
              <div class="tirt"> <a href="identity-management.html">Identity Management</a> </div>
            </div>
          </div>
          <div class="crsl-item">
            <div class="thumbnail">
              <figure> <a href="netpro-hobo.html"><img src="images/s4.png" alt="" class="img-responsive" /></a> </figure>
              <div class="tirt"> <a href="netpro-iems.html">IEMS</a> </div>
            </div>
          </div>
          <div class="crsl-item">
            <div class="thumbnail">
              <figure> <a href="netpro-tt.html"><img src="images/s5.png" alt="" class="img-responsive" /></a> </figure>
              <div class="tirt"> <a href="netpro-ilearn.html">Learning Management System</a> </div>
            </div>
          </div>
          <div class="crsl-item">
            <div class="thumbnail">
              <figure> <a href="netpro-iems.html"><img src="images/s1.png" alt="" class="img-responsive" /></a> </figure>
              <div class="tirt"> <a href="library-management-system.html">Library Management System</a> </div>
            </div>
          </div>
          <div class="crsl-item">
            <div class="thumbnail">
              <figure> <a href="zohodox.html"><img src="images/s2.png" alt="" class="img-responsive" /></a> </figure>
              <div class="tirt"> <a href="netpro-ilearn.html">ZOHODOX</a> </div>
            </div>
          </div>-->
          
          
          
        </div>
        
        <!-- @end .crsl-wrap --> 
      </div>
    </div>
    <div class="clearfix"></div>
    <nav class="slidernav">
      <div id="navbtns2" class="clearfix"> <a href="#" class="next"><i class="fa fa-angle-right"></i></a> <a href="#" class="previous"><i class="fa fa-angle-left"></i></a> </div>
    </nav>
  </div>
</section>
<section class="otherservices">
  <link rel="stylesheet" href="css/loading_img.css">
  <?php
  $sql="select * from service_home where status=1";
  $sqlres=mysql_query($sql);
  while($sqlRow=mysql_fetch_assoc($sqlres))
    {
  ?>
    <div class="col-md-6 p0 on-red col-sm-6 col-xs-12">
    
   
    
        <ul class="rslides" id="slider1">
      <li><img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['images'];?>" alt=""></li>
      <li><img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['images1'];?>" alt=""></li>
     <li><img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['images2'];?>" alt=""></li>
    </ul>
      <?php
	  //$where="id=1";
		//$proservice=$objComm->findRecord('staticpage',$where);
		
			//$where="pageid='".$proservice[0][0]."'";
			//$navmenu=$objComm->findRecord('category',$where);			
			//for($j=0;$j<count($navmenu);$j++)
				//{
				//$product="select * from subcategory where catid='".$navmenu[$j][0]."' and pageid='".$proservice[0][0]."' limit 4";
					//$productres=mysql_query($product);
					//while($productRow=mysql_fetch_assoc($productres))
					 // {?>
   <a href="<?php echo $sqlRow['url'];?>" class="tie123 hvr-icon-wobble-vertical"><span>
    <?php echo $sqlRow['name'];?></span> </a><?php //} } ?>
 
  </div>
  <?php } ?>
  
 <!-- <div class="col-md-6 p0 on-red col-sm-6 col-xs-12">
    
   
    
        <ul class="rslides" id="slider2">
      <li><img src="images/hm2-1.jpg" alt=""></li>
      <li><img src="images/hm2-2.jpg" alt=""></li>
     <li><img src="images/hm2-3.jpg" alt=""></li>
   
    </ul>
      <a href="hospitality.html" class="tie122 hvr-icon-wobble-vertical1"><span> Hospitality</span> </a>
       
    </div>
   
 
  </div>
  <div class="col-md-6 p0 on-red col-sm-6 col-xs-12">
    
    
    
        <ul class="rslides" id="slider3">
      <li><img src="images/hm3-1.jpg" alt=""></li>
      <li><img src="images/hm3-2.jpg" alt=""></li>
     <li><img src="images/hm3-3.jpg" alt=""></li>

    </ul>
    
   <a href="healthcare.html" class="tie123 hvr-icon-wobble-vertical"><span> HealthCare</span> </a>
   
    </div>
 
  </div>
  <div class="col-md-6 p0 on-red col-sm-6 col-xs-12">
    
  
    
        <ul class="rslides" id="slider4">
      <li><img src="images/hm4-1.jpg" alt=""></li>
      <li><img src="images/hm4-2.jpg" alt=""></li>
     <li><img src="images/hm4-3.jpg" alt=""></li>
     
    </ul>
    <a href="traning-and-consultancy.html" class="tie122 hvr-icon-wobble-vertical1"><span> Training and Consultancy</span> </a>
   
    
    </div>-->
 
  </div>
</section>
<div class="clearfix"></div>
<section class="container-fluid otherProducts">
<?php
$other="select * from home_otherproduct";
$otherres=mysql_query($other);
$otherRow=mysql_fetch_assoc($otherres);
?>
  <div class="container">
    <article class="col-md-6">
	<?php echo $otherRow['description'];?>
      <!--<h3>Other Products &amp; Services</h3>
      <h2>The iEMS is an acronym for our Integrated Education Management System.</h2>
      <p>The  iEMS is  an  all  you need to  integrate all  elements  of  interaction  across  the student journey to ensure effective and effective administration of your institution enhancing the quality of  service delivered to students. The key  packages included 
        in the iEMS include:</p>
      <ul>
        <li><i class="fa fa-arrow-circle-right"></i> Online Admissions & Enquiry System</li>
        <li><i class="fa fa-arrow-circle-right"></i> Student Fees and Online Payment System</li>
        <li><i class="fa fa-arrow-circle-right"></i> Student Self-Service Portal</li>
        <li><i class="fa fa-arrow-circle-right"></i> Academic, Exams and Records System</li>
        <li><i class="fa fa-arrow-circle-right"></i> Student  Information System</li>
      </ul>-->
      <p><a href="#" class="morebtn"><!--<a href="other-products-services.html" class="morebtn">-->MORE <i class="fa fa-long-arrow-down"></i></a></p>
    </article>
    <div class="col-md-6 himg"><img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $otherRow['images'];?>" class="img-responsive center-block" alt=""/></div>
    <div class="clearfix"></div>
  </div>
</section>
<div class="clearfix"></div>
<section class="container-fluid quickCall">
<?php
	$where="id=6";
	$contact=$objComm->findRecord('staticpage',$where);
   ?>
  <div class="container">
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
<section class="container-fluid products">
  <div class="container recentProjects">
    <h3><strong>Recent</strong> Projects <a href="<?=BASE_URL?>/recent/" class="morebtn pull-right">MORE <i class="fa fa-long-arrow-down"></i></a></h3>
    <div class="clearfix"></div>
    <div class="grid">
	
	<?php
			$sql="select * from homerecent_projects order by id asc limit 5";
			$sql=mysql_query($sql);
			$num_rows = mysql_num_rows($sql);
			while($sqlRow=mysql_fetch_assoc($sql))
			
			 {			 if($sqlRow['id']==1)			  {				
	?>
      <div class="grid-item" data-colspan="2" data-rowspan="3">
        <div class="new-d">
        <a href="<?php echo $sqlRow['url'];?>" target="_blank"><?php echo $sqlRow['name'];?>
       </a></div>
      <img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['proimg'];?>" class="img-responsive" alt="" />
     
       
      </div>
	  <?php } else if($sqlRow['id']==2) { ?>
      <div class="grid-item" data-colspan="2" data-rowspan="2">
       <div class="new-d">
        <a href="<?php echo $sqlRow['url'];?>" target="_blank"><?php echo $sqlRow['name'];?>
       </a>
       </div>
      <img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['proimg'];?>" class="img-responsive" alt="" /></div>		<?php } else if($sqlRow['id']==3){ ?>
      <div class="grid-item" data-colspan="2" data-rowspan="1">
       <div class="new-d">
        <?php echo $sqlRow['name'];?> 
       </div>
      <img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['proimg'];?>" class="img-responsive" alt="" /></div>		<?php } else if($sqlRow['id']==4) {?>
      <div class="grid-item" data-colspan="2" data-rowspan="2">
       <div class="new-d">
        <a href="<?php echo $sqlRow['url'];?>" target="_blank"><?php echo $sqlRow['name'];?>
       </a> 
       </div>
      <img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['proimg'];?>" class="img-responsive" alt="" /></div>		<?php } else if($sqlRow['id']==5){ ?>
      <div class="grid-item" data-colspan="2" data-rowspan="1">
      
       <div class="new-d">
        <a href="<?php echo $sqlRow['url'];?>" target="_blank"><?php echo $sqlRow['name'];?></a> 
       </div><img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['proimg'];?>" class="img-responsive" alt="" /></div>
	   <?php } } ?>
    </div>
  </div>
  </div>
  </div>
</section>
<section class="container-fluid ourCustomers">
  <div class="container Customertext">
    <h3><span>Our</span> Customers</h3>
    <div class="clearfix"></div>
    <div  class="testmonials section s3">
      <div class="container"> 
        <script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
       
        <script type="text/javascript">
         $(document).ready(function () {           
             $('.bxslider').bxSlider({
                 mode: 'vertical',
                 slideMargin: 3,
                 auto:true
             });             
         });
    </script>
        <ul class="bxslider">
			<?php
			$customer="select * from testimonials where status=1";
			$customerres=mysql_query($customer);
			while($costomerRow=mysql_fetch_assoc($customerres))
			 {
			?>
          <li>
            <blockquote><?php echo $costomerRow['description'];?><span class="col-md-4"><?php echo $costomerRow['test_name'];?>- <?php echo $costomerRow['person_type'];?></span> </blockquote>
          </li>
		  <?php }?>
          <!--<li>
            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa. <span class="col-md-4">Lorem Ipsum - Director</span> </blockquote>
          </li>
          <li>
            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa. <span class="col-md-4">Lorem Ipsum - Director</span> </blockquote>
          </li>-->
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid ourPartners">
  <h3><span>Our</span> Partners</h3>
  <ul class="col-md-12">
  <marquee direction="left" onMouseOver="this.stop();" onMouseOut="this.start();" >
	<?php
		$partners="select * from partnerlogo where status=1";
		$partnersres=mysql_query($partners);
		while($partnerRow=mysql_fetch_assoc($partnersres))
		 {
	?>
    <li><img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $partnerRow['logoimg'];?>" class="img-thumbnail"></li>
	 <?php } ?>
    <!--<li><img src="images/cl-2.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-3.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-4.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-5.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-6.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-7.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-8.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-9.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-10.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-11.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-12.jpg" class="img-thumbnail"></li>
    <li><img src="images/cl-13.jpg" class="img-thumbnail"></li>-->
    </marquee>
  </ul>
</section>
<aside class="container-fluid ftop">
  <div class="container">
    <div class="col-md-4 col-sm-6">
      <ul>
        <li><i class="fa fa-3x fa-phone"></i></li>
		<?php
			$footercontact="select * from footer_contact";
			$footercontactres=mysql_query($footercontact);
			$footerRow=mysql_fetch_assoc($footercontactres);
		?>
        <li><span>Questions</span> <span><?php echo $footerRow['phone']; ?> </span></li>
      </ul>
    </div>
    <div class="col-md-5 col-sm-6">
      <ul>
        <li><i class="fa fa-3x fa-envelope"></i></li>
        <li><span>Mail Us At : </span> <span><?php echo $footerRow['email']; ?></span></li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-12"><a href="<?=BASE_URL?>/news/" class="bigbtn">LATEST NEWS</a></div>
  </div>
</aside>
<?php
include "include/footer.php";
?>
<script type="text/javascript" src="<?=BASE_URL?>/js/jquery.responsivegrid.js"></script> 
<script type="text/javascript">
			$('.grid').responsivegrid({
				'breakpoints': {
					'desktop' : {
						'range' : '1200-',
						'options' : {
							'column' : 6,
						}
					},
					'tablet-landscape' : {
						'range' : '1000-1200',
						'options' : {
							'column' : 5,
						}
					},
					'tablet-portrate' : {
						'range' : '767-1000',
						'options' : {
							'column' : 4,
						}
					},
					'mobile' : {
						'range' : '-767',
						'options' : {
							'column' : 4,
						}
					},
					'mobile' : {
						'range' : '-550',
						'options' : {
							'column' : 2,
						}
					},
				}
			});
		</script> 

<!-- Sticky Navigation --> 
<script src="<?=BASE_URL?>/js/waypoints.min.js"></script> 
<script src="<?=BASE_URL?>/js/waypoints-sticky.min.js"></script> 
<script>
		function makeSticky() {
			var myWindow = $( window ),
				myHeader = $( ".site-header" );

			myWindow.scroll( function() {
				if ( myWindow.scrollTop() == 0 ) {
					myHeader.removeClass( "sticky-nav" );
				} else {
					myHeader.addClass( "sticky-nav" );
				}
			} );
		}

		$( function() {
			// makeSticky();
			 
			$( ".site-header" ).waypoint( 'sticky' );
		} );
	</script> 
<script src="<?=BASE_URL?>/js/cssmenumaker.js"></script> 
<script type="text/javascript">
	$("#cssmenu").menumaker({
		title: "Select Navigation",
		format: "multitoggle"
	});
</script>

<script type="text/javascript">
//	$('.see-demo1').css('display','none')
//	$("#cssmenu").menumaker({
//		title: "Menu",
//		format: "multitoggle"
//	});
//	$('.see-demo').on('click', function() {
//	$('#my-video')[0].play();
//	$('.newr').hide();
//	$('.see-demo').css('display','none');
//	$('.see-demo1').css('display','block')
//});
//$('.see-demo1').on('click', function() {
//	$('#my-video')[0].pause();
//	$('.see-demo').css('display','block');
//	$('.see-demo1').css('display','none')
//});
//</script>


</body>
</html>
