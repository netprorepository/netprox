<?php
include 'admin-login/setting.php';
include 'include/topheader.php';
error_reporting(0);
?>
<body>
<?php
include "include/menubar.php";
if($_GET['thid'])
 {
  if($_GET['seid']=='product')
   {
   $static="select * from staticpage where url='".$_GET['frid']."'";
	$staticres=mysql_query($static);
	$staticRow=mysql_fetch_assoc($staticres);
	$staticRow['id'];
	$category="select * from category where url='".$_GET['seid']."'";
	$categoryres=mysql_query($category);
	$categoryRow=mysql_fetch_assoc($categoryres);
	//echo $subcategory="select * from subcategory pageid='".$staticRow['id']."' and catid='".$categoryRow['id']."'";
	$subcategory="SELECT * FROM `subcategory` WHERE `pageid`='".$staticRow['id']."' and `catid`='".$categoryRow['id']."' and url='".$_GET['thid']."'";
	$subcategoryres=mysql_query($subcategory);
	$subcategoryRow=mysql_fetch_assoc($subcategoryres);
?>
<section id="iems" class="main-inn">
<img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $subcategoryRow['images'];?>" class="para" alt="Paris" data-parallax='{"y": 230}'/>
  <div class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="<?=BASE_URL?>"><i class="fa fa-home"></i></a></li>
        <li><i class="fa fa-angle-double-right"></i></li>
        <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($staticRow['name'])?>/"><?php echo str_replace('-',' ',ucwords($_GET['frid']));?></a></li>
        <li><i class="fa fa-angle-double-right"></i></li>
        <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($staticRow['name'])?>/<?=$objComm->strToUrl($_GET['seid'])?>/"><?php echo str_replace('-',' ',ucwords($_GET['seid']));?></a></li>
        <li><i class="fa fa-angle-double-right"></i></li>
        <li class="active"><?php echo str_replace('-',' ',ucwords($_GET['thid']));?></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="col-md-8 fl-none center-block">
      <h2><?php echo str_replace('-',' ',ucwords($_GET['thid']));?></h2>
      <p><?php echo $subcategoryRow['pagedescription'];?>
</p>

 


 
    </div>
  </div>
</section>
<section id="white3" class="main-inn1">
 <div class="container iems-1">
<div class="col-md-12 mt30 mb30"><img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $subcategoryRow['images1'];?>" alt="" class="img-responsive center-block fl-none img-circle img-rounded img-thumbnail" /></div>
<div class="clearfix"></div>
<ul class="iems-2">
<?php
$icon="select * from icon_content where subcatid='".$subcategoryRow['id']."'";
$iconres=mysql_query($icon);
while($iconRow=mysql_fetch_assoc($iconres))
 {
?>
  <li class="col-md-3 col-sm-6">
  <?php echo $iconRow['icon'];?>
  <!--<i class="fa fa-money"></i>-->
  <!--Question type--><?php echo $iconRow['name'];?>
  
 </li>
 <?php }?>
 <!--<li class="col-md-3 col-sm-6">
  <i class="fa fa-signal"></i>
 Formula editors
  
 </li>
 <li class="col-md-3 col-sm-6">
  <i class="fa fa-line-chart"></i>
  Immediate results & subject-wise analysis
  
 </li>
 <li class="col-md-3 col-sm-6">
 <i class="fa fa-user"></i>
 Export of result
  
 </li>-->
</ul>

</div>
  <div class="new-22">
  <div class="container">
  <?php 
  echo $subcategoryRow['pagedescription1'];
  ?>
  <!--<h3>Computer-based Testing (CBT) Software (Testnovation)</h3>
  <article class="col-md-12 fl-none center-block">
   
  <p>As flexible and technology-enhanced learning becomes more pervasive, there is a growing need for educators to consider modes of assessment using similar tools in unified environments. Computer Based Test (CBT) is an effective solution for mass education evaluation. Testnovation Is an innovative software application for electronic exams (also known as CBA - Computer-Based Assessment, CBT - Computer-Based Testing or e-exam) that enables educators and trainers to author, schedule, deliver, and report on quizzes, tests and examinations </p>
  
 
  
  </article>-->
  <article class="col-md-4 pr-3 fl-none center-block">
   <img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $subcategoryRow['images2'];?>" alt="" class="img-circle img-responsive img-rounded img-thumbnail" />
  </article>
  
  <?php echo $subcategoryRow['pagedescription2'];?>
  	<!--<h3>Features</h3>
<ul class="myul">
        	<li>Question type</li>
            <li>Formula editors</li>
            <li>Immediate results & subject-wise analysis</li>
            <li>Export of result</li>
            <li>Time constrained tests</li>
            <li>Scheduled tests</li>
            <li>Pause/save and continue tests</li>
            <li>Administration console</li>
            <li>Skipping of questions</li>
            <li>Question pool</li>
            <li>And more...</li>
        </ul>
  -->
  </div>
  
  <div class="clearfix"></div>
  </div>
<div class="container mt30 mb30">
  <div class="col-md-12 img-p np-1">
    <i class="fa fa-file-pdf-o"></i>
    <div class="clearfix"></div>
     <a href="<?=BASE_URL?>/admin-login/pdffile/<?php echo $subcategoryRow['pdf_link'];?>" class="download col-md-5" download>Download Product Sheet</a>
    </div>
    </div>
</section>
<div class="clearfix"></div>
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
}
else
{
$static="select * from staticpage where url='".$_GET['frid']."'";
	$staticres=mysql_query($static);
	$staticRow=mysql_fetch_assoc($staticres);
	$staticRow['id'];
	$category="select * from category where url='".$_GET['seid']."'";
	$categoryres=mysql_query($category);
	$categoryRow=mysql_fetch_assoc($categoryres);
	
	$subcategory="SELECT * FROM `subcategory` WHERE `pageid`='".$staticRow['id']."' and `catid`='".$categoryRow['id']."' and url='".$_GET['thid']."'";
	$subcategoryres=mysql_query($subcategory);
	$subcategoryRow=mysql_fetch_assoc($subcategoryres);
?>
<section id="products-inn1" class="main-inn4">
<img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $subcategoryRow['images'];?>" class="para" alt="Paris" data-parallax='{"y": 100}'/>
<div class="breadcrumb">
 <div class="container">
  <ul>
   <li><a href="<?=BASE_URL?>"><i class="fa fa-home"></i></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($staticRow['name'])?>/"><?php echo str_replace('-',' ',ucwords($_GET['frid']));?></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
        <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($staticRow['name'])?>/<?=$objComm->strToUrl($_GET['seid'])?>/"><?php echo str_replace('-',' ',ucwords($_GET['seid']));?></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active"><?php echo str_replace('-',' ',ucwords($_GET['thid']));?></li>
  </ul>
 </div>
</div>

 <div class="container">
    <div class="col-md-12">
      <h2><?php echo str_replace('-',' ',ucwords($_GET['thid']));?></h2>
		<?php echo $subcategoryRow['pagedescription'];?>
      </ul>
      
    </div>
    <div class="clearfix"></div>
    
  </div>

</section>


<section id="white" class="main-inn1 edda-1">

 <div class="container">
 <?php echo $subcategoryRow['pagedescription1'];?>
  <!--
  <div class="col-md-4 img-p">
  <img src="images/hos-2.jpg" class="img-responsive img-circle img-rounded img-thumbnail center-block" alt="" />
  </div>
<div class="col-md-8">
   
   <h3>Testnovation</h3>
   <p>As flexible and technology-enhanced learning becomes more pervasive, there is a growing need for educators to consider modes of assessment using similar tools in unified environments. Computer Based Test (CBT) is an effective solution for mass education evaluation. Testnovation Is an innovative software application for electronic exams (also known as CBA - Computer-Based Assessment, CBT - Computer-Based Testing or e-exam) that enables educators and trainers to author, schedule, deliver, and report on quizzes, tests and examinations.</p>
   
-->
   
  </div>
 </div>
</section>
<section id="ilearn" class="main-inn5 heal3" style=" background:url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $subcategoryRow['images1'];?>) no-repeat center center fixed;">
 <div class="container ">
 
  <div class="col-md-12 tl">
   <?php echo $subcategoryRow['pagedescription2'];;?>
   <div class="clearfix"></div>

</div>

  
<div class="clearfix"></div>


</div>



</section>
<section id="white" class="main-inn1 edda-2">

 <div class="container">
  <?php echo $subcategoryRow['pagedescription3'];?>
 <!--
<div class="col-md-8">
   <h3>Identity Management</h3>
   <p>Identity Management in Higher Institution indicates the system of managing individuals (Students and Staff) their authentication, authorization and privileges within or across the institution and enterprise boundaries. There are various method of administering Identity management, and each method comes with its twists and turns, however after a careful study of University of Abuja, we are certain that our MagStrip Cards will be most suitable.</p>
   

   
  </div><div class="col-md-4 img-p">
  <img src="images/hos-4.jpg" class="center-block img-responsive img-circle img-rounded img-thumbnail" alt="" />
  </div>-->
 </div>
</section>
<section id="ilearn" class="main-inn5  heal3" style=" background:url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $subcategoryRow['images2'];?>) no-repeat center center fixed;">

 <div class="container ">
 <?php
 echo $subcategoryRow['pagedescription4'];
 ?>
 <!--
  <div class="col-md-12">
   <h3>Classe365</h3>
   <p>The iEMS is an innovative Enterprise Resource Planning (ERP) Platform specifically designed for use in Education Institutions. This suite of integrated cloud-based business management software solution has been designed and developed by NetPro International Limited to help management of educational institutions establish full control and visibility of all key processes along the student journey. It supports interaction with students while enhancing their overall experience even when they become alumni.</p>
   
   <p>This suite of integrated cloud-based business management software solution has been designed and developed by NetPro International Limited for use in universities, polytechnics and colleges of education within Nigeria and West Africa.</p>
   
   <ul class="what3 col-md-12">
 <li class="col-md-3">
  <label>STUDENT SELF-SERVICE PORTAL</label>
  
 </li>
 
 <li class="col-md-3">
  <label>STUDENT INFORMATION MANAGEMENT SYSTEM</label>
  
 </li>
 
 <li class="col-md-3">
  <label>STUDENT ONLINE ADMISSION SYSTEM</label>
  
 </li>
 
 <li class="col-md-3">
  <label>ADMISSION SYSTEM</label>
  
 </li>


</ul>-->
   <div class="clearfix"></div>

</div>

  
<div class="clearfix"></div>


</div>



</section>
<section id="white" class="main-inn1 edda-3">

 <div class="container">
  <?php echo $subcategoryRow['pagedescription5'];?>
  <!--
<div class="col-md-8">
   <h3>Identity Management</h3>
   <p>We understand that establishing and maintaining a library can be time consuming and expensive. NETPRO-LMS will help you use your time efficiently and productively when managing your collection. You can trust Netpro’s e-Library system to handle basic housekeeping functions of your library. We’ve developed the software so it can be tailored to meet your needs, and priced to meet your budget.</p>
   

   
  </div><div class="col-md-4 img-p">
  <img src="images/hos-4.jpg" class="img-responsive center-block img-circle img-rounded img-thumbnail" alt="" />
  </div>-->
 </div>
</section>




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
<?php }
}
else if($_GET['seid'])
{
if($_GET['seid']=='product')
 {
	$static="select * from staticpage where url='".$_GET['frid']."'";
	$staticres=mysql_query($static);
	$staticRow=mysql_fetch_assoc($staticres);
	$staticRow['id'];
	$category="select * from category where url='".$_GET['seid']."'";
	$categoryres=mysql_query($category);
	$categoryRow=mysql_fetch_assoc($categoryres);
?>
<section id="products-inn1" class="main-inn4">
<img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $categoryRow['images'];?>" class="para" alt="Paris" data-parallax='{"y": 100}'/>
<div class="breadcrumb">
 <div class="container">
  <ul>
   <li><a href="<?=BASE_URL?>"><i class="fa fa-home"></i></a></li>
   <li><i class="<?=BASE_URL?>"></i></li>
   <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($staticRow['name'])?>/"><?php echo str_replace('-',' ',ucwords($_GET['frid']));?></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active"><?php echo str_replace('-',' ',ucwords($_GET['seid']));?></li>
  </ul>
 </div>
</div>

 <div class="container">
    <div class="col-md-12">
      <h2><?php echo $categoryRow['name'];?> </h2>
      <p><?php echo $categoryRow['pagedescription'];?> </p>
      
    </div>
    <div class="clearfix"></div>
    <ul class="what">
		<?php
		$product="select * from subcategory where catid='".$categoryRow['id']."' and pageid='".$staticRow['id']."' limit 5";
					$productres=mysql_query($product);
					while($productRow=mysql_fetch_assoc($productres))
					  {
		?>
		<li class="col-md-2 ser-box"><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($staticRow['name'])?>/<?=$objComm->strToUrl($categoryRow['name'])?>/<?=$objComm->strToUrl($productRow['name'])?>/"><?php echo $productRow['name'];?></a></li>
		<?php }?>
      <!--<li class="col-md-2 ser-box"><a href="testnovation.html">Testnovation</a></li>
      <li class="col-md-2 ser-box"><a href="classe365.html">Classe365</a></li>
      <li class="col-md-2 ser-box"><a href="identity-management.html">Identity Management</a></li>
      <li class="col-md-2 ser-box"><a href="netpro-iems.html">IEMS</a></li>
      <li class="col-md-2 ser-box"><a href="netpro-ilearn.html">Learning Management System</a></li>-->
    </ul>
  </div>

</section>
<?php
$pro="select * from category where pageid='1' and cat_name='product'";
$prores=mysql_query($pro);
$proRow=mysql_fetch_assoc($prores);
?>

<section id="white" class="main-inn1">

 <div class="container">
 <?php
 echo $proRow['pagedescription1'];
 ?>
  <!--
  <div class="col-md-4 img-p">
  <img src="images/testnovation-2.jpg" class="img-responsive img-circle img-rounded img-thumbnail" alt="" />
  </div>
<div class="col-md-8">
   <h3>Testnovation</h3>
   <p>The iEMS is an innovative Enterprise Resource Planning (ERP) Platform specifically designed for use in Education Institutions. This suite of integrated cloud-based business management software solution has been designed and developed by NetPro International Limited to help management of educational institutions establish full control and visibility of all key processes along the student journey. It supports interaction with students while enhancing their overall experience even when they become alumni.</p>
   -->
   <a href="<?=BASE_URL?>/product-and-services/product/testnovation/" class="more1 pull-right">More Products <i class="fa fa-angle-down"></i></a>
   
  </div>
 </div>
</section>
<section id="ilearn" class="main-inn5 heal3" style=" background: url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $categoryRow['images1'];?>)  no-repeat center center fixed;">

 <div class="container ">
 
  <div class="col-md-12">
   <?php
 echo $proRow['pagedescription2'];
 ?>
   <!--<h3>Classe365</h3>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
   
   <ul class="what3 col-md-12">
 <li class="col-md-3">
  <label>Title Here</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Title Here</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Title Here</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Title Here</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>


</ul>-->
   <div class="clearfix"></div>
   <a href="<?=BASE_URL?>/product-and-services/product/classe365/" class="more col-md-5 fl-none center-block">More Products <i class="fa fa-angle-down"></i></a>
</div>

  
<div class="clearfix"></div>


</div>



</section>
<section id="white" class="main-inn1">

 <div class="container">
  <div class="col-md-12">
   <?php
 echo $proRow['pagedescription3'];
 ?>
 <!-- 
<div class="col-md-8">
   <h3>Identity Management</h3>
   <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
   
   <a href="identity-management.html" class="more1 pull-right">More Products <i class="fa fa-angle-down"></i></a>
   
  </div><div class="col-md-4 img-p">
  <img src="images/identity-2.jpg" class="img-responsive img-circle img-rounded img-thumbnail" alt="" />
  </div>-->
 </div>
</section>
<section id="about" class="main-inn5 heal3" style=" background: url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $categoryRow['images2'];?>)  no-repeat center center fixed;">
<?php
 echo $proRow['pagedescription4'];
 ?>

<!--
 <div class="container">
  <div class="col-md-12 fl-none center-block">
   <h2>IEMS</h2>
   <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
</div>
</div>
<div class="container">
<ul class="what3 col-md-12">
 <li class="col-md-3">
  <label>Hobo 1</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 2</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 3</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 4</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>


</ul>
</div>-->
  
  <div class="clearfix"></div>
  
<a href="<?=BASE_URL?>/product-and-services/product/iems/" class="more col-md-4 fl-none center-block">More Products <i class="fa fa-angle-down"></i></a>
  


</section>
<section id="white" class="main-inn1">

 <div class="container">
  <?php
 echo $proRow['pagedescription5'];
 ?>
 <!-- 
<div class="col-md-8">
   <h3>Learning Management System</h3>
   <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
   
   <a href="netpro-ilearn.html" class="more1 pull-right">More Products <i class="fa fa-angle-down"></i></a>
   
  </div><div class="col-md-4 img-p">
  <img src="images/i-learn2.jpg" class="img-responsive img-circle img-rounded img-thumbnail" alt="" />
  </div>-->
 </div>
</section>
<section id="about" class="main-inn5 heal3" style=" background: url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $categoryRow['images3'];?>)  no-repeat center center fixed;">
<?php
 echo $proRow['pagedescription6'];
 ?>
<!--
 <div class="container">
  <div class="col-md-12 fl-none center-block">
   <h2>Library Management System</h2>
   <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
</div>
</div>
<div class="container">
<ul class="what3 col-md-12">
 <li class="col-md-3">
  <label>Hobo 1</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 2</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 3</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 4</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>


</ul>
</div>-->
  
  <div class="clearfix"></div>
  
<a href="<?=BASE_URL?>/product-and-services/product/library-management-system/" class="more col-md-4 fl-none center-block">More Products <i class="fa fa-angle-down"></i></a>
  


</section>
<section id="white" class="main-inn1">

 <div class="container">
  <?php
 echo $proRow['pagedescription7'];
 ?>
 <!-- 
<div class="col-md-8">
   <h3>ZOHODOX</h3>
   <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
   
   <a href="zohodox.html" class="more1 pull-right">More Products <i class="fa fa-angle-down"></i></a>
   
  </div><div class="col-md-4 img-p">
  <img src="images/iems-3.jpg" class="img-responsive img-circle img-rounded img-thumbnail" alt="" />
  </div>-->
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
}else
{
$static="select * from staticpage where url='".$_GET['frid']."'";
	$staticres=mysql_query($static);
	$staticRow=mysql_fetch_assoc($staticres);
	$staticRow['id'];
	$category="select * from category where url='".$_GET['seid']."'";
	$categoryres=mysql_query($category);
	$categoryRow=mysql_fetch_assoc($categoryres);

?>
<section id="products-inn1" class="main-inn4">
<img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $categoryRow['images'];?>" class="para" alt="Paris" data-parallax='{"y": 230}'/>
<div class="breadcrumb">
 <div class="container">
  <ul>
   <li><a href="<?=BASE_URL?>"><i class="fa fa-home"></i></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($staticRow['name'])?>/"><?php echo str_replace('-',' ',ucwords($_GET['frid']));?></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active"><?php echo str_replace('-',' ',ucwords($_GET['seid']));?></li>
  </ul>
 </div>
</div>

 <div class="container">
    <div class="col-md-12">
      <h2><?php echo $categoryRow['cat_name'];?></h2>
      <p><?php echo $categoryRow['pagedescription'];?></p>
      
    </div>
    <div class="clearfix"></div>
    <ul class="what">
    
    <?php
		$product="select * from subcategory where catid='".$categoryRow['id']."' and pageid='".$staticRow['id']."' limit 5";
					$productres=mysql_query($product);
					while($productRow=mysql_fetch_assoc($productres))
					  {
		?>
		<li class="col-md-2 ser-box"><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($staticRow['name'])?>/<?=$objComm->strToUrl($categoryRow['name'])?>/<?=$objComm->strToUrl($productRow['name'])?>/"><?php echo $productRow['name'];?></a></li>
		<?php }?>
      <!--<li class="col-md-2 ser-box"><a href="education.html">Education</a></li>
      <li class="col-md-2 ser-box"><a href="healthcare.html">Healthcare</a></li>
      <li class="col-md-2 ser-box"><a href="hospitality.html">Hospitality</a></li>
      <li class="col-md-2 ser-box"><a href="traning-and-consultancy.html">Training &amp; Consultancy</a></li>
      <li class="col-md-2 ser-box"><a href="service-1.html">More</a></li>-->
    </ul>
  </div>

</section>


<section id="white" class="main-inn1">
<?php 
echo $categoryRow['pagedescription1'];
?>
 <!--<div class="container">
  
  <div class="col-md-4 img-p">
  <img src="images/edu-2.jpg" class="img-responsive img-circle img-rounded img-thumbnail" alt="" />
  </div>
<div class="col-md-8">
   
   <h3>Education</h3>
   <p>The iEMS is an innovative Enterprise Resource Planning (ERP) Platform specifically designed for use in Education Institutions. This suite of integrated cloud-based business management software solution has been designed and developed by NetPro International Limited to help management of educational institutions establish full control and visibility of all key processes along the student journey. It supports interaction with students while enhancing their overall experience even when they become alumni.</p>-->
   
   <a href="<?=BASE_URL?>/product-and-services/services/education/" class="more1 pull-right">More Products <i class="fa fa-angle-down"></i></a>
   
  </div>
 </div>
</section>
<section id="ilearn" class="main-inn5 heal3" style=" background: url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $categoryRow['images1'];?>)  no-repeat center center fixed;">

 <div class="container ">
 <?php 
echo $categoryRow['pagedescription2'];
?>
  <!--<div class="col-md-12">
   <h3>Healthcare</h3>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
   
   <ul class="what3 col-md-12">
 <li class="col-md-3">
  <label>Title Here</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Title Here</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Title Here</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Title Here</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>


</ul>-->
   <div class="clearfix"></div>
   <a href="<?=BASE_URL?>/product-and-services/services/healthcare/" class="more col-md-5 fl-none center-block">More Products <i class="fa fa-angle-down"></i></a>
</div>

  
<div class="clearfix"></div>


</div>



</section>
<section id="white" class="main-inn1">

 <div class="container">
  <?php 
echo $categoryRow['pagedescription3'];
?>
 <!-- 
<div class="col-md-8">
   <h3>Hospitality</h3>
   <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
   
   <a href="hospitality.html" class="more1 pull-right">More Products <i class="fa fa-angle-down"></i></a>
   
  </div><div class="col-md-4 img-p">
  <img src="images/hos-2.jpg" class="img-responsive img-circle img-rounded img-thumbnail" alt="" />
  </div>-->
 </div>
</section>
<section id="about" class="main-inn5 heal3" style=" background: url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $categoryRow['images2'];?>)  no-repeat center center fixed;">

 <div class="container">
 <?php 
echo $categoryRow['pagedescription4'];
?>
  <!--<div class="col-md-12 fl-none center-block">
   <h2>Traning &amp; Consultancy</h2>
   <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
</div>
</div>
<div class="container">
<ul class="what3 col-md-12">
 <li class="col-md-3">
  <label>Hobo 1</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 2</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 3</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label>Hobo 4</label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>


</ul>
</div>
  -->
  <div class="clearfix"></div>
  
<a href="<?=BASE_URL?>/product-and-services/services/training-and-consultancy/" class="more col-md-4 fl-none center-block">More Products <i class="fa fa-angle-down"></i></a>
  


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
<?php }
}
else if($_GET['frid'])
 {
 $static="select * from staticpage where url='".$_GET['frid']."'";
 $staticres=mysql_query($static);
 $staticRow=mysql_fetch_assoc($staticres);
 ?>
 <section id="products-inn1" class="main-inn4">
<img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $staticRow['images'];?>" class="para" alt="Paris" data-parallax='{"y": 230}'/>
<div class="breadcrumb">
 <div class="container">
  <ul>
   <li><a href="<?=BASE_URL?>"><i class="fa fa-home"></i></a></li>
   <li><i class="fa fa-angle-double-right"></i></li>
   <li class="active"><?php echo str_replace('and','&',ucwords($staticRow['name']));?></li>
  </ul>
 </div>
</div>

 <div class="container">
  <div class="col-md-8 fl-none center-block">
   <h2><?php echo $staticRow['name'];  ?></h2>
   <p><?php echo $staticRow['description']; ?> </p>

  </div>
  <div class="clearfix"></div>
  
  
 </div>

</section>

<section id="white1" class="main-inn1 p0">

 <div class="container-fluid p0">
 <?php
	$where="id=1";
	$proservice=$objComm->findRecord('staticpage',$where);
	$sqluery="select * from category where pageid='".$proservice[0][0]."'";
	$sqlquerres=mysql_query($sqluery);
	while($sqlQueryRow=mysql_fetch_assoc($sqlquerres))
	 {
	 $sql="select * from product_subpage where cat_name='".$sqlQueryRow['cat_name']."'";
	 $sqlres=mysql_query($sql);
	 while($sqlRow=mysql_fetch_assoc($sqlres))
	  {
 ?>
  <div class="col-md-6 box-p col-sm-6 col-xs-12">
  <img src="<?=BASE_URL?>/admin-login/projectimg/<?php echo $sqlRow['images'];?>" />
   <div class="inno col-md-6">
   
   <h3><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($sqlQueryRow['cat_name'])?>/">Our <?php echo $sqlQueryRow['cat_name'];?></a></h3>
   <a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($sqlQueryRow['cat_name'])?>/" class="readmore">Read More</a>

   </div>
  </div>
  <?php } } ?>
  <!--<div class="col-md-6 box-p col-sm-6 col-xs-12">
  <img src="<?=BASE_URL?>/images/pr-2.jpg" />
   <div class="inno col-md-6 ne-1">
   <h3><a href="services.html">Services</a></h3>
   <a href="services.html" class="readmore">Read More</a>
   </div>
  </div>-->
  <div class="clearfix"></div> </div>
</section>
<?php 
$prodetail="select * from productandservices";
$prodetailres=mysql_query($prodetail);
$productRow=mysql_fetch_assoc($prodetailres);
?>
<section id="white" class="main-inn1">

 <div class="container">
 <?php
   echo $productRow['description1'];
   ?>
  <!--<div class="col-md-8">
   
   <h3>Classe365</h3>
   <p>Our Vision is to build the most credible brand in bespoke software and technology service provision in West Africa. This vision is backed by a robust corporate strategy and implementation plan.</p>
  </div>
  <div class="col-md-4 img-p">
   <img src="<?=BASE_URL?>/images/classe365e.jpg" class="img-responsive center-block" alt="" />
  </div>-->

 </div>
</section>
<section id="ilearn" class="main-inn5 heal3" style=" background:url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $staticRow['images1'];?>) no-repeat center center fixed;">

 <div class="container">
  <div class="col-md-8 fl-none center-block">
   
</div>
</div>
<div class="container">
<?php 
echo $productRow['description2'];
?>
<div class="clearfix"></div>

<a href="<?=BASE_URL?>/product-and-services/product/" class="more col-md-4 fl-none center-block">More Products <i class="fa fa-angle-down"></i></a>
</div>
</section>
<section id="white" class="main-inn1">

 <div class="container">
  
  <div class="col-md-4 img-p">
   <img src="<?=BASE_URL?>/images/pr-b1.jpg" class="img-responsive" alt="" />
  </div>
<div class="col-md-8">
<?php
echo $productRow['description3'];
?>
  <!-- <h3>IEMS</h3>
   <p>Our Vision is to build the most credible brand in bespoke software and technology service provision in West Africa. This vision is backed by a robust corporate strategy and implementation plan.</p>-->
  </div>
 </div>
</section>
<section id="ilearn" class="main-inn5 heal3" style=" background: url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $staticRow['images2'];?>)  no-repeat center center fixed;">


 <div class="container">
  <div class="col-md-8 fl-none center-block">
   <!--<h2>Learning Management System (LMS)</h2>-->
</div>
</div>
<div class="container">
<?php 
echo $productRow['description4'];
?>

<!--<ul class="what3 col-md-12">
 <li class="col-md-3">
  <label><a href="service-1.html">Service 1</a></label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label><a href="service-1.html">Service 1</a></label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label><a href="service-1.html">Service 1</a></label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label><a href="service-1.html">Service 1</a></label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>


</ul>-->
</div>
  
  <div class="clearfix"></div>
  
<a href="<?=BASE_URL?>/product-and-services/services/" class="more col-md-4 fl-none center-block">More Products <i class="fa fa-angle-down"></i></a>
  


</section>
<section id="white" class="main-inn1">

 <div class="container">
 <?php 
echo $productRow['description5'];
?>
  <!--
  <div class="col-md-4 img-p">
   <img src="<?=BASE_URL?>/images/i-doc1.jpg" class="img-responsive img-rounded img-thumbnail" alt="" />
  </div>
<div class="col-md-8">
   <h3>ZOHODOX</h3>
   <p>Our Vision is to build the most credible brand in bespoke software and technology service provision in West Africa. This vision is backed by a robust corporate strategy and implementation plan.</p>
  </div>-->
 </div>
</section>    
<section id="ilearn" class="main-inn5 heal3" style=" background: url(<?=BASE_URL?>/admin-login/projectimg/<?php echo $staticRow['images3'];?>)  no-repeat center center fixed;">

 <div class="container">
  <div class="col-md-12 fl-none center-block">
  <!-- <h2>Testnovation</h2>-->
</div>
</div>
<div class="container">
<?php 
echo $productRow['description6'];
?>
<!--<ul class="what3 col-md-12">
 <li class="col-md-3">
  <label><a href="service-1.html">Service 1</a></label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label><a href="service-1.html">Service 1</a></label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label><a href="service-1.html">Service 1</a></label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>
 
 <li class="col-md-3">
  <label><a href="service-1.html">Service 1</a></label>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </li>


</ul>-->
</div>
  
  <div class="clearfix"></div>
  
<a href="<?=BASE_URL?>/product-and-services/product/testnovation/" class="more col-md-4 fl-none center-block">More Products <i class="fa fa-angle-down"></i></a>
  


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
<?php }
?>
<?php
include "include/footerscript.php";
?>
</body>
</html>
