<?php 

error_reporting(0);

include 'setting.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Add Quick Download </title>



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

                        <h3>Add Quick Download </h3>

                    </div><!--contenttitle-->

					

					

					<?php 

			if(isset($_POST['submit']))

			{

			extract($_POST);	

			$updatedate=date("d/m/Y");	

			

			$status=1;

			

			$pdf_link=$objComm->uploadfile2($_FILES["pdf_link"]["name"],$_FILES["pdf_link"]["tmp_name"]);

			

			$sql="insert into quick_download (name,status,pdf_link) values ('$name','$status','$pdf_link')";
			

			$sqlres1=mysql_query($sql);

			

			if($sqlres1)

			 {

			echo INSRT_DATA_MASS_SUSS;

			}

			}

					

			

			?>	

				

                    <form class="stdform" action="" method="post" enctype="multipart/form-data">

                    

                        <p>

                        	<label>Name  :</label>

                            <span class="field"> <input type="text" name="name"  class="longinput" /></span>

                        </p>

						

						

						<p>

                        	<label>Choose PDF : </label>

							<span class="field">&nbsp;</span>

                            <span class="field"><input type="file" name="pdf_link"   /></span>

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

