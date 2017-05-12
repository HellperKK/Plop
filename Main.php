<?php 
//Appel de la librarie
	include "Src/CallFile.php";
//Creation de la classe de la page
	class MainGenerator extends ComplexElement{
		function __construct() {
			parent::__construct();
			$b = new Paragraph("Hello world !");
			$b->setId("Banane")->setClass("Kiwi");
			$c = new BlocQuote("Voici comment on fait rougir les tomates !");
			$d = new SimpleAnchor("Un lien !");
			$d->setHref("http://www.google.fr")->setId("Banane")->setClass("Kiwi");
			$e = new Image();
			$e->setSrc("https://www.w3schools.com/html/pic_mountain.jpg")->setAlt("Un test");
			$f = new Br();
			$this->addElement($b)->addElement($c)->addElement($d)->addElement($f)->addElement($e);
		}
	}
//Creation de l'instance de page
	$a = new MainGenerator();
	echo $a->generate();
?>