<?php
ini_set("display_errors", "1");
require_once '/var/www/template/model/model.php';
$obj=new MyModel();
$result=$obj->retriveInfo();

$count=1;
$a[]=array();
$tid[]=array();
//print_r($result);die;
foreach($result as $data)
{
	$a[]=$data['templatename'];
	$tid[]=$data['templateid'];
}
//echo print_r($t);die;
//die;


//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0) {
	$hint="";
	for($i=0; $i<count($a); $i++) {
		
		$t=$a[$i];
		if (strtolower($q)==strtolower(substr("$a[$i]",0,strlen($q)))) {
			if ($hint=="") {
				$hint .="<table style='width:50%;margin-left: 10em;border: 1px solid black'><tr><td>".$count++."</td><td>".$a[$i]."</td><td><a href=javascript:editinfo('".$tid[$i]."');>edit/delete</a></td></tr>";
			} else {
				$hint=$hint."<tr><td>".$count++."</td><td>".$a[$i]."</td><td><a href=javascript:editinfo('".$tid[$i]."');>edit/delete</a></td></tr>";
			}
		}
	}
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "") {
	$response="no suggestion";
} else {
	$response=$hint."</table>";
}


echo $response."<br/><br/><input type='button' value='Add template' onclick='addTempalte()'>";
?>

