<?php
require_once '/var/www/template/model/model.php';
class SaveInfo{
	public $tid;
	public $uname;
	public $field_type;
	public $field_level;
	public $field_value;
	/**
	 * @return the $tid
	 */
	public function getTid() {
		return $this->tid;
	}

	/**
	 * @return the $uname
	 */
	public function getUname() {
		return $this->uname;
	}

	/**
	 * @return the $field_type
	 */
	public function getField_type() {
		return $this->field_type;
	}

	/**
	 * @return the $field_level
	 */
	public function getField_level() {
		return $this->field_level;
	}

	/**
	 * @return the $field_value
	 */
	public function getField_value() {
		return $this->field_value;
	}

	/**
	 * @param field_type $tid
	 */
	public function setTid($tid) {
		$this->tid = $tid;
	}

	/**
	 * @param field_type $uname
	 */
	public function setUname($uname) {
		$this->uname = $uname;
	}

	/**
	 * @param field_type $field_type
	 */
	public function setField_type($field_type) {
		$this->field_type = $field_type;
	}

	/**
	 * @param field_type $field_level
	 */
	public function setField_level($field_level) {
		$this->field_level = $field_level;
	}

	/**
	 * @param field_type $field_value
	 */
	public function setField_value($field_value) {
		$this->field_value = $field_value;
	}
	public function saveUser($tid,$uname,$field_type, $field_level,$field_value)
	{
		$obj=new MyModel();
		$result=$obj->saveUserInfo($tid,$uname,$field_type, $field_level,$field_value);
	}

	
	
}