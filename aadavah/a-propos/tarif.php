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
		
		<section id="tarifsection">
			<div>
			<h1>Tarif</h1>
			
			<table>
				
				<tr>
					<td class="tarif-bright"><b>Adhésion</b></td>
					<td class="tarif-bleft"><b>205€</b></td>
				</tr><tr>
					<td class="tarif-bright"><b>Cotisation Simple</b></td>
					<td class="tarif-bleft"><b>67€</b></td>
				</tr><tr>	
					<td class="tarif-bright"><b>Cotisation Familiale</b></td>
					<td class="tarif-bleft"><b>120€</b></td>
				</tr><tr>
					<td class="tarif-bright"><b>T.C.I de Lille - Douai</b></td>
					<td class="tarif-left"><b>75€</b></td>
				</tr><tr>	
					<td class="tarif-bright"><b>T.C.I de Valenciennes/Arras/Calais</b></td>
					<td class="tarif-bleft"><b>90€</b></td>
				</tr><tr>	
					<td class="tarif-bright"><b>Hors Région</b></td>
					<td class="tarif-bleft"><b>75€ + Frais Réel</b></td>
				</tr>
				
			</table>
			
			<p>Le montage d'un dossier <strong>M.D.P.H</strong> pour un non Adhérent coûtera : <b>10€</b></p>
			<p>Les <strong>frais d'assistance</strong> aux expertises coûtera : <b>75€</b></p>
		
			</div>
		
		</section>

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
	
	
	</body>
</html>
