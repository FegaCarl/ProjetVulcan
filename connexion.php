<!doctype html>
<?php
$cnx = new PDO('mysql:host=localhost; dbname=Espace_membres' , 'root' , 'root');

if(isset($_POST['formi']))
{
	if(!empty($_POST['Pseudo2']) and !empty($_POST['mail']) and !empty($_POST['mdp']) and !empty($_POST['confirm']))
		{
	$Pseudo2 = htmlspecialchars($_POST['Pseudo2']);
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = sha1($_POST['mdp']);
	$confirm = sha1($_POST['confirm']);
		
	$Pseudo2length = strlen($Pseudo2);
		if($Pseudo2length <= 20)
		{

			if($mdp == $confirm) 
			{
				$insertmembres = $bdd-> prepare ("INSERT INTO membres (':pseudo', ':mail', ':motdepasse') VALUES ($Pseudo2, $mail, $mdp)");
				$insertmembres -> execute(array(':pseudo'=>$Pseudo2,':mail'=> $mail,':motdepasse'=> $mdp));
				$erreur = "Votre compte à bien été créé !";
			}
			else
			{
				$erreur = "Les mots de passent sont différents !";
			}
		}
		else
		{
		$erreur = "Votre Pseudo ne doit pas contenir plus de 20 caractères !";	
		}

	}
	else {
		$erreur = "Tous les champs ne sont pas complétés !";
	}
}

?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Projet Vulcan - Connexion</title>
		<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="_css/icofont.css">
	</head>

	<body>
		<style>
			body {
				background-color: rgba(40,40,40,1.00);
				color:rgba(210,210,210,1.00);
			}
			#global {
				display: flex;
				text-align:center;
				justify-content: center;
				padding:2vw;
				flex-direction: row;
				margin:134.1px;
			}
			section {
				display: flex;
				flex-direction: column;
				margin:2vw;
			}
			#co {
				margin-top:105px;
			}
			#insc {
				border-left: solid 2px black;
				padding-left:4.4vw;
			}
			section > p {
				margin-bottom:10px;
				text-decoration:underline;
			}
			form {
				display: flex;
				flex-direction: column;
			}
			input {
				margin-bottom:25px;
			}

		</style>
		<?php include("header.php");?>
			<section id="global">
		
				<section id="co">
					<p>CONNEXION</p>
				<form action="" method="post">
					<label for="pseudo">Pseudo</label>
					<input type="text" id="pseudo" name="Pseudo">
					<label for="mot_de_passe">Mot de passe</label>
					<input type="password" id="mot_de_passe" name="Mot De Passe">
					<input type="submit" name='formi' value="Valider">

					</form>
				</section>
				
				<section id="insc">
					<p>INSCRIPTION</p>
				<form action="connexion.php" method="post">
					<label for="mail">Adresse Mail</label>
					<input type="email" id="mail" name="mail">
					<label for="Pseudo2">Pseudo</label>
					<input type="text" id="Pseudo2" name="Pseudo2">
					<label for="mdp">Mot de Passe</label>
					<input type="password" id="mdp" name="mdp">
					<label for="confirm">Confirmer le mot de passe</label>
					<input type="password" id="confirm" name="confirm">
					<input type="submit" name='formi' value="Je m'inscris">
				</form>
					<?php
					if(isset($erreur))
					{
						echo $erreur ;
					}
					?>
				</section>
			</section>
			
		<?php include("footer.php");?>
	</body>
</html>