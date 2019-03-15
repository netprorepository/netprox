<footer class="container-fluid footer">
  <div class="container mt30">
    <ul class="foo-grid cf">
      <span class="nametitle">OUR Products</span>
	  <?php
		$where="id=1";
		$proservice=$objComm->findRecord('staticpage',$where);
			
			$sql="select * from category where pageid='".$proservice[0][0]."'";
			$sqlres=mysql_query($sql);
			$navmenu=mysql_fetch_assoc($sqlres);
			
					
					$product="select * from subcategory where catid='1' and pageid='".$proservice[0][0]."'";
					$productres=mysql_query($product);
					while($productRow=mysql_fetch_assoc($productres))
					  {
	  ?>
	  <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($navmenu['cat_name'])?>/<?=$objComm->strToUrl($productRow['name'])?>/"><?php echo $productRow['name'];?></a></li>
	  <?php
	  }
	  ?>
      <!--<li><a href="testnovation.html">Testnovation</a></li>
		  <li><a href="<?=BASE_URL?>/classe365.html">Classe365</a></li>
		  <li><a href="<?=BASE_URL?>/identity-management.html">Identity Management</a></li>
		  <li><a href="<?=BASE_URL?>/netpro-iems.html">IEMS</a></li>
		  <li><a href="<?=BASE_URL?>/netpro-ilearn.html">Learning Management System</a></li>
		  <li><a href="<?=BASE_URL?>/library-management-system.html">Library Management System</a></li>
		  <li><a href="<?=BASE_URL?>/zohodox.html">ZOHODOX</a></li>-->
    </ul>
    <ul class="foo-grid cf">
      <span class="nametitle">OUR SERVICES</span>
		<?php
		$where="id=1";
		$proservice=$objComm->findRecord('staticpage',$where);
			
			$sql1="select * from category where id='3'";
			$sqlres1=mysql_query($sql1);
			$navmenu1=mysql_fetch_assoc($sqlres1);
			
					
					$product="select * from subcategory where catid='3' and pageid='".$proservice[0][0]."'";
					$productres=mysql_query($product);
					while($productRow=mysql_fetch_assoc($productres))
					  {
	  ?>
				  <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($navmenu1['cat_name'])?>/<?=$objComm->strToUrl($productRow['name'])?>/"><?php echo $productRow['name'];?></a></li>
				 <?php } ?>
				  <!--<li><a href="<?=BASE_URL?>/education.html">Education</a></li>
                  <li><a href="<?=BASE_URL?>/healthcare.html">Healthcare</a></li>
                  <li><a href="<?=BASE_URL?>/hospitality.html">Hospitality</a></li>
                  <li><a href="<?=BASE_URL?>/traning-and-consultancy.html">Training and Consultancy</a></li>-->
    </ul>
    <ul class="foo-grid cf">
      <span class="nametitle">Other Links</span>
	  <?php
		$where="id=4";
		$faqrow=$objComm->findRecord('staticpage',$where);
		
		$where="id=5";
		$support=$objComm->findRecord('staticpage',$where);
		
		$where="id=2";
		$store=$objComm->findRecord('staticpage',$where);
		
		$where="id=3";
		$about=$objComm->findRecord('staticpage',$where);
		
	
	?>
      <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($faqrow[0][1])?>/">Faq's</a></li>
      <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($support[0][1])?>/">Support</a></li>
      <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($about[0][1])?>/">About</a></li>
      <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($store[0][1])?>/">Store</a></li>
      <li><a href="<?=BASE_URL?>/register-as-a-distributor/">Register as a distributor</a></li>
      <li><a href="#">Sitemap</a></li>
    </ul>
    <ul class="foo-grid cf">
      <span class="nametitle">Quick Links</span>
		<?php
					$sql="select * from quick_download where status=1";
					$sqlres=mysql_query($sql);
					while($sqlRow=mysql_fetch_assoc($sqlres)) 
					 {
				?>
		<li><a href="<?=BASE_URL?>/admin-login/pdffile/<?php echo $sqlRow['pdf_link'];?>" target="_blank"><?php echo $sqlRow['name'];?> </a></li>
		<?php } ?>
      <!--<li><a href="<?=BASE_URL?>/files/cbt.pdf" target="_blank">Computer Based Testing </a></li>
      <li><a href="<?=BASE_URL?>/files/church.pdf">Power Church Software </a></li>
      <li><a href="<?=BASE_URL?>/files/classe365.pdf">Classe365 </a></li>
      <li><a href="<?=BASE_URL?>/files/ecommerce.pdf">B2C Ecommerce Website </a></li>
      <li><a href="<?=BASE_URL?>/files/exchange.pdf">Exchange Email </a></li>
      <li><a href="<?=BASE_URL?>/files/google.pdf">Google App For Education </a></li>
      <li><a href="<?=BASE_URL?>/files/iems.pdf">iEMS </a></li>
      <li><a href="<?=BASE_URL?>/files/voip.pdf">Wireless Voip Solution </a></li>
      <li><a href="<?=BASE_URL?>/files/zohodox.pdf">Zohodox </a></li>-->
    </ul>
    <ul class="foo-grid soc">
		<?php
			$where="id=6";
			$contact=$objComm->findRecord('staticpage',$where);
		?>
      <span class="nametitle">NEED HELP ?</span> <a href="<?=BASE_URL?>/contact-us/" class="bigbtn">CLICK HERE</a>
      <div class="shoma">
      <div class="shoma">
		<?php
			$social="select * from social_media";
			$socialres=mysql_query($social);
			$socialRow=mysql_fetch_assoc($socialres);
		?>
      <a href="<?php echo $socialRow['facebook']; ?>" class="hovicon effect-4 sub-b" target="_blank"><li><i class="fa fa-facebook"></i></li></a>
      <a href="<?php echo $socialRow['twitter']; ?>" class="hovicon effect-4 sub-b" target="_blank"><li><i class="fa fa-twitter"></i></li></a>
      <a href="<?php echo $socialRow['linkedin']; ?>" class="hovicon effect-4 sub-b" target="_blank"><li><i class="fa fa-linkedin"></i></li></a>
     </div>
     </div>
    </ul>
  </div>
  <div class="container-fluid fbottom">
    <p>© 2015 Netpro International Ltd. All rights reserved.</p>
  </div>
</footer>
<script>
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?384VHwuHIVDlhaWhSlqa4ajo6H6LU9EU';z.t=+new
Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
