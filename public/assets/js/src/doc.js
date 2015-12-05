function changeButtonStatusAndInputValue(obj1,message){//button,input
	// alert("csjcdscnsnkl");
	// alert(obj2);
	if(obj1.className=="upbutton"){
		obj1.className = "pushedbutton";
	}else{
		obj1.className ="upbutton";
	}
	// alert(message);
	var tmp = document.getElementById(message);
	if(tmp.value ==0){
		tmp.value = 1;
	}else{
		tmp.value = 0;
	}
} 