 <?php 
   session_start();
   include("../obj/Users.php");
    include("../obj/BDD.php");
    $bdd = new BDD("aadvahfrzdaadvah", "aadvahfrzdaadvah.mysql.db", "aadvahfrzdaadvah", "Vandri7335");
	
	
	if(!isset($_SESSION["login"])){
		?>
			<script>document.location.href="../index.php";</script>
		<?php
	}
		
	
?>

<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
		<title>ajout</title> 
		<meta name="auteur" content="Florentin Havart" />
		<link rel="stylesheet" href="../css/style.css"/>
		<link rel="stylesheet" href="../css/admin.css"/>
		<link rel="stylesheet" href="../css/style-ms.css"/>
		<link rel="stylesheet" href="../css/admin-ms.css"/>
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
		
		<section id="ajout">
		
			<?php
			
				if(isset($_POST["titre"],$_POST["description"]) && $_POST["titre"] != "" && $_POST["description"] != ""){
					
					if(empty($_POST["dateev"]) && isset($_POST["dateevfin"]) && $_POST["dateevfin"] != ""){
						
						echo "<script>alert('Vous ne pouvez ma mettre de deuxiéme date si la premiére n est pas remplie')</script> ";
						
					}					
					else{
						
						$titre=htmlspecialchars($_POST["titre"]);
						$description=htmlspecialchars($_POST["description"]);
						
						$titre  = str_replace("'", "''", $titre);
						$titre  = str_replace('"', '""', $titre);
						
						$description  = str_replace("'", "''", $description);
						$description  = str_replace('"', '""', $description);
						
						
						

						if(isset($_POST["dateev"]) && $_POST["dateev"] != "" && empty($_POST["dateevfin"]) ){
							//avec date
							$req="INSERT INTO `evenements`(`titre`, `description`, `dateev`) VALUES ('".$titre."','".$description."','".$_POST["dateev"]."')";
							
						}
						else if(isset($_POST["dateev"],$_POST["dateevfin"]) && $_POST["dateev"] != "" && $_POST["dateevfin"] != ""){
							$req="INSERT INTO `evenements`(`titre`, `description`, `dateev`,`dateevfin`) VALUES ('".$titre."','".$description."','".$_POST["dateev"]."','".$_POST["dateevfin"]."')";
							
						}
						else
						{
							//sans sate
							$req="INSERT INTO `evenements`(`titre`, `description`) VALUES ('".$titre."','".$description."')";
							
						}	
						
						
						
						$bdd->executer($req);
						$id=($bdd->dbo->lastInsertId());
							
							
						if($_FILES['img']['tmp_name'][0]!=""){
							
							$file_count = count($_FILES['img']["name"]);

							for ($i=0; $i<$file_count; $i++) {
								
								$filename = "../upload/".date("d-m-Y")."_".$id."_". $_FILES['img']['name'][$i];
								move_uploaded_file($_FILES['img']['tmp_name'][$i], $filename);
								$req="INSERT INTO `upload`( `idevenement`, `lien`) VALUES (".$id.",'".$filename."')";
								$bdd->executer($req);
								
							}
							
						}
					}
				}
	
			?>
		
		
		
			<form action="" method="POST" enctype="multipart/form-data">
			
				<h1 class="fadeIn first">Rajouter une actualité</h1>
			
				<input type="text" id="titre" class="fadeIn first" name="titre" placeholder="Titre de l'évènement/actualité" required>
				<textarea  id="description" class="fadeIn first" name="description" placeholder="Description Titre de l'évènement/actualité"required></textarea>
				
				<div class="fadeIn first">
					<input type="date" id="dateev"  name="dateev">
					Au
					<input type="date" id="dateevfin"  name="dateevfin">
				</div>
					
				<input type="file" id="img" class="fadeIn first" name="img[]" multiple>
				
				<input type="submit" class="fadeIn second" value="Rajouter l'évènement/actualité">
		
			</form>
		
		
		</section>
		
	
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>

	</body>
</html>
