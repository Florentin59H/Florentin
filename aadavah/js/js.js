$(document).ready (function() { 

	if(($(window).width())>1050){
		$("#nosactions").parent().hover(function(){innav(this)},function(){outnav(this)});
		$("#apropos").parent().hover(function(){innav(this)},function(){outnav(this)});
	}
	else{
		$( "#nav span" ).on( "click", function() {
			if($(this).parent().find("ul").is(":hidden") == true){
				$(this).css({transform:"rotate(-180deg)"});
				$(this).parent().find("ul").slideDown(800);
			}
			else{
				$(this).css({transform:"rotate(0deg)"});
				$(this).parent().find("ul").slideUp(800);
			}		
		});
	}
	
	
	if(($(window).width())<=1050){
		$( ".nosactionsnavigation span" ).on( "click", function() {
			if($(this).parent().find("ul").is(":hidden") == true){
				$(this).css({transform:"rotate(-180deg)"});
				$(this).parent().find("ul").slideDown(800);
			}
			else{
				$(this).css({transform:"rotate(0deg)"});
				$(this).parent().find("ul").slideUp(800);
			}
		});	
	}
	
	
	function innav(id){
		$(id).find("ul.subnav").slideDown({duration:'fast',queue:false}).show();	
	}
	
	
	function outnav(id){
		$(id).find("ul.subnav").slideUp({duration:'slow'});
	}
	
	
	
	$('.adoupas').change(function(){
		$("#nouscontacternumadherent").html("");
		valnumadherent= $("input[name='nouscontacteradherent']:checked").val();
		if(valnumadherent=="adherent"){
			$("#nouscontacternumadherent").html('<input type="number" name="numadherent" placeholder="Votre numméro d adherent" required/>');
		}		
	});
	
	
	
	$(".hamburger").click(function(){
		$(this).toggleClass("is-active");
		if($(this).attr("class")=="hamburger is-active"){
			$("#header-nav").css({"display":"flex"});
		}
		else{
			$("#header-nav").css({"display":"none"});
		}
	});


});





