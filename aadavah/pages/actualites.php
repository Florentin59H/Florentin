<?php
	session_start();
	
?>
<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
		<title>Actualités</title> 
		<meta name="auteur" content="Florentin Havart" />
		<link rel="stylesheet" href="../css/style.css"/>
		<link rel="stylesheet" href="../css/actualite.css"/>
		<link rel="stylesheet" href="../css/actualite-ms.css"/>
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
		
		<section id="actualite">
		

			
		
		</section>

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
	
	
	</body>
</html>


<script>


			
$("#actualite").load("../admin/load.php?action=affichage-actualite&limit=0&numpage=1");


function actualitechangementpage(page){
	
	
	npages=parseInt(page.replace("page",""));
	limit=(npages*5)-5;
	$("#actualite").load("../admin/load.php?action=affichage-actualite&limit="+limit+"&numpage="+npages);
	
}

function envenementsup(idsup){
	
	
	id=parseInt(idsup.replace("bsup",""));
	
	$.ajax({
			  type: "GET",
			  url: "../admin/load.php",
			  data: {
				  "action" : "supevenement",
				  "idev":id
			  },
				success:function(){document.location.href="actualites.php"},
			  dataType: "html"
				  
			});
	
	
	
}





</script>
