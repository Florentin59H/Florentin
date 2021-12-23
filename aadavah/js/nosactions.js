function changementcolor(id){ 
	$("."+id).css("color","rgb(20,20,20,1");
}


function nosactionsaccident(){
	var postionscroll=$(window).scrollTop();
	$(".lieta").css("color","rgb(40,40,40,0.6");
	
	if(postionscroll<offsetb.top){
		//div a
		changementcolor("nosactions-accident-lia");
	}
	else if(postionscroll<(offsetc.top -1)){
		//div b
		changementcolor("nosactions-accident-lib");	
	}
	else{
		//div c
		changementcolor("nosactions-accident-lic");
	}
}


function nosactionsmdph(){
	var postionscroll=$(window).scrollTop();
	$(".lieta").css("color","rgb(40,40,40,0.6");
	
	if(postionscroll<offsetb.top){
		//div a
		changementcolor("nosactions-mdph-lia");	
	}
	else{
		//div b
		changementcolor("nosactions-mdph-lib");
	}

}




function nosactionsaccidentt(){
	var postionscroll=$(window).scrollTop();
	$(".lieta").css("color","rgb(40,40,40,0.6");
	if(postionscroll<(offsetb.top-1)){
		//div a
		changementcolor("nosactions-accidentt-lia");
	}
	else if(postionscroll<(offsetc.top -1)){
		//div b
		changementcolor("nosactions-accidentt-lib");
	}
	else if(postionscroll<(offsetd.top -1)){
		//div c
		changementcolor("nosactions-accidentt-lic");	
	}
	else{
		//div d
		changementcolor("nosactions-accidentt-lid");
	}
}


function nosactionsmaladie(){
	var postionscroll=$(window).scrollTop();
	$(".lieta").css("color","rgb(40,40,40,0.6");
	if(postionscroll<offsetb.top){
		//div a
		changementcolor("nosactions-maladie-lia");	
	}
	else{
		//div b
		changementcolor("nosactions-maladie-lib");	
	}
}








