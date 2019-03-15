<?php
include "classes/config.php";
include "classes/dbConnect.php";
include "classes/loginClass.php";
include "classes/commonFunctionClass.php";
include "classes/pagination.cls.php";




$objdbconnect		=			new dbConnect();
$objLogin			=			new adminLogin($_POST);
$objComm			=			new commonFunctionClass();
$objPaginat			=			new pagination();


?>