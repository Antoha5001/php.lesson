<script>
// var body = document.getElementsByTagName("body");



fetch("my-qyerry.php")
.then((response) => response.json())
.then(function(data){

	console.log(data);
	for (d in data ) {
		var p = document.createElement('p');
		for (key in data[d]){
			if (Number.isInteger(+key) || key == "id" || key == "done") {
				continue;
			}
			var span = document.createElement('span');
			span.innerText = " " + data[d][key];
			// span.innerText = key + " - " + data[d][key];
			p.appendChild(span);
			document.body.appendChild(p);
			// console.log(key + " " + data[d][key]);

		}
	}
	// console.log(data[0]);
}).catch((e) => {
	console.log(e);
});

var a = "500s"

// console.log(a === 500);
// console.log(Number.isInteger(+a));
</script>
<?php

?>
<div id="error"></div>
<div id="succes"></div>