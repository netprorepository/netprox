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
			
			
			
			$update_arr=array(			
			
			'name'=>$name,
			'icon'=>$icon,
			'status'=>$status
			
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('icon_content',$update_arr,$where);
		
			
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
				<?php
				$result=$objComm->singleRowFetch('icon_content','id',$_GET['id']);
				if($result[0][4]==1)
				$opt='<option value="1">Active</option><option value="0">Inactive</option>';
				else
				$opt='<option value="0">Inactive</option><option value="1">Active</option>';
				?>                	
						<?php 
						    $sql="select * from subcategory where catid='1' and id='".$result[0][1]."'";
							$sqlres=mysql_query($sql);
							$sqlRow=mysql_fetch_assoc($sqlres);
						?>
						<p>
                        	<label>Product :</label>
                            <span class="field"> <input type="text" name="subcatid"  class="longinput" value="<?=$sqlRow['name'];?>" readonly /></span>
                        </p>
						
						<p>
                        	<label>Name :</label>
                            <span class="field"> <input type="text" name="name"  class="longinput" value="<?=$result[0][2];?>" /></span>
                        </p>
					   
						<p>
                        	<label>Icon :</label>
                            <span class="field"> <textarea cols="80" rows="5" name="icon"  class="longinput"> <?=$result[0][3];?></textarea></span>
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
