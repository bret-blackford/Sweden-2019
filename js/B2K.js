
function initMap() {
// Map options
var options = {
zoom: 8,
        center: {lat: 60.861924, lng: 7.111432}
//center: { lat: centerLat, lng: centerLng}
}

// New map
var map = new google.maps.Map(document.getElementById('map'), options);
        // Listen for click on map
        google.maps.event.addListener(map, 'click', function (event) {
        // Add marker
        addMarker({coords: event.latLng});
        });
        
        // Array of markers
        var markers = [
        {
        coords: {lat: 60.369744, lng: 5.368918},
                content: '<h1>Bergen Rental House</h1>'
        },
        {
        coords: {lat: 59.911217, lng: 10.752441},
                content: '<h1>Bergen Train Station</h1>'
        },
        {
        coords: {lat: 60.861924, lng: 7.111432},
                content: '<h1>Oslo Central Station</h1>'
        },
        {
        coords: {lat: 60.369744, lng: 5.368918},
                content: '<h1>Karlstad Bus Stop</h1>'
        },
        {
        coords: {lat: 59.911070, lng: 10.763146},
                content: '<h1>Elite stadshotellet</h1>'
        },
        ];
        var labels = '12356';
        var labelIndex = 0;
        // Loop through markers
        for (var i = 0; i < markers.length; i++) {

// Add marker
addMarker(markers[i], labelIndex++, labels);
}

// Add Marker Function
function addMarker(props, labelIndex, labels) {

var marker = new google.maps.Marker({
position: props.coords,
        map: map,
        label: labels[labelIndex++ % labels.length],
        //icon:props.iconImage
        });
        // Check for customicon
        if (props.iconImage) {
// Set icon image
marker.setIcon(props.iconImage);
        }

// Check content
if (props.content) {
var infoWindow = new google.maps.InfoWindow({
content: props.content
        });
        marker.addListener('click', function () {
        infoWindow.open(map, marker);
        });
        }
}
}



