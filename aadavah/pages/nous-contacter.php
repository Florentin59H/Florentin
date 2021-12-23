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
		<link rel="stylesheet" href="../css/nouscontacter.css"/>
		<link rel="stylesheet" href="../css/style-ms.css"/>
		<link rel="stylesheet" href="../css/nouscontacter-ms.css"/>
		<script
		  src="https://code.jquery.com/jquery-3.4.1.js"
		  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		  crossorigin="anonymous"></script>
		<script type="text/javascript" src="../js/js.js"></script>
		<script src="https://www.google.com/recaptcha/api.js?render=6LcxKK8UAAAAADhqnS71sdMfNbQsEs6JI3C7KhlA"></script>
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
		
		<section id="nouscontacter">
		
		<div>
				<div>	
					<strong>SIÈGE SOCIAL :</strong> 12 rue des Comtesses de Flandre B.P.90412 59474 SECLIN CEDEX</br>
					<strong>Tél :</strong> 09 75 20 76 28</br>
					<strong>Fax :</strong> 03 20 32 77 81</br>
					<strong>Email :</strong> aadvah@wanadoo.fr</br>                                                                                                                     
				</div>

				<div>	
						
					<span>
						<h5>Permanence téléphonique</h5>
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
					<p>Fermeture des portes 15 minutes avant.</p>
				</div>
			</div>
			
			

			<?php
			
			 
			
				if(isset($_POST['nom'],$_POST['prenom'],$_POST['message'],$_POST['numtel'])&& $_POST['nom'] != "" && $_POST['prenom'] != "" && $_POST['message'] != "" && $_POST['numtel'] != ""){
					
						function getcaptcha($secretkey){					
							$reponse=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcxKK8UAAAAAGYls1SHS_cB28XzF8Ie-RIJMLaQ&response={$secretkey}");
							$return= json_decode($reponse);
							return $return;
						}
				
					$return=getcaptcha($_POST["g-recaptcha-response"]);
				
					//var_dump($return);
					if($return->success == true && $return->score > 0.5){
						//echo "bon";		
					
						
						$header = "MIME-Version: 1.0 \n";
						$header .= "Content-type:text/html;charset=UTF-8 ";
						//$header .= "Content-Transfer-Encoding: 8bit";
						
						
						if($_POST['nouscontacteradherent'] == "adherent" && isset($_POST["numadherent"]) && $_POST["numadherent"] != "") {   
							//adherent
							
							if(isset($_POST['mail']) && $_POST['mail'] != ""){
								$mail=$_POST['mail'];
							}
							else{
								$mail="pas d adresse mail";
							}
						
							$message='
							
							<html>
								<body>
								
									Prénom: <b>'.$_POST['prenom'].'</b></br>
									Nom: <b>'.$_POST['nom'].'</b></br>
									</br>
									Numéro de Télephone: <b>'.$_POST['numtel'].'</b></br>
									Mail:<b>'.$mail.'</b>
									</br>
									</br>
									<strong>Adhérent</strong></br>
									Numéro adherent:<b>'.$_POST["numadherent"].'</b></br>
									</br>
									Message:</br>
									'.$_POST["message"].'
									
									
								</body>
							</html>	
							
							';
						
						
							//echo $message;
							mail("aadvah@wanadoo.fr","Formulaire site internet adherent",$message,$header);
							//var_dump($resultat);
						
						
						}
						else if($_POST['nouscontacteradherent'] == "nonadherent"){
							//pas adherent
						
								
							if(isset($_POST['mail']) && $_POST['mail'] != ""){
								$mail=$_POST['mail'];
								}
							else{
								$mail="pas d adresse mail";
								}
						
							$message='
							
							<html>
								<body>
								
									Prénom: <b>'.$_POST['prenom'].'</b></br>
									Nom: <b>'.$_POST['nom'].'</b></br>
									</br>
									Numéro de Télephone: <b>'.$_POST['numtel'].'</b></br>
									Mail:<b>'.$mail.'</b>
									</br>
									</br>
									<strong>Non Adhérent</strong></br>
									</br>
									Message:</br>
									'.$_POST["message"].'
									
									
								</body>
							</html>	
							
							';
						
						
							//echo $message;
							mail("aadvah@wanadoo.fr","Formulaire site internet non adhérent",$message,$header);
							//var_dump($resultat);
							
						}
						
					}
					else{
						echo"Recharger la page (Captchat incorrect)";
					} 					
				}
			
			
			
			
			

			
			
			?>
			
			
	
			<div id="nouscontacter-formulaire">
		
				<h5>Vous pouvez directement nous contacter par email en remplissant le formulaire suivant:</h5>
		
				<form action="" id="nouscontacterform" method="POST">
                    <input type="text" name="nom" placeholder="Votre Nom" required/><br/>
					<input type="text" name="prenom" placeholder="Votre Prénom" required/><br/>
					
					<input type="mail" name="mail" placeholder="Votre Mail" /><br/>
					<input type="tel" name="numtel" placeholder="Votre numéro de Télephone" required/><br/>
					
					
			
					<div class="bradionad">
						<input type="radio" class="adoupas" name="nouscontacteradherent" value="adherent" checked>
						<label for="adherent">Vous êtes adhérent:</label>
					</div>
					
					


					<div class="bradionad">
						<input type="radio" class="adoupas" name="nouscontacteradherent" value="nonadherent">
						<label for="nomadherent">Vous êtes pas adhérent:</label>
					</div>
					
					
					<div id="nouscontacternumadherent">
						<input type="number" name="numadherent" placeholder="Votre numméro d adherent" required/>
					</div>
		
				
					<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
				
					<input id="formadmessage" type="text" name="message" placeholder="Votre Message" required/><br/>
                    <button>Envoyer</button>
                </form>
				
		
			</div>
		
				
		</section>

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
		
		
		<script>
		  grecaptcha.ready(function() {
			  grecaptcha.execute('6LcxKK8UAAAAADhqnS71sdMfNbQsEs6JI3C7KhlA', {action: 'homepage'})
			  .then(function(token) {
				 
					//console.log(token);
					document.getElementById("g-recaptcha-response").value=token;
				 
			  });
		  });
		</script>
	
	
	</body>
</html>
