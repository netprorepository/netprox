<?php
ob_start();
$HOST_NAME                        = $_SERVER['SERVER_NAME'];
$DOCUMENT_ROOT                    = $_SERVER['DOCUMENT_ROOT'];


//ini_set("display_errors",0);
if($HOST_NAME == "localhost")
{

      
        $DB_HOST                        = "localhost";                  // Database Host Server
        $DB_USERNAME                    = "netpro_netpro";              // Database Username
        $DB_PASSWORD                    = "Netpro@1234";              // Password for the Db User
        $DB_NAME                        = "netpro_db";              // Database name
        $DB_REPORT_ERROR                = false;                        // To Report Error
        $DB_PERSISTENT_CONN             = false;                        // If Db Connection to be persistent
		define('BASE_URL', 'http://netpro.com.ng');    // base url
		}
else
{
     
        //--------------------------------------------------------------
     //--------------------------------------------------------------

	    $DB_HOST                        = "localhost";                  // Database Host Server
        $DB_USERNAME                    = "netpro_netpro";              // Database Username
        $DB_PASSWORD                    = "Netpro@1234";              // Password for the Db User
        $DB_NAME                        = "netpro_db";              // Database name
        $DB_REPORT_ERROR                = false;                        // To Report Error
        $DB_PERSISTENT_CONN             = false;                        // If Db Connection to be persistent
		define('BASE_URL', 'http://netpro.com.ng');    // base url
		}

define("DB_HOST",$DB_HOST);
define("DB_USERNAME",$DB_USERNAME);
define("DB_NAME",$DB_NAME);
define("DB_PASSWORD",$DB_PASSWORD);
/* indian time */
date_default_timezone_set('Asia/Calcutta');

//define error massage
@session_start();
define("PASS_MATH",'<div class="notif error"> User Name or Password miss match</div>'	);
define("INSRT_DATA_MASS_SUSS",'<div class="notibar msgsuccess"><a class="close"></a><p> Record inserted successfully</p></div>');
define("UPDATE_DATA_MASS_SUSS",'<div class="notibar msgsuccess"><a class="close"></a><p> Record successfully updated</p></div>');
define("DELETE_DATA_MASS_SUSS",'<div class="alert alert-success fade in"><button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button> Record successfully deleted</div>');
define("ALLRADY_EXIT_DATA",'<div class="notibar msgerror"><a class="close"></a><p>Catagory name alrady exits</p></div>');


define("SENT_FROM",'info@deliciousweb.net');
define("SENT_TO",'pankajsingh@deliciousweb.net');
?>