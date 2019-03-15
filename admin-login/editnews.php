<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Edit News </title>

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
                        <h3>Edit News </h3>
                    </div><!--contenttitle-->
					
			<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);
			if($_FILES['images']['name']==''){
			$img=$imghidden;
			}else{
			$img=$objComm->uploadfile($_FILES["images"]["name"],$_FILES["images"]["tmp_name"]);
			}
				
			$update_arr=array(			
			'heading'=>$heading,
			'description1'=>$description1,
			'description2'=>$description2,
			'description3'=>$description3,
			'description4'=>$description4,
			'description5'=>$description5,
			'images'=>$img,
			'seo_titel'=>$seo_titel,
			'seo_keyword'=>$seo_keyword,
			'seo_description'=>$seo_description,
			'status'=>$status
			
			
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('tbl_news',$update_arr,$where);
		
			
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
				<?php
				$result=$objComm->singleRowFetch('tbl_news','id',$_GET['id']);
				if($result[0][11]==1)
				$opt='<option value="1">Active</option><option value="0">Inactive</option>';
				else
				$opt='<option value="0">Inactive</option><option value="1">Active</option>';
				?>                	
						                       
                       
						<p>
                        	<label>Heading :</label>
                            <span class="field"> <input type="text" name="heading"  class="longinput" value="<?=$result[0][1]?>" /></span>
                        </p>
						
						<p>
                        	<label>News Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description1" id="editor1"   class="longinput" /><?=$result[0][2]?></textarea>
							
							</span>
                        </p>
						<p>
                        	<label>News Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description2" id="editor2"   class="longinput" /><?=$result[0][3]?></textarea>
							
							</span>
                        </p>
						<p>
                        	<label>News Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description3" id="editor3"   class="longinput" /><?=$result[0][4]?></textarea>
							
							</span>
                        </p>
						<p>
                        	<label>News Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description4" id="editor4"   class="longinput" /><?=$result[0][5]?></textarea>
							
							</span>
                        </p>
						<p>
                        	<label>News Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description5" id="editor5"   class="longinput" /><?=$result[0][6]?></textarea>
							
							</span>
                        </p>
						
						<p>
                        	<label>Image : </label>
                            <span class="field">
						
						<img src="projectimg/<?=$result[0][7]?>" width="100" />
						</span>
                        </p>
						
						<p>
                        	<label>Choose Image : </label>
							<span class="field">&nbsp;</span>
                            <span class="field"><input type="file" name="images"   /></span>
                        </p>
						
						<p>
                        	<label>SEO Content  :</label>
                            <span class="field">&nbsp;</span>
                        </p>
						<p>
                        	<label>Title :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_titel"   class="longinput" ><?=$result[0][8]?></textarea></span>
                        </p>
						<p>
                        	<label>Keywords :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_keyword" class="longinput" ><?=$result[0][9]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_description"   class="longinput" ><?=$result[0][10]?></textarea></span>
                        </p>
						
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
							<input type="hidden" name="imghidden" value="<?=$result[0][7]?>" />	

				</form>				
						
            </div><!--subcontent-->
            
         
        
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->


<?php 
$objComm->editorjs();
$objComm->editor('editor1');
$objComm->editor('editor2');
$objComm->editor('editor3');
$objComm->editor('editor4');
$objComm->editor('editor5');

 ?>	
</body>

</html>
