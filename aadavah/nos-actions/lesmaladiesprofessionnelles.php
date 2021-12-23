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
		<script type="text/javascript" src="../js/nosactions.js"></script>
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
		
		
		<section class="nosactionsnavigation">
			<h2>Les maladies professionnelles</h2>
			<span id="spanaction"></span>
			
			<ul> 
				<li class="nosactions-maladie-lia lieta"><a class="nosactions-maladie-lia lieta" href="#nosactions-maladie-a">Les grandes étapes de la procédure de reconnaissance des maladies professionnelles inscrites dans les tableaux</a></li>
				<li class="nosactions-maladie-lib lieta"><a class="nosactions-maladie-lib lieta" href="#nosactions-maladie-b">Le système complémentaire de reconnaissance des maladies professionnelles</a></li>
			</ul>
		
		</section>
		
		<section id="nosactionsmaladiespro" class="nosactionssection">
		
			<h1 class="nosactionsh1">Les maladies professionnelles</h1>
					
			<div id="nosactions-maladie-a">
			
				<h2 class="nosactionsh2">I)Les grandes étapes de la procédure de reconnaissance des maladies professionnelles inscrites dans les tableaux sont les suivantes :</h2>
				<h3 class="nosactionsh3">1)Le certificat médical initial (CMI) :</h3>
				<p class="nosactionsp">Ce certificat est rédigé par le médecin qui constate la maladie professionnelle. Il devrait logiquement être fait lors de la première constatation médicale de la maladie qui représente la date à partir de laquelle est évalué le délai de prise en charge de la maladie professionnelle. En pratique, le CMI est fait à des stades très divers de la maladie en cause. « Le praticien établit en triple exemplaire et remet à la victime un certificat indiquant la nature de la maladie, notamment les manifestations mentionnées aux tableaux et constatées ainsi que les suites probables. » (Art. L 461-5 du code de la sécurité sociale)</p>
				<h3 class="nosactionsh3">2)La déclaration :</h3>
				<p class="nosactionsp">Il existe une différence importante entre les maladies professionnelles et les accidents du travail : la déclaration de maladie professionnelle est faite par la victime.</p>
				<p class="nosactionsp">« Toute maladie professionnelle dont la réparation est demandée doit être, par les soins de la victime, déclarée à la caisse primaire dans un délai déterminé à compter de la cessation du travail...</p>
				<p class="nosactionsp">Deux exemplaires du certificat médical doivent compléter la déclaration... Une copie de cette déclaration et un exemplaire du certificat médical sont transmis immédiatement par la caisse primaire à l’inspecteur du travail chargé de la surveillance de l’entreprise. » (art. L 461-5).</p>
				<h3 class="nosactionsh3">3)L’instruction du dossier :</h3>
				<p class="nosactionsp">Si, dans un délai de soixante jours, la caisse primaire n’a pas adressé de réponse à la victime, la maladie professionnelle est reconnue de droit en maladie professionnelle. Pour éviter d’avoir à statuer dans le cadre de ce délai, les caisses adressent à la victime ou à ses ayants droit une lettre dite de « contestation préalable » ou de « réserves de principe », indiquant que le caractère professionnel de la pathologie présentée doit faire l’objet d’une enquête. Cette contestation préalable du caractère professionnel de la pathologie permet ensuite aux caisses de ne plus être tenues par aucun délai réglementaire</p>.
				<h4 class="nosact">Un tableau de maladie professionnelle comporte trois parties :</h4>

				<ul class="nosactionsul">	
					<li class="nosactionsli">La liste limitative des affections ou manifestations pathologiques inscrites dans ce tableau ;</li>
					<li class="nosactionsli">Le délai de prise en charge, délai entre la cessation d’exposition et la première constatation médicale de la maladie ;</li>
					<li class="nosactionsli">La liste indicative ou limitative des travaux susceptibles de provoquer ces maladies.</li>
				</ul>

				<p class="nosactionsp">Pour toutes les maladies professionnelles, à l’exception des pneumoconioses, c’est le médecin-conseil qui est chargé de donner un avis médico-légal sur la pathologie déclarée. Cet avis médical revêt un caractère technique.</p>
				<p class="nosactionsp">Les pneumoconioses sont régies par une législation particulière qui fait intervenir un médecin agréé en pneumoconiose ou le collège des trois médecins.</p>
				<p class="nosactionsp">Les conditions administratives de reconnaissance (délai de prise en charge, exposition au risque) sont examinées par les services administratifs des caisses primaires qui enquêtent sur l’exposition. Ils peuvent solliciter les services prévention de la caisse régionale d’assurance maladie (CRAM) ou l’inspection du travail, afin de recueillir des éléments d’information sur les conditions de travail dans l’entreprise concernée.</p>
				<h3 class="nosactionsh3">4)La première notification :</h3>
				<p class="nosactionsp">Quelles que soient les conditions d’instruction des dossiers (et sauf dans le cas des pneumoconioses où cette décision relève de l’expert ou du collège des trois médecins), la décision de reconnaissance ou de rejet revient à la caisse primaire (généralement le chef du service accidents de travail/maladie professionnelle) qui statue au regard de l’avis du médecin-conseil et des conditions administratives.</p>
				<h3 class="nosactionsh3">5)Le contentieux :</h3>
				<p class="nosactionsp">En cas de notification de rejet, les victimes (ou leurs ayants droit) ont deux mois pour faire appel de la décision de la caisse. Ce délai est impératif. En cas de dépassement, le dossier est rejeté sans être examiné.</p>
				<p class="nosactionsp">Le premier niveau de recours est la commission de recours amiable composée de membres du conseil d’administration de la caisse qui a pris la décision contestée.</p>
				<p class="nosactionsp">Si la commission de recours amiable n’a pas fait connaître sa décision dans le délai d’un mois à compter de la réception par elle de la réclamation, l’assuré (ou ses ayants droit) peut faire appel auprès du tribunal des affaires de sécurité sociale (TASS) présidé par un magistrat ou un magistrat honoraire de l’ordre judiciaire (loi n° 85-10 du 3 janvier 1985).</p>
				<p class="nosactionsp">En cas de rejet de décision de la commission de recours amiable, et si l’assuré veut à nouveau contester cette décision, l’appel auprès du TASS doit être fait dans un délai de deux mois.</p>
				<p class="nosactionsp">Devant le TASS et la Cour d’appel il est possible de demander l’avis d’un expert judiciaire compétent en la matière.</p>
				<p class="nosactionsp">Les décisions du TASS peuvent faire l’objet d’un appel devant la chambre sociale de la Cour d’Appel.</p>
				<p class="nosactionsp">Une procédure de contentieux technique est prévue pour les différends concernant l’invalidité, l’inaptitude ou l’incapacité permanente.</p>

			</div>
			
			<div id="nosactions-maladie-b">

				<h2 class="nosactionsh2">II)Le système complémentaire de reconnaissance des maladies professionnelles :</h2>
				<h3 class="nosactionsh3">I)reglementation :</h3>
				<p class="nosactionsp">Le système complémentaire de réparation introduit par la loi du 27 janvier 1993 (loi n° 93-121 codifié aux troisième et quatrième alinéas de l’article L 461-1 du Code de la Sécurité Sociale ), permet à des travailleurs dont la maladie n’est pas inscrite dans un tableau, ou qui ne répondent pas aux critères qui y figurent, de prétendre à une réparation au titre des maladies professionnelles, sous réserve que l’origine professionnelle de l’affection soit démontrée à la suite d’une instruction contradictoire de la demande. Ce système prévoit 2 procédures complémentaires au système des tableaux de maladies professionnelles, qui permettent à la caisse primaire de reconnaître l’origine professionnelle d’une maladie, après avis motivé d’un Comité Régional de Reconnaissance des Maladies Professionnelles (CRRMP).</p>
				<h4 class="nosactionsh4">1)Article L 461-1 alinéa 3 du Code de la Sécurité Sociale :</h4>
				<p class="nosactionsp">Si, au sein des maladies désignées dans les tableaux, une ou plusieurs conditions tenant au délai de prise en charge, à la durée d’exposition ou à la liste limitative des travaux, ne sont pas remplies, la maladie peut être reconnue d’origine professionnelle lorsqu’il est établi qu’elle est directement causée par le travail habituel de la victime. L’absence d’une ou de plusieurs conditions administratives n’est donc plus un obstacle définitif à la reconnaissance de la maladie professionnelle. Par contre, les conditions médicales figurant dans le tableau restent d’application stricte. De plus, la victime ne bénéficie plus de la "présomption d’origine" ; le lien direct entre la maladie et le travail doit être établi.</p>
				<h4 class="nosactionsh4">2)Article L 461-1 alinéa 4 du Code de la Sécurité Sociale :</h4>
				<p class="nosactionsp">Peut être également reconnue d’origine professionnelle, une maladie caractérisée non désignée par un tableau de maladie professionnelle, lorsqu’il est établi qu’elle est essentiellement et directement causée par le travail habituel de la victime, et qu’elle entraîne le décès de celle-ci ou une incapacité permanente partielle d’un taux supérieur ou égal à 25 % (Décret 2002-543 du 18/04/02).</p>
				<p class="nosactionsp">Dans ce cas de reconnaissance "hors tableau", la présomption d’origine disparaît également, et par conséquent, la preuve de la relation causale devra être apportée.</p>
				<h3 class="nosactionsh3">II) comite regional de reconnaissance des maladies professionnelles :</h3>
				<p class="nosactionsp">Le rôle du CRRMP est très important. Il doit permettre d’apprécier l’existence d’un lien de causalité entre la pathologie de l’assuré et son activité professionnelle habituelle.</p>
				<h4 class="nosactionsh4">1)Composition :</h4>
				<h5 class="nosactionsh5">Chaque comité régional comprend :</h5>
				<ul class="nosactionsul">
					<li class="nosactionsli">Le médecin conseil régional ou un médecin conseil de l’échelon régional qu’il désigne pour le représenter ;</li>
					<li class="nosactionsli">Le médecin inspecteur régional du travail ou un médecin inspecteur qu’il désigne pour le représenter ; </li>
					<li class="nosactionsli">Un professeur d’université, praticien hospitalier ou un praticien hospitalier particulièrement qualifié en matière de pathologie professionnelle, ainsi que des suppléants nommés pour 4 ans par le préfet de région sur proposition du directeur régional des affaires sanitaires et sociales. Ces comités sont au nombre de 16 en métropole, et d’un pour les départements des Antilles et de la Guyane auquel s’ajoute une circonscription départementale pour le département de la Réunion. Le ressort territorial de ces comités correspond à l’échelon régional du contrôle médical de la CNAM.</li>
				</ul>
				<h4 class="nosactionsh4">2)Mission :</h4>
				<p class="nosactionsp">Sur la base d’un dossier constitué par la CPAM, le comité est chargé d’établir le lien direct entre le travail habituel de la victime, et la maladie dont elle revendique la réparation.</p>
				<h4 class="nosactionsh4">3)Caractéristiques :</h4>
				<p class="nosactionsp">Les membres du comité sont tenus au secret médical, en ce qui concerne les éléments du dossier dont ils ont pu avoir connaissance. Les frais d’examens complémentaires demandés par ce comité, sont pris en charge par la CPAM, de même que les éventuels frais de déplacement des victimes.</p>
				<p class="nosactionsp">Le comité compétent est celui du lieu de résidence de la victime.</p>
				<p class="nosactionsp">Les avis des comités s’imposent aux caisses.</p>
				<h4 class="nosactionsh4">4) Modalités d’instruction :</4>
				<p class="nosactionsp">Le médecin conseil au niveau des CPAM instruit le dossier avant de le soumettre au CRRMP. Il confirme le diagnostic de la maladie susceptible de relever d’une reconnaissance de maladie professionnelle, porte un diagnostic caractérisé, et évalue la stabilisation de cette maladie, de façon à fixer une IPP prévisionnelle.<p class="nosactionsp">
				<h5 class="nosactionsh5">a)Composition du dossier :</h5>
				<h6 class="nosactionsh6">Les pièces du dossier sont :</h6>
				<ul class="nosactionsul">
					<li class="nosactionsli">Une demande motivée de reconnaissance, signée par la victime ou ses ayants droit et un questionnaire normalisé (certificat médical initial…) rempli par un médecin choisi par la victime ; </li>
					<li class="nosactionsli">Un avis motivé du ou des médecins du travail de la (des) entreprise(s) où la victime a été employée, portant sur la maladie et la réalité de l’exposition de la victime à un risque professionnel présent dans cette (ces) entreprise(s) qui doit parvenir dans un délai de un mois à compter de la demande de la caisse ; </li>
					<li class="nosactionsli">Un rapport circonstancié du (ou des) employeur(s) de la victime, décrivant chaque poste détenu par celle-ci depuis son entrée dans l’entreprise qui doit parvenir dans un délai de un mois à compter de la demande de la caisse ; </li>
					<li class="nosactionsli">Les conclusions des enquêtes contradictoires conduites par les caisses compétentes ;</li>
					<li class="nosactionsli">Le rapport établi par le médecin conseil de la CPAM sur la pathologie de la victime et ses causes probables, ainsi que le rapport d’évaluation du taux d’incapacité permanente de la victime.</li>
				</ul>
				<h5 class="nosactionsh5">b)Fonctionnement du comité :</h5>
				<p class="nosactionsp">Une fois saisi, le CRRMP dispose de 4 mois pour rendre son avis, et de 2 mois supplémentaires lorsqu’il y a nécessité d’examen ou d’enquête complémentaires.</p>
				<p class="nosactionsp">L’ensemble du dossier est rapporté devant le comité par le médecin conseil qui a examiné la victime ou qui a statué sur son taux d’incapacité permanente.</p>
				<p class="nosactionsp">Le comité doit entendre l’ingénieur conseil du service de prévention de la CRAM. Il a également toute latitude pour entendre la victime et l’employeur, et peut s’entourer de tous les avis nécessaires, notamment celui de l’inspection du travail.</p>
				<p class="nosactionsp">L’avis du comité est rendu à la CPAM qui doit le notifier aux personnes concernées, victime ou ayants droit et employeurs.</p>
				<h5 class="nosactionsh5">5)Contentieux :</h5>
				<p class="nosactionsp">Les litiges concernant le refus de reconnaissance du caractère professionnel de la maladie suivent la voie normale du contentieux général, avec examen devant les commissions de recours amiable, le tribunal des affaires de sécurité sociale, et en appel, devant la cour d’appel.</p>
				
			</div>
	
		</section>

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
		
		<script>
			var offseta=$("#nosactions-maladie-a").offset();
			var offsetb=$("#nosactions-maladie-b").offset();
			
			nosactionsmaladie();
			$(window).scroll(function () {
				nosactionsmaladie();
			});
		</script>
	
	
	</body>
</html>
