<?php
	session_start();
?>
<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
		<title>Nos Partenaires</title> 
		<meta name="auteur" content="Florentin Havart" />
		<link rel="stylesheet" href="../css/style.css"/>
		<link rel="stylesheet" href="../css/apropos.css"/>
		<link rel="stylesheet" href="../css/style-ms.css"/>
		<link rel="stylesheet" href="../css/apropos-ms.css"/>
		<script
		  src="https://code.jquery.com/jquery-3.4.1.js"
		  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		  crossorigin="anonymous"></script>
		<script type="text/javascript" src="../js/js.js"></script>
	
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
		
		<section id="nospartenaires">
			<h1>Nos différents partenaires</h1>
			
			<div>
				<div>
					<h2>NORD MEDICAL SERVICE</h2>
					<p>NMS s’adresse aux particuliers : personnes âgées, dépendantes, handicapées et aux profesionnels de la santé.</p>
					<a href="http://lavieadomicile.com/accueil_025.htm">Leur site web :http://lavieadomicile.com </a>
				</div>
				<img src="../images/logonms.png" alt="Logo NMS"/>
			</div>
			
			<div>
				<div>
					<h2>ADSM NORD (Association des Devenus Sourds et Malentendants du Nord)</h2>
					<p>Dans le nord, l'ADSMN vous accompagne et vous guide pour obtenir un appareillage et trouver des solutions adaptées. Nous organisons des rencontres, des journées d'information et nous vous défendons sur tout le Nord.</p>
					<a href="https://adsm-nord.org/">Leur site web :http://adsm-nord.org/</a>
				</div>
				<img src="../images/logoadsmn.png" alt="Logo ADSMN"/>
			</div>
			
			<div>
				<div>
					<h2>VAFSFC</h2>
					<p>ASSOCIATION VAFSFC VIVRE AVEC LA FIBROMYALGIEET LE SYNDROME DE FATIGUE CHRONIQUE</p>
					<a href="https://www.fibromyalgienord.fr/">Leur site web :https://www.fibromyalgienord.fr/</a>
				</div>
				<img src="../images/logovafsfc.jpg" alt="Logo VAFSFC"/>
			</div>
			
			<div>
				<div>
					<h2>AFGS (Association Française du Gougerot Sjögren et des syndromes secs)</h2>
					<p>L'Association Française du Gougerot Sjögren et des Syndromes Secs (AFGS) est une association loi de 1901 à but non lucratif, créée en 1990, reconnue d'utilité publique et agréée par le Ministère de la Santé pour représenter les usagers dans les instances hospitalières ou de santé publique.</p>
					<a href="https://www.afgs-syndromes-secs.org/">Leur site web :https://www.afgs-syndromes-secs.org/</a>
				</div>
				<img src="../images/logoafgs.png" alt="Logo AFGS"/>
			</div>
			
			<div>
				<div>
					<h2>Institut supérieur d'ostéopathie</h2>
					<p>Avec la clinique ostéopathique de Lille, votre consultation à 15€ seulement(tarif partenaire).</br>57 Rue Salvador Allende, 59120 Loos</br>03 20 90 96 54</p>
					<a href="http://www.lille-osteopathie.fr/">Leur site web :http://www.lille-osteopathie.fr/</a>
				</div>
				<img src="../images/logoos.png" alt="Logo osteopathie"/>
			</div>
			
		</section>

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
	
	
	</body>
</html>
