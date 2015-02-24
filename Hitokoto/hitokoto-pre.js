setTimeout(
	function(){
		var hjs=document.createElement('script');
		hjs.setAttribute('src','http://api.hitokoto.us/rand?encode=jsc&fun=$m.hitokoto');
		document.body.appendChild(hjs);
	},
	500
);