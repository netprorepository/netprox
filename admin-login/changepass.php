<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Change Password </title>
<script>
	
function validateForm() 
{

  
	if(document.chpass.pass_word.value=="")
  {
  document.getElementById('new').innerHTML = "New password is required";
  return false;
  }
  
	if(document.chpass.conpass_word.value=="")
  {
  document.getElementById('con').innerHTML = "Confirm password is required";
  return false;
  }
	if(document.chpass.pass_word.value != document.chpass.conpass_word.value)
	{
    document.getElementById('con').innerHTML = "confirm password is do not match";
  return false;
  }
 }  
</script>								


<?php include 'include/scriptStyle.php' ?>

</head>

<body class="withvernav">

<div class="bodywrapper">
    
<?php include 'include/topHeader.php' ?>  
<?php include 'include/leftMenu.php' ?> 
      
    <div class="centercontent">
    
        <div id="contentwrapper" class="contentwrapper elements">
        	
        	<div id="basicform" class="subcontent">
                                
                    <div class="contenttitle2">
                        <h3>Edit Admin Profile </h3>
                    </div><!--contenttitle-->
					
					
			<?php 
			 if(isset($_POST['submit']))
			{
			
			$update_arr=array('password'=>$_POST['conpass_word']);
			
			$where=' where 	userName="'.$_COOKIE['username'].'"';
			$objComm->db_update_record('hl_admin',$update_arr,$where);
			} 
			?>	
				
                    <form class="stdform" name="chpass" action="" method="post"  onsubmit="return validateForm()">
			<?php
			//$result=$objComm->singleRowFetch('hl_admin','id',$_GET['id']);
			
			?>                	
					
						<p>
                        	<label>New Password :</label>
                            <span class="field"><input type="text" name="pass_word"   class="longinput" /></span>
                        <font color='red'> <DIV id="new"> </DIV></font>
						</p>
						<p>
                        	<label>Confirm Password :</label>
                            <span class="field"><input type="text" name="conpass_word"   class="longinput"/></span>
                        <font color='red'> <DIV id="con"> </DIV></font>
						</p>
						
					<br clear="all" />
                        
                        <p class="stdformbutton">
                        	<input type="submit" class="submit radius2" name="submit" />
                            
                        </p>
		<input type="hidden" name="imghidden" value="<?//=$result[0][3]?>" />				
		</form>	
            </div><!--subcontent-->
           
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
	
</html>
