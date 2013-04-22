<?php
require_once 'model/model.php';
if(isset($_REQUEST))
{
	//echo $_REQUEST['field'];die;
	$str1="";
	$str1 .="<div style='color:red; border:1px solid silver;width:50%;align:center;margin-left:250px;'><form action='savedata.php' method='post'>";
	$obj=new MyModel();
	$result=$obj->retriveUser($_REQUEST['field']);
	//print_r($result);
	$str1 .="<center>Hello<input type=".$result[0]['field_type']. "readonly='readonly' value=".$result[0]['uname']."></center><br/><br/><br/>";
	for($i=1;$i<count($result);$i++)
	{
		if($result[$i]['field_type']=='textarea')
		{
			//echo $result[$i]['field_value'];die;
			$str1 .= $result[$i]['field_level']."<textarea rows='4' cols='50' name='textarea'>".$result[$i]['field_value']."</textarea><br/>";
		}else {
			$str1 .=$result[$i]['field_level']."<input type='".$result[$i]['field_type']. "'readonly='readonly' value=".$result[$i]['field_value']."><br/>";
		}
		}
	echo $str1;
}

?>