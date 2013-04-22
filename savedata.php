<?php
require_once '/var/www/template/model/saveinfo.php';
//print_r($_REQUEST);die;
$obj1=new SaveInfo();
$field_level="";
$field_value="";
$field_type="";

$t=(array_keys($_REQUEST));
$tid=$_REQUEST[$t[0]];
$uname=$_REQUEST[$t[1]].$tid;
//echo $uname;die;
for($j=2;$j<count($t);$j++)
{
	$obj1->saveUser($tid,$uname,$field_type, $field_level,$field_value);
	$field_level="";
	$field_value="";
	$field_type="";
	
	$field_type=$t[$j];
	//echo $t[$j].":::";

 

	if(is_array($_REQUEST[$t[$j]]))
	{
		
	for($i=0;$i<count($_REQUEST[$t[$j]]);$i++)
	{
		foreach($_REQUEST[$t[$j]] as $key1=>$data1)
		{
		 $field_level=$key1;
		 $field_value=$data1;
			//echo $key1."         ";
			//echo $data1;
		}
		
	}
	}else{
		
		$field_value=$_REQUEST[$t[$j]];
		//echo $id;
	}
}
$obj1->saveUser($tid,$uname,$field_type, $field_level,$field_value);

echo "you inserted the info ";
//header('Location: http://localhost/template/showtemplates.php');

?>