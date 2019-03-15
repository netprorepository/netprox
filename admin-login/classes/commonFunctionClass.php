<?php
class commonFunctionClass extends dbConnect
{

function __construct()
{
parent::__construct();
parent::connect_db();

}

public function insert($fields, $data, $table) 
{

$queryFields = implode(",", $fields);
$queryValues = implode('","', $data);

parent::query('INSERT INTO '.$table.'('.$queryFields.') VALUES ("'.$queryValues.'")') or die(mysql_error());
$_SESSION['insertedId']=mysql_insert_id();
echo INSRT_DATA_MASS_SUSS;


}

public function insert1($fields, $data, $table) 
{

$queryFields = implode(",", $fields);
$queryValues = implode('","', $data);
$queryValues = str_replace('""', '', $data);

parent::query('INSERT INTO '.$table.'('.$queryFields.') VALUES ("'.$queryValues.'")') or die(mysql_error());

}


public function insertWithLastid($fields, $data, $table) 
{

$queryFields = implode(",", $fields);
$queryValues = implode('","', $data);

parent::query('INSERT INTO '.$table.'('.$queryFields.') VALUES ("'.$queryValues.'")') or die(mysql_error());
$mysqlInsertId=mysql_insert_id();
return $mysqlInsertId;
}



public function delete($table,$idcolom,$delete)
{

parent::query('delete from '.$table.' where '.$idcolom.'="'.$delete.'"') or die(mysql_error()) ;
//header('Location:?page='.$pageId.'');
echo DELETE_DATA_MASS_SUSS;

}
public function deleteImage($table,$idcolom,$delete,$image)
{
unlink('document/'.$image);
parent::query('delete from '.$table.' where '.$idcolom.'="'.$delete.'"') or die(mysql_error()) ;
//header('Location:?page='.$pageId.'');
echo DELETE_DATA_MASS_SUSS;

}

public function delete1($table,$idcolom,$delete)
{

parent::query('delete from '.$table.' where '.$idcolom.'="'.$delete.'"') or die(mysql_error()) ;


}

/*public function deleteImage($image)
{
unlink(image/$image);
} */

public function fetch($table,$startpoint,$perpage)
{
 $query=parent::query("SELECT * FROM ".$table." ORDER BY id DESC LIMIT $startpoint,$perpage ") or die(mysql_error()); 
    $result = array();
    while ($record = mysql_fetch_array($query)) 
	{
         $result[] = $record;
    }
    return $result; 
	
	/* 
	for ($x = 0; $x < count($result); $x++) 
	{
   echo $result[$x][0] . "<BR>";  // outputs the first column from every row
	}
	
	*/
}


public function fetchUnder($table,$startpoint,$perpage,$where)
{
 $query=parent::query("SELECT * FROM ".$table." where ".$where." ORDER BY id DESC LIMIT $startpoint,$perpage ") or die(mysql_error()); 
    $result = array();
    while ($record = mysql_fetch_array($query)) 
	{
         $result[] = $record;
    }
    return $result; 
	
	/* 
	for ($x = 0; $x < count($result); $x++) 
	{
   echo $result[$x][0] . "<BR>";  // outputs the first column from every row
	}
	
	*/
}


public function singleRowFetch($table,$idColomNmae,$id)
{

 $query=parent::query("SELECT * FROM ".$table." where ".$idColomNmae."='".$id."' ") or die(mysql_error()); 
    $result = array();
    while ($record = mysql_fetch_array($query)) 
	{
         $result[] = $record;
    }
    return $result; 
	
}


public function findRecord($table,$where)
{
//return $test= "SELECT * FROM $table where ".$where."";

$query=parent::query("SELECT * FROM $table where ".$where." ") or die(mysql_error()); 
    $result = array();
    while ($record = mysql_fetch_array($query)) 
	{
         $result[] = $record;
    } 
    return $result; 
	
	
}

public function findAllRecord($table)
{
//return $test= "SELECT * FROM $table where ".$where."";

$query=parent::query("SELECT * FROM $table ") or die(mysql_error()); 
    $result = array();
    while ($record = mysql_fetch_array($query)) 
	{
         $result[] = $record;
    } 
    return $result; 
	
	
}



public function lastId($table,$uiqId)
{
$query=parent::query("SELECT MAX(".$uiqId.") FROM ".$table) or die(mysql_error()); 
$result = array();
$record = mysql_fetch_array($query);
$result[]=$record;
return $result[0][0];
}

public function authenticate($username,$password)
{
	if(isset($username)& isset($password))
	{
	return true;
	}
	else
	{
		// You Can use php headers() instead of a javascript redirect if you want
	print "<script type='text/javascript'>window.location='login.php';</script>";
	}

}

public function option($table)
{
$query=parent::query("SELECT * FROM ".$table." where status=1 ORDER BY id DESC ") or die(mysql_error()); 
    $result = array();
    while ($record = mysql_fetch_array($query)) 
	{
         $result[] = $record;
    }
    return $result; 
	

}

public function optionPackage($table)
{
$query=parent::query("SELECT * FROM ".$table." where status=1 ORDER BY DefaultPackage DESC ") or die(mysql_error()); 
    $result = array();
    while ($record = mysql_fetch_array($query)) 
	{
         $result[] = $record;
    }
    return $result; 
	

}


public function showRole($table)
{
$query=parent::query("SELECT * FROM ".$table." where status=1 ORDER BY id ASC ") or die(mysql_error()); 
    $result = array();
    while ($record = mysql_fetch_array($query)) 
	{
         $result[] = $record;
    }
    return $result; 
	

}

public function uploadfile($file,$tem)
{
$file=$file;
	$tmp=$tem;
	$test=strpos($file,'.');
	$ext=substr($file,$test);
	$file=substr(self::uuid(), 1, 7);
	$attach=$file.$ext;         
	$destN="projectimg/".$attach;
	move_uploaded_file($tmp,$destN);
	return $attach;
}

public function uploadfile1($file,$tem)
{
$file=$file;
	$tmp=$tem;
	$test=strpos($file,'.');
	$ext=substr($file,$test);
	$file=substr(self::uuid(), 1, 7);
	$attach=$file.$ext;         
	$destN="video/".$attach;
	move_uploaded_file($tmp,$destN);
	return $attach;
}

public function uploadfile2($file,$tem)
{
$file=$file;
	$tmp=$tem;
	$test=strpos($file,'.');
	$ext=substr($file,$test);
	$file=substr(self::uuid(), 1, 7);
	$attach=$file.$ext;         
	$destN="pdffile/".$attach;
	move_uploaded_file($tmp,$destN);
	return $attach;
}


public function uuid($prefix = '')

  {

    $chars = md5(uniqid(mt_rand(), true));

    $uuid  = substr($chars,0,8) . '-';

    $uuid .= substr($chars,8,4) . '-';

    $uuid .= substr($chars,12,4) . '-';

    $uuid .= substr($chars,16,4) . '-';

    $uuid .= substr($chars,20,12);

    return $prefix .$uuid;

  }
  
  	public function strToUrl($str)
	{
		$str = trim($str);
		//$str = str_replace('(',"",$str);
		//$str = str_replace(')',"",$str);
		//$str = str_replace(",","",$str);
		//$str = str_replace("'","",$str);
		//$str = str_replace("\"","",$str);
		//$str = str_replace("/","",$str);
		//$str = str_replace('&',"and",$str);
		$str = str_replace(' ',"-",$str);
		//$str = str_replace('---',"-",$str);
		//$str = str_replace('--',"-",$str);
		//$str = str_replace(':',"-",$str);
		//$str = str_replace('$',"-",$str);
		//$str = str_replace('---',"-",$str);
		$str = strtolower($str);
		return $str;
	}
	
	public function urlTostr($str)
	{
		$str = trim($str);
		$str = str_replace('-'," ",$str);
		return $str;
	}
	
public function mailing($sent_to,$sent_from,$subject,$content)
{

date_default_timezone_set('Asia/Calcutta'); 
header( "Expires: Mon, 20 Dec 1998 01:00:00 GMT" );
header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
header( "Cache-Control: no-cache, must-revalidate" );
header( "Cache-Control: post-check=0, pre-check=0", false );
header( "Pragma: no-cache" );
mail($sent_to,
                stripcslashes($subject),
                stripcslashes($content),
                "From: ". $sent_from ."\n".
                "Reply-To: ". $from ."\n".
                "MIME-Version: 1.0\n".
                "X-Sender: ". $sent_from ."\n".
                "X-Mailer: RequestForm\n".
                "X-Priority: 3 (Normal)\n".
                "content-type: text/html; charset=iso-8859-15\n");



}	
	

  
 public function db_update_record($tbl,$update_arr,$where)
  {
 $qry = "UPDATE $tbl SET ";
        $qry .= self::array2updateStr($update_arr);
        $qry .= $where;
		//echo   $qry;
		//exit;
	self::query($qry) or die(mysql_error());
	echo UPDATE_DATA_MASS_SUSS;
}


 public function db_update_recordm($tbl,$update_arr,$where)
  {
 $qry = "UPDATE $tbl SET ";
        $qry .= self::array2updateStr($update_arr);
        $qry .= $where;
		//echo   $qry;
		//exit;
	self::query($qry) or die(mysql_error());
	//echo UPDATE_DATA_MASS_SUSS;
}
  
 public function array2updateStr($arr){
        $str = '';
        $cnt = 0;
            foreach($arr as $key => $val){
                $val = trim($val);
                $str .= ($cnt < sizeof($arr)-1) ? "$key='".$val."', " : "$key='".$val."'";
                $cnt++;
            }
        return $str;
    }
	


public function editor($editor1)
{
?>
			
			 <script type="text/javascript">
				//<![CDATA[
					//CKEDITOR.replace( 'long_desc');
					var <?=$editor1?> = CKEDITOR.replace( '<?=$editor1?>' );
					CKFinder.setupCKEditor( <?=$editor1?>, 'ckfinder/' ) ;
				//]]>
			</script>
<?
}

public function editorjs()
{
?>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
			<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
			<script src="ckeditor/_samples/sample.js" type="text/javascript"></script>
			<link href="ckeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
			<?
}

}
?>