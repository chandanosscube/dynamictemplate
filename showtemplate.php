<?php 
require_once '/var/www/template/model/model.php';
//require_once 'model/model.php';
if(isset($_REQUEST))
	{
		//echo $_REQUEST['field'];die;
	$str1="";
	$str1 .="<div style='color:red; border:1px solid silver;width:50%;align:center;margin-left:250px;'><form id='template' method='POST'>";
	$str1 .="<input type='hidden' name='tid' value=".$_REQUEST['field'].">";
	$str1 .="user name:: &nbsp;&nbsp;&nbsp;&nbsp;<input id='uname' class='required' type='text' name='name'>";
	$obj=new MyModel();
	$result=$obj->retrivetemplate($_REQUEST['field']);

if(isset($result[0]['textbox']))
{
	$val=explode(',',$result[0]['textbox']);
	$val1=explode(',',$result[0]['textboxvalue']);
	//echo count($val);die;
	for($i=0;$i<count($val)-1;$i++)
	{
	$str1 .="<p>" .$val[$i]."&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' id='textbox' class='required' value=".$val1[$i]." name='textbox[".$val[$i]."]'></p>";
	}
}
if(isset($result[0]['textarea']))
{
	$val=explode(',',$result[0]['textarea']);
	for($i=0;$i<count($val)-1;$i++)
	{
	$str1 .="<p>" .$val[$i]."&nbsp;&nbsp;&nbsp;&nbsp;<textarea id='textarea' class='required' rows='4' cols='50' name='textarea[".$val[$i]."]'>".$result[0]['textareavalue']."</textarea></p>";
	}
}
		

if(isset($result[0]['checkbox']))
{
	$val=explode(',',$result[0]['checkbox']);
	$val1=explode(',',$result[0]['checkboxvalue']);
	$str1 .="<p>$val[0]</p>";
	for($i=0;$i<count($val1)-1;$i++)
	{
		$str1 .="&nbsp;&nbsp;&nbsp;&nbsp;".$val1[$i]."&#09;<input type='checkbox' value=".$val1[$i]." name='checkbox[".$val1[$i]."]'>";
	}
}
if(isset($result[0]['combobox']))
{
	$val=explode(',',$result[0]['combobox']);
	$val1=explode(',',$result[0]['comboboxvalue']);
$str1 .="<p>" .$val[0]."&nbsp;&nbsp;&nbsp;&nbsp;<select name='select'>";
$val=explode(',',$result[0]['combooption']);
for($i=0;$i<count($val)-1;$i++)
{
	$str1 .="<option value=".$val[$i].">".$val[$i] ."</option>";
}
$str1 .="</select>";
}
$str1 .="<br/><input id='btn' onclick='validatetemplate()' type='button' value='save'><input type='reset' value='reset'></form></div>";
echo $str1;
}
?>
