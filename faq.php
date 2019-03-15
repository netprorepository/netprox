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
   <li class="active"><?php echo str_replace('-',' ',ucwords($_GET['frid']));?></li>
  </ul>
 </div>
</div>
<?php
$faq="select * from staticpage where name='".$_GET['frid']."'";
$faqres=mysql_query($faq);
$faqRow=mysql_fetch_assoc($faqres);
?>
 <div class="container sales">
<?php
echo $faqRow['description'];
?>
</div>
 <!--<div class="container sales">
 
  
  
  <div class="col-md-8 col-sm-12">
  <h2>FAQ</h2>
<p><strong>Lorem Ipsum is simply dummy text of</strong> the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  </div>
   
   <div class="col-md-4 col-sm-4 fl-none center-block col-xs-6">
    <img src="<?=BASE_URL?>/images/faq.jpg" alt="" class="img-num img-responsive img-circle img-thumbnail" />
   </div>
  

 </div>-->
</section>
<section id="white" class="main-inn1">

 <div class="container m-bottom">
 <?php
 $sql="select * from faq_questio order by id asc";
 $sqlres=mysql_query($sql);
 while($sqlRow=mysql_fetch_assoc($sqlres))
  {
 ?>
 <div class="accordion">
      <h4 class="panel-title"><?php echo $sqlRow['question'];?></h4>
      <div class="panel-content">
        <p><?php echo $sqlRow['answer'];?></p>
      </div>
  </div>
  
  <?php }?>
  </div>
<script>
  // Hiding the panel content. If JS is inactive, content will be displayed
  $( '.panel-content' ).hide();

  // Preparing the DOM
  
  // -- Update the markup of accordion container 
  $( '.accordion' ).attr({
    role: 'tablist',
    multiselectable: 'true'
   });

  // -- Adding ID, aria-labelled-by, role and aria-labelledby attributes to panel content
  $( '.panel-content' ).attr( 'id', function( IDcount ) { 
    return 'panel-' + IDcount; 
  });
  $( '.panel-content' ).attr( 'aria-labelledby', function( IDcount ) { 
    return 'control-panel-' + IDcount; 
  });
  $( '.panel-content' ).attr( 'aria-hidden' , 'true' );
  // ---- Only for accordion, add role tabpanel
  $( '.accordion .panel-content' ).attr( 'role' , 'tabpanel' );
  
  // -- Wrapping panel title content with a <a href="">
  $( '.panel-title' ).each(function(i){
    
    // ---- Need to identify the target, easy it's the immediate brother
    $target = $(this).next( '.panel-content' )[0].id;
    
    // ---- Creating the link with aria and link it to the panel content
    $link = $( '<a>', {
      'href': '#' + $target,
      'aria-expanded': 'false',
      'aria-controls': $target,
      'id' : 'control-' + $target
    });
    
    // ---- Output the link
    $(this).wrapInner($link);  
    
  });

  // Optional : include an icon. Better in JS because without JS it have non-sense.
  $( '.panel-title a' ).append('<span class="icon">+</span>');

  // Now we can play with it
  $( '.panel-title a' ).click(function() {
    
    if ($(this).attr( 'aria-expanded' ) == 'false'){ //If aria expanded is false then it's not opened and we want it opened !
      
      // -- Only for accordion effect (2 options) : comment or uncomment the one you want
      
      // ---- Option 1 : close only opened panel in the same accordion
      //      search through the current Accordion container for opened panel and close it, remove class and change aria expanded value
      $(this).parents( '.accordion' ).find( '[aria-expanded=true]' ).attr( 'aria-expanded' , false ).removeClass( 'active' ).parent().next( '.panel-content' ).slideUp(200).attr( 'aria-hidden' , 'true');

      // Option 2 : close all opened panels in all accordion container
      //$('.accordion .panel-title > a').attr('aria-expanded', false).removeClass('active').parent().next('.panel-content').slideUp(200);
      
      // Finally we open the panel, set class active for styling purpos on a and aria-expanded to "true"
      $(this).attr( 'aria-expanded' , true ).addClass( 'active' ).parent().next( '.panel-content' ).slideDown(200).attr( 'aria-hidden' , 'false');

    } else { // The current panel is opened and we want to close it

      $(this).attr( 'aria-expanded' , false ).removeClass( 'active' ).parent().next( '.panel-content' ).slideUp(200).attr( 'aria-hidden' , 'true');;

    }
    // No Boing Boing
    return false;
	
  });
  
</script>
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
      <p><span>Talk to an Expert !</span>+234-(0)-9-2917 </p>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<?php
include "include/footerscript.php";
?>
</body>
</html>
