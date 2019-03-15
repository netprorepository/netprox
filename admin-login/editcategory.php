<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Edit Category </title>

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
                        <h3>Edit Category </h3>
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
			if($_FILES['images1']['name']==''){
			$img1=$imghidden1;
			}else{
			$img1=$objComm->uploadfile($_FILES["images1"]["name"],$_FILES["images1"]["tmp_name"]);
			}
			if($_FILES['images2']['name']==''){
			$img2=$imghidden2;
			}else{
			$img2=$objComm->uploadfile($_FILES["images2"]["name"],$_FILES["images2"]["tmp_name"]);
			}
			if($_FILES['images3']['name']==''){
			$img3=$imghidden3;
			}else{
			$img3=$objComm->uploadfile($_FILES["images3"]["name"],$_FILES["images3"]["tmp_name"]);
			}
			
			
			$update_arr=array(			
			'pageid'=>$pageid,
			'cat_name'=>$cat_name,
			'pagedescription'=>$pagedescription,
			'seo_titel'=>$seo_titel,
			'seo_keyword'=>$seo_keyword,
			'seo_description'=>$seo_description,
			'status'=>$status,
			'images'=>$img,
			'images1'=>$img1,
			'images2'=>$img2,
			'images3'=>$img3,
			'url'=>$objComm->strToUrl($cat_name),
			'pagedescription1'=>$pagedescription1,
			'pagedescription2'=>$pagedescription2,
			'pagedescription3'=>$pagedescription3,
			'pagedescription4'=>$pagedescription4,
			'pagedescription5'=>$pagedescription5,
			'pagedescription6'=>$pagedescription6,
			'pagedescription7'=>$pagedescription7
			
			
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('category',$update_arr,$where);
		
			
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
				<?php
				$result=$objComm->singleRowFetch('category','id',$_GET['id']);
				//echo $result[0][2];
				if($result[0][7]==1)
				$opt='<option value="1">Active</option><option value="0">Inactive</option>';
				else
				$opt='<option value="0">Inactive</option><option value="1">Active</option>';
				?>                	
						
						<p>
                        	<label>Select Category :</label>
                            <span class="field">
                            <select name="pageid" class="uniformselect" "required">
							
							<?php 
							$sql="select * from staticpage where id=1";
							$sqlres=mysql_query($sql);
							while($sqlRow=mysql_fetch_assoc($sqlres))
							{
							
							?>
                            	<option value="<?php echo $sqlRow['id'];?>" <?php if($sqlRow['id']==$result[0][2]) { echo "selected"; }?>><?php echo $sqlRow['name'];?></option>
								<?php }?>
                            </select>
                            
                            </span>
                        </p>
                       
						<p>
                        	<label>Category Name :</label>
                            <span class="field"> <input type="text" name="cat_name"  class="longinput" value="<?=$result[0][2]?>" /></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="pagedescription"   class="longinput" id="editor1"><?=$result[0][3]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="pagedescription1"   class="longinput" id="editor2"><?=$result[0][13]?></textarea></span>
                        </p>
						
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="pagedescription2"   class="longinput" id="editor3"><?=$result[0][14]?></textarea></span>
                        </p>
						
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="pagedescription3"   class="longinput" id="editor4"><?=$result[0][15]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="pagedescription4"   class="longinput" id="editor5"><?=$result[0][16]?></textarea></span>
                        </p>						
						<?php						
						if($result[0][0]=='1')						 
						{						
						?>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="pagedescription5"   class="longinput" id="editor6"><?=$result[0][17]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="pagedescription6"   class="longinput" id="editor7"><?=$result[0][18]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="pagedescription7"   class="longinput" id="editor8"><?=$result[0][19]?></textarea></span>
                        </p>
						<?php } else{ } ?>
						
						<p>
                        	<label>Image : </label>
                            <span class="field">
						
						<img src="projectimg/<?=$result[0][8]?>" width="100" />
						</span>
                        </p>
						
						 <p>
                        	<label>Choose Media Image</label>
                            <span class="field"><input type="file" name="images" multiple="multiple"   /></span>
                       </p>
					   <p>
                        	<label>Image : </label>
                            <span class="field">
						
						<img src="projectimg/<?=$result[0][10]?>" width="100" />
						</span>
                        </p>
						
						 <p>
                        	<label>Choose Media Image</label>
                            <span class="field"><input type="file" name="images1" multiple="multiple"   /></span>
                       </p>
					   <p>
                        	<label>Image : </label>
                            <span class="field">
						
						<img src="projectimg/<?=$result[0][11]?>" width="100" />
						</span>
                        </p>
						
						 <p>
                        	<label>Choose Media Image</label>
                            <span class="field"><input type="file" name="images2" multiple="multiple"   /></span>
                       </p>
						<?php 
						if($result[0][0]=='1')						 
						{ ?>
						<p>
                        	<label>Image : </label>
                            <span class="field">
						
						<img src="projectimg/<?=$result[0][12]?>" width="100" />
						</span>
                        </p>
						
						 <p>
                        	<label>Choose Media Image</label>
                            <span class="field"><input type="file" name="images3" multiple="multiple"   /></span>
                       </p>
						 						<?php } else{ } ?>
						
						<p>
                        	<label>SEO Content  :</label>
                            <span class="field">&nbsp;</span>
                        </p>
						<p>
                        	<label>Title :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_titel"   class="longinput" ><?=$result[0][4]?></textarea></span>
                        </p>
						<p>
                        	<label>Keywords :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_keyword"   class="longinput" ><?=$result[0][5]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_description"   class="longinput"  ><?=$result[0][6]?></textarea></span>
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
							<input type="hidden" name="imghidden" value="<?=$result[0][8]?>" />
							<input type="hidden" name="imghidden1" value="<?=$result[0][10]?>" />	
							<input type="hidden" name="imghidden2" value="<?=$result[0][11]?>" />	
							<input type="hidden" name="imghidden3" value="<?=$result[0][12]?>" />	

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
$objComm->editor('editor6');
$objComm->editor('editor7');
$objComm->editor('editor8');

 ?>	
</body>

</html>
