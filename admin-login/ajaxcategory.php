<?php 
include'setting.php';
$where='id="'.$_GET['staticpageid'].'"';
$pageid=$objComm->findRecord('staticpage',$where);	

echo $where='pageid="'.$pageid[0][0].'"';
$categorylist=$objComm->findRecord('category',$where);
for($i=0;$i<count($categorylist);$i++)
{
?>
<option value="<?=$categorylist[$i][0]?>"><?=$categorylist[$i][2]?></option>
<?php }  ?>