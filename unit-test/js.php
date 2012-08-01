<?php

function inc($path, $package = false){

    if($package){
        ?><script src="http://neuron.lc/passive-mode/lib/<?php
	}else{
        ?><script src="http://neuron.lc/lib/<?php
	}
	
		echo $path;
	
	?>"></script>
<?php
};

// use strict mode
?><script>'use strict';

var __loaderConfig = {
    server: 'i{n}.neuron.lc',
    libServer: 'i{n}.js.lc/Neuron'
};

</script>
<!-- <script src="http://i1.static.dp:1337/trunk/lib/neuron.js"></script> -->

<?

inc("neuron/seed.js");

inc("neuron/lang/native.js");
inc("neuron/lang/enhance.js");
inc("neuron/lang/web.js");

inc("neuron/oop/class.js");
inc("neuron/oop/attrs.js");
inc("neuron/oop/events.js");
inc("neuron/oop/super.js");

inc("neuron/slick/finder.js");
inc("neuron/slick/parser.js");
inc("neuron/slick/adapter.js");

inc("neuron/ua/ua.js");

inc("neuron/dom/core.js");
inc("neuron/dom/feature.js");
inc("neuron/dom/event.js");
inc("neuron/dom/css.js");
inc("neuron/dom/traverse.js");
inc("neuron/dom/manipulate.js");
inc("neuron/dom/create.js");
inc("neuron/dom/domready.js");

inc("neuron/loader/assets.js");
inc("neuron/loader/active.js");
inc("neuron/loader/active-config.js");

/*
inc("neuron/loader/passive.js");
inc("neuron/loader/passive-config.js");
*/

inc("neuron/biz/biz.js");

inc("neuron/cleaner.js");

?>
<script>

var DP = KM;

KM.__loader.init && KM.__loader.init();


function log(msg){
	var div = document.createElement('div');
	
	div.innerHTML = Array.prototype.slice.call(arguments).map(function(i){
		if(i === undefined){
			i = 'undefined';
		}else if(i === null){
			i = 'null';
		}else if(!i){
			i = 'false';
		}
		
		return '' + i;
	}).join(' ');
		
	document.body.appendChild(div);
};

</script>