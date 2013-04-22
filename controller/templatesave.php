<?php
require_once '/var/www/template/model/model.php';
//print_r($_REQUEST);die;
if(isset($_REQUEST))
{
	$datatype="";
	$textarea="";$textareavalue="";$textbox="";$textboxvalue="";$checkbox="";$checkboxvalue="";$combobox="";
	$comboboxvalue="";$combooption="";$tname=$_REQUEST['tname'];
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
	if(isset($_REQUEST['datatype']))
	{
		for($i=0;$i<count($_REQUEST['datatype']);$i++)
		{
		$datatype .= $_REQUEST['datatype'][$i] . ",";
		}
			
	}
	
	
	
	
}	

$obj=new MyModel();
$obj->insertInfo($tname,$textarea,$textareavalue,$textbox,$textboxvalue,$checkbox,$checkboxvalue,$combobox,$comboboxvalue,$combooption,$datatype);

?>