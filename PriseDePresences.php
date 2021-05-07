<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  <title>Final</title>
	<img src="lcdh.png">
	<h1>Prise de présences :</h1>
</head>

<style>
	img{
		width: 100px;
		height: 50px;
	}
</style>
<body> 	

<?php
include_once("connexion.php");
$idcon = connexobjet("cegep_php_final", "myparam");

$requete = "SELECT * FROM `equipes`";

$result = $idcon->query($requete);
if(!$result){
	echo "Lecture impossible";
}else{	
	
?>
<form method="get" action="<?=$_SERVER["PHP_SELF"];?>" >
<?php	
	echo "<select name='equipe'>";
	
	$result->data_seek(0);
	while($ligne = $result->fetch_object()){
		echo '<option value="'.$ligne->id . '">'.$ligne->nomEquipe.'</option>';
	}
	
	echo "</select>";
	echo "<input type=\"submit\" value=\"Ok\"/>";
	echo "</form>";
	$result->free();
	$idcon->close();
	
}

if(isset($_GET['equipe'])){
	include_once("connexion.php");
	$idcon1 = connexobjet("cegep_php_final", "myparam");
  $requete1 = "SELECT * FROM joueurs WHERE idEquipe='".$_GET['equipe']."' ";
	$result1 = $idcon1->query($requete1);	

	if(!$result1){
	echo "Lecture impossible";
	}else{
		
		echo "<form method='post'>";		
		echo '<br/><table border=\"1\"><tr><th>Joueuses</th><th>A</th><th>P</th><th>A1</th><th>A2</th><th>A3</th><th></th><th></th></tr>';		
		$result1->data_seek(0);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistance' value='Absence'></td>";
		echo "<td><input type='radio' name='assistance' value='Présence'></td>";			
		echo "<td><input type='checkbox' name='presence1' value='Présence'/>" . $ligne1->accompagnateur1 . "</td>";
		echo "<td><input type='checkbox' name='presence2' value='Présence'/>" . $ligne1->accompagnateur2 . "</td>";
		echo "<td><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'><input type='reset' name='Aucun' value='Aucun' /></td>";
		echo "<td><input type='submit' value='Ok' name='ok'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer' /></td>";
		echo "</tr>";				
		echo "</form>";
		
		echo "<form method='post'>";						
		$result1->data_seek(1);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistance' value='Absence'></td>";
		echo "<td><input type='radio' name='assistance' value='Présence'></td>";			
		echo "<td><input type='checkbox' name='presence1' value='Présence'/>" . $ligne1->accompagnateur1 . "</td>";
		echo "<td><input type='checkbox' name='presence2' value='Présence'/>" . $ligne1->accompagnateur2 . "</td>";
		echo "<td><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'><input type='reset' name='Aucun' value='Aucun' /></td>";
		echo "<td><input type='submit' value='Ok' name='ok'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer' /></td>";
		echo "</tr>";				
		echo "</form>";
		
		echo "<form method='post'>";						
		$result1->data_seek(2);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistance' value='Absence'></td>";
		echo "<td><input type='radio' name='assistance' value='Présence'></td>";			
		echo "<td><input type='checkbox' name='presence1' value='Présence'/>" . $ligne1->accompagnateur1 . "</td>";
		echo "<td><input type='checkbox' name='presence2' value='Présence'/>" . $ligne1->accompagnateur2 . "</td>";
		echo "<td><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'><input type='reset' name='Aucun' value='Aucun' /></td>";
		echo "<td><input type='submit' value='Ok' name='ok'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer' /></td>";
		echo "</tr>";			
		echo "</form>";
		
		echo "<form method='post'>";						
		$result1->data_seek(3);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistance' value='Absence'></td>";
		echo "<td><input type='radio' name='assistance' value='Présence'></td>";			
		echo "<td><input type='checkbox' name='presence1' value='Présence'/>" . $ligne1->accompagnateur1 . "</td>";
		echo "<td><input type='checkbox' name='presence2' value='Présence'/>" . $ligne1->accompagnateur2 . "</td>";
		echo "<td><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'><input type='reset' name='Aucun' value='Aucun' /></td>";
		echo "<td><input type='submit' value='Ok' name='ok'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer' /></td>";
		echo "</tr>";					
		echo "</form>";
		
		echo "<form method='post'>";						
		$result1->data_seek(4);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistance' value='Absence'></td>";
		echo "<td><input type='radio' name='assistance' value='Présence'></td>";			
		echo "<td><input type='checkbox' name='presence1' value='Présence'/>" . $ligne1->accompagnateur1 . "</td>";
		echo "<td><input type='checkbox' name='presence2' value='Présence'/>" . $ligne1->accompagnateur2 . "</td>";
		echo "<td><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'><input type='reset' name='Aucun' value='Aucun' /></td>";
		echo "<td><input type='submit' value='Ok' name='ok'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer' /></td>";
		echo "</tr>";			
		echo "</form>";
		
		echo "<form method='post'>";						
		$result1->data_seek(5);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistance' value='Absence'></td>";
		echo "<td><input type='radio' name='assistance' value='Présence'></td>";			
		echo "<td><input type='checkbox' name='presence1' value='Présence'/>" . $ligne1->accompagnateur1 . "</td>";
		echo "<td><input type='checkbox' name='presence2' value='Présence'/>" . $ligne1->accompagnateur2 . "</td>";
		echo "<td><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'><input type='reset' name='Aucun' value='Aucun' /></td>";
		echo "<td><input type='submit' value='Ok' name='ok'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer' /></td>";
		echo "</tr>";					
		echo "</form>";
		
		echo "<form method='post'>";						
		$result1->data_seek(6);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistance' value='Absence'></td>";
		echo "<td><input type='radio' name='assistance' value='Présence'></td>";			
		echo "<td><input type='checkbox' name='presence1' value='Présence'/>" . $ligne1->accompagnateur1 . "</td>";
		echo "<td><input type='checkbox' name='presence2' value='Présence'/>" . $ligne1->accompagnateur2 . "</td>";
		echo "<td><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'><input type='reset' name='Aucun' value='Aucun' /></td>";
		echo "<td><input type='submit' value='Ok' name='ok'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer' /></td>";
		echo "</tr>";				
		echo "</form>";
		
		echo "<form method='post'>";						
		$result1->data_seek(7);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistance' value='Absence'></td>";
		echo "<td><input type='radio' name='assistance' value='Présence'></td>";			
		echo "<td><input type='checkbox' name='presence1' value='Présence'/>" . $ligne1->accompagnateur1 . "</td>";
		echo "<td><input type='checkbox' name='presence2' value='Présence'/>" . $ligne1->accompagnateur2 . "</td>";
		echo "<td><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'><input type='reset' name='Aucun' value='Aucun' /></td>";
		echo "<td><input type='submit' value='Ok' name='ok'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer' /></td>";
		echo "</tr>";					
		echo "</form>";
		
		echo "<form method='post'>";
		echo "<tr>";
		echo "<td colspan='8'>Non-Joueur</td>";
		echo "</tr>";
		$result1->data_seek(8);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";		
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistanceE1' value='Absence'></td>";
		echo "<td><input type='radio' name='assistanceE1' value='Présence'></td>";
		echo "<td colspan='3'><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'></td>";
		echo "<td><input type='submit' value='Ok' name='okE'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer1' /></td>";
		echo "</tr>";
		echo "</form>";
		
		echo "<form action='' method='post'>";
		$result1->data_seek(9);		
		$ligne1 = $result1->fetch_object();
		echo "<tr>";
		echo "<td><input type='hidden' name='joueur' value='" . $ligne1->id ."'>" . $ligne1->nom . " " . $ligne1->prenom . "</td>";
		echo "<td><input type='radio' name='assistanceE1' value='Absence'></td>";
		echo "<td><input type='radio' name='assistanceE1' value='Présence'></td>";
		echo "<td colspan='3'><input type='hidden' name='idequipe' value='" . $ligne1->idEquipe ."'></td>";
		echo "<td><input type='submit' value='Ok' name='okE'/></td>";
		echo "<td><input type='submit' value='Changer' name='changer1' /></td>";
		echo "</tr>";
		echo "</form>";
		
		echo "</table>";
		echo '<br/><br/><a href="Rapport.php"><input type="button" value="Rapport de presences"></a>';
		$result1->free();		
		$idcon1->close();	
	
	}
}

//Update
	if(isset($_POST['changer'])){ 

  include_once("connexion.php");
	$idcon2 = connexobjet("cegep_php_final", "myparam");
	$id ="0";
	if(!empty($_POST['assistance'])){
		$pJoueurs=$idcon2->escape_string($_POST['assistance']);
	}else{
		$pJoueurs="Absence";
	}
	date_default_timezone_set('US/Eastern');
	$date= date("Y-m-d");
	if(!empty($_POST['presence1'])){
		$pAccompagnateur1=$idcon2->escape_string($_POST['presence1']);
	}else{
		$pAccompagnateur1="Absence";
	}
	if(!empty($_POST['presence2'])){
		$pAccompagnateur2=$idcon2->escape_string($_POST['presence2']);
	}else{
		$pAccompagnateur2="Absence";
	}	
	$pEnt1="";	
	$idJoueur=$_POST['joueur'];
	$idEquipe=$_POST['idequipe'];
	
  $requete2 = "UPDATE presences SET pJoueurs='$pJoueurs', date='$date', pAccompagnateur1='$pAccompagnateur1', pAccompagnateur2='$pAccompagnateur2' WHERE idJoueur='$idJoueur'";
	$result2 = $idcon2->query($requete2);   
		
    
    if(!$result2){
      echo $idcon2->errno;
      echo $idcon2->error;
      echo "<script type=\"text/javascript\"> alert('Erreur : " . $idcon2->error . "')</script>";
    }else{
			
			echo "<script type=\"text/javascript\">alert(\"Vous avez modifie un assistance.\")</script>";
      
			$idcon2->close();	
    }
  }else{
	}
    //Inserte assistance joueur	
		if(!empty($_POST['ok'])){ 

			include_once("connexion.php");
			$idcon2 = connexobjet("cegep_php_final", "myparam");
			$id ="0";
			if(!empty($_POST['assistance'])){
			$pJoueurs=$idcon2->escape_string($_POST['assistance']);
			}else{
				$pJoueurs="Absence";
			}
			date_default_timezone_set('US/Eastern');
			$date= date("Y-m-d");
			if(!empty($_POST['presence1'])){
				$pAccompagnateur1=$idcon2->escape_string($_POST['presence1']);
			}else{
				$pAccompagnateur1="Absence";
			}
			if(!empty($_POST['presence2'])){
				$pAccompagnateur2=$idcon2->escape_string($_POST['presence2']);
			}else{
				$pAccompagnateur2="Absence";
			}	
			$pEnt1="";	
			$idJoueur=$_POST['joueur'];
			$idEquipe=$_POST['idequipe'];
			
			$requete2 = "INSERT INTO presences VALUES('$id', '$pJoueurs', '$date', '$pAccompagnateur1', '$pAccompagnateur2', '$pEnt1', '$idJoueur', '$idEquipe')";
			$result2 = $idcon2->query($requete2);   
				
				
				if(!$result2){
					echo $idcon2->errno;
					echo $idcon2->error;
					echo "<script type=\"text/javascript\"> alert('Erreur : " . $idcon2->error . "')</script>";
				}else{
					
					echo "<script type=\"text/javascript\">alert(\"Vous avez enregistré un assistance. Votre numéro d'assistance est :" . $idcon2->insert_id . "\")</script>";
					
					$idcon2->close();	
				}
			}else{
				//echo "<h3>Formulaire à compléter</h3>";
			}
	
	
	
	//Update
	if(isset($_POST['changer1'])){ 

  include_once("connexion.php");
	$idcon2 = connexobjet("cegep_php_final", "myparam");
	$id ="0";
	$pJoueurs="";
	date_default_timezone_set('US/Eastern');
	$date= date("Y-m-d");
	$pAccompagnateur1="";
	$pAccompagnateur2="";

  if(!empty($_POST['assistanceE1'])){
				$pEnt1=$idcon2->escape_string($_POST['assistanceE1']);
			}else{
				$pEnt1="Absence";
			}		
		
	$idJoueur=$_POST['joueur'];
	$idEquipe=$_POST['idequipe'];
	
  $requete2 = "UPDATE presences SET date='$date', pEnt1='$pEnt1' WHERE idJoueur='$idJoueur'";
	$result2 = $idcon2->query($requete2);   
		
    
    if(!$result2){
      echo $idcon2->errno;
      echo $idcon2->error;
      echo "<script type=\"text/javascript\"> alert('Erreur : " . $idcon2->error . "')</script>";
    }else{
			
			echo "<script type=\"text/javascript\">alert(\"Vous avez modifie un assistance.\")</script>";
      
			$idcon2->close();	
    }
  }else{
	}
    //Inserte assistance entreneur	
		if(!empty($_POST['okE'])){ 
	
		include_once("connexion.php");
		$idcon2 = connexobjet("cegep_php_final", "myparam");
		$id ="0";
		$pJoueurs="";
		date_default_timezone_set('US/Eastern');
		$date= date("Y-m-d");
		$pAccompagnateur1="";
		$pAccompagnateur2="";	
		if(!empty($_POST['assistanceE1'])){
				$pEnt1=$idcon2->escape_string($_POST['assistanceE1']);
			}else{
				$pEnt1="Absence";
			}			
		$idJoueur=$_POST['joueur'];
		$idEquipe=$_POST['idequipe'];
		
		$requete2 = "INSERT INTO presences VALUES('$id', '$pJoueurs', '$date', '$pAccompagnateur1', '$pAccompagnateur2', '$pEnt1', '$idJoueur', '$idEquipe')";
		$result2 = $idcon2->query($requete2);   
			
			
			if(!$result2){
				echo $idcon2->errno;
				echo $idcon2->error;
				echo "<script type=\"text/javascript\"> alert('Erreur : " . $idcon2->error . "')</script>";
			}else{
				
				echo "<script type=\"text/javascript\">alert(\"Vous avez enregistré un assistance. Votre numéro d'assistance est :" . $idcon2->insert_id . "\")</script>";
				
				$idcon2->close();	
			}
		}else{
			//echo "<h3>Formulaire à compléter</h3>";
		}
	
	
	
		
	
  ?>


	



</body> 
</html>