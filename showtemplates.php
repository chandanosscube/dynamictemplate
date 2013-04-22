<script	src='javascript/jquery.tools.min.js'></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

<?php 
require_once 'model/model.php';
$obj=new MyModel();
$result=$obj->retriveinfo();
$result1=$obj->retriveUserInfo();
//print_r($result);die;
?>
<script type="text/javascript">
function validatetemplate() {
	var p=$('#template').valid()
		  rules: { 
		    textbox:
				{
				    required:true
				    number: true
				}
	            uname:"required"
				textarea: "required"
				textareavalue: "required"
				}
		messages: {
		     subject: "Please specify your name"

		   }
		//document.write(p);
			 if(p)
			{
				saveData1();
			} 

		}
function saveData1()
{	
	alert("hi");
	 $.ajax({ 
      type: "POST",
      url:'savedata.php',
     
      data: $('#template').serialize(),
       
       success: function(data){
    	$("#div1").html(data);
       }
   });
  }
function field_change1(){
	$('#field2').change(update_field1);
	}
	function update_field1(){
		var field=$('#field2').attr('value');
			$.get('showuserinfo.php?field='+field, show_field1);
	}
	function show_field1(res){
	$('#div1').html(res);
	}
function field_change(){
$('#field1').change(update_field);
}
function update_field(){
	var field=$('#field1').attr('value');
		$.get('showtemplate.php?field='+field, show_field1);
}
function show_field1(res){
$('#div1').html(res);
}
$(document).ready(field_change);
$(document).ready(field_change1);
</script>
<b>Select your templates</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select id="field1" name="field1">
<?php foreach($result as $data){
?>
<option value="<?php echo $data['templateid']?>"><?php echo $data['templatename']?></option>
<?php }?>  
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
select user:::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="field2" name="field2">
<?php foreach($result1 as $data){
?>
<option value="<?php echo $data['uname']?>"><?php echo $data['uname']?></option>
<?php }?>  
</select><br/><br/>
<div id="div1"></div>

