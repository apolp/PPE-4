<?php
    // création de la classe CLIENT
class User
{
    Private $iduser;
    Private $nom;
    Private $prenom;
	Private $photo;
	Private $dna;
    Private $sexe;
	Private $mail;
	Private $rue;
	Private $cp;
	Private $ville;
	Private $iddip;
	Private $idexp;
	Private $mdp;
    
    //constructeur de la classe CLIENT
    
        Public function User ($iduser, $nom, $pre, $ph, $dna, $sexe, $mail, $rue, $cp, $ville, $iddip, $idexp, $mdp)
    
            {
                $this -> iduser = $iduser;
                $this -> nom = $nom;
                $this -> prenom = $pre;
				$this -> photo = $ph;
				$this -> dna = $dna;
                $this -> sexe = $sexe;
                $this -> mail = $mail;
                $this -> rue = $rue;
                $this -> cp = $cp;
                $this -> ville = $ville;
				$this -> iddip = $iddip;
				$this -> idexp = $idexp;
				$this -> mdp = $mdp;
            }
    
    // Getters
    
        Public function get_iduser() 
            
            {
                Return $this -> iduser;
            }
        
        Public function get_nom() 
            
            {
                Return $this -> nom;
            }
    
        Public function get_prenom() 
            
            {
                Return $this -> prenom;
            }
		Public function get_photo() 
            
            {
                Return $this -> photo;
            }
		Public function get_dna() 
            
            {
                Return $this -> dna;
            }
		Public function get_sexe() 
            
            {
                Return $this -> sexe;
            }
		Public function get_mail() 
            
            {
                Return $this -> mail;
            }
		Public function get_rue() 
            
            {
                Return $this -> rue;
            }
		Public function get_cp() 
            
            {
                Return $this -> cp;
            }
		Public function get_ville() 
            
            {
                Return $this -> ville;
            }
		Public function get_iddip() 
            
            {
                Return $this -> iddip;
            }       
        Public function get_idexp() 
            
            {
                Return $this -> idexp;
            }
		Public function get_mdp() 
            
            {
                Return $this -> mdp;
            }
			
            
            
    // Setters
    
        Public function set_nom($nom)
            
            {
                $this -> nomclient = $nom;
            }
            
        Public function set_prenom($pre)
            
            {
                $his -> prenom = $pre;
            }
    
        Public function set_photo($ph)
            
            {
                $this -> photo = $ph;
            }
            
        Public function set_dna($dna)
            
            {
                $his -> dna = $dna;
            }
    
        Public function set_sexe($sexe)
            
            {
                $this -> sexe = $sexe;
            }
            
        Public function set_mail($mail)
            
            {
                $his -> mail = $mail;
            }
    
        Public function set_rue($rue)
            
            {
                $this -> rue = $rue;
            }
            
        Public function set_cp($cp)
            
            {
                $his -> cp = $cp;
            }
        Public function set_ville($ville)
            
            {
                $this -> ville = $ville;
            }
		Public function set_mdp($mdp)
            
            {
                $this -> mdp = $mdp;
            }
            
    
    // Fonctions
    
        function affiche_User($conn) //Afficher user
            {
                $SQL = "SELECT * FROM user WHERE valide='0' ";
                $req = $conn -> query($SQL);
                $req->setFetchMode(PDO::FETCH_OBJ);
				return $req;
            }
			
		/*public function ajouter_User($nom,$prenom,$photo,$dna,$sexe,$mail,$rue,$cp,$ville) //Ajouter user
			{
			$SQL = "INSERT INTO `user`(`iduser`, `nom`, `prenom`, `photo`, `dna`, `sexe`, `mail`, `rue`, `cp`, `ville`, `valide`) VALUES (NULL,'$nom','$prenom','$photo','$dna','$sexe','$mail','$rue','$cp','$ville','0')";
			$resultat = $conn -> query($SQL);
			}*/
			
		public function ajouter_User($nom,$prenom,$conn) //Ajouter user
			{
			$SQL = "INSERT INTO `user`(`iduser`, `nom`, `prenom`,`valide`) VALUES (NULL,'$nom','$prenom','0')";
			$resultat = $conn -> query($SQL);
			}
			
        function update_User($iduser, $nom, $prenom, $conn) // Modifier user
            {
                $SQL ="UPDATE user
                       SET nom = '$nom', prenom = '$prenom'
                       WHERE iduser ='$iduser'";
            
            
                $conn -> query($SQL);
                $this -> nom = $nom;
				$this -> prenom = $prenom;
               
            }
		
		public function supprimer_User($iduser,$conn) // Supprimer user
			{
			$resa = $conn->query("UPDATE user SET valide='1' WHERE iduser='$iduser'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
			}
}