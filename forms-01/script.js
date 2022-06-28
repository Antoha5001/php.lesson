(function(){
	window.addEventListener('DOMContentLoaded', init);

	function init(){

		let form = document.getElementById('form')
		
		form.addEventListener('submit', formSend);


		async function formSend(e) {

			e.preventDefault();

			let error = formValidate();

			let formData = new FormData(form);

			formData.append('image', formFile.files[0]);

			// for (var value of formData.values()) {
			// 	console.log(value);
			// }

			

			if (error === 0 ) {

				form.classList.add('_sending');

				fetch(`mailer.php`, {
					method: 'POST',
					body: formData
				}).then((response) => {		

					if (response.ok) {
						let result = response.json();
						fileThumbnail.innerHTML = "";
						form.reset();						
						form.classList.remove('_sending');
						
						// console.log(123);	
						return result

					}
					// console.log(response.text());
					// return response.json();
					// console.log(123)	;	
					// return response.json();		
				})
				.then(function(data) {
					
					// Object.keys(data).forEach(function(e){
						console.log(data.message);
					// }) ;
					
					alert(data.message);	
			
				}).catch((e) => console.log(e));

			} else {
				alert("Заполните все обязательные поля *")
			}

		}

		formFile = document.getElementById('formFile');
		fileThumbnail = document.getElementById('fileThumbnail');

		formFile.addEventListener('change', () => {
			
			uploadFile(formFile.files[0])
			
		});

		function uploadFile (file) {

			if (!['image/jpeg','image/png', 'image/gif'].includes(file.type)) {
				formFile.value = "";
				alert("Можно загружать только: jpeg, png', gif");
				return;

			}
			if (file.size > 2 * 1024 * 1024) {				
				formFile.value = "";
				alert("Размер изображения больше допустимого 2 Mb");
				return;
			}

			let reader = new FileReader();

			// console.log(e.target.result);

			reader.onload = function(e) {
				// console.log(e);
				// console.log(fileThumbnail);
				fileThumbnail.innerHTML = `<img src="${e.target.result}" alt="Фото">`;
				
				// console.log(fileThumbnail.innerHtml);
			}
			reader.onerror = (e) => {
				alert('Ошибка');
			}

			reader.readAsDataURL(file);

		}



		function formValidate(e) {

			

			let req_inputs = document.getElementsByClassName('_req');

			let error = 0;

			for (let i = 0; i < req_inputs.length; i++) {


				let input = req_inputs[i];
				removeErrorClass(input);

				if (input.classList.contains('_email')) {

					if (testEmail(input.value)) {
						addErrorClass(input);
						error++;
					}
				} else if (input.getAttribute('type') == "checkbox" && !input.checked ) {
					
					addErrorClass(input);
					error++;
				} else if (input.value === "" ) {
					
					addErrorClass(input);
					error++;
				}				
			}

			return error
		}

		function addErrorClass(input) {
			input.parentNode.classList.add('_error');
			input.classList.add('_error');
		}

		function removeErrorClass(input) {
			input.parentNode.classList.remove('_error');
			input.classList.remove('_error');
			
		}

		function testEmail(value) {
			return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
		}

	}
})();