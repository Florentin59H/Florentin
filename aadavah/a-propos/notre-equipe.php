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
		
		<section id="notreequipe">
		
				<h1>Notre équipe</h1>
		
				<div>
					<div>
						<img src="../images/ne-regis.jpg" alt="photo regis"/>
						<div class="sousdiv">Président</br>REGIS</div>
					</div>
					
					<div>
						<img src="../images/ne-annick.jpg" alt="photo annick"/>
						<div class="sousdiv">VICE PRÉSIDENTE</br>ANNICK</div>
					</div>
					
					<div>
						<img src="../images/ne-mathilde.jpg" alt="photo mathilde"/>
						<div class="sousdiv">JURISTE</br>MATHILDE</div>
					</div>
					
					<div>
						<img src="../images/ne-marieannick.jpg" alt="photo marie annick"/>
						<div class="sousdiv">SECRÉTAIRE GÉNÉRALE</br>MARIE ANNICK</div>
					</div>
					
					<div>
						<img src="../images/ne-lydia.JPG" alt="photo lydia"/>
						<div class="sousdiv">SECRÉTAIRE 2ème ADJOINTE</br>LYDIA</div>
					</div>
					
					<div>
						<img src="../images/ne-christine.jpg" alt="photo christine"/>
						<div class="sousdiv">TRÉSORIÈRE ADJOINTE</br>CHRISTINE</div>
					</div>
					
					<div>
						<img src="../images/ne-anita.jpg" alt="photo anita"/>
						<div class="sousdiv">TRÉSORIÈRE 2ème ADJOINTE</br>ANITA</div>
					</div>
					
					<div>
						<img src="../images/ne-jean.jpg" alt="photo jean"/>
						<div class="sousdiv">CLASSEMENT ET ARCHIVE</br>JEAN</div>
					</div>
					
					
				</div>
				
		</section>
				
			

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
	
	
	</body>
</html>
