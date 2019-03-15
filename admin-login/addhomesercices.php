<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Add Home Services </title>

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
                        <h3>Add Home Services </h3>
                    </div><!--contenttitle-->
					
					
					<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);	
			$datetime=date("d/m/Y h:i:s");
			$status=1;
			$fields=array('name','images','images1','images2','createdate','status','url');
			$data=array($name,$objComm->uploadfile($_FILES["images"]["name"],$_FILES["images"]["tmp_name"]),$objComm->uploadfile($_FILES["images1"]["name"],$_FILES["images1"]["tmp_name"]),$objComm->uploadfile($_FILES["images2"]["name"],$_FILES["images2"]["tmp_name"]),$datetime,$status,'url');
			$lastId=$objComm->insertWithLastid($fields,$data,'service_home');	
			
			echo INSRT_DATA_MASS_SUSS;
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
                    	
                        <p>
                        	<label>Name :</label>
                            <span class="field"><textarea cols="80" rows="5" name="name" id="location2" class="longinput"></textarea></span>
                        </p>
						<p>                        	<label>Link Url :</label>                            <span class="field"><textarea cols="80" rows="5" name="url" id="location2" class="longinput"></textarea></span>                        </p>
					
                        
						<p>
                        	<label>Upload Image : </label>
                            <span class="field"><input type="file" name="images"   /></span>
                        </p>
                       <p>
                        	<label>Upload Image : </label>
                            <span class="field"><input type="file" name="images1"   /></span>
                        </p>
						<p>
                        	<label>Upload Image : </label>
                            <span class="field"><input type="file" name="images2"   /></span>
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
