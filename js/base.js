window.onload = function() {
	/* load js files synchronously (one by one) from array and execute
it*/
	var container = ['/actions/1.js', '/actions/2.js', '/actions/3.js'];
	var baseurl = document.URL.replace(/(\\|\/)[^\\\/]*$/, '/');
	for(var i in container){
		     $LAB.script(baseurl + container[i]);
	}
	$LAB.script(baseurl + '/js/app.js');
	
}