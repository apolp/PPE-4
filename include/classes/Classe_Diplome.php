<?php
	// Crétaion de la classe Diplome
class Diplome
{
	Private $iddip;
	Private $libdip;
	Private $comdip;
	
	//Constructeur de la classe Diplome
		
		Public function Diplome($iddip,$libdip,$comdip)
		{
			$this -> iddip = $iddip;
			$this -> libdip = $libdip;
			$this -> comdip = $comdip;
		}
		
	// Getter de la classe Diplome
		
		Public function get_iddip()
		{
			Return $this ->iddip;
		}
		
		Public function get_libdip()
		{
			Return $this ->libdip;
		}
		
		Public function get_comdip()
		{
			Return $this ->comdip;
		}
		
	// Setter de la classe Diplome
		
		Public function set_libdip($libdip)
		{
			$this -> libdip = $libdip;
		}
		
		Public function set_comdip($comdip)
		{
			$this -> comdip = $comdip;
		}
	
	// Fonction pour envoyer les données en base
	
		function affiche_Diplome($conn) //Fonction pour afficher la table Diplome
		{
			$SQL = "SELECT * FROM diplome WHERE valide='1'";
			$req = $conn -> query($SQL);
			$req->setFetchMode(PDO::FETCH_OBJ);
			return $req;
		}
		
		public function ajouter_Diplome($libdip,$comdip,$conn) 
		{
			$SQL = "INSERT INTO `diplome`(`iddip`, `libdip`, `comdip`) VALUES (NULL,'$libdip','$comdip', '1')";
			$resultat = $conn -> query($SQL);
		}
		
		function update_Diplome($iddip, $libdip, $comdip, $conn)
		{
			$SQL ="UPDATE diplome
			SET libdip = '$libdip', comdip = '$comdip'
			WHERE iddip ='$iddip'";
		
		
			$conn -> query($SQL);
			$this -> libdip = $libdip;
			$this -> comdip = $comdip;
		}
		
		public function supprimer_Diplome($iddip,$conn)
		{
			$resa = $conn->query("UPDATE diplome SET valide='0' WHERE iddip='$iddip'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
		}
}