<?php 
error_reporting(0);
include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Add News </title>

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
                        <h3>Add News </h3>
                    </div><!--contenttitle-->
					
					
					<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);	
			$updatedate=date("d/m/Y");	
			
			$status=1;
			
			$images=$objComm->uploadfile($_FILES[images][name],$_FILES[images][tmp_name]);
						
			//$fields=array('news_name','news_des','status');
			//$data=array($news_name,$news_des,$status);

			//$objComm->insert1($fields,$data,'tbl_news');
			
			$sql="insert into tbl_news (heading,description1,description2,description3,description4,description5,images,seo_titel,seo_keyword,seo_description,status) values ('$heading','$editor1','$editor2','$editor3','$editor4','$editor5','$images','$seo_titel','$seo_keyword','$seo_description','$status')";
			
			$sqlres1=mysql_query($sql);

			if($sqlres1>0)
			{
			
			
			echo INSRT_DATA_MASS_SUSS;
			}
			}
					
			
			?>	
				
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
                    	
						
                        
                        <p>
                        	<label>Heading  :</label>
                            <span class="field"> <input type="text" name="heading"  class="longinput" /></span>
                        </p>
						
						<p>
                        	<label>News Description  :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor1"   class="longinput" /></textarea>
							</span>
                        </p>
						
						<p>
                        	<label>News Description  :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor2"   class="longinput" /></textarea>
							</span>
                        </p>
						
						<p>
                        	<label>News Description  :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor3"   class="longinput" /></textarea>
							</span>
                        </p>
						<p>
                        	<label>News Description  :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor4"   class="longinput" /></textarea>
							</span>
                        </p>
						
						<p>
                        	<label>News Description  :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="editor5"   class="longinput" /></textarea>
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
	 var editor4 = CKEDITOR.replace( 'editor5' );
     CKFinder.setupCKEditor( editor5, 'ckfinder/' ) ;
    //]]>

   </script>
</body>

</html>
