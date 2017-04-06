<?php
	// Crétaion de la classe typeexp
class Typeexp
{
	Private $idtypeexp;
	Private $libtypeexp;
	
	//Constructeur de la classe typeexp
		
		Public function Diplome($idtypeexp,$libtypeexp)
		{
			$this -> idtypeexp = $idtypeexp;
			$this -> libtypeexp = $typeexp;
		}
		
	// Getter de la classe typeexp
		
		Public function get_ididtypeexp()
		{
			Return $this ->idtypeexp;
		}
		
		Public function get_libtypeexp()
		{
			Return $this ->libtypeexp;
		}
		

	// Setter de la classe typeexp
		
		Public function set_libtypeexp($libtypeexp)
		{
			$this -> libtypeexp = $libtypeexp;
		}
	
	
	// Fonction pour envoyer les données en base
	
		function affiche_Typeexp($conn) //Afficher typeexp
		{
			$SQL = "SELECT * FROM type_exp WHERE valide='1'";
			$req = $conn -> query($SQL);
			$req->setFetchMode(PDO::FETCH_OBJ);
			return $req;
		}
		
		public function ajouter_Typeexp($libtypeexp,$conn)  //Ajouter typeexp
		{
			$SQL = "INSERT INTO `type_exp`(`idtype`, `libtype`,) VALUES (NULL,'$libtypeexp', '1')";
			$resultat = $conn -> query($SQL);
		}
		
		function update_Typeexp($idtypeexp, $libtypeexp, $conn) // Modifier typeexp
		{
			$SQL ="UPDATE type_exp
			SET libtype = '$libtypeexp'
			WHERE idtype ='$idtypeexp'";
		
		
			$conn -> query($SQL);
			$this -> libtypeexp = $libtypeexp;

		}
		
		public function supprimer_Typeexp($idtypeexp,$conn) // Supprimer typeexp
		{
			$resa = $conn->query("UPDATE type_exp SET valide='0' WHERE idtype ='$idtypeexp'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
		}
}