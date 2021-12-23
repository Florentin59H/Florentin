<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
		<title>Accueil AADVAH</title> 
		<meta name="auteur" content="Florentin Havart" />
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/style-ms.css"/>
		<script
		  src="https://code.jquery.com/jquery-3.4.1.js"
		  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		  crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/js.js"></script>
		
		<meta name="description" content="L'AADVAH assure la défense individuelle des assurés sociaux et de leur famille et permet l’amélioration des législations les concernant." />
		
		<link rel="icon" type="image/png" href="images/favicon2.png" />
	
	</head>

	<body>
	
		<header id="header-nav">
			<a href="index.php"><img id="logoaadvah"  src="images/logoaadvah2.png" alt="Logo AADVAH"/></a>
			
			<nav id="nav">
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="nos-actions/nos-actions.php" id="nosactions">Nos actions</a><span></span>
						<ul class="subnav">
							<li><a href="nos-actions/lamdphmaisondepartementaledespersonneshandicapees.php">La MDPH (Maison Départementale des Personnes Handicapées)</a></li>
							<li><a href="nos-actions/lesaccidentsdutravail.php">Les accidents du travail</a></li>
							<li><a href="nos-actions/lesmaladiesprofessionnelles.php">Les maladies professionnelles</a></li>
							<li><a href="nos-actions/accidentdelaroute.php">Accident de la route</a></li>
							<li><a href="nos-actions/limportancedelexpertisemedico-legale.php">L’importance de l’expertise médico-légale</a></li>
						</ul>
					</li>
					<li><a href="a-propos/a-propos.php" id="apropos">A propos</a><span></span>
						<ul class="subnav">
							<li><a href="a-propos/tarif.php">Tarif</a></li>
							<li><a href="a-propos/notre-equipe.php">Notre équipe</a></li>
							<li><a href="a-propos/nos-partenaires.php">Nos partenaires</a></li>
							<li><a href="a-propos/historique.php">Historique</a></li>
						</ul>
					</li>
					<li><a href="pages/actualites.php">Actualités</a></li>
					<li><a href="pages/nous-contacter.php">Nous contacter</a></li>
				</ul>
			</nav>
		
		</header>
		
		
		<div class="three col">
			<div class="hamburger" id="hamburger-8">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>
		</div>
		
		
		<section id="main">
			<img id="logoaadvahmain"  src="images/logoaadvah2.png" alt="Logo AADVAH"/>
			<h1><strong><span>A</span>ssociation <span>A</span>ide à la <span>D</span>éfense des <span>V</span>ictimes <span>A</span>ccidentées et <span>H</span>andicapées</strong></h1>
		</section>
		
		
		<section id="vous">
			<h3>Vous</h3>
			<div>
				<div>
					<h4>Vous avez été victime</h4>
					<ul>
						<li>D'un accident du travail ou de la circulation</li>
						<li>D'une maladie professionnelle</li>
						<li>D'un accident sportif</li>
						<li>D'un accident de la vie privée ou domestique</li>
					</ul>
					<div class="texte"></div>
				</div>
				<div>
					<h4>Vous êtes</h4>
					<ul>
						<li>Malade</li>
						<li>Handicapé</li>
						<li>Retraité</li>
						<li>Demandeur d'emploi</li>
						<li>En activité</li>
					</ul>
				</div>
				<div>
					<h4>Vous avez des litiges</h4>
					<ul>
						<li>Avec les organismes sociaux</li>
						<li>Avec votre employeur</li>
						<li>Avec vos assurances</li>
						<li>D'allocations</li>
						<li>De pensions</li>
						<li>De retraites</li>
					</ul>
				</div>
			</div>
		</section>
		
		
		<section id="nous">
			<h3>Nous</h3>
			<div>
				<div>
					<p><strong>L'A.A.D.V.A.H</strong> défend vos intérêts et fait respecter vos droits</p>
					<p> <strong>L'A.A.D.V.A.H</strong> est une association forte de 600 adhérents.</p>	
				</div>
				<div>
					<h4><strong>L'A.A.D.V.A.H. est là</strong></h4>	
					<ul>
						<li>Pour vous renseigner</li>
						<li>Pour vous conseiller</li>
						<li>Pour vous aider</li>
						<li>Pour vous défendre</li>
						<li>Pour vous représenter</li>
					</ul>
				</div>
				<div>
					<p><strong>L'A.A.D.V.A.H</strong> Met à votre disposition la compétence d'un service juridique et médical avec <strong>AVOCAT</strong> et <strong>MÉDECIN  EXPERT</strong>.</p>
				</div>
			</div>
		</section>
		
		
		<section id="accueilactu">
			<script>
				$("#accueilactu").load("admin/load.php?action=accueilactu");
			</script>
		</section>
		
		
		<footer>
			<div>
				<a href="pages/nous-contacter.php" id="contacter"><img src="images/fleche.png"/>Nous contacter</a>
				<h5>Liens utiles:</h5>
				<ul>
					<li><a href="http://www.ville-seclin.fr/">Ville de Seclin</a></li>
					<li><a href="https://www.facebook.com/aadvah">FACEBOOK de l'A.A.D.V.A.H</a></li>
					<li><a href="https://www.ameli.fr/assure">Caisse Primaire d'Assurance Maladie</a></li>
					<li><a href="https://lenord.fr/jcms/pnw_5412/la-maison-departementale-des-personnes-handicapees">MDPH</a></li>
				</ul>
				
				<?php
					if(isset($_SESSION["login"])){
				?>
					
						<a onclick="deco()">Déconnexion</a>
						<a href="admin/ajout.php">Espace administrateur</a>
					
				<?php
					}
					else
					{
				?>
						<a href="admin/connexion.php">Connexion</a>
				<?php
					}
				?>

			</div>
			<div>
				<div>	
					<span>
						<h5>Permanence télephonique</h5>
						<ul>
							<li>Du mardi au vendredi</li>
							<li>9h30 à 12h / 13h à 18h</li>
							<li>Samedi 9h30 à 11h</li>
						</ul>
					</span>

					<span>
						<h5>Horaire d'ouverture</h5>
						<ul>
							<li>Mercredi de 14h à 18h</li>
							<li>Vendredi de 14h à 18h</li>
							<li>Samedi de 9h à 11h</li>
						</ul>
					</span>
				</div>
				<a id="tarif">Tarif</a>
			</div>
		</footer>
	
	
	</body>
</html>


<script>
	function deco(){
		$("html").load("admin/load.php?action=deconnection");	
		setTimeout(function(){ document.location.href="index.php"; }, 200);
	} 	
</script>
