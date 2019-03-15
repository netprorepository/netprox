<?php 
error_reporting(0);
include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Add Category </title>

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
                        <h3>Add Category </h3>
                    </div><!--contenttitle-->
					
					
					<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);	
			$updatedate=date("d/m/Y");	
			
			$status=1;
			$image=$objComm->uploadfile($_FILES[images][name],$_FILES[images][tmp_name]);
			$image1=$objComm->uploadfile($_FILES[images1][name],$_FILES[images1][tmp_name]);
			$image2=$objComm->uploadfile($_FILES[images2][name],$_FILES[images2][tmp_name]);
			$image3=$objComm->uploadfile($_FILES[images3][name],$_FILES[images3][tmp_name]);
			
						
			//$fields=array("pageid","cat_name","pagedescription","status","seo_titel","seo_keyword","seo_description","url","images");
			//$data=array($pageid,$cat_name,$editor1,$status,$seo_titel,$seo_keyword,$seo_description,$objComm->strToUrl($cat_name),$objComm->uploadfile($_FILES["images"]["name"],$_FILES["images"]["tmp_name"]));

			//echo $objComm->insert1($fields,$data,"category");

			//echo $sql= mysql_query("INSERT INTO category (pageid,cat_name,pagedescription,status,url,seo_titel,seo_keyword,seo_description,url,images) VALUES 
						//('$pageid','$cat_name','$editor1','$status','$seo_titel','$seo_keyword','$seo_description','$objComm->strToUrl($cat_name)','$image')");
						$sql="insert into category (pageid,cat_name,pagedescription,status,seo_titel,seo_keyword,seo_description,url,images,image1,image2,image3) values ('$pageid','$cat_name','$editor1','$status','$seo_titel','$seo_keyword','$seo_description','$objComm->strToUrl($cat_name)','$image','$image1','$image2','$image3')";
						$sqlres1=mysql_query($sql);
			
			
			echo INSRT_DATA_MASS_SUSS;
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
                        	<label>Category Name  :</label>
                            <span class="field"> <input type="text" name="cat_name"  class="longinput" /></span>
                        </p>
						
						
					
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor1"   class="longinput" ></textarea></span>
                        </p>
						
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
                        	<label>Choose Image : </label>
							<span class="field">&nbsp;</span>
                            <span class="field"><input type="file" name="images3"   /></span>
                        </p>
						
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
    //]]>

   </script>
</body>

</html>
