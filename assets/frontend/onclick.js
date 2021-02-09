// mengambil element
var filename = document.getElementById('contentview');
var placetitle = document.getElementById('placetitle');
var placecontent = document.getElementById('placecontent');

contentview.addEventListener('click', function () {

	// Buat objek Ajax

	var xhr = new XMLHttpRequest();

	// Kondisi kesiapan Ajax
	xhr.onreadystatechange = function () {

		if (xhr.readyState == 4 & xhr.status == 200) {

			console.log('Ajax onlcik meluncurr!');
		}
	}

	// Eksekusi brad

	xhr.open('GET', )
});
