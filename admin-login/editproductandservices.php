<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Edit Product & Services </title>

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
                        <h3>Edit Product & Services </h3>
                    </div><!--contenttitle-->
					
			<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);
			
			
			
			$update_arr=array(			
			'description1'=>$description1,
			'description2'=>$description2,
			'description3'=>$description3,
			'description4'=>$description4,
			'description5'=>$description5,
			'description6'=>$description6
				
			);
			$where=' where id='.$_GET['id'].'';
			$objComm->db_update_record('productandservices',$update_arr,$where);
		
			
			}
			?>	
			
					
					
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
				<?php
				$result=$objComm->singleRowFetch('productandservices','id',$_GET['id']);
				
				?>                	
						

						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description1"   class="longinput" id="editor1"><?=$result[0][1]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description2"   class="longinput" id="editor2"><?=$result[0][2]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description3"   class="longinput" id="editor3"><?=$result[0][3]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description4"   class="longinput" id="editor4"><?=$result[0][4]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description5"   class="longinput" id="editor5"><?=$result[0][5]?></textarea></span>
                        </p>
						<p>
                        	<label>Description :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="description6"   class="longinput" id="editor6"><?=$result[0][6]?></textarea></span>
                        </p>

						
                       
					<br clear="all" />
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2" name="submit">Submit </button>
                            <input type="reset" class="reset radius2" value="Reset" />
                        </p>
							<input type="hidden" name="imghidden" value="<?=$result[0][9]?>" />	
							<input type="hidden" name="imghidden1" value="<?=$result[0][14]?>" />
							<input type="hidden" name="imghidden2" value="<?=$result[0][15]?>" />	
							<input type="hidden" name="pdfidden" value="<?=$result[0][13]?>" />	

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

 ?>	
</body>

</html>
