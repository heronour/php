<?php
	

	/**
	 * @author Noureddine ELAMRAOUI
	 * @license GPL
	 */

	class SampleField {
		private $id;
		private $class;
		private $size;
		private $name;
		private $type;
		private $value;
		private $onClick;
		private $label;
		
		public function __construct($label, $name, $type="text", $size, 
									  $id = "", $class = "", $value = "",
									  $onClick = "") {
			$this->id = $id;
			$this->class = $class;
			$this->label = $label;
			$this->name = $name;
			$this->size = $size;
			$this->type = $type;
			$this->value = $value;
			
		}
		
		public function setlabel($label) {
			
			$this->label = $label;
			
		}
		
		public function getlabel() {
			return $this->label;
		}
		
		public function setValue($text) {
			 $this->value = $text;
		}

		public function getValue() {
			 return $this->value;
		}
		
		public function setOnClick($onClick) {
			$this->onClick = $onClick;
		}
		
		function setId($id) {
			$this->id = $id;		
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function setName($name) {
			$this->name = $name;
		}
		
		public function setSize($size) {
			$this->size = $size;
		}
		
		public function __toString() {
			return self::render();
		}
		
		public function render() {
			return "<label>" .self::getlabel(). "</label><input name=\"" .$this->name. 
						  "\" type=\"" .$this->type. 
				   		  "\" size=\"" .$this->size. 
				   		  "\" id=\"" .$this->id. 
				   		  "\" class=\"" .$this->class.
						  "\" value=\"" .$this->value. "\" />";
		}
		
	}
