<?php
require_once '/var/www/template/model/model.php';
//$_REQUEST['tname'];
//print_r($_REQUEST);die;
$tid=$_REQUEST['tid'];
if(isset($_REQUEST))
{
	$textarea="";$textareavalue="";$textbox="";$textboxvalue="";$checkbox="";$checkboxvalue="";$combobox="";
	$comboboxvalue="";$combooption="";
	if(isset($_REQUEST['textarealabel']))
	{
		for($i=0;$i<count($_REQUEST['textarealabel']);$i++)
		{
		$textarea .= $_REQUEST['textarealabel'][$i] . ",";
		}
			
	}
	if(isset($_REQUEST['textareavalue']))
	{
		for($i=0;$i<count($_REQUEST['textareavalue']);$i++)
		{
		$textareavalue .= $_REQUEST['textareavalue'][$i] . ",";
		}
			
	}
	if(isset($_REQUEST['textboxlabel']))
	{
		for($i=0;$i<count($_REQUEST['textboxlabel']);$i++)
		{
		$textbox .= $_REQUEST['textboxlabel'][$i] . ",";
		}
			
	}
	if(isset($_REQUEST['textboxvalue']))
	{
		for($i=0;$i<count($_REQUEST['textboxvalue']);$i++)
		{
		$textboxvalue .= $_REQUEST['textboxvalue'][$i] . ",";
		}
			
	}
	if(isset($_REQUEST['checklabel']))
	{
		for($i=0;$i<count($_REQUEST['checklabel']);$i++)
		{
		$checkbox .= $_REQUEST['checklabel'][$i] . ",";
		}
			
	}
	if(isset($_REQUEST['checkvalue']))
	{
		for($i=0;$i<count($_REQUEST['checkvalue']);$i++)
		{
		$checkboxvalue .= $_REQUEST['checkvalue'][$i] . ",";
		}
			
	}
	if(isset($_REQUEST['combolabel']))
	{
		for($i=0;$i<count($_REQUEST['combolabel']);$i++)
		{
		$combobox .= $_REQUEST['combolabel'][$i] . ",";
		}
			
	}
	if(isset($_REQUEST['combovalue']))
	{
		for($i=0;$i<count($_REQUEST['combovalue']);$i++)
		{
		$comboboxvalue .= $_REQUEST['combovalue'][$i] . ",";
		}
			
	}
	if(isset($_REQUEST['combofield']))
	{
		for($i=0;$i<count($_REQUEST['combofield']);$i++)
		{
		$combooption .= $_REQUEST['combofield'][$i] . ",";
		}
			
	}
	
	
}	

$obj=new MyModel();

$obj->updateInfo($tid,$textarea,$textareavalue,$textbox,$textboxvalue,$checkbox,$checkboxvalue,$combobox,$comboboxvalue,$combooption);
echo "sucess fully updated the data";
?>