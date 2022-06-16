/**
 * Theme: Dastone - Responsive Bootstrap 5 Admin Dashboard
 * Author: Mannatthemes
 * Leaflet Map Js
 */


$(function(){
	// for(i=0;i<data_user.length;i++) {
	// 	var data = data_user[i];
	// 	var mymap = L.map('Leaf_default').setView([data.latitude_user, data.longitude_user], 13);
	// 	L.marker([data.latitude_user, data.longitude_user]).addTo(mymap)
	// 		.bindPopup("<b>AKU Disini</b>");
	// }
	var mymap = L.map('Leaf_default').setView([-7.8711, 111.4623], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiY2ltczE3IiwiYSI6ImNsMHZ2MnVwajFiNTgzam8yNnZxaTFodzQifQ.5dNHHzM-4OLdSX6EuJ6QYw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>,' +
			// 'contributors,<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		accessToken : 'pk.eyJ1IjoiY2ltczE3IiwiYSI6ImNsMHZ2MnVwajFiNTgzam8yNnZxaTFodzQifQ.5dNHHzM-4OLdSX6EuJ6QYw'
	}).addTo(mymap);

	for(i=0;i<data_klinik.length;i++) {
		var data = data_klinik[i];
		L.marker([data.latitude_klinik, data.longitude_klinik]).addTo(mymap)
			.bindPopup("<b>"+ data.nama_klinik +"</b>");
	}

	//cek lokasi user
	
	if(!navigator.geolocation) {
        console.log("Your browser doesn't support geolocation feature!")
    } else {
        setInterval(() => {
            navigator.geolocation.getCurrentPosition(getPosition)
        }, 5000);
    }

    function getPosition(position){
        // console.log(position)
        var lat = position.coords.latitude
        var long = position.coords.longitude
        var accuracy = position.coords.accuracy

        console.log("Your coordinate is: Lat: "+ lat +" Long: "+ long+ " Accuracy: "+ accuracy)
    }


	L.control.locate().addTo(mymap);

	
	// L.marker([-7.8646, 111.461218]).addTo(mymap)
	// 	.bindPopup("<b>Hello world!</b><br />Dinas Pengairan.").openPopup();

	// L.circle([51.508, -0.11], 500, {
	// 	color: 'red',
	// 	fillColor: '#f03',
	// 	fillOpacity: 0.5
	// }).addTo(mymap).bindPopup("I am a circle.");

	// L.polygon([
	// 	[51.509, -0.08],
	// 	[51.503, -0.06],
	// 	[51.51, -0.047]
	// ]).addTo(mymap).bindPopup("I am a polygon.");


	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);

    
})
