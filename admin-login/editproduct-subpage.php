<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Edit Product Sub Page </title>

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
                        <h3>Edit Product Sub Page </h3>
                    </div><!--contenttitle-->
					
					
			<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);
			if($_FILES['images']['name']==''){
			$img=$logohiden;
			}else{
			$img=$objComm->uploadfile($_FILES["images"]["name"],$_FILES["images"]["tmp_name"]);
			}
			$datetime=date("d/m/Y h:i:s");
			
			$update_arr=array(								
			'name'=>$name,
			'images'=>$img		
			
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('product_subpage',$update_arr,$where);
			
		
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
			<?php
			$result=$objComm->singleRowFetch('product_subpage','id',$_GET['id']);
			
			?>                	
						                       
                        <p>
                        	<label>Name :</label>
                            <span class="field"><textarea cols="80" rows="5" name="name"   class="longinput"> <?=$result[0][1]?></textarea></span>
                        </p>
						
						
						<p>
                        	<label>Image : </label>
                            <span class="field"><input type="file" name="images"   /></span>
                        </p>
                       <p>
                        	<label>&nbsp;</label>
                            <span class="field"><img src="projectimg/<?=$result[0][2]?>" style="width:150px; height:100px;" /></span>
                        </p>
                      

					<br clear="all" />
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2" name="submit">Submit </button>
                            <input type="reset" class="reset radius2" value="Reset" />
                        </p>
		<input type="hidden" name="logohiden" value="<?=$result[0][2]?>" />				
		</form>				
						
            </div><!--subcontent-->
            
         
        
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
	
</html>
