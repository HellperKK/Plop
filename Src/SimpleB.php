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
		function balise(){
			return "a";
		}
		function __construct($test) {
			parent::__construct($test);
			$this->href = "";
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