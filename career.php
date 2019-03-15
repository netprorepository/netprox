<?php
include 'admin/setting.php';
include "inc/topheader.php";
$_GET['frid'];
$sql="select * from staticpage where url='".$_GET['frid']."' and status='1'";
$sqlres=mysql_query($sql);
$sqlRow=mysql_fetch_assoc($sqlres);
?>

<body>

<?php include 'inc/navigation.php';?>

<section class="container-fluid innerBanner">
	
	<h2>Looking for a job let TransMax<span> help you</span> </h2>
    <hr/>
</section>

<section class="container-fluid innerpgcontent">
	
    
    <div class="container-fluid whoweare">
    	
        
    	   <p><?php echo $sqlRow['description'];?></p>
          
         
         <table class="table maytab">
 			<tr>
            	<td>Ref No.</td>
                <td>Post</td>
                <td>Location</td>
                <td>Details</td>
            </tr>
			<?php
				$vacancies="select *from recruitment where status='1'";
				$vacanciesres=mysql_query($vacancies);
				while($vacanciesRow=mysql_fetch_assoc($vacanciesres))
				 {
			?>
            <tr>
            	<td><?php echo $vacanciesRow['ref_no'];?></td>
                <td><?php echo $vacanciesRow['post'];?></td>
                <td><?php echo $vacanciesRow['location'];?></td>
                <td>Fill the Form Below to apply</td>
            </tr>
            
            <?php } ?>
            
		 </table>
         
        
         
         <ul class="container applyform">
         	<form>
         	<li class="col-md-4"><span>Full Name</span><input type="text" placeholder="Enter Full Name"/></li>
            <li class="col-md-4"><span>Phone</span><input type="text" placeholder="Enter Phone Number"/></li>
            <li class="col-md-4"><span>E-Mail</span><input type="text" placeholder="Enter E-Mail"/></li>
            <li class="col-md-12"><span>Tell Us Something about Yourself</span><textarea placeholder="Few words about youself"></textarea></li>
            
            <li class="col-md-12"><span>Upload updated C.V</span> <input type="file"/></li>
            <li class="col-md-12"><input type="submit" value="Submit Details"/></li>
            </form>
         </ul>
          
           
          
</section>




<?php //include 'inc/footer.php';?>



<script src="assets/js/owl.carousel.js"></script>
<script src="js/js.js"></script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/55769d92e4de91441f66666b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    
</body>
</html>