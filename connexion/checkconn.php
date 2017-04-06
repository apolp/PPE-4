<?php
	include '../include/bdd.inc.php';

	$req = $conn->prepare("SELECT * FROM user WHERE mail = ? AND mdp = ?");
	$req->execute(array($_POST['mail'], $_POST['mdp']));
	$data = $req->fetch();
		if($data)
		{
			session_start();
			$_SESSION['connexion']=true;
			header('Location:../user.php');
		}
		else
		{
			header('Location:../index.html');
		}
			
?>