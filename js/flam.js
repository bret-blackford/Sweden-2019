
function initMap() {
// Map options
var options = {
zoom: 12,
        center: {lat: 60.735287, lng: 7.122741}
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
        coords: {lat: 60.414347, lng: 5.323671},
                content: '<h1>Bergen</h1>'
        },
        {
        coords: {lat: 60.735287, lng: 7.122741},
                content: '<h1>Myrdal</h1>'
        },
        {
        coords: {lat: 59.536337, lng: 13.500746},
                content: '<h1>Flåm</h1>'
        },
        {
        coords: {lat: 60.880390, lng: 6.838618},
                content: '<h1>Gudvangen</h1>'
        },
        {
        coords: {lat: 60.374503, lng: 6.243726},
                content: '<h1>Voss</h1>'
        },
        ];
        var labels = '12334';
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




