<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Edit Footer Details </title>

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
                        <h3>Edit Footer Details </h3>
                    </div><!--contenttitle-->
					
					
			<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);
			
			
			$update_arr=array(								
			'address'=>$address,
			'email_address'=>$email_address,			
			'phone'=>$phone,
			'fax'=>$fax
			
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('footer_manager',$update_arr,$where);
			
		
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
			<?php
			
			$result=$objComm->singleRowFetch('footer_manager','id',$_GET['id']);
			
			?>                	
						                       
                        <p>
                        	<label>Address :</label>
                            <span class="field"><textarea cols="80" rows="5" name="address"   class="longinput"> <?=$result[0][1]?></textarea></span>
                        </p>
						
						
						<p>
                        	<label>Email Address : </label>
                            <span class="field">
							<textarea cols="80" rows="5" name="email_address"   class="longinput"> <?=$result[0][2]?></textarea>
							</span>
                        </p>
						<p>
                        	<label>Phone : </label>
                            <span class="field">
							<textarea cols="80" rows="5" name="phone"   class="longinput"> <?=$result[0][3]?></textarea>
							</span>
                        </p>
                       
					   <p>
                        	<label>Fax : </label>
                            <span class="field">
							<textarea cols="80" rows="5" name="fax"   class="longinput"> <?=$result[0][4]?></textarea>
							</span>
                        </p>
						
                      
						
					<br clear="all" />
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2" name="submit">Submit </button>
                            <input type="reset" class="reset radius2" value="Reset" />
                        </p>
				
		</form>				
						
            </div><!--subcontent-->
            
         
        
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
	
</html>
