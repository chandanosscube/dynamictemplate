<?php
if($_REQUEST ['field']=="textarea")
{
	$strField="<div style='color:red; border:1px solid silver;width:80%;margin-left:50px;'>";
	$strField .="<p>TextArea Lable::<input id='textarea' class='required' type='text' name='textarealabel[]'></p>";
	$strField .="<p>Default Value::<input id='textareavalue' class='required' type='text' name='textareavalue[]'></p>";
	$strField .="<p>Data Type::<select name='datatype[]'><option>Integer</option><option>char</option><option>date</option></select></p>";
	$strField .="<p>validation::REQUIRED:<input id='checkbox1' class='required' value='required' type='radio' name='chekbox1[]'/>
			NOT REQUIRED:<input id='checkbox1' class='required' value='notrequired' type='radio' name='chekbox1[]'/></p>";
	$strField .="</div>";
}elseif ($_REQUEST ['field']=="textbox")
{
	$strField="<div style='color:red; border:1px solid silver;width:80%;margin-left:50px;'>";
	$strField .="<p>TextBOxLable::<input id='textbox' class='required' name='textboxlabel[]'></p>";
	$strField .="<p>Default Value::<input id='textboxvalue' class='required' type='text' name='textboxvalue[]'></p>";
	$strField .="<p>Data Type::<select name='datatype[]'><option>Integer</option><option>char</option><option>date</option></select></p>";
	$strField .="<p>validation::REQUIRED:<input id='checkbox1' class='required' value='required' type='radio' name='chekbox1[]'/>
			NOT REQUIRED:<input id='checkbox1' class='required'  value='notrequired' type='radio' name='chekbox1[]'/></p>";
	$strField .="</div>";
}elseif($_REQUEST ['field']=="checkbox")
{
	$strField="<div style='color:red; border:1px solid silver;width:80%;margin-left:50px;'>";
	$strField .="<p>CheckBox Lable::<input id='checkbox' class='required' type='text' name='checklabel[]'></p>";
	$strField .="<p>Default Value::<input id='checkboxvalue' class='required' type='text' name='checkvalue[]'></p>";
	$strField .="<p>Data Type::<select name='datatype[]'><option>Integer</option><option>char</option><option>date</option></select></p>";
	$strField .="<p>validation::REQUIRED:<input id='checkbox1' class='required' value='required' type='radio' name='chekbox1[]'/>
			NOT REQUIRED:<input id='checkbox1' class='required' value='notrequired' type='radio' name='chekbox1[]'/></p>";
	$strField .="<br><input type='button' value='Add Option' onclick='addmore1()'></p>";
	$strField .="</div>";
}else {
	$strField="<div style='color:red; border:1px solid silver;width:80%;margin-left:50px;'>";
	$strField .="<p>ComboBox Lable::<input id='combobox' class='required' type='text' name='combolabel[]'></p>";
	$strField .="<p>Default Value::<input id='comboboxvalue' class='required' type='text' name='combovalue[]'></p>";
	$strField .="<p>Data Type::<select name='datatype[]'><option>Integer</option><option>char</option><option>date</option></select></p>";
	$strField .="<p>validation::REQUIRED:<input id='checkbox1' class='required' value='reuqired' type='radio' name='chekbox1[]'/>
			NOT REQUIRED:<input id='checkbox1' class='required' value='notrequired' type='radio' name='chekbox1[]'/></p>";
	$strField .="<br><input type='button' value='Add Option' onclick='addmore()'></p>";
	$strField .="</div>";
}
echo $strField;
?>