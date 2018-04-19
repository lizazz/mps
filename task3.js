window.onload = function() {
	/* it loader for main function*/
	moveDiv();
}

stop = false;

/*Every 5 seconds div height must be increased by 2px and div must be shifted
to the right by 15 pixels.*/

function moveDiv()
{
	if(stop == true){
		return;
	}

	var figure = document.getElementById("cube");
	var height = parseInt(figure.offsetHeight);
	var shift = figure.style.left;
	figure.style.height = height + 2 + "px";

	if (shift != '') {

		figure.style.left = parseInt(shift)+15 + "px";
	} else {
		figure.style.left = "15px";
	}

	setTimeout(moveDiv, 5000);
}

document.addEventListener("keydown", keyDownTextField, false);

/*By clicking 'Enter' div should return to initial state (at the top left corner) and
stop moving and resizing*/
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