<?php
	// Crétaion de la classe Experience
class Diplome
{
	Private $idexp;
	Private $libexp;
	Private $comexp;
	Private $ddexp;
	Private $dfexp;
	Private $idtype;
	
	//Constructeur de la classe Experience
		
		Public function Diplome($idexp,$libexp,$comexp,$ddexp,$dfexp,$idtype)
		{
			$this -> idexp = $idexp;
			$this -> libexp = $libexp;
			$this -> comexp = $comexp;
			$this -> ddexp = $ddexp;
			$this -> dfexp = $dfexp;
			$this -> idtype = $idtype;
		}
		
	// Getter de la classe Experience
		
		Public function get_idexp()
		{
			Return $this ->idexp;
		}
		
		Public function get_libexp()
		{
			Return $this ->libexp;
		}
		
		Public function get_comexp()
		{
			Return $this ->comexp;
		}
		
		Public function get_ddexp()
		{
			Return $this ->ddexp;
		}
		
		Public function get_dfexp()
		{
			Return $this ->dfexp;
		}
		
		Public function get_idtype()
		{
			Return $this ->idtype;
		}
		
		
		
	// Setter de la classe Diplome
		
		Public function set_libexp($libexp)
		{
			$this -> libexp = $libexp;
		}
		
		Public function set_exp($comexp)
		{
			$this -> comexp = $comexp;
		}
		
		Public function set_ddexp($ddexp)
		{
			$this -> ddexp = $ddexp;
		}
		
		Public function set_dfexp($dfexp)
		{
			$this -> dfexp = $dfexp;
		}
		
		Public function set_idtype($idtype)
		{
			$this -> idtype = $idtype;
		}
	
	// Fonction pour envoyer les données en base
	
		function affiche_Experience($conn) //Fonction pour afficher la table Experience
		{
			$SQL = "SELECT * FROM experience WHERE valide='1'";
			$req = $conn -> query($SQL);
			$req->setFetchMode(PDO::FETCH_OBJ);
			return $req;
		}
		
		public function ajouter_Experience($libexp,$comexp,$ddexp,$dfexp,$idtype,$conn) 
		{
			$SQL = "INSERT INTO `experience`(`idexp`, `libexp`, `comexp`, `ddexp`, `dfexp`, `idtype`) VALUES (NULL,'$libexp','$comexp','$ddexp','$dfexp','$idtype','1')";
			$resultat = $conn -> query($SQL);
		}
		
		function update_CLIENT($idexp, $libexp, $comexp, $ddexp, $dfexp, $idtype, $conn)
		{
			$SQL ="UPDATE experience
			SET libexp = '$libexp', comexp = '$comexp', ddexp ='$ddexp', dfexp='dfexp', idtype='idtype'
			WHERE idexp ='$idexp'";
		
		
			$conn -> query($SQL);
			$this -> libexp = $libexp;
			$this -> comexp = $comexp;
		}
		
		public function supprimer_Experience($idexp,$conn)
		{
			$resa = $conn->query("UPDATE experience SET valide='0' WHERE idexp='$idexp'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
		}
}