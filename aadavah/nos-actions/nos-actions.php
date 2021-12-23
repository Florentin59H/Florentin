<?php
	session_start();
?>
<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
		<title>Nos Actions</title> 
		<meta name="auteur" content="Florentin Havart" />
		<link rel="stylesheet" href="../css/style.css"/>
		<link rel="stylesheet" href="../css/actions.css"/>
		<link rel="stylesheet" href="../css/actions-ms.css"/>
		<link rel="stylesheet" href="../css/style-ms.css"/>
		<script
		  src="https://code.jquery.com/jquery-3.4.1.js"
		  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		  crossorigin="anonymous"></script>
		<script type="text/javascript" src="../js/js.js"></script>
		<link rel="icon" type="image/png" href="images/favicon2.png" />
	
	</head>

	<body>
	
		<header id="header-nav">
			<?php 
				include("../pages/nav.php");
			?>
		</header>
		
		<div class="three col">
			<div class="hamburger" id="hamburger-8">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>
		</div>
		
		<section id="nosactionssection">
		
			<h1>Nos differentes actions</h1>
			
			<ul class="subnavactions">
				<li><a href="../nos-actions/accidentdelaroute.php">Accident de la route</a></li>
				<li><a href="../nos-actions/lamdphmaisondepartementaledespersonneshandicapees.php">La MDPH (Maison Départementale des Personnes Handicapées)</a></li>
				<li><a href="../nos-actions/lesaccidentsdutravail.php">Les accidents du travail</a></li>
				<li><a href="../nos-actions/lesmaladiesprofessionnelles.php">Les maladies professionnelles</a></li>
				<li><a href="../nos-actions/limportancedelexpertisemedico-legale.php">L’importance de l’expertise médico-légale</a></li>
			</ul>
			
		
		</section>

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
	
	
	</body>
</html>
