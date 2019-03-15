<?php 
class dbConnect
{
 private $mysql_host;
 private $mysql_database;
 private $mysql_user;
 private $mysql_password;
//private $mysql_connec;


function __construct()
{
	$this->mysql_host=DB_HOST;
	$this->mysql_database=DB_NAME;
	$this->mysql_password=DB_PASSWORD;
	$this->mysql_user=DB_USERNAME;	
}

function connect_db()
{
	$mysql_connec=mysql_connect($this->mysql_host,$this->mysql_user,$this->mysql_password) or die(mysql_error());
	$db_found = mysql_select_db($this->mysql_database,$mysql_connec) or die(mysql_error());

/*if (mysql_connect_errno())
		   die(mysql_connect_error()); */
		   
//echo $test=$this->mysql_host.$this->mysql_database.$this->mysql_password=DB_PASSWORD.$this->mysql_user=DB_USERNAME;
}

function query($qq)
{
	$result=mysql_query($qq);
	return $result;
}
function totalRow($table)
{
	$query=self::query("SELECT * FROM ".$table."") or die(mysql_error()); 
	$totalRow=mysql_num_rows($query);
	return $totalRow;
}

public function singleRow($table,$colom,$value)
{
$query=self::query('SELECT * FROM '.$table.' where '.$colom.'="'.$value.'"') or die(mysql_error()); 
$noofrow=mysql_num_rows($query);
return $noofrow;
}

}
?>