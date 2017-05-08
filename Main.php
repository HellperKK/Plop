<?php 
//Appel de la librarie
	include "Lib.php";
//Creation de la classe de la page
	class MainGenerator extends ComplexElement{
		function __construct() {
			parent::__construct();
			$b = new Paragraph("Hello world !");
			$b->setId("Banane")->setClass("Kiwi");
			$c = new BlocQuote("Voici comment on fait rougir les tomates !");
			$this->addElement($b)->addElement($c);
		}
	}
//Creation de l'instance de page
	$a = new MainGenerator();
	echo $a->generate();
?>