<?php

	include("fonctions/fctRenvoieUneListe.php");
	
	$classe=$_GET['classe'];
	$titrePage="Liste des devoirs de ".$classe;
	$tabDevoirs=["Quizz Linux","TP creation de comptes","QCM Windows"];
	$listeDevoirs=renvoieUneListe($tabDevoirs, 'saisie_notes.php?devoir=');
	
	include("../html/header.html");
	
	include("../html/formateur/liste_devoirs_classe.html");
	
	include("../html/footer.html");


?>