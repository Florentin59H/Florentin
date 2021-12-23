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
			<h2>Les accidents du travail</h2>
			<span id="spanaction"></span>
			<ul> 
				<li class="nosactions-accidentt-lia lieta"><a class="nosactions-accidentt-lia lieta" href="#nosactions-accidentt-a">Notion accident du travail</a></li>
				<li class="nosactions-accidentt-lib lieta"><a class="nosactions-accidentt-lib lieta" href="#nosactions-accidentt-b">Le caractère professionnel de l’accident</a></li>
				<li class="nosactions-accidentt-lic lieta"><a class="nosactions-accidentt-lic lieta" href="#nosactions-accidentt-c">Cas de l’accident de trajet</a></li>
				<li class="nosactions-accidentt-lid lieta"><a class="nosactions-accidentt-lid lieta" href="#nosactions-accidentt-d">Rechute, aggravation</a></li>
			</ul>
		</section>
		
		
		<section id="nosactionsaccidenttravail" class="nosactionssection">
		
			<h1 class="nosactionsh1">Les accidents du travail</h1>
			<p class="nosactionsp">Dans l’arsenal législatif consacré à la prévention, il faut souligner l’importance particulière de deux lois : celle du 6 décembre 1976 et celle du 31 décembre 1991 prises en application des directives européennes en la matière.</p>
			<h5 class="nosactionsh5">Le régime des accidents du travail :</h5>
			<p class="nosactionsp">Voici la définition d’un accident du travail en se référant à l’article L.411-1 et R.412-1 du Code de sécurité sociale : « Est considéré comme accident du travail, qu’elle qu’en soit la cause, l’accident survenu par le fait ou à l’occasion du travail à toute personne salariée, ou travaillant à quelque titre ou en quelque lieu que ce soit, pour un ou plusieurs employeurs ou chefs d’entreprise ».</p>
			<div id="nosactions-accidentt-a">
			<h2 class="nosactionsh2">1)Notion accident du travail :</h2>
			<p class="nosactionsp">Traditionnellement l’accident est défini comme une lésion de l’organisme provoquée par l’action violente d’une cause extérieure, avec toutes les ambiguïtés et les délimitations de frontières délicates avec la maladie dont l’état pathologique n’a pas une cause traumatique externe, mais une cause physiologique interne.</p>
			<ul class="nosactionsul">
				<li class="nosactionsli">L’imputabilité du dommage corporel à l’accident : Il existe un double problème de causalité, lorsque les conséquences de l’accident sont aggravées par des prédispositions pathologiques de la victime ou lorsque l’accident rechute en maladie.</li>
				<li class="nosactionsli">L’imputabilité de l’accident à un état pathologique préexistant : l’état pathologique préexistant peut faciliter hernies, infarctus… qui se déclenchent à l’occasion d’un effort musculaire ou d’une tension dus aux conditions de travail. Alors qu’en droit commun, l’effet déclenchant est généralement considéré comme la cause du dommage corporel, en droit du travail, la jurisprudence a été plus restrictive en estimant que la victime d’un accident du travail atteinte d’une invalidité antérieure ne doit être indemnisée que dans la mesure de son état imputable à l’accident du travail. (C’est d’ailleurs systématique pour les Caisses de sécurité sociale de rechercher chez la victime si il existait un état antérieur sur le plan fonctionnel.)
				<p class="nosactionsp">Cependant depuis 1995, la présomption d’imputabilité que les Caisses de sécurité sociale ont tendance à refuser, se trouve à juste titre réhabilité par la jurisprudence.</p>
				</li>
	
				<li class="nosactionsli">L’imputabilité en cas de rechute : l’article L.443-1 du Code de la sécurité sociale prévoit la révision des prestations en cas de rechute. Mais ici encore l’imputabilité de la rechute, voire du décès, à l’accident lui même et non à une pathologie propre de la victime pose problème en jurisprudence dès lors que l’aggravation paraît spontanée et naturelle.</li>
			<ul>
			
			</div>
			
			<div id="nosactions-accidentt-b">

				<h2 class="nosactionsh2">2)Le caractère professionnel de l’accident :</h2>

				<p class="nosactionsp">Conformément à la définition de l’accident du travail donnée par l’art. L.411-1 du Code de sécurité sociale, le caractère professionnel de l’accident suppose un lien entre l’accident et le travail. En jurisprudence le critère de l’autorité patronale a été essentiellement retenu depuis 1962 : peut être qualifié d’accident du travail tout accident survenu à un travailleur alors qu’il se trouve sous l’autorité de son employeur, deux situations sont donc à analyser :</p>

				<h3 class="nosactionsh3">a)L’accident survenu au temps et au lieu de travail :</h3>

				<p class="nosactionsp">L’accident survenu dans l’entreprise et pendant les horaires de travail, alors que le salarié est soumis à l’autorité ou à la surveillance de son employeur constitue le cas le plus simple d’accident du travail. Il faut cependant noter une interprétation extensive de la jurisprudence qui estime que le salarié est toujours sous la dépendance de l’employeur lorsque l’accident survient après la fin du travail sur un parc de stationnement aménagé par l’employeur à l’extérieur de l’enceinte de l’usine.</p>

				<h3 class="nosactionsh3">b)L’accident de mission :</h3>

				<p class="nosactionsp">L’accident pendant une mission, c’est-à-dire survenu à l’extérieur de l’entreprise, ou le salarié effectue un travail pour le compte de l’employeur et selon ses ordres peut survenir dans deux situations différentes :</p>
				<ul class="nosactionsul">
					<li class="nosactionsli">L’accident sur un chantier extérieur : l’accident survenu sur les lieux est alors bien un accident du travail à proprement dit.</li> 
					<li class="nosactionsli">L’accident en déplacement professionnel : la mission peut qualifier les déplacements professionnels qui constituent la trame même du travail du salarié : chauffeurs-livreurs, VRP, l’ensemble de leurs déplacements entrent dans le cadre de leur travail et tout accident est un accident de travail à proprement dit et non un accident de trajet travail, qui ne produit pas les mêmes effets. Cependant dès lors que la salarié regagne son domicile, les accidents qui surviennent à son retour sont désormais qualifiés d’accident de trajet, et ce, depuis les arrêts rendus le 5 novembre 1992 par l’assemblée plénière de la Cour de cassation. Cette définition a été élargie par deux arrêts du 19 juillet 2001, ou la Chambre sociale de la Cour de cassation a élargi la notion d’accident de mission, à tout accident survenu pendant toute la durée de la mission : « Attendu que le salarié effectuant une mission a droit à la protection prévue par l’art. L.411-1 CSS pendant tout le temps de la mission qu’il accomplit pour son employeur, peu important que l’accident survienne à l’occasion d’un acte professionnel ou d’un acte de la vie courante, sauf la possibilité pour l’employeur ou la CPAM de rapporter la preuve que la salarié avait interrompu sa mission pour motif personnel ».</li>
				</ul>
				
			</div>
			<div id="nosactions-accidentt-c">

				<h2 class="nosactionsh2">3 )Cas de l’accident de trajet :</h2>

				<p class="nosactionsp">Les lois du 30 octobre 1946 et du 23 juillet 1957 ont complété la protection du salarié en intégrant dans la protection sociale spécifique « l’accident de trajet » subi par la victime alors qu’elle se rend à son travail ou en revient. Certes l’employeur ne saurait être responsable de la sécurité sur la voir publique ou son autorité ne joue plus. Mais cette extension a été justifiée à l’époque par la nécessité pour le travailleur de se rendre à son travail qui l’expose d’autant plus aux accidents de la circulation que l’intensité en est accrue aux heures de pointes.</p>

				<p class="nosactionsp">Cependant si en 1946 les victimes d’accidents de la circulation étaient encore assez mal protégées, il n’en est plus de même aujourd’hui avec la loi du 5 juillet 1985 dite loi Badinter.</p>

				<h3 class="nosactionsh3">a)La définition légale de l’accident de trajet :</h3>

				<p class="nosactionsp">Conformément à l’article L.411-2 CSS, l’accident de trajet est celui qui se produit entre :</p>
				<ul class="nosactionsul">
					<li class="nosactionsli">La résidence principale, une résidence secondaire présentant un caractère de stabilité ou tout autre lieu ou le travailleur se rend de façon habituelle pour des motifs d’ordre familial et le lieu de travail ;</li>
					<li class="nosactionsli">Le lieu de travail et les restaurant, la cantine ou d’une manière plus générale, le lieu ou le travailleur prend habituellement ses repas, et dans la mesure ou le parcours n’a pas été interrompu ou détourné pour un motif dicté par l’intérêt personnel et étranger aux nécessités essentielles de la vie courante ou indépendant de l’emploi.</li>
				</ul>

				<h3 class="nosactionsh3">b)La qualification jurisprudentielle de l’accident de trajet :</h3>

				<p class="nosactionsp">La notion de résidence principale ou de résidence secondaire et leur éloignement géographique, le contrôle des motifs d’ordre familial, les détours et les interruptions, la détermination du trajet normal, tous ces éléments très concrets donnent lieu à de multiples contestations entre la victime et les Caisses de sécurité sociale. Par un arrêt du 13 décembre 1985, l’Assemblée plénière de la Cour de cassation a décidée de renoncer à exercer un contrôle de qualification de l’accident et a reconnu aux juges du fond un pourvoir souverain pour décider si un accident de la circulation est, ou n’est pas, un accident de trajet au sens de l’article L. 411-2 CSS. Cet abandon du contrôle de qualification présente certes le danger d’une jurisprudence des juges du fond encore plus incohérente en fonction d’une casuistique sans ligne directrice. Seul le retour des accidents de trajet dans le giron des accidents de circulations pourra mettre fin aux incohérences.</p>

				<p class="nosactionsp">La CPAM peut contester le caractère professionnel d’un accident du travail ou d’un accident trajet travail.</p>

				<p class="nosactionsp">Dans ce cas la victime pourra contester la décision de la CPAM en saisissant la commission de recours amiable dont on a vu son fonctionnement dans la partie précédente.</p>

				<p class="nosactionsp">Il faut savoir, que dans 95% la CRA confirme la décision initiale de la CPAM.</p>

				<p class="nosactionsp">Ce qui laisse comme unique choix a la victime de saisir le tribunal de affaires de sécurité sociale afin que les juges du fond déterminent si l’accident entre dans le législation des risques professionnels ou non.</p>

				<p class="nosactionsp">Notons qu’en cas d’accident mortel, survenu au temps et au lieu du travail ou de trajet, la CPAM doit, si les ayants droit le sollicitent ou avec leur accord si elle l’estime utile à la manifestation de la vérité, demander au juge d’instance dans le ressort duquel l’accident s’est produit de faire procéder à l’autopsie du corps de la victime (CSS, art. L. 442-4).</p>

				<p class="nosactionsp">Si les ayants droit s’opposent à la demande faite par la caisse, il leur appartient alors de rapporter la preuve du lien de causalité entre l’accident et le décès (CSS, art. L. 442-4). La présomption d’imputabilité disparaît en effet dans ce cas (Cass. 2e civ., 16 déc. 2003, no 02-14.765). Le refus des ayants droit, suivi d’une autorisation tardive, reste un refus, la caisse ayant été dans l’impossibilité de procéder utilement à l’autopsie (Cass. soc., 5 juill. 1982, no 81-12.481). Toutefois, le caractère professionnel de l’accident ou de la maladie reste acquis lorsque l’autopsie n’a pu être effectuée en raison de la carence du service des pompes funèbres (Cass. soc., 18 juin 1980, no 79-10.594) ou lorsque l’accident n’a pas été déclaré par l’employeur ou encore lorsque le conjoint, en l’absence de toute idée de fraude ou de hâte excessive, a fait incinérer le corps de la victime selon la volonté du défunt (Cass. soc., 14 nov. 1984, no 83-12.139).</p>

				<h4 class="nosactionsh4">La constatation médicale de l’accident du travail :</h4>

				<h5 class="nosactionsh5">1) La déclaration d’accident :</h5>

				<p class="nosactionsp">La victime doit informer l’employeur ou l’un de ses préposés dans la journée ou l’accident s’est produit, ou au plus tard dans les 24 heures. L’employeur, ou l’un de ses préposés, doit dans les 48 heures déclarer tout accident du travail à la caisse de sécurité sociale dont relève la victime, par lettre recommandée avec demande d’avis de réception.</p>

				<h5 class="nosactionsh5">2) L’examen médical :</h5>

				<p class="nosactionsp">Une feuille d’accident est remise par la victime à son médecin traitant et celui adresse directement à la caisse un certificat médical initial constatant l’état de la victime et les conséquences immédiates et prévisibles de l’accident avec copie à la victime.</p>

				<p class="nosactionsp">Il faut que le médecin fasse très attention à la rédaction de ce certificat médical, car si la victime a omis de parler d’un traumatisme issu directement de l’accident du travail, la caisse primaire d’assurance maladie peut très bien refuser tout simplement de l’indemniser comme séquelles fonctionnelles de l’AT.</p>

				<p class="nosactionsp">Intervient après, la consolidation c’est-à-dire la date à partir de laquelle aucun traitement n’est susceptible de faire évoluer significativement l’état de la victime ; il ne s’agit donc pas systématiquement de la date de guérison (consolidation sans séquelles) ni de la date à laquelle tous les traitements sont arrêtés puisque certains traitements peuvent être poursuivis, uniquement alors pour maintenir l’état de la victime (et non pas l’améliorer).</p>

				<p class="nosactionsp">La consolidation peut être prononcée par le médecin traitant ou encore par le médecin conseil de la caisse primaire d’assurance maladie, dans ce dernier cas la décision est contestable en demandant une expertise sur le fondement de l’article L.141-1 du Code de sécurité sociale.</p>

				<p class="nosactionsp">C’est à partir de cette date de consolidation, que la caisse primaire d’assurance maladie va évaluer les séquelles fonctionnelles de la victime par l’intermédiaire d’une visite médicale d’un médecin conseil.</p>

				<p class="nosactionsp">Pour établir cette consolidation, un certificat final descriptif est rédigé par le médecin traitant ce certificat final.</p>

				<p class="nosactionsp">Sur ce certificat médical final, le médecin pourra, s’il y a retour à l’état fonctionnel antérieur à l’accident du travail, établir la guérison. Si la victime présente des séquelles fonctionnelles, le médecin traitant établira la « consolidation avec séquelles » et devra détailler au maximum les séquelles dont reste encore atteint la victime.</p>

				<p class="nosactionsp">Si la caisse conteste le contenu du certificat médical final, un médecin expert examine la victime.</p>

				<p class="nosactionsp">La poursuite des soins après consolidation est possible si l’état du blessé nécessite des soins d’entretien, ces soins doivent être justifiés par les séquelles de l’accident et contribuer à éviter une rechute ou une aggravation des séquelles ; ils sont définis et prescrits par le médecin traitant en accord avec le médecin conseil de la caisse de sécurité sociale ; la caisse délivre alors des volets AT de soins qui permettent le tiers payant.</p>

				<h6 class="nosactionsh6">Dans tous les cas, la consolidation a deux conséquences essentielles :</h6>
				<ul class="nosactionsul">
					<li class="nosactionsli">La fin des indemnités journalières (il ne faut donc pas prescrire un arrêt de travail ou une reprise à mi-temps thérapeutique en cas de consolidation)</li>
					<li class="nosactionsli">Et l’évaluation d’une incapacité permanente.</li>
				</ul>

				<p class="nosactionsp">Une fois ce certificat final envoyé à la caisse primaire d’assurance maladie dont dépend la victime, celle-ci va exercer un contrôle médical afin de déterminer le taux d’I.P.P.</p>

				<p class="nosactionsp">L’avis du contrôle médical est nécessaire dès qu’il a décès ou incapacité permanente probable.</p>

				<p class="nosactionsp">Le médecin conseil de la caisse va ausculter la victime et établir un rapport d’évaluation du taux d’I.P.P, il va confronter les séquelles fonctionnelles de la victime avec le guide barème officiel accident du travail et maladies professionnelles, barème légal qui a été revu en 1982 puis re-édition par l’UNCANSS (Union des Caisses nationales de sécurité sociale) en 1996, afin d’établir le taux d’incapacité permanente partielle. Pour fixer le taux d’incapacité d’accident du travail, le médecin tient compte de la nature de l’infirmité, de l’état général de santé de la victime avec ses facultés physiques et mentales, de son âge, de ses aptitudes. Les infirmités multiples sont évaluées selon la règle de balthazar.</p>

				<p class="nosactionsp">NB : On rappellera que cette méthode, dite des capacités restantes, est préconisée dans les cas de déficiences multiples quand l’estimation globale s’avère difficile. Il convient alors d’estimer en premier lieu l’une des déficiences. Le taux d’incapacité ainsi fixé est retranché de 100 % qui représente la capacité totale. On obtient alors la capacité restante. L’incapacité suivante résultant d’une autre déficience est estimée elle-même puis rapportée à la capacité restante. On obtient alors le taux correspondant à la seconde déficience, l’incapacité globale résultant de la somme des deux taux ainsi calculés. Cette incapacité restante sera la même quelque soit l’ordre de prise en compte des déficiences.</p>

				<h5 class="nosactionsh5">3)La notification d’attribution de rente :</h5>

				<p class="nosactionsp">La Caisse va alors envoyer à la victime, selon le taux d’I.P.P relevé dans le rapport du médecin conseil, une notification d’attribution de rente.</p>

				<h6 class="nosactionsh6">Deux cas se présentent alors :</h6>
				<ul class="nosactionsul">
					<li class="nosactionsli">Le capital pour incapacité inférieur à 10% :
					Une indemnité en capital est attribuée à la victime d’un accident du travail atteinte d’une incapacité permanente inférieure à 10%. Le montant en est fixé par décret suivant le taux d’incapacité (art. L. 434-1 CSS). Il faut noter qu’en accident du travail comme en droit commun une douleur chronique peut justifier d’un taux d’I.P.P
					</li>
					<li class="nosactionsli">La rente A.T pour incapacité supérieure à 10% :
					La rente est due à la victime dès le lendemain de la consolidation. Le calcul de cette rente est complexe, elle est basée sur deux paramètres : la rémunération antérieure et le taux d’incapacité.
					</li>
				</ul>

				<h6 class="nosactionsh6">a) Le taux d’incapacité de référence : la fraction inférieure à 50% est réduite de moitié et la fraction supérieure à 50% est augmentée de moitié.</h6>

				<p class="nosactionsp">(ex : taux d’incapacité réelle 60%= (50/2) + (10+5)=40%)</p>

				<p class="nosactionsp">La seule possibilité pour obtenir la majoration à taux plein d’invoquer la faute inexcusable de l’employeur.</p>

				<p class="nosactionsp">(ex : dans un cas ou le taux d’I.P.P que la victime présente est de 20%, sa rente sera basée sur un taux non pas de 20% d’I.P.P mais 10%, le fait d’obtenir la faute inexcusable de l’employeur aura pour effet de se baser sur le taux de 20% d’I.P.P pour le calcul de sa rente)</p>

				<h6 class="nosactionsh6">b) Le salaire de référence : est calculé à partir de la rémunération effective totale des 12 mois civils avant la date de l’accident. Sur ce point, il faut faire très attention car la CPAM si elle n’arrive pas à avoir la communication des salaires de référence se basera sur un salaire « minimum », ce qui peut avoir des conséquences importantes sur le calcul de la rente.</h6>

				<p class="nosactionsp">Si une erreur est commise, la victime peut toujours en apportant les justificatifs obtenir une rente dite « revalorisée ».</p>

				<p class="nosactionsp">Si sur la période des 12 mois précédant son accident, le salarié était en arrêt maladie, le calcul des ses salaires de référence sera beaucoup plus compliqué, l’employeur devra en effet, produire des salaires rétablis pour servir de base de calcul.</p>

				<h6 class="nosactionsh6">c) Le montant de la rente est le produit du salaire de référence ainsi calculé par le taux d’incapacité retenu.</h6>

				<p class="nosactionsp">Elle peut être révisée ou convertie en capital sous certaines conditions.</p>

			</div>
			
			<div id="nosactions-accidentt-d">

				<h2 class="nosactionsh2">4)Rechute, aggravation :</h2>

				<h3 class="nosactionsh3">La notion de rechute en accident du travail :</h3>

				<p class="nosactionsp">Il va sans dire qu’il ne peut y avoir de rechute sans consolidation ou guérison préalable de l’accident. "Si l’aggravation de la lésion entraîne, pour la victime la nécessité d’un traitement médical, qu’il y ait on non nouvelle incapacité temporaire, la caisse primaire statue sur la prise en charge de la rechute."</p>

				<p class="nosactionsp">Autrement dit, l’apparition d’un fait nouveau justifiant un traitement (différent d’un éventuel traitement d’entretien des séquelles) et éventuellement un arrêt de travail peut faire admettre la rechute, dès lors que ces manifestations sont bien en rapport avec les séquelles de l’accident.</p>

				<p class="nosactionsp">Lors de la rechute, il n’y a pas de présomption d’imputabilité comme lors de l’accident initial : la charge de la preuve est renversée ; c’est à la victime qu’il convient de faire la preuve que les manifestations alléguées au titre de la rechute sont bien en rapport avec l’accident initial ou ses séquelles : Le certificat de rechute établi par le médecin décrit non seulement les lésions constatées, mais aussi les motifs d’ordre médical qui permettent de rattacher ces lésions à l’accident de travail initial.</p>

				<h5 class="nosactionh5">Il faut bien distinguer la rechute :</h5>
				<ul class="nosactionsul">
					<li class="nosactionsli">De l’aggravation des séquelles ne justifiant pas de modification de traitement ni d’arrêt de travail et qui relève alors d’une révision du taux d’IPP.</li>
					<li class="nosactionsli">Et des accidents successifs mettant en cause la même symptomatologie (par exemple lumbagos récidivants) survenant à l’occasion de nouveaux efforts pendant le travail et constituant alors de nouveaux accidents du travail.</li>
				</ul>
			
				<p class="nosactionsp">L’acceptation de la rechute, après avis du service médical, ouvre une nouvelle période d’indemnisation en accidents du travail avec ses prestations en nature en tiers payant et ses indemnités journalières éventuelles ; elle se termine par une guérison ou une consolidation avec le même processus.</p>

				<p class="nosactionsp">Le contentieux de la rechute relève de l’expertise médicale L141-1 du code de la sécurité sociale.</p>

				<h3 class="nosactionsh3">La notion d’aggravation :</h3>

				<p class="nosactionsp">La révision du taux d’I.P.P. est motivée par une aggravation des séquelles en rapport avec l’accident sans que des soins actifs ou d’arrêts de travail soient nécessaires.</p>

				<h5 class="nosactionh5">Elle peut être demandée :</h5>
				<ul class="nosactionsul">
					<li class="nosactionsli">Par la victime pendant les 2 ans qui suivent la date de guérison ou de consolidation, à des intervalles d’au moins 1 an au delà des 2 ans.</li>
					<li class="nosactionsli">À l’initiative de la caisse d’assurance maladie, à des intervalles de 3 mois pendant les deux premières années, et tous les ans au delà. Elle peut aboutir alors à une diminution du taux d’IPP.</li>
				</ul>
		
				<p class="nosactionsp">Le contentieux de la rechute relève de l’expertise médicale L141-1 du code de la sécurité sociale.</p>

				<p class="nosactionsp">Après cette expertise, il y a toujours possibilité de contester devant la commission de recours amiable puis devant le tribunal des affaires de sécurité sociale.</p>

				<h5 class="nosactionsh5">Exemple de dossier :</h5>
		
				<p class="nosactionsp">En 2003, Monsieur JMC est pris d’un malaise sur son lieu de travail : hémiplégies avec hémorragie cérébrale. La CPAM refuse de prendre en charge l’accident de Monsieur JMC au titre de la législation relative au risque professionnel. Suite à l’expertise médicale demandée par l’A.A.D.V.A.H du Nord, la reconnaissance de l’A.T a été confirmée par l’expert en raison de l’absence d’antécédents et de l’éxistence d’un lien de causalité entre l’A.T. et les lésions constatées. A ce jour, la CPAM a fixé un taux d’I.P.P. qui est contesté à l’heure actuelle par l’A.A.D.V.A.H sur demande de Monsieur JMC.</p>
					
			</div>	
		
		</section>

		
		<footer>
			<?php 
				include("../pages/footer.php");
			?>
		</footer>
		
		
		<script>
		var offseta=$("#nosactions-accidentt-a").offset();
		var offsetb=$("#nosactions-accidentt-b").offset();
		var offsetc=$("#nosactions-accidentt-c").offset();
		var offsetd=$("#nosactions-accidentt-d").offset();
		
		nosactionsaccidentt();
		$(window).scroll(function () {
			nosactionsaccidentt();
		});
		</script>
	
	
	</body>
</html>
