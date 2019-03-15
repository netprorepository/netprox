<?php

include 'setting.php';
if($objComm->authenticate($_COOKIE['username'],$_COOKIE['password']))
{
header('location:welcome.php');
}

?>