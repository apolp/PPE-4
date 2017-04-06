<?php
// -- Connexion PDO --
try
{
	$conn = new PDO('mysql:host=localhost;dbname=ppe4', 'root', '');
	//Forcer la prise en charge utf8
	$conn->exec("SET CHARACTER SET utf8");
	//Affichage des erreurs (peut afficher des erreurs inutiles)
	//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $erreur)
{
	echo 'échec de la connexion' . $erreur->getMessage();
}
?>