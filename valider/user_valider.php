<?php
	
	include("../include/bdd.inc.php"); //inclus la liaison à la base de donnée
	include("../include/classes/Classe_User.php"); //inclus la classe User
	
	
	if(isset($_POST['modifier']))
	{
	$ouser = new User('','','','','','','','','','','','','');
	$res = $ouser->affiche_User($conn);
	While($resultat=$res->fetch())
	   {
		  $nameuser='nom'.$resultat->iduser;
          $preuser='prenom'.$resultat->iduser;
		  $nom=$_POST[$nameuser];
		  $prenom=$_POST[$preuser];
		  $ouser->update_User($resultat->iduser, $nom, $prenom, $conn);
	   }
	}
	
	if(isset($_POST['ajouter']))
	{	
		$ouser = new User('','','','','','','','','','','','','');
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$mail=$_POST['mail'];
		$mdp=$_POST['mdp'];
		$ouser->ajouter_User($nom,$prenom,$conn);
	}
	
	if(isset($_POST['supprimer']))
	{
		$ouser = new User('','','','','','','','','','','','','');
		$iduser=$_POST['liste'];
		$ouser->supprimer_User($iduser,$conn);
		
	}
	
	Header('Location:../user.php');
?>