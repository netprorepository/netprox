<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Edit Testimonials </title>

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
                        <h3>Edit Testimonials </h3>
                    </div><!--contenttitle-->
					
			<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);
			
			$update_arr=array(			
			'test_name'=>$test_name,
			'person_type'=>$person_type,
			'description'=>$description,
			'url'=>$objComm->strToUrl($test_name),
			'status'=>$status
			
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('testimonials',$update_arr,$where);
		
			
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
				<?php
				$result=$objComm->singleRowFetch('testimonials','id',$_GET['id']);
				if($result[0][4]==1)
				$opt='<option value="1">Active</option><option value="0">Inactive</option>';
				else
				$opt='<option value="0">Inactive</option><option value="1">Active</option>';
				?>                	
						                       
                       
						<p>
                        	<label>Name :</label>
                            <span class="field"> <input type="text" name="test_name"  class="longinput" value="<?=$result[0][1]?>" /></span>
                        </p>
						
						<p>
                        	<label>Person Type:</label>
                            <span class="field"><input type="text" name="person_type"  class="longinput" value="<?=$result[0][2]?>" /></span>
                        </p>
						
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description"   class="longinput" id="editor1"><?=$result[0][3]?></textarea></span>
                        </p>
						<!--<p>
                        	<label>Image : </label>
                            <span class="field">
						
						<img src="projectimg/<?=$result[0][9]?>" width="100" />
						</span>
                        </p>
						 <p>
                        	<label>Choose Media Image</label>
                            <span class="field"><input type="file" name="image" multiple="multiple"   /></span>
                       </p>-->
						
						<!--<p>
                        	<label>SEO Content  :</label>
                            <span class="field">&nbsp;</span>
                        </p>
						<p>
                        	<label>Title :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_title"   class="longinput" ><?=$result[0][6]?></textarea></span>
                        </p>
						<p>
                        	<label>Keywords :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_keywords"   class="longinput" ><?=$result[0][7]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_description"   class="longinput"  ><?=$result[0][8]?></textarea></span>
                        </p>-->
						
						
						<p>
                        	<label>Status :</label>
                            <span class="field">
                            <select name="status" class="uniformselect">
                            	<?=$opt?>
                            </select>
                            
                            </span>
                        </p>
						
                       
					<br clear="all" />
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2" name="submit">Submit </button>
                            <input type="reset" class="reset radius2" value="Reset" />
                        </p>
							<input type="hidden" name="imghidden" value="<?=$result[0][9]?>" />				

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
