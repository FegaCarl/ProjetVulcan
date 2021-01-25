<!doctype html>
<html>
	
	<head>
		
		<meta charset="UTF-8">
		<title>Projet Vulcan</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		
	</head>
	<style>
		
		#compteur {
			height:40px;
			background-color:rgba(125,125,125,1.00);
			padding:0;
			margin:0;
		}
			section {
				height:35vw;
				width:100%;
				display: flex;
				margin-top:5px;
				justify-content: center;
				align-items: center;
			}

			.parent:hover #A, .parent:hover #A {transform: scale(1.2);}
			.parent:hover #B, .parent:hover #B {transform: scale(1.2);}
			.parent:hover #C, .parent:hover #C {transform: scale(1.2);}
			.parent:hover #D, .parent:hover #D {transform: scale(1.2);}
			
			h1 {
				color:white;
				font-size:60px;
				width:50%;
				text-align: center;
			}
			#A {
				background-image: url("_img/Image1.jpg");
				width:100%;
				height:100%;
				background-position: center;
				background-size: cover;
				transition: all .5s;
			}
		
			#B {
				background-image:url("_img/Image2.jpg");
				width:100%;
				height:100%;
				background-position: center;
				background-size: cover;
				transition: all .5s;
			}
			#C {
				background-image: url("_img/Image3.jpg");
				width:100%;
				height:100%;
				background-position: center;
				background-size: cover;
				transition: all .5s;
			}
			#D {
				width:100%;
				height:100%;
				background-position: center;
				background-size: cover;
				transition: all .5s;
				background-image: url("_img/Image4.jpg");
			}
			#scrollUp {
				position: fixed;
				bottom : 50px;
				right: -100px;
				opacity: 1;
				font-size:30px;
			}
			.icofont-rounded-up {
				color:white;
			}
			.icofont-rounded-up:hover {
				color:orange;
			}
		</style>
	<script>
			jQuery(function(){
				$(function () {
					$(window).scroll(function () { //Fonction appelée quand on descend la page
						if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
							$('#scrollUp').css('right','50px'); // Replace à 10pixels de la droite l'image
						} else { 
							$('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
						}
					});
				});
			});
	</script>
	
	<?php include("header.php"); ?>
	
	<body>
		<section id="compteur">
			<h5>Déjà plus de XXXXXX joueurs nous ont rejoints !</h5>
		</section>
		<section class="parent">
			<section id="A">
				<h1>Projet Vulcan, c'est la compétition pour tous les joueurs.</h1>
			</section>
		</section>
		
		<section class="parent">
			<section id="B">
				<h1>Rassemble ton équipe et tente de gagner des prix !</h1>			
			</section>
		</section>
		
		<section class="parent">
			<section id="C">
				<h1>Projet Vulcan, c’est surtout totalement gratuit et un bon moyen de repousser ses limites.</h1>			
			</section>
		</section>
		
		<section class="parent">
			<section id="D">
				<h1>C'est l'heure de Warzone, alors n'attends plus ! Le choix est entre tes mains.</h1>
			</section>
		</section>
		
		<div id="scrollUp">
			<a href="#top"><i class="icofont-rounded-up"></i></a>
		</div>
		
		
		<?php include("footer.php"); ?>
	</body>
	
</html>