<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  <title>Rapport</title>
	<h1>Rapport de presences</h1>
</head>
<style>
	td, th{
		border: solid black;
	}
</style>
<body> 	

	<?php
		include_once("connexion.php");
		$idcon3 = connexobjet("cegep_php_final", "myparam");
		
		$requete3 = "SELECT * FROM `equipes`";
		
		$result3 = $idcon3->query($requete3);
		if(!$result3){
			echo "Lecture impossible";
		}else{	
			
		?>
		<form method="post" action="<?=$_SERVER["PHP_SELF"];?>" >
		<?php	
			echo "<select name='equipe1'>";
			
			$result3->data_seek(0);
			while($ligne3 = $result3->fetch_object()){
				echo '<option value="'.$ligne3->id . '">'.$ligne3->nomEquipe.'</option>';
			}
			
			echo "</select>";
			echo '<input type="submit" name="requipe" value="Rapport par equipe">';
			
			$result3->free();
			$idcon3->close();			
		}
		
		include_once("connexion.php");
		$idcon4 = connexobjet("cegep_php_final", "myparam");
		
		$requete4 = "SELECT * FROM `presences`";
		
		$result4 = $idcon4->query($requete4);
		if(!$result4){
			echo "Lecture impossible";
		}else{	
			
		?>
		<form method="post" action="<?=$_SERVER["PHP_SELF"];?>" >
		<?php	
			echo "<select name='date1'>";
			
			$result4->data_seek(0);
			$a="";
			
			while($ligne4 = $result4->fetch_object()){
				$b="'" . $ligne4->date . "'";
				if($a != $b){
					echo '<option value="'.$ligne4->date . '">'. $ligne4->date . '</option>';
					$a="'" . $ligne4->date . "'";
				}
				
			}
			
			echo "<br/><br/></select>";			
			echo '<input type="submit" name="rdate" value="Rapport par date">';
			echo "</form>";
			$result4->free();
			$idcon4->close();			
		}
		
		if(isset($_POST['requipe'])){
			include_once("connexion.php");
			$idcon5 = connexobjet("cegep_php_final", "myparam");			
			$requete5 = "SELECT presences.id, joueurs.nom, joueurs.prenom, presences.pJoueurs, presences.date, joueurs.accompagnateur1, 
			presences.pAccompagnateur1, joueurs.accompagnateur2, presences.pAccompagnateur2, presences.pEnt1, presences.idJoueur, 
			presences.idEquipe FROM `presences` INNER JOIN joueurs ON presences.idJoueur=joueurs.id 
			WHERE presences.idEquipe='".$_POST['equipe1']."' ";
			$result5 = $idcon5->query($requete5);	
		
			if(!$result5){
			echo "Lecture impossible";
			}else{
				
						
				echo '<br/><table border=\"1\"><tr><th>Presence id</th><th>Joueur/Entraineur</th><th>Assistance joueur</th><th>Date</th>
							<th>Accompagnateur1</th><th>Assistance A1</th><th>Accompagnateur2</th><th>Assistance A1</th><th>Assistance Entraineur</th>
							<th>Id joueur</th><th>Id Equipe</th></tr>';		
				$result5->data_seek(0);		
				while($ligne5 = $result5->fetch_object()){
								
					echo "<tr>";
					echo "<td>" . $ligne5->id . "</td>";
					echo "<td>" . $ligne5->nom . " " . $ligne5->prenom . "</td>";
					echo "<td>" . $ligne5->pJoueurs . "</td>";
					echo "<td>" . $ligne5->date . "</td>";
					echo "<td>" . $ligne5->accompagnateur1 . "</td>";
					echo "<td>" . $ligne5->pAccompagnateur1 . "</td>";
					echo "<td>" . $ligne5->accompagnateur2 . "</td>";
					echo "<td>" . $ligne5->pAccompagnateur2 . "</td>";
					echo "<td>" . $ligne5->pEnt1 . "</td>";
					echo "<td>" . $ligne5->idJoueur . "</td>";
					echo "<td>" . $ligne5->idEquipe . "</td>";					
					echo "</tr>";
					
				  
				}
				echo "</table>";
				$result5->free();
				$idcon5->close();
			}
		}
		
		if(isset($_POST['rdate'])){
			include_once("connexion.php");
			$idcon6 = connexobjet("cegep_php_final", "myparam");			
			$requete6 = "SELECT presences.id, joueurs.nom, joueurs.prenom, presences.pJoueurs, presences.date, joueurs.accompagnateur1, 
			presences.pAccompagnateur1, joueurs.accompagnateur2, presences.pAccompagnateur2, presences.pEnt1, presences.idJoueur, 
			presences.idEquipe FROM `presences` INNER JOIN joueurs ON presences.idJoueur=joueurs.id 
			WHERE presences.date='".$_POST['date1']."' ";
			$result6 = $idcon6->query($requete6);	
		
			if(!$result6){
			echo "Lecture impossible";
			}else{
				
						
				echo '<br/><table border=\"1\"><tr><th>Presence id</th><th>Joueur/Entraineur</th><th>Assistance joueur</th><th>Date</th>
							<th>Accompagnateur1</th><th>Assistance A1</th><th>Accompagnateur2</th><th>Assistance A1</th><th>Assistance Entraineur</th>
							<th>Id joueur</th><th>Id Equipe</th></tr>';		
				$result6->data_seek(0);		
				while($ligne6 = $result6->fetch_object()){
								
					echo "<tr>";
					echo "<td>" . $ligne6->id . "</td>";
					echo "<td>" . $ligne6->nom . " " . $ligne6->prenom . "</td>";
					echo "<td>" . $ligne6->pJoueurs . "</td>";
					echo "<td>" . $ligne6->date . "</td>";
					echo "<td>" . $ligne6->accompagnateur1 . "</td>";
					echo "<td>" . $ligne6->pAccompagnateur1 . "</td>";
					echo "<td>" . $ligne6->accompagnateur2 . "</td>";
					echo "<td>" . $ligne6->pAccompagnateur2 . "</td>";
					echo "<td>" . $ligne6->pEnt1 . "</td>";
					echo "<td>" . $ligne6->idJoueur . "</td>";
					echo "<td>" . $ligne6->idEquipe . "</td>";					
					echo "</tr>";
					
				  
				}
				echo "</table>";
				$result6->free();
				$idcon6->close();
			}
		}
			
	?>
		<br/><br/><a href="PriseDePresences.php"><input type="button" value="Returner"></a><br/><br/>
		
</body>
</html>