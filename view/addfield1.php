<script type="text/javascript">

function field_change(){
$('#field1').change(update_field);
}
function update_field(){
	var field=$('#field1').attr('value');
		$.get('http://localhost/template/view/updatefield1.php?field='+field, show_field);
}
function show_field(res){
$('#div6').append(res);
}
$(document).ready(field_change);
</script>
<b>Select Field Type</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select id="field1" name="field1"><option value="textbox">Text Box</option>
  <option value="textarea">Text Area</option>
  <option value="checkbox">CheckBox</option>
  <option value="combobox">Combo Box</option>
</select><br/><br/>

		
