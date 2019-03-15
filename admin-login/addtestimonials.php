<?php 
error_reporting(0);
include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Add Testimonials </title>

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
                        <h3>Add Testimonials </h3>
                    </div><!--contenttitle-->
					
					
					<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);	
			$updatedate=date("d/m/Y");	
			
			$status=1;
			
						
			//$fields=array('test_name','person_type','description','status');
			//$data=array($test_name,$person_type,$description,$status);

			//$objComm->insert1($fields,$data,'testimonials');
			echo $sql="insert into testimonials (test_name,person_type,description,status) value('$test_name','$person_type','$description','$status')";
			$sqlres=mysql_query($sql);						if($sqlres)			{
			
			
			echo INSRT_DATA_MASS_SUSS;			}
			}
					
			
			?>	
				
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
                    	
						
                        
                        <p>
                        	<label>Name  :</label>
                            <span class="field"> <input type="text" name="test_name"  class="longinput" /></span>
                        </p>
						
						<p>
                        	<label>Person Type</label>
                            <span class="field"><input type="text" name="person_type"  class="longinput" /></span>
                        </p>
						
						
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description"   class="longinput" id="editor1"></textarea></span>
                        </p>
						
						 <!--<p>
                        	<label>Choose Image : </label>
							<span class="field">&nbsp;</span>
                            <span class="field"><input type="file" name="image"   /></span>
                        </p>-->
					   
						
						<!--
						<p>
                        	<label>SEO Content  :</label>
                            <span class="field">&nbsp;</span>
                        </p>
						<p>
                        	<label>Title :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_title"   class="longinput" ></textarea></span>
                        </p>
						<p>
                        	<label>Keywords :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_keywords"   class="longinput" ></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_description"   class="longinput" ></textarea></span>
                        </p>
						-->
						
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


<?php 
$objComm->editorjs();
$objComm->editor('editor1');

 ?>	
</body>

</html>
