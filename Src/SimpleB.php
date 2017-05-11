<?php 	
	class Paragraph extends SimpleElement{
		function balise(){
			return "p";
		}
	}
	class BlocQuote extends SimpleElement{
		function balise(){
			return "blockquote";
		}
	}
	class SimpleAnchor extends SimpleElement{
		function __construct($test) {
			parent::__construct($test);
			$this->href = "";
		}
		function balise(){
			return "a";
		}
		function setHref($aValue) {
			$this->href = $aValue;
			return $this;
		}
		function bData(){
			$a = parent::bData();
			if ($this->href != ""){
				$a = "href='" . $this->href . "' " . $a;
			}
			return $a;
		}
	}
	class Image extends MonoElement{
		function __construct($test) {
			parent::__construct($test);
			$this->src = "";
			$this->alt = "";
		}
		function balise(){
			return "img";
		}
		function setSrc($aValue) {
			$this->src = $aValue;
			return $this;
		}
		function setAlt($aValue) {
			$this->alt = $aValue;
			return $this;
		}
		function bData(){
			$a = parent::bData();
			if ($this->src != ""){
				$a = $a . "src='" . $this->src . "' ";
			}
			if ($this->alt != ""){
				$a = $a .  "alt='" . $this->alt . "' ";
			}
			return $a;
		}
	}
	/* a voir plus tard
	class Anchor extends SimpleElement{//non finie
		function setAction($aFunction) {
			$this->action = $aFunction;
			return $this;
		}
		function generate(){
			return "<a href=test.html>$this->value</a>";
		}
	}
	*/
?>