<?php
	// Crétaion de la classe interet
class Diplome
{
	Private $idinteret;
	Private $libinteret;
	
	//Constructeur de la classe interet
		
		Public function Diplome($idint,$libint)
		{
			$this -> idinteret = $idint;
			$this -> libinteret = $libint;
		}
		
	// Getter de la classe interet
		
		Public function get_idinteret()
		{
			Return $this ->idinteret;
		}
		
		Public function get_libinteret()
		{
			Return $this ->libinteret;
		}
		

	// Setter de la classe interet
		
		Public function set_libinteret($libint)
		{
			$this -> libinteret = $libint;
		}
	
	
	// Fonction pour envoyer les données en base
	
		function affiche_Interet($conn) //Afficher interet
		{
			$SQL = "SELECT * FROM interet WHERE valide='1'";
			$req = $conn -> query($SQL);
			$req->setFetchMode(PDO::FETCH_OBJ);
			return $req;
		}
		
		public function ajouter_Interet($libinteret,$conn)  //Ajouter interet
		{
			$SQL = "INSERT INTO `interet`(`idinteret`, `libinteret`,) VALUES (NULL,'$libinteret', '1')";
			$resultat = $conn -> query($SQL);
		}
		
		function update_Interet($idinteret, $libinteret, $conn) // Modifier interet
		{
			$SQL ="UPDATE interet
			SET libinteret = '$libinteret'
			WHERE idinteret ='$idinteret'";
		
		
			$conn -> query($SQL);
			$this -> libinteret = $libinteret;

		}
		
		public function supprimer_Interet($idinteret,$conn) // Supprimer interet
		{
			$resa = $conn->query("UPDATE interet SET valide='0' WHERE idinteret='$idinteret'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
		}
}