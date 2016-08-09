<?php 	
	class SimpleElement{
		function __construct($test) {
			$this->value = $test;
			$this->id = "";
			$this->classe = "";
		}
		function isComplex(){
			return false;
		}
		function setValue($aValue) {
			$this->value = $aValue;
			return $this;
		}
		function setId($anId) {
			$this->id = $anId;
			return $this;
		}
		function setClass($aClass) {
			$this->classe = $aClass;
			return $this;
		}
		function generate(){
			return "";
		}
		function bData(){
			$a = "";
			if ($this->id != ""){
				$a = $a . "id='" . $this->id ."' ";
			}
			if ($this->classe != ""){
				$a = $a . "class='" . $this->classe ."' ";
			}
			return $a;
		}
	}
	class ComplexElement{
		function __construct(){
			$this->value = [];
		}
		function isComplex(){
			return true;
		}
		function addElement($anElement){
			array_push($this->value, $anElement);
			return $this;
		}
		function generate(){
			$chaine = "";
			foreach ($this->value as $i){
				$chaine = $chaine . $i->generate() . "\n";
			}
			return $chaine;
		}
	}
	class Paragraph extends SimpleElement{
		function generate(){
			return "<p " . $this->bData() . ">$this->value</p>";
		}
	}
	class Anchor extends SimpleElement{//non finie
		function setAction($aFunction) {
			$this->action = $aFunction;
			return $this;
		}
		function generate(){
			return "<a href=test.html>$this->value</a>";
		}
	}
?>