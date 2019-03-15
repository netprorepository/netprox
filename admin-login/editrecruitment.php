<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Edit Recruitment </title>

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
                        <h3>Edit Recruitment </h3>
                    </div><!--contenttitle-->
					
			<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);
			$datetime=date("d/m/Y h:i:s");
			
			
			$update_arr=array(			
			'content'=>$content,
			'ref_no'=>$ref_no,
			'post'=>$post,
			'location'=>$location,
			'status'=>$status,
			'url'=>$objComm->strToUrl($post),
			'role'=>$role,
			'date'=>$datetime
			
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('recruitment',$update_arr,$where);
		
			
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
				<?php
				$result=$objComm->singleRowFetch('recruitment','id',$_GET['id']);
				if($result[0][5]==1)
				$opt='<option value="1">Active</option><option value="0">Inactive</option>';
				else
				$opt='<option value="0">Inactive</option><option value="1">Active</option>';
				?>                	
						                       
                       
						<p>
                        	<label>Post :</label>
                            <span class="field"> <input type="text" name="post"  class="longinput" value="<?=$result[0][3]?>" /></span>
                        </p>
						
						
						
						<p>
                        	<label>Requirements :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="content"   class="longinput" ><?=$result[0][1]?></textarea></span>
                        </p>
						
						 <p>
                        	<label>Role :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="role"   class="longinput" ><?=$result[0][8]?></textarea></span>
                        </p>
						
						<p>
                        	<label>Ref No. :</label>
                            <span class="field"> <input type="text" name="ref_no"  class="longinput" value="<?=$result[0][2]?>" /></span>
                        </p>
						 
						 <p>
                        	<label>Location :</label>
                            <span class="field"> <input type="text" name="location"  class="longinput" value="<?=$result[0][4]?>" /></span>
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
