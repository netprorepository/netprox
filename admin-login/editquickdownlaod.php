<?php include 'setting.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Edit Quick Download </title>



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

                        <h3>Edit Quick Download </h3>

                    </div><!--contenttitle-->

					

			<?php 

			if(isset($_POST['submit']))

			{

			extract($_POST);

			

			if($_FILES['pdf_link']['name']==''){

			$pdf=$pdfidden;

			}else{

			$pdf=$objComm->uploadfile2($_FILES["pdf_link"]["name"],$_FILES["pdf_link"]["tmp_name"]);

			}

			

			$update_arr=array(			

			'name'=>$name,
			'status'=>$status,
			'pdf_link'=>$pdf,


			);

			$where=' where id='.$_GET['id'].'';

			$objComm->db_update_record('quick_download',$update_arr,$where);

		

			

			}

			?>	

			

					

					

                    <form class="stdform" action="" method="post" enctype="multipart/form-data">

				<?php

				$result=$objComm->singleRowFetch('quick_download','id',$_GET['id']);

				if($result[0][3]==1)

				$opt='<option value="1">Active</option><option value="0">Inactive</option>';

				else

				$opt='<option value="0">Inactive</option><option value="1">Active</option>';

				?>                	


                        	<label>Name :</label>

                            <span class="field"> <input type="text" name="name"  class="longinput" value="<?=$result[0][1]?>" /></span>

                        </p>


                        	<label>Download PDF : </label>

                            <span class="field">

							<a href="pdffile/<?=$result[0][2]?>" download><img src="images/download_button.png" width="100" />
</a>



						</span>

                        </p>

						

						<p>

                        	<label>Choose PDF : </label>

							<span class="field">&nbsp;</span>

                            <span class="field"><input type="file" name="pdf_link"   /></span>

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

							<input type="hidden" name="pdfidden" value="<?=$result[0][2]?>" />	



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

