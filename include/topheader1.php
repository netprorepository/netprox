<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Net Pro</title>
<link href="<?=BASE_URL?>/css/bootstrap.css" rel="stylesheet"/>
<link rel="shortcut icon" href="<?=BASE_URL?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?=BASE_URL?>/images/favicon.ico" type="image/x-icon">
<link href="<?=BASE_URL?>/css/custom.css" rel="stylesheet"/>
<!-- Font CSS And Font-Awesome Any
	================================================== -->
<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.css"/>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
<!-- Navigation -- 
 ===================================================== -->
<script src="<?=BASE_URL?>/js/jquery.min.js"></script>
<script src="<?=BASE_URL?>/js/bootstrap.min.js"></script>
<script src="<?=BASE_URL?>/js/responsiveCarousel.min.js"></script>
<script type="text/javascript">
$(function(){
  $('.crsl-items2').carousel({
    visible: 5,
    itemMinWidth: 180,
    itemEqualHeight: 370,
    itemMargin: 10,
  });
  $("a[href=#]").on('click', function(e) {
    e.preventDefault();
  });
});
</script>
<link rel="stylesheet" href="<?=BASE_URL?>/css/responsiveslides.css">
<script src="<?=BASE_URL?>/js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
        speed: 400
      });	  
	   $("#slider2").responsiveSlides({
        speed: 1800
      });	  
	   $("#slider3").responsiveSlides({
        speed: 3000
      });	  
	   $("#slider4").responsiveSlides({
        speed: 800
      });
    });
  </script>
<!-- Navigation JS-- 
 ===================================================== -->
</head>