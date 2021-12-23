 <?php 
   session_start();
   include("../obj/Users.php");
    include("../obj/BDD.php");
    $bdd = new BDD("aadvahfrzdaadvah", "aadvahfrzdaadvah.mysql.db", "aadvahfrzdaadvah", "Vandri7335");
	
?>

<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
		<title>Connexion</title> 
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
	
		<?php 
			if(isset($_SESSION["login"])){
				?>
					<script>document.location.href="ajout.php";</script>
				<?php
			}
		?>
	
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
		
		<section id="connexion">
			
		<?php
			if(isset($_POST['login'],$_POST['password'])&& $_POST['login'] != "" && $_POST['password'] != "")
			{
				$usr = new Utilisateur($_POST["login"], $_POST["password"]);
			  
				if($usr->login($bdd)==true)
				{
					$usr->createSession();
				}
				else
				{
					echo "<div id='erreur' class='fadeInDown '>Utilisateur ou mot de passe inconnu </div>";
				}
			}
			
			if(isset($_SESSION["login"]) && $_SESSION['login'] != "")
			{
				?>
					<script>document.location.href="ajout.php";</script>
				<?php
				
			}
			else
			{
		?>
	
				
			
					<div class="wrapper fadeInDown">
						<h1 id="cotitre">Connexion</h1>
						<div id="formContent">
							<form action="" method="POST">
							<input type="text" id="login" class="fadeIn second" name="login" placeholder="Nom Utilisateur" required>
							<input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
							<input type="submit" class="fadeIn fourth" value="Connexion">
							</form>
						</div>
					</div>
					
				
		
		
		<?php 
			}
		?>
		
		</section>
		
	
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>

	</body>
</html>
