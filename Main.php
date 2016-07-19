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
	echo $a->generate();
	$a->addElement(1)->addElement(2);
	$b = $a->liste;
	foreach ($b as $i){
		echo $i;
	}
?>