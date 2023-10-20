// przesyłanie formularza za pomocą AJAX
document.querySelector('form').addEventListener('submit', function(event) {
	event.preventDefault(); // zatrzymanie domyślnej akcji formularza

	var keyword = document.querySelector('#keyword').value;

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'search.php');
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		document.querySelector('#results').innerHTML = xhr.responseText;
	};
	xhr.send('keyword=' + keyword);
});


