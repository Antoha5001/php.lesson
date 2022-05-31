<script>

(function(){
	window.addEventListener('DOMContentLoaded', init);

	function init(){
		var d = {
			"id" : 1
		}

		function getData(id=1) {
			
			console.clear();			

			fetch(`query-temp.php?id=${id}`, {
				method: 'GET'
			}).then((response) => {
			// console.log(response);
				return response.json();		
			})
			.then(function(data) {
				// document.write(data);
				var goods = data;

				// console.log(goods);
				var container = document.getElementById('container');
				container.innerHTML = "";

				for (d in data){
					let good = data[d];

					let title_table = document.createElement("p");
					let table = document.createElement("table");
					let thead = document.createElement("thead");
					let tbody = document.createElement("tbody");

					// good[0].forEach((k, v) => console.log(k + " " + v));
					console.log(good);

					var thead_row = `<tr>`
					var tbody_row = `<tr>`
					let i = 0;
					prices = []
					//отдельный объект с ценами
					for (key in good) {
						if (key == "title"){
							thead_row += `<th>Наименование</th>`;
							tbody_row += `<td>${good[key]}</td>`;
						} 
						if (key == "papper"){
							thead_row += `<th>Бумага</th>`;
							tbody_row += `<td>${good[key]}</td>`;
						} 
						if (key == "colors") {
							thead_row += `<th>Цветность</th>`;
							tbody_row += `<td>${good[key]}</td>`;
						}

						if (Number.isInteger(+key)){
							prices[key] = good[key];
						}
					}
					for (key in prices) {
						thead_row += `<th>${key} шт.</th>`;
						tbody_row += `<td>${good[key]}</td>`;
					}

					

					thead_row += '</tr>'
					
					console.log(thead_row);
					console.log(tbody_row);
					thead.innerHTML = thead_row;
					tbody.innerHTML = tbody_row;
					table.appendChild(thead);
					table.appendChild(tbody);
					container.appendChild(table);
				}




				if (data["error"]) 	document.write(data.error);
			}).catch((e) => console.log(e));
		}


		var menu_elements = document.getElementsByClassName("menu");

		// console.log(menu_elements);
		// console.log(menu_elements.nodelist);
		// console.log(menu_elements.item);

		Array.prototype.forEach.call(menu_elements, (element) => {
			element.addEventListener("click", (e)=>{
				e.preventDefault();
				e.stopPropagation();
				var data_id = e.target.getAttribute("data-id");
				// console.log(this.getAttribute("data-id"));
				getData(data_id);
				
			});
		});

	
	}
})();
	

	

	// menu_elements.

</script>
<a class="menu" href="#" data-id="1" >ID-1</a>
<a class="menu" href="#" data-id="2" >ID-2</a>
<a class="menu" href="#" data-id="3" >ID-3</a>
<a class="menu" href="#" data-id="4" >ID-4</a>
<div id="container"></div>
<table>
	<thead><tr>
		<th style="border: 1px solid black;">1</th>
		<th style="border: 1px solid black;">2</th>
	</tr></thead>
	<tbody>
		<tr>
			<td style="border: 1px solid black;">123</td>
			<td style="border: 1px solid black;">456</td>
		</tr>
	</tbody>
</table>