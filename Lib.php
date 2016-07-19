<?php 
/*
	class Test{
		function foo() {
			return "Bonjour le monde !";
		}
	}
*/
	class SimpleElement{
		
	}
	class ComplexElement{
		function __construct() {
			$this->liste = [];
		}
		function generate(){
			return "Hello world !";
		}
		function addElement($anElement){
			array_push($this->liste, $anElement);
			return $this;
		}
	}
?>