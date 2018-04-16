window.onload = function() {
	var container = ['/actions/1.js', '/actions/2.js', '/actions/3.js'];
	for(var i in container){
		     $LAB.script(container[i]);
	}
	$LAB.script('/js/app.js');
	
}