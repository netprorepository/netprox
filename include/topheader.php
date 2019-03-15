<?php error_reporting(0);include 'formAction.php';if(isset($_GET['thid']))		{		$where="name='".$objComm->urlToStr($_GET['thid'])."'";		$secondpage=$objComm->findRecord('subcategory',$where);		}		else if(isset($_GET['seid']))		{		$where="cat_name='".$objComm->urlToStr($_GET['seid'])."'";		$secondpage=$objComm->findRecord('category',$where);		}		else 		{		$where="name='".$objComm->urlToStr($_GET['frid'])."' ";		$staticpage=$objComm->findRecord('staticpage',$where);		}		?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><?php if(isset($_GET['thid'])){ ?><title><?=$secondpage[0][5]?></title><meta name="description" content="<?=$secondpage[0][6]?>" /><meta name="keywords" content="<?=$secondpage[0][7]?>" /><?php } else if(isset($_GET['seid'])){ ?><title><?=$secondpage[0][5]?></title><meta name="description" content="<?=$secondpage[0][5]?>" /><meta name="keywords" content="<?=$secondpage[0][6]?>" /><?php } else { ?><title><?php if($staticpage[0][4]==""){ echo $_GET['frid'];}else{ echo $staticpage[0][4]; } ?></title><meta name="description" content="<?=$staticpage[0][5]?>" /><meta name="keywords" content="<?=$staticpage[0][6]?>" /><?php } ?>
<link href="<?=BASE_URL?>/css/bootstrap.css" rel="stylesheet"/>
<link rel="shortcut icon" href="<?=BASE_URL?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?=BASE_URL?>/images/favicon.ico" type="image/x-icon">
<link href="<?=BASE_URL?>/css/custom.css" rel="stylesheet"/>
<!-- Font CSS And Font-Awesome Any
	================================================== -->
<link rel="stylesheet" href="<?=BASE_URL?>/font-awesome-4.2.0/css/font-awesome.css">
<!-- Navigation -- 
 ===================================================== -->

<script src="<?=BASE_URL?>/js/jquery.min.js"></script>
<script src="<?=BASE_URL?>/js/bootstrap.min.js"></script>
</head>