window.onload = function() {
	moveDiv();
}

stop = false;
function moveDiv()
{	
	if(stop == true){
		return;
	}
	var figure = document.getElementById("cube");
	var height = parseInt(figure.offsetHeight);
	var shift = figure.style.left;
	figure.style.height = height + 2 + "px";
	if(shift != ''){

		figure.style.left = parseInt(shift)+15 + "px";
	}else{
		figure.style.left = "15px";
	}
	
	setTimeout(moveDiv, 5000);
}

document.addEventListener("keydown", keyDownTextField, false);

function keyDownTextField(e) {
var keyCode = e.keyCode;
  if(keyCode==13) {
  	//alert("You hit the enter key.");
  	stop = true;
  	var figure = document.getElementById("cube");
  	figure.style.left = "0px";
  } else {
  }
}