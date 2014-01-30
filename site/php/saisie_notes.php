<?php
	
	//d�fini l'appelle de la page
	if(isset($_SERVER["HTTP_REFERER"])) { 				//si vient d'une autre page 
		$origin=explode('/',$_SERVER["HTTP_REFERER"]);	
		switch ($origin[4]) {							//test par rapport au nom de la page d'origine
			case 'creation_devoir.php':
				//renvoyer les posts dans la BDD
				$devoir['date']=$_POST['date'];
				$devoir['matiere']=$_POST['matiere'];
				$devoir['classe']=$_POST['classe'];
				$devoir['devoir']=$_POST['devoir'];
				break;
			case 'saisie_notes.php':
				//renvoyer les notes dans la BDD
				//ouvre le menu
				die ();
				break;
		}
	}
	
	/*
		Fonction qui prend un tableau en entr�e et renvoie une ligne
		de tableau html avec une cellule qui est l'�l�ment du tableau
		et deux cellules de saisie de texte.
	*/
	function tableauSaisie($tableauEleve){
		foreach ($tableauEleve as $value){
			echo "<tr>\n";
			echo "\t<th>" . $value . "</th>\n";
			echo "\t<th><input type=\"text\"/ name=\"note\"></th>\n";
			echo "\t<th><input type=\"text\" name=\"com\" /></th>\n";
			echo "</tr>\n";
		}
	}
	
	$titrePage = "Saisie des notes";
	$eleves = ["Michel", "fran�is", "marion", "antoine", "Gudule"];
	
	include("../html/header.html");
	include("../html/formateur/saisie_notes.html");
	include("../html/footer.html");

?>