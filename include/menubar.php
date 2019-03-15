<header class="container-fluid topNav">
  <ul class="n-top">
	<?php
	$where="id=4";
	$faqrow=$objComm->findRecord('staticpage',$where);
	
	$where="id=5";
	$support=$objComm->findRecord('staticpage',$where);
	
	$where="id=6";
	$contact=$objComm->findRecord('staticpage',$where);
	
	?>
	
    <li class="d2-n"><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($faqrow[0][1])?>/">faq's</a></li>
    <li class="bor d2-n"></li>
    <li class="d2-n d2-n"><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($support[0][1])?>/">support</a></li>
    <li class="bor d2-n"></li>
    <li class="d2-n d2-n"><a href="<?=BASE_URL?>/contact-us/">contact us</a></li>
    <li class="bor d2-n"></li>
	<?php 
	$headerphone="select * from header_contact";
	$headerphoneres=mysql_query($headerphone);
	$hearderRow=mysql_fetch_assoc($headerphoneres);
	?>
    <li class="d2-n"><?php echo $hearderRow['phone'];?></li>
    <li class="drop d3-n">More Information
      <div class="dropdownContain">
        <div class="dropOut">
          <div class="triangle"></div>
          <ul>
             <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($faqrow[0][1])?>/">faq's</a></li>
            <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($support[0][1])?>/">support</a></li>
            <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($contact[0][1])?>/">contact us</a></li>
            <li>Phone : <?php echo $hearderRow['phone'];?></li>
          </ul>
        </div>
      </div>
    </li>
    <li class="bor"></li>
    <li class="drop">Quick Downloads
      <div class="dropdownContain qui">
        <div class="dropOut">
          <div class="triangle"></div>
          <ul>
				<?php
					$sql="select * from quick_download where status=1";
					$sqlres=mysql_query($sql);
					while($sqlRow=mysql_fetch_assoc($sqlres)) 
					 {
				?>
            <li><a href="<?=BASE_URL?>/admin-login/pdffile/<?php echo $sqlRow['pdf_link'];?>" download><?php echo $sqlRow['name'];?> <i class="fa fa-file-pdf-o"></i></a></li>
				<?php } ?>
           <!-- <li><a href="files/church.pdf" download>Power Church Software <i class="fa fa-file-pdf-o"></i></a></li>
            <li><a href="files/classe365.pdf" download>Classe365 <i class="fa fa-file-pdf-o"></i></a></li>
            <li><a href="files/ecommerce.pdf" download>B2C Ecommerce Website <i class="fa fa-file-pdf-o"></i></a></li>
            <li><a href="files/exchange.pdf" download>Exchange Email <i class="fa fa-file-pdf-o"></i></a></li>
            <li><a href="files/google.pdf" download>Google App For Education <i class="fa fa-file-pdf-o"></i></a></li>
            <li><a href="files/iems.pdf" download>iEMS <i class="fa fa-file-pdf-o"></i></a></li>
            <li><a href="files/voip.pdf" download>Wireless Voip Solution <i class="fa fa-file-pdf-o"></i></a></li>
            <li><a href="files/zohodox.pdf" download>Zohodox <i class="fa fa-file-pdf-o"></i></a></li>-->
          </ul>
        </div>
      </div>
    </li>
    
    <li>
      <form>
        <input type="text" placeholder="Search"/>
        <input type="submit" value="" class="sbt"/>
      </form>
    </li>
  </ul>
  <div class="clearfix"></div>
  <div class="header site-header">
    <div class="col-md-2 col-sm-2 col-xs-12"> <a href="<?=BASE_URL?>"><img src="<?=BASE_URL?>/images/logo.png"/></a> </div>
    <div class="col-md-10 col-sm-10 col-xs-12">
      <nav id="cssmenu">
        <ul>
		<?php
		$where="id=1";
		$proservice=$objComm->findRecord('staticpage',$where);
		?>
          <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/">Product &amp; Services<!--<span class="caret"></span>--></a>
            <ul>
			<?php
			$where="pageid='".$proservice[0][0]."'";
			$navmenu=$objComm->findRecord('category',$where);			
			for($j=0;$j<count($navmenu);$j++)
				{
			?>
              <li class="subnav"><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($navmenu[$j][2])?>/"><?php echo $navmenu[$j][2];?> </a>
               <ul>
					<?php
					$product="select * from subcategory where catid='".$navmenu[$j][0]."' and pageid='".$proservice[0][0]."'";
					$productres=mysql_query($product);
					while($productRow=mysql_fetch_assoc($productres))
					  {
					?>
					<li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($proservice[0][1])?>/<?=$objComm->strToUrl($navmenu[$j][2])?>/<?=$objComm->strToUrl($productRow['name'])?>/"><?php echo $productRow['name'];?></a></li>
					<?php } ?>
					<!--<li><a href="testnovation.html">Testnovation</a></li>
					<li><a href="classe365.html">Classe365</a></li>
					<li><a href="identity-management.html">Identity Management</a></li>
					<li><a href="netpro-iems.html">IEMS</a></li>
					<li><a href="netpro-ilearn.html">Learning Management System</a></li>
					<li><a href="library-management-system.html">Library Management System</a></li>
					<li><a href="zohodox.html">ZOHODOX</a></li>-->
                </ul>
              </li>
			  <?php } ?>
              <!--<li><a href="services.html">Services</a>
               <ul>
                  <li><a href="education.html">Education</a></li>
                  <li><a href="healthcare.html">Healthcare</a></li>
                  <li><a href="hospitality.html">Hospitality</a></li>
                  <li><a href="traning-and-consultancy.html">Training and Consultancy</a></li>
                 </ul>
              </li>-->
            </ul>
          </li>
		  <?php
			  $where="id=2";
			  $store=$objComm->findRecord('staticpage',$where);
		  ?>
          <li> <a href="<?=BASE_URL?>/<?=$objComm->strToUrl($store[0][1])?>/">Store</a> </li>
		  <?php
			  $where="id=3";
			  $about=$objComm->findRecord('staticpage',$where);
		  ?>
          <li><a href="<?=BASE_URL?>/<?=$objComm->strToUrl($about[0][1])?>/">About</a></li>
          <li><a href="<?=BASE_URL?>/register-as-a-distributor/">Register As A Distributor</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>