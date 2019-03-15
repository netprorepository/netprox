<?php 
error_reporting(0);
include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Add Product Icon Content </title>

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
                        <h3>Add Product Icon Content </h3>
                    </div><!--contenttitle-->
					
					
					<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);	
			$updatedate=date("d/m/Y");	
			
			$status=1;
			$image=$objComm->uploadfile($_FILES[images][name],$_FILES[images][tmp_name]);
			
			
						
			//$fields=array("pageid","cat_name","pagedescription","status","seo_titel","seo_keyword","seo_description","url","images");
			//$data=array($pageid,$cat_name,$editor1,$status,$seo_titel,$seo_keyword,$seo_description,$objComm->strToUrl($cat_name),$objComm->uploadfile($_FILES["images"]["name"],$_FILES["images"]["tmp_name"]));

			//echo $objComm->insert1($fields,$data,"category");

			//echo $sql= mysql_query("INSERT INTO category (pageid,cat_name,pagedescription,status,url,seo_titel,seo_keyword,seo_description,url,images) VALUES 
						//('$pageid','$cat_name','$editor1','$status','$seo_titel','$seo_keyword','$seo_description','$objComm->strToUrl($cat_name)','$image')");
						$sql="insert into icon_content (subcatid,name,icon,status) values ('$subcatid','$name','$icon','$status')";
						$sqlres1=mysql_query($sql);
			
			
			echo INSRT_DATA_MASS_SUSS;
			}
					
			
			?>	
				
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
                    	
						<p>
                        	<label>Select Product :</label>
                            <span class="field">
                            <select name="subcatid" class="uniformselect" "required">
							
							<?php 
							$sql="select * from subcategory where catid='1' order by id asc";
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
                        	<label>Name  :</label>
                            <span class="field"> <input type="text" name="name"  class="longinput" /></span>
                        </p>
						
						
					<p>
                        	<label>Icon : </label>
							
                            <span class="field"> <input type="text" name="icon"  class="longinput" /></span>
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
