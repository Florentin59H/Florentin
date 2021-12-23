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
		
		<section id="nosactionsimportances" class="nosactionssection">
		
			<h1 class="nosactionsh1">L’importance de l’expertise médico-légale</h1>
			<p class="nosactionsp">Que les expertises médicales, soient judiciaires ou non (assurances, CRCI, CPAM, MDPH...), leur mission comporte, à quelque variante près, la demande d’évaluation des différents types de dommages que le régleur transformera en chefs de préjudices à indemniser.</p>
			<h4 class="nosactionsh4">D’un point de vue médical, on peut les séparer entre :</h4>

			<ul class="nosactionsul">
				<li class="nosactionsli">Préjudices "temporaires" qui sont : arrêts de travail, incapacité temporaire totale ou partielle (ITT et ITP), certains frais médicaux, aides humaines et techniques.</li>
				<li class="nosactionsli">Préjudices "définitifs" : incapacité permanente partielle (IPP), souffrances endurées ou quantum doloris, préjudice esthétique, retentissement professionnel et sur les loisirs ou préjudice d’agrément, préjudice sexuel, frais médicaux futurs, aide humaine et aménagements (domicile, véhicule), aides techniques.</li>	
			<ul>

			<p class="nosactionsp">La consolidation permettant de séparer les préjudices transitoires des définitifs.</p>
			<h3 class="nosactionsh3">Les préjudices et leurs barèmes :</h3>
			<p class="nosactionsp">D’un point de vue juridique et bien que cela ne concerne pas l’expert, qui doit se préoccuper uniquement de l’évaluation technique du dommage, il est classique de les séparer en préjudices "personnels" ou "extra-patrimoniaux" relatifs à l’atteinte corporelle subie par la victime non soumis au recours des organismes sociaux (action récursoire) et en préjudices "économiques" ou "patrimoniaux" soumis eux à cette action récursoire de la sécurité sociale qui fait qu’elle se rembourse des frais engagés pour soigner la victime en recupérant une partie de l’indemnisation attribuée à la victime.</p>
			<p class="nosactionsp">Ce découpage du dommage en plusieurs "chefs" correspond à une volonté "cartésienne", il faut donc quantifier et mesurer de façon précise et reproductible, ce qui conduit à l’établissement de barèmes, documents de références donnant pour le plus possible de situations cliniques standardisées, des ordres de grandeur d’évaluation (essentiellement IPP).</p>
			<p class="nosactionsp">En dehors du Droit Commun (tout ce qui ne relève pas de contrats ou législations particulières) il peut exister une multitude de barèmes : celui des accidents du travail et maladies professionnelles, des pensions militaires et en théorie un barème par contrat d’assurance.</p>
			<p class="nosactionsp">Une bonne évaluation des chefs du dommage nécessite d’abord de bonnes connaissances techniques dans le domaine médical concerné.</p>
			<p class="nosactionsp">Un respect rigoureusement de la procédure propre à chaque type d’expertise et un rapport clair, compréhensible par des non-médecins et répondant aux questions posées.</p>
			<p class="nosactionsp">Il faut donc s’entourer de personnes ayant une bonne expérience dans le domaine afin d’évaluer le plus correctement possible les préjudices.</p>

		</section>

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
	
	
	</body>
</html>
