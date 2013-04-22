<?php
require_once '/var/www/template/controller/singleton.php';
abstract class model {

    protected $db = "";

    function __construct() {
        $this->db = DBConnection::Connect();
    }

}

class MyModel extends model {


    public function retriveInfo()
    {
    	$this->db->Fields (array("templatename","templateid"));
    	$this->db->From ( "templateengine" );
    	
    	$this->db->Select ();
    	//echo $this->db->lastQuery();die;
    	$result = $this->db->resultArray ();
    	return $result;
    
    }
    public function insertInfo($tname,$textarea,$textareavalue,$textbox,$textboxvalue,$checkbox,$checkboxvalue,$combobox,$comboboxvalue,$combooption,$datatype)
    {
    	
    	$this->db->Fields(array("templatename"=>$tname,"textarea"=>$textarea,"textareavalue"=>$textareavalue,"textbox"=>$textbox,"textboxvalue"=>$textboxvalue,"checkbox"=>$checkbox,"checkboxvalue"=>$checkboxvalue,"combobox"=>$combobox,"comboboxvalue"=>$comboboxvalue,"combooption"=>$combooption,"datatype"=>$datatype));
    	$this->db->From("templateengine");
    	
    	$this->db->Insert();
    	//echo "hello";die;
    	echo $this->db->lastQuery();die;
    }
    public function updateInfo($tid,$textarea,$textareavalue,$textbox,$textboxvalue,$checkbox,$checkboxvalue,$combobox,$comboboxvalue,$combooption)
    {
    	$this->db->Fields(array("textarea"=>$textarea,"textareavalue"=>$textareavalue,"textbox"=>$textbox,"textboxvalue"=>$textboxvalue,"checkbox"=>$checkbox,"checkboxvalue"=>$checkboxvalue,"combobox"=>$combobox,"comboboxvalue"=>$comboboxvalue,"combooption"=>$combooption));
    	$this->db->From("templateengine");
    	$this->db->where (array("templateid"=>$tid));
    	$this->db->update();
    	//echo $this->db->lastQuery();die;
    	
    }
    public function retrivetemplate($templateid)
    {
    	$this->db->Fields ();
    	$this->db->From ( "templateengine" );
    	$this->db->where (array("templateid"=>$templateid));
    	
    	$this->db->Select ();
    	//echo $this->db->lastQuery();die;
    	$result = $this->db->resultArray ();
    	return $result;
    	
    }
    public function saveUserInfo($tid,$uname,$field_type, $field_level,$field_value)
    {
    	$this->db->Fields(array("tid"=>$tid,"uname"=>$uname,"field_type"=>$field_type,"field_level"=>$field_level,"field_value"=>$field_value));
    		$this->db->From("userinfo");
    	 
    	$this->db->Insert();
    	//echo "hello";die;
    	//echo $this->db->lastQuery();die;
    }
    public function retriveUser($tid)
    {
    	$this->db->Fields ();
    	$this->db->From ( "userinfo" );
    	$this->db->where (array("uname"=>$tid));
    	 
    	$this->db->Select ();
    	//echo $this->db->lastQuery();die;
    	$result = $this->db->resultArray ();
    	return $result;
    	 
    }
    public function retriveUserInfo()
    {
    	$this->db->Fields (array("tid","uname"));
    	$this->db->From ( "userinfo" );
    	$this->db->GroupBy ( "uname" );
    	 
    	$this->db->Select ();
    	//echo $this->db->lastQuery();die;
    	$result = $this->db->resultArray ();
    	return $result;
    
    }
    


}
