<script	src='javascript/jquery.tools.min.js'></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#div2').hide();
	$('#btnSubmit').click(function() {
		var p=$('#template').valid()
		    rules: { 
		    textbox:
				{
				    required:true
				    number: true
				}
				tname: "required"
				textboxvalue: "required"
				textarea: "required"
				textareavalue: "required"
				checkbox: "required"
				checkboxvalue: "required"
				combobox: "required"
				comboboxvalue:"required"
				}
		messages: {
		     subject: "Please specify your name"

		   }
		//document.write(p);
			 if(p)
			{
				saveData();
			} 

		});//form validate



});
function showHint(str) 
{
	if (str.length==0) { 
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest) {  		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {				// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","ajax1.php?q="+str);
	xmlhttp.send();
}

function saveData()
{	
      $.ajax({ 
      type: "POST",
      url: 'controller/templatesave.php',
     
      data: $('#template').serialize(),
       
       success: function(data){
    	$("#div1").html(data);
       }
   });
  }
  function editinfo(username)
  {
	 // alert(username);
	  $.ajax({ 
	      type: "POST",
	      url: 'model/edituser.php',
	     
	      data: 'field='+username,
	       
	       success: function(data){
	    	   $("#show").html("");
	    	 $("#div3").append(data);
	       }
	   });
  }
  function addTempalte()
  {
	  $("#show").hide("");
	  $('#div2').show();
  }
function addmore()
{
	$("#div1").append('<p>Option<input type="text" name="combofield[]"></P>');
}
function addmore1()
{
	$("#div1").append('<p>Option<input type="text" name="checkvalue[]"></P>');
}
function addmorecheckbox()
{
	$("#div6").append('<p>Option<input type="text" name="combofield[]"></P>');
}
function addmorecombobox()
{
	$("#div6").append('<p>Option<input type="text" name="checkvalue[]"></P>');
}

function addField()
{	 
// 	alert("hi");
	$('#div1').load('addfield.php');

}
function addField1()
{	 
 	//alert("hi");
	$('#div6').load('view/addfield1.php');

}
</script>
<div id="show" style="border-color: blue;border: 1px solid black;margin-right: 10em;margin-left: 10em;">
<p><b>search templates</b></p>
		<form> 
			Tempelate search:: <input type="text" onkeyup="showHint(this.value)">
		</form>
		<p>Suggestions: <span id="txtHint"></span></p></div>
<div id="div2" style="border-color: blue;border: 1px solid black;margin-right: 20em;margin-left: 10em;">
<form  id="template" action="#" method="post" name="template">
<p>Template Name:<input id='tname' class='required' type="text" name="tname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/template/showtemplates.php">show the tables</a></p>
<a href="#" onclick="addField()">ADD FIELD</a>
<div id="div1"></div>
<br/>
<br/>
<input id="btnSubmit" type="button" value="SAVE" />
</form>
</div>

<div id="div3"></div>