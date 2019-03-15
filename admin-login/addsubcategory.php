<?php 
error_reporting(0);
include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Add Subcategory </title>

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
                        <h3>Add Subcategory </h3>
                    </div><!--contenttitle-->
					
					
					<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);	
			$updatedate=date("d/m/Y");	
			
			$status=1;
			$image=$objComm->uploadfile($_FILES[images][name],$_FILES[images][tmp_name]);
			$images1=$objComm->uploadfile($_FILES[images1][name],$_FILES[images1][tmp_name]);
			$images2=$objComm->uploadfile($_FILES[images2][name],$_FILES[images2][tmp_name]);
			$pdf_link=$objComm->uploadfile2($_FILES["pdf_link"]["name"],$_FILES["pdf_link"]["tmp_name"]);
			
			
						
			//$fields=array("staticpageid","subcategory_name","description","status","seo_title","seo_keywords","seo_description","url");
			//$data=array($staticpageid,$subcategory_name,$editor1,$status,$seo_title,$seo_keywords,$seo_description,$objComm->strToUrl($subcategory_name));

			//$objComm->insert1($fields,$data,"subcategogy");

			$sql="insert into subcategory (pageid,catid,name,pagedescription,status,seo_titel,seo_keyword,seo_description,url,images,pdf_link,images1,images2,pagedescription1,pagedescription2,pagedescription3,pagedescription4,pagedescription5) values ('$pageid','$catid','$name','$editor1','$status','$seo_titel','$seo_keyword','$seo_description','$objComm->strToUrl($name)','$image','$pdf_link','$images1','$images2','$editor2','$editor3','$editor4','$editor5','$editor5')";
			
			$sqlres1=mysql_query($sql);
			
			if($sqlres1)
			 {
			echo INSRT_DATA_MASS_SUSS;
			}
			}
					
			
			?>	
				
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
                    	
						<p>
                        	<label>Select Page :</label>
                            <span class="field">
                            <select name="pageid" class="uniformselect" "required">
							
							<?php 
							$sql="select * from staticpage where id=1";
							$sqlres=mysql_query($sql);
							while($sqlRow=mysql_fetch_assoc($sqlres))
							{
							?>
                            	<option value="<?php echo $sqlRow['id'];?>"><?php echo $sqlRow['name'];?></option>
								<?php }?>
                            </select>
                            
                            </span>
                        </p>
						<p>
                        	<label>Select Category :</label>
                            <span class="field">
                            <select name="catid" class="uniformselect" "required">
							
							<?php 
							$sql="select * from category order by id asc";
							$sqlres=mysql_query($sql);
							while($sqlRow=mysql_fetch_assoc($sqlres))
							{
							?>
                            	<option value="<?php echo $sqlRow['id'];?>"><?php echo $sqlRow['cat_name'];?></option>
								<?php }?>
                            </select>
                            
                            </span>
                        </p>
                        
                        <p>
                        	<label>Subcategory Name  :</label>
                            <span class="field"> <input type="text" name="name"  class="longinput" /></span>
                        </p>
						
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor1"   class="longinput" ></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor2"   class="longinput" ></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor3"   class="longinput" ></textarea></span>
                        </p>
						<?php
						//if($catid=='3')
						// {
						?>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor4"   class="longinput" ></textarea></span>
                        </p>
						
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor5"   class="longinput" ></textarea></span>
                        </p>
						
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor6"   class="longinput" ></textarea></span>
                        </p>
						<?php //} else{ } ?>
						<p>
                        	<label>Choose Image : </label>
							<span class="field">&nbsp;</span>
                            <span class="field"><input type="file" name="images"   /></span>
                        </p>
						
						<p>
                        	<label>Choose Image : </label>
							<span class="field">&nbsp;</span>
                            <span class="field"><input type="file" name="images1"   /></span>
                        </p>
						
						<p>
                        	<label>Choose Image : </label>
							<span class="field">&nbsp;</span>
                            <span class="field"><input type="file" name="images2"   /></span>
                        </p>
						
						<p>
                        	<label>Choose PDF : </label>
							<span class="field">&nbsp;</span>
                            <span class="field"><input type="file" name="pdf_link"   /></span>
                        </p>
						
						<p>
                        	<label>SEO Content  :</label>
                            <span class="field">&nbsp;</span>
                        </p>
						<p>
                        	<label>Title :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_titel"   class="longinput" ></textarea></span>
                        </p>
						<p>
                        	<label>Keywords :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_keyword"   class="longinput" ></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_description"   class="longinput" ></textarea></span>
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


<?php 
//$objComm->editorjs();
//$objComm->editor('editor1');



 ?>	
 <script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
				<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
				<script src="ckeditor/_samples/sample.js" type="text/javascript"></script>
				<link href="ckeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
				<script type="text/javascript">

    //<![CDATA[
     //CKEDITOR.replace( 'long_desc');
     var editor1 = CKEDITOR.replace( 'editor1' );
     CKFinder.setupCKEditor( editor1, 'ckfinder/' ) ;
	 var editor2 = CKEDITOR.replace( 'editor2' );
     CKFinder.setupCKEditor( editor2, 'ckfinder/' ) ;
	 var editor3 = CKEDITOR.replace( 'editor3' );
     CKFinder.setupCKEditor( editor3, 'ckfinder/' ) ;
	 var editor4 = CKEDITOR.replace( 'editor4' );
     CKFinder.setupCKEditor( editor4, 'ckfinder/' ) ;
	 var editor5 = CKEDITOR.replace( 'editor5' );
     CKFinder.setupCKEditor( editor5, 'ckfinder/' ) ;
	 var editor6 = CKEDITOR.replace( 'editor6' );
     CKFinder.setupCKEditor( editor6, 'ckfinder/' ) ;
    //]]>

   </script>
</body>

</html>
