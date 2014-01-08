<?php

	/**
	*@author Noureddine ELAMRAOUI
	* email nourhero@gmail.com
	*/

	include 'SampleField.php';
	include 'Select.php';

	class FormBuilder {
		private $id;
		private $name;
		private $legend;
		private $submit;
		private $action;
		private $method;
		private $enctype = "multipart/form-data";
		private $fields;
		private $onClick;
		private $class;
				
		public function __construct($legend, $name) {
			$this->legend = $legend;
			$this->name = $name;
			$this->fields = array();
		}
	
		public function addField($label = "", $name, $type = "text", $size) {
			array_push($this->fields, new SampleField($name, $type, $size));
		}
	
		public function setAction($action) {
			$this->action = $action;
		}
	
		public function setMethod($method) {
			$this->method = $method;
		}
	
		public function setSubmitValue($submit = "submit") {
			$this->submit = $submit;
		}
		
		public function setOnClick($onClick) {
			$this->onClick = $onClick;
		}
		
		public function addSampleField($field) {
			array_push($this->fields, $field);
		}
		
		public function addSelect($label, $name, $options) {
			array_push($this->fields, new Select($label, $name, $options));
		}
		
		public function setClass($class) {
			$this->class = $class;
		}

		public function setId($id) {
			$this->id = $id;
		}
		
		public function render() {
			$html = "";
			foreach ($this->fields as $f) {
				$html .= $f."<br>";
			}
			echo "<fieldset>
					 <legend>" . $this->legend . "</legend>
					 <form 
					 	name=\"" . $this->name . "\"" .
					  "	class=\"" . $this->class . "\"" .
					  " id=\"" . $this->id . "\"" .
					  " action=\"" . $this->action . "\"" .
					  " method=\"" . $this->method . "\"" .
					  " enctype=\"" . $this->enctype . "\"" .
					  
					 ">" . $html .	
						"<input type=\"submit\" class=\"btn btn-primary\" 
								value=\"" . $this->submit . "\" 
								onclick=\"" . $this->onClick . "\" />" .					
					"</form>
					</fieldset>";
			
		}
		
		public function __toString() {
			return self::render();
		}
	
	}
