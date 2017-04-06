							<?php
								include("include/bdd.inc.php"); //inclus la liaison à la base de donnée
								include("include/classes/Classe_User.php"); //inclus la classe User 
							?>
							
							<!-- Ajouter catégorie -->
							<form name="insertion" action="valider/user_valider.php" method="POST" enctype = "multipart/form-data"><br>
								<label for="nom_salle"><strong>Ajouter User </strong></label><br>
								Nom <input type="text" name="nom"><br>
								Prenom <input type="text" name="prenom"><br>
								<input name="ajouter" type="submit" value="Ajouter">	
							</form><br>
							
							<!-- Modifier --> 
						   <form action="valider/user_valider.php" method="POST" class="formulaire">
						   <label for="nom_salle"><strong>Modifier Clients : </strong></label>

							<?php
							  $ouser = new User ('','','','','','','','','','','','','','');
							  $res = $ouser -> affiche_User($conn);
							  while ($resultat=$res->fetch())
								  
								  {
									 $nom= 'nom'.$resultat->iduser;
									 $prenom= 'prenom'.$resultat->iduser;
							?>
									   <p>
									  <span><input type="text" name="<?php echo $nom ?>" value="<?php echo $resultat->nom ?>"></span>
									  <span><input type="text" name="<?php echo $prenom ?>" value="<?php echo $resultat->prenom ?>"></span>
									   </p>
							<?php
								  }
							?>
											
							<span><button name="modifier" type="submit" value="modifier">Valider</button></span>
							
						   </form><br>
							

							
							<!-- Supprimer user -->
							<form method="post" action="valider/user_valider.php">
							<label for="nom_salle"><strong> Supprimer user : </strong></label><br>
								<select name="liste">
								<?php
								$res = $ouser -> affiche_User($conn);
								while($resultat=$res->fetch())
								{
								?>
									<option value="<?php echo $resultat->iduser?>"><?php echo $resultat ->nom." ".$resultat ->prenom?></option>
								<?php
								}
								?>
								</select>
							<input type="submit" name="supprimer" value="supprimer">
							</form>
						