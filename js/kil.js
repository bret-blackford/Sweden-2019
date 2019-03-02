
function initMap() {
    // Map options
    var options = {
        zoom: 12,
        center: {lat: 59.530836, lng: 13.392752}
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
            coords: {lat: 59.547767, lng: 13.294745},
            content: '<h1>Kil AirBnB</h1>\n\
          Värmlands län<br>\n\
          Kil, Sweden'
        },
                {   
            coords: {lat: 59.530600, lng: 13.478434},
            content: '<h1>Forshaga</h1>'
        },
                {  
            coords: {lat: 59.536337, lng: 13.500746},
            content: '<h1>Stormon</h1>'
        },
    ];

    var labels = 'DEFGHIJKLMNOPQRSTUVWXYZ';
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


