<?php include 'setting.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>View Recruitment </title>

<?php include 'include/scriptStyle.php' ?>

</head>

<body class="withvernav">

<div class="bodywrapper">
   
<?php include 'include/topHeader.php' ?>      
<?php include 'include/leftMenu.php' ?>   
   
    
    
        
    <div class="centercontent tables">      
        
        <div id="contentwrapper" class="contentwrapper">
            
                
          <div class="contenttitle2">
                	<h3>View Recruitment </h3>
          </div><!--contenttitle-->
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable2">
                    <colgroup>
                        <col class="con0" style="width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
							<!--<th class="head0 nosort"><input type="checkbox" /></th>-->
                            <th class="head0">Ref No.</th>
							<th class="head0">Post</th> 
							<th class="head0">Location</th> 
							

							<th class="head0">Status</th>
							<th class="head0">Action</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                       <?php $query=$objComm->findAllRecord('recruitment');
							for($i=0;$i<count($query);$i++){
							
						

					?>
                        <tr class="gradeX">						
							<!--<td align="center"><span class="center"><input type="checkbox" /></span></td>-->
                            <td><?=$query[$i][2]?></td>
							<td><?=$query[$i][3]?></td>
							<td><?=$query[$i][4]?></td>
							
																			
							
							<td><? if($query[$i][5]==1){ ?><font color="green">Active</font><?php } else { ?><font color="red">Inactive</font><?php } ?></td>
							<td class="center"><a href="editrecruitment.php?id=<?=$query[$i][0]?>" class="edit">Edit</a>  &nbsp; &nbsp; &nbsp; <a href="" class="delete" onclick="return  deleteajax('recruitment','id',<?=$query[$i][0]?>);" >Delete</a></td>
                        </tr>
					<?php
					
					}
					?>	 
                       
                    </tbody>
                </table>
        
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>
