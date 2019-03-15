<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Edit Contact  Manager </title>

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
                        <h3>Edit Contact Manager </h3>
                    </div><!--contenttitle-->
					
					
			<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);
			
			$update_arr=array(	
			'name'=>$name,
			'address'=>$address,
			'telephone'=>$telephone,
			'email'=>$email,
			'seo_title'=>$seo_title,
			'seo_description'=>$seo_description,
			'seo_keywords'=>$seo_keywords,
			'url'=>$objComm->strToUrl($name)
			
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('contact',$update_arr,$where);
			
		
		
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
<?php
$result=$objComm->singleRowFetch('contact','id',$_GET['id']);

?>                	
						                       
                       
						<p>
                        	<label>Name :</label>
                            <span class="field"><input type="text" name="name" value="<?=$result[0][1]?>" /></span>
                        </p>
						<p>
                        	<label>Address:</label>
                            <span class="field"><textarea cols="80" rows="5" name="address"   class="longinput" id="editor1" ><?=$result[0][2]?></textarea></span>
                        </p>
						
						<p>
                        	<label>Telephone:</label>
                            <span class="field"><textarea cols="80" rows="5" name="telephone"   class="longinput" id="editor2" ><?=$result[0][3]?></textarea></span>
                        </p>
						<p>
                        	<label>E-mail :</label>
                            <span class="field"><textarea cols="80" rows="5" name="email"   class="longinput" id="editor3" ><?=$result[0][4]?></textarea></span>
                        </p>
						
						<p>
                        	<label>SEO Content  :</label>
                            <span class="field">&nbsp;</span>
                        </p>
						<p>
                        	<label>Title :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_title"   class="longinput" ><?=$result[0][5]?></textarea></span>
                        </p>
						<p>
                        	<label>Keywords :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_keywords"   class="longinput" ><?=$result[0][6]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field"><textarea cols="80" rows="5" name="seo_description"   class="longinput" ><?=$result[0][7]?></textarea></span>
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
$objComm->editor('editor9');


 ?>	
</html>
