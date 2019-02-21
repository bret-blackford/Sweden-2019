
function initMap() {
    // Map options
    var options = {
        zoom: 14,
        center: {lat: 59.911070, lng: 10.763146}
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
            coords: {lat: 59.911070, lng: 10.763146},
            content: '<h1>Oslo AirBnB</h1>'
        },
        {
            coords: {lat: 60.198233, lng: 11.100587},
            content: '<h1>Oslo Airport</h1>'
        },
    ];
    var labels = 'CDEFGHIJKLMNOPQRSTUVWXYZ';
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

