<?php 
error_reporting(0);
include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Add Question </title>

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
                        <h3>Add Question </h3>
                    </div><!--contenttitle-->
					
					
					<?php 
			if(isset($_POST['submit']))
			{
			extract($_POST);	
			$updatedate=date("d/m/Y");	
			
			$status=1;
			
						
			//$fields=array('question','answer','status');
			//$data=array($question,$answer,$status);

			//$objComm->insert1($fields,$data,'faq_questio');
			$sql="insert into faq_questio (question,answer,status) values ('$question','$answer','$status')";

			$sqlres=mysql_query($sql);
			if($sqlres)
			  {
			echo INSRT_DATA_MASS_SUSS;
			  }
			}
					
			
			?>	
				
                    <form class="stdform" action="" method="post" enctype="multipart/form-data">
                    	
						
                        
                        <p>
                        	<label>Question  :</label>
                            <span class="field"> <input type="text" name="question"  class="longinput" /></span>
                        </p>
						
						<p>
                        	<label>Answer :</label>
                            <span class="field">
							<textarea cols="80" rows="5" name="answer"   class="longinput" id="editor1" /></textarea>
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
