<?php 
//Appel de la librarie
	include "Lib.php";
//Creation dela lasse de la page
	class MainGenerator extends ComplexElement{
		function __construct() {
			parent::__construct();
		}
	}
//Creation de l'instance de page
	$a = new MainGenerator();
	$b = new Paragraph();
	$b->setValue("Hello world !")->setId("Banane");
	$a->addElement($b);
	echo $a->generate();
?>