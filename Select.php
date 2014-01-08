<?php
	
	/**
	 * @author Noureddine ELAMRAOUI
	 * @license GPL
	 */
	
	class Select {
		private $label;
		private $name;
		private $options;
		
		function __construct($label, $name, $options) {
			$this->label = $label;
			$this->name = $name;
			$this->options = $options;
		}
		
		public function setLabel($label) {
			$this->label = $label;
		}
		
		public function getLabel() {
			return $this->label;
		}
		
		public function setName($name) {			
			$this->name = $name;
		}
		
		public function getName() {			
			return $this->name;
		}
		
		public function setOptions($options) {
			$this->options = $options;
		}
		
		public function getOptions() {
			return $this->options;
		}
		
		
		public function render() {
			$select =  "<label>" . $this->getLabel() . "</label>
				   <select name=\"" .$this->getName(). "\">";
			
			foreach ($this->options as $k => $v) {
				$select .= "<option value=\"" .$k. "\">" .$v. "</option>" ;
			}
			
			$select .= "</select>";
			
			return $select;
		}
		
		
		public function __toString() {
			return self::render();
		}
		
	}
