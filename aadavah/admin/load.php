 <?php 
    session_start();
	include("../obj/Users.php");
    include("../obj/BDD.php");
    $bdd = new BDD("aadvahfrzdaadvah", "aadvahfrzdaadvah.mysql.db", "aadvahfrzdaadvah", "Vandri7335");

		
if(isset($_GET['action'])){
	
	if($_GET['action'] == "deconnection"){
		session_destroy();
	}
	else if($_GET['action'] == "affichage-actualite"){
			
		$req="SELECT `id`,`titre`, `description`, `dateev`,`dateevfin` FROM `evenements` ORDER BY id DESC LIMIT ".$_GET['limit'].",5";
	
		$oRes=$bdd->executer($req);
	
		?><h2 class="numpage">Page <?php echo $_GET['numpage'] ?> </h2><?php
		
		while($evenement = $oRes->fetch())
		{

			?>
				<div class="evenement-s">

					<h2><?php echo $evenement->titre; ?></h2>
					
					<div class="evenement-ss">
					
						

						<div>
							<?php echo $evenement->description; ?></br>
							<?php
								if($evenement->dateev != null){
									echo "<b>".$evenement->dateev;
									
									if($evenement->dateevfin != null){
									echo " AU ".$evenement->dateevfin;	
									}
								}
								
								echo "</b>";
								
							?>
						</div>
						
						<?php
						
						$req2="SELECT `lien` ,`id` FROM `upload` WHERE `idevenement` = ".$evenement->id;
						
						$oRes2=$bdd->executer($req2);
						
						$nbrlien=$oRes2->rowCount();
						
							if($nbrlien > 0){
								
								echo '<div class="actuimgd" id="divimg-'.$evenement->id.'">';
								
								while($img = $oRes2->fetch())
								{
									echo "<img class=\"evenement-imgs evenement-img\" src=\"".$img->lien."\"/>";	  
								}
								
								echo '<div class="changementimg" id="chimg-'.$evenement->id.'"></div></div>';

								$script= '<script>$("#divimg-'.$evenement->id.' img:eq( 0 )").show();';
								
								$script.='</script>'; 
								
								echo $script;
							}
						?>

					</div>
					
					<?php
						if(isset($_SESSION["login"])){
							
							$req3="SELECT id FROM `evenements` LIMIT 0,1";
							$oRes3=$bdd->executer($req3);
							$idprem=($oRes3->fetch())->id;
							
							$req3="SELECT id FROM `evenements`";
							$oRes3=$bdd->executer($req3);
							$nbrligne=$oRes3->rowCount();
							
							
							$req3="SELECT id FROM `evenements` LIMIT ".($nbrligne-1).",1";
							$oRes3=$bdd->executer($req3);
							$idder=($oRes3->fetch())->id;
							
							
							if($evenement->id != $idder){
								echo "<div class='bmonter' onclick='envenementmonter(this.id)' id='bmonter".$evenement->id."'>Monter l'actualité</div>";
							}
							
							if($evenement->id != $idprem){
								echo "<div class='bdescendre' onclick='envenementdescendre(this.id)' id='bdescendre".$evenement->id."'>Descendre l'actualité</div>";
							}
							
							echo "<div class='bsup' onclick='envenementsup(this.id)' id='bsup".$evenement->id."'>Supprimer</div>";
						}
					?>

				</div>
				
		<?php } ?>	
			
				<div class="actualite-page">
				
					<?php
		
						$req="SELECT COUNT(*) as nbr FROM evenements";
						$oRes=$bdd->executer($req);
						$nbr=($oRes->fetch())->nbr;
						$nbrpages=ceil($nbr/5);
						
						echo "<h5>Pages:</h5>";
						for($i=1;$i<=$nbrpages;$i++){
							
							if($_GET['numpage'] == $i){
								$font="style='background-color:rgb(124,207,99,0.8)'";
							}
							else{
								$font="";
							}
							
							
							
							if($i!=1){
								echo "-<a onclick='actualitechangementpage(this.id)' ".$font." id='page".$i."' >".$i."</a>";
							}
							else{
								echo "<a onclick='actualitechangementpage(this.id)' ".$font." id='page".$i."' >".$i."</a>";
							}
							
						}
						
						
						
					?>
				
				</div>
				
				<script>
				
				
				affichagespawn();
				
				function affichagespawn(){
					
					var nbrelement=$(".actuimgd").length;
					
					for(var i=0;i<nbrelement;i++){
					
						var nbrimg=$(".actuimgd:eq("+i+") img").length;
						
						
						$(".changementimg:eq("+i+")").html("");
						
						if(nbrimg>1){
						
							for(var s=0;s<nbrimg;s++){
								
								$(".changementimg:eq("+i+")").append('<span></span>');
								
							}
						}
					}
					
				}
				
				
				$( ".changementimg span" ).on( "click", function() {
				  
				  indexspan=$(this).index();
				  idchangementimg=$(this).parent().parent().attr("id");
				  
				  $("#"+idchangementimg+" span").css("background-color","rgb(40,40,40,0.6)")
				  $("#"+idchangementimg+" span:eq("+indexspan+")").css("background-color","rgb(40,40,40,1)")
				  
				  $("#"+idchangementimg+" img:visible").animate({opacity:0},600);
				  $("#"+idchangementimg+" img:visible").hide();
				  
				  $("#"+idchangementimg+" img:eq("+indexspan+")").show();
				  $("#"+idchangementimg+" img:eq("+indexspan+")").css({"opacity":"0"});
				  $("#"+idchangementimg+" img:eq("+indexspan+")").animate({opacity:1},1000);
				  
				});
				
				
				
				setInterval(changementimg,10000);
				
				function changementimg(){
					
					
					
					var nbrelement=$(".actuimgd").length;
					
					for(var i=0;i<nbrelement;i++){
						
						if(($(".actuimgd:eq("+i+") img").length)>1){
							
							var index=$(".actuimgd:eq("+i+") img:visible").index();
							$(".actuimgd:eq("+i+") img:visible").animate({opacity:0},600);
							$(".actuimgd:eq("+i+") img:visible").hide();
							
							
							$(".changementimg:eq("+i+") span:eq("+index+")").css("background-color","rgb(40,40,40,0.6)")
							
							var nbrimg=$(".actuimgd:eq("+i+") img").length;
							index +=1;
							
							if(index>=nbrimg){
								//derniére img
								$(".actuimgd:eq("+i+") img:eq(0)").show();
								$(".actuimgd:eq("+i+") img:eq(0)").css({"opacity":"0"});
								$(".actuimgd:eq("+i+") img:eq(0)").animate({opacity:1},1000);
								$(".changementimg:eq("+i+") span:eq(0)").css("background-color","rgb(40,40,40,1)")
							}
							else{
								
								$(".actuimgd:eq("+i+") img:eq("+index+")").show();
								$(".actuimgd:eq("+i+") img:eq("+index+")").css({"opacity":"0"});
								$(".actuimgd:eq("+i+") img:eq("+index+")").animate({opacity:1},1000);
								
								$(".changementimg:eq("+i+") span:eq("+index+")").css("background-color","rgb(40,40,40,1)")
							}
							
						}
							
							
					}
					
					
				}
				
				function envenementmonter(id){
					
					numligne=numl(id);
					
					$.ajax({
						  type: "GET",
						  url: "../admin/load.php",
						  data: {
							  "action" : "evmonter",
							  "numligne":numligne
						  },
							success:function(){document.location.href="actualites.php"},
						  dataType: "html"
					});
					
				}
				
				
				function envenementdescendre(id){
					
					numligne=numl(id);
					
					$.ajax({
						  type: "GET",
						  url: "../admin/load.php",
						  data: {
							  "action" : "evdescendre",
							  "numligne":numligne
						  },
							success:function(){document.location.href="actualites.php"},
						  dataType: "html"
					});
					
					
				
				}
				
				function numl(id){
					
					var numrank=$("#"+id).parent().index();
					
					var numpage=$(".numpage").html();
					numpage=parseInt(numpage.replace("Page ",""));
					
					var numligne=(numpage-1)*5+numrank;
					
					return(numligne);
					
				}
				
				
				
				</script>

			<?php
				
		  	
	}
	else if($_GET['action'] == "supevenement"){
	
		
		
		$req="DELETE FROM `upload` WHERE `idevenement` =".$_GET['idev'];
		$bdd->executer($req);
		
		$req="DELETE FROM `evenements` WHERE id=".$_GET['idev'];
		$bdd->executer($req);
		
	}
	else if($_GET['action'] == "evdescendre"){
		
		
		$req="SELECT `id` FROM `evenements` ORDER BY `id` DESC Limit ".($_GET['numligne']-1).",1 ";
		echo $req."</br>";
		$oRes=$bdd->executer($req);
		$numligneb=($oRes->fetch())->id;
		
		$req="SELECT `id` FROM `evenements`  ORDER BY `id` DESC Limit ".$_GET['numligne'].",1 ";
		echo $req."</br>";
		$oRes=$bdd->executer($req);
		$numligne=($oRes->fetch())->id;
	
	
	
		$req="UPDATE `evenements` SET `id`=0 where id=".$numligneb;
		$bdd->executer($req);
		
		$req="UPDATE `evenements` SET `id`=1 where id=".$numligne;
		$bdd->executer($req);
		
		
		$req="UPDATE `upload` SET `idevenement`=0 WHERE `idevenement`=".$numligneb;
		$bdd->executer($req);
		
		$req="UPDATE `upload` SET `idevenement`=1 WHERE `idevenement`=".$numligne;
		$bdd->executer($req);
		
		
		
		$req="UPDATE `evenements` SET `id`=".$numligne." where id=0";
		$bdd->executer($req);
		
		$req="UPDATE `evenements` SET `id`=".$numligneb." where id=1";
		$bdd->executer($req);
		
		
		$req="UPDATE `upload` SET `idevenement`=".$numligne." WHERE `idevenement`=0";
		$bdd->executer($req);
		
		$req="UPDATE `upload` SET `idevenement`=".$numligneb." WHERE `idevenement`=1";
		$bdd->executer($req);
		
		
	
	
	
	}
	else if($_GET['action'] == "evmonter"){
	
	
		$req="SELECT `id` FROM `evenements` ORDER BY `id` DESC Limit ".($_GET['numligne']-1).",1 ";
		echo $req;
		$oRes=$bdd->executer($req);
		$numligneb=($oRes->fetch())->id;
		
		$req="SELECT `id` FROM `evenements` ORDER BY `id` DESC Limit ".($_GET['numligne']-2).",1 ";
		echo $req;
		$oRes=$bdd->executer($req);
		$numligne=($oRes->fetch())->id;
	
	
		$req="UPDATE `upload` SET `idevenement`=0 WHERE `idevenement`=".$numligneb;
		$bdd->executer($req);
		
		$req="UPDATE `upload` SET `idevenement`=1 WHERE `idevenement`=".$numligne;
		$bdd->executer($req);
	
	
		$req="UPDATE `evenements` SET `id`=0 where id=".$numligneb;
		$bdd->executer($req);
		
		$req="UPDATE `evenements` SET `id`=1 where id=".$numligne;
		$bdd->executer($req);
		
		
		
		
		$req="UPDATE `upload` SET `idevenement`=".$numligne." WHERE `idevenement`=0";
		$bdd->executer($req);
		
		$req="UPDATE `upload` SET `idevenement`=".$numligneb." WHERE `idevenement`=1";
		$bdd->executer($req);
		
		
		
		$req="UPDATE `evenements` SET `id`=".$numligne." where id=0";
		$bdd->executer($req);
		
		$req="UPDATE `evenements` SET `id`=".$numligneb." where id=1";
		$bdd->executer($req);
		
	
	}
	else if($_GET['action'] == "accueilactu"){
	
		echo "<h2>Les dernieres actualites</h2>";
		
		$req="SELECT `id`,`titre`, `description`, `dateev` , `dateevfin` FROM `evenements` ORDER BY id DESC LIMIT 3";
	
		$oRes=$bdd->executer($req);
	
		

		while($evenement = $oRes->fetch())
		{

			?>
			
				<div class="accueilactu-s">

					<h3><?php echo $evenement->titre; ?></h3>
					
					<div class="accueilactu-ss">
					
						

						<div>
							<?php echo $evenement->description; ?></br>
							<?php
								if($evenement->dateev != null){
									echo "</br><b>".$evenement->dateev;
									
									if($evenement->dateevfin != null){
									echo " AU ".$evenement->dateevfin;	
									}
								}
								
								echo "</b>";
								
							?>
						</div>
						
						<?php
						
						$req2="SELECT `lien` ,`id` FROM `upload` WHERE `idevenement` = ".$evenement->id." LIMIT 1";
						
						$oRes2=$bdd->executer($req2);
					
						
						if($oRes2->rowCount() != 0){
							echo "<img class=\"evenement-imgs evenement-img\" src=\"".str_replace("../","",$oRes2->fetch()->lien)."\"/>";	  
						}
						
						?>

					</div>
				</div>
		<?php } ?>	
			
				
				
				
				<div id="changementactu">
								
				</div>
				
				<script>
				
				
				affichagespawn();
				
				function affichagespawn(){
					
					var nbrelement=$(".accueilactu-s").length;
					
					if(nbrelement > 1){
					
						for(var i=0;i<nbrelement;i++){
						
							$("#changementactu").append('<span></span>');
						}
					}
					
				}
				
				$(".accueilactu-s:eq(0)").css({"display":"flex"});
				$("#changementactu span:eq(0)").css("background-color","rgb(40,40,40,1)")
				
				$( "#changementactu span" ).on( "click", function() {
				 
				 
				  indexspan=$(this).index();
				
				  
				  $("#changementactu span").css("background-color","rgb(40,40,40,0.6)")
				  $("#changementactu span:eq("+indexspan+")").css("background-color","rgb(40,40,40,1)")
				  
				  $("#accueilactu-s:visible").animate({opacity:0},600);
				  $("#accueilactu-s:visible").hide();
				  
				  $(".accueilactu-s").css({"display":"none"});
				  $(".accueilactu-s:eq("+indexspan+")").css({"opacity":"0","display":"flex"});
				  $(".accueilactu-s:eq("+indexspan+")").animate({opacity:1},800);
				  
				});
				
				
				
			
				
				
			
				
				
				setInterval(changementimg,10000);
				
				function changementimg(){
					
					
					
					var nbrelement=$(".accueilactu-s").length;
					
					
					var index=$(".accueilactu-s:visible").index();
					$(".accueilactu-s:visible").animate({opacity:0},600);
					$(".accueilactu-s:visible").hide();
					  
					  
					if(index == 3){
						prochain=1;
					}
					else{
						prochain=index+1;
					}
					
					prochain-=1;
					
					$(".accueilactu-s").css({"display":"none"});
					$(".accueilactu-s:eq("+prochain+")").css({"opacity":"0","display":"flex"});
					$(".accueilactu-s:eq("+prochain+")").animate({opacity:1},800);
					
					
					$("#changementactu span").css("background-color","rgb(40,40,40,0.6)")
					$("#changementactu span:eq("+prochain+")").css("background-color","rgb(40,40,40,1)")
					
					
					
				}
				
				
				
				
				
				</script>
				
			<?php
				
		
	
	}
	
	
}	