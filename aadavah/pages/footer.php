
<div>

	<a href="../pages/nous-contacter.php" id="contacter"><img src="../images/fleche.png"/>Nous contacter</a>

	<h5>Liens utiles;</h5>
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
				<a href="../admin/ajout.php">Espace administrateur</a>
			<?php
		}
		else
		{
			?>
				<a href="../admin/connexion.php">Connexion</a>
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
	
	<a href="../a-propos/tarif.php" id="tarif">Tarif</a>

</div>


<script>
	function deco(){
		$("html").load("../admin/load.php?action=deconnection");	
		setTimeout(function(){ document.location.href="../index.php"; }, 200);
	} 	
</script>
