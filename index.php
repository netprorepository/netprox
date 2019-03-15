<?php
if($_GET['frid']=='about')
{
include 'aboutus.php';
}
else if($_GET['frid']=='faqs')
{
include 'faq.php';
}
else if($_GET['frid']=='support')
{
include 'support.php';
}
else if($_GET['frid']=='product-and-services')
{
include 'products-and-services.php';
}
else if($_GET['frid']=='contact-us')
{
include 'contact-us.php';
}
else if($_GET['frid']=='register-as-a-distributor')
{
include 'register-as-a-distributor.php';
}
else if($_GET['frid']=='store')
{
include 'store.php';
}
else if($_GET['frid']=='about-us')
{
include 'about.php';
}
else if($_GET['frid']=='request-a-demo')
{
include 'request-a-demo.php';
}
else if($_GET['frid']=='recent')
{
include 'recent-projects.php';
}
else if($_GET['frid']=='news')
{
include 'latest-news.php';
}
else if($_GET['frid']=='thanks')
{
include 'thanks.php';
}
else if($_GET['frid']=='products')
{
include 'products.php';
}
else if($_GET['frid']=='admin-login')
{
header("location:index.php");
}

else
{
header("location:home.php");

}

include 'include/footer.php';


?>