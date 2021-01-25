<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>header</title>
		<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="_css/icofont.css">
	</head>
	<body>
		<header>
			<nav id="navheader">
				<a href="index.php" id="logo"><i class="icofont-volcano"></i></a>
				<a href="competitions.php">Compétitions</a>
				<a href="reglement.php">Règlement</a>
				<a href="classement.php">Classements</a>
				<a href="contact.php">Contact</a>
				<a href="connexion.php"><i class="icofont-globe"></i> Connexion</a>
			</nav>
			
			<style>
				* {
					margin:0;
					padding:0;
					box-sizing: border-box;
					text-decoration:none;
					font-family: 'Prompt', sans-serif;
				}
				body {
				background-color:rgba(40,40,40,1.00);
			}
				#logo {
					font-size: 40px;
				}
				#navheader {
				display: flex;
				justify-content: space-between;
				width:100%;
				background:#736666;
				padding:0.5vw;
				align-items: center;
					}
				nav > a {
					
					color:rgba(210,210,210,1.00);
				}
				nav > a:hover {
					color:white;
				}
			</style>
		</header>
	</body>
</html>