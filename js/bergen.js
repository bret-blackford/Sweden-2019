
function initMap() {
    // Map options
    var options = {
        zoom: 10,
        center: {lat: 60.369744, lng: 5.368918}
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
            coords: {lat: 60.288965, lng: 5.227124},
            content: '<h1>Bergen Airport</h1>'
        },
        {
            coords: {lat: 60.369744, lng: 5.368918},
            content: '<h1>Bergen AirBnB</h1>\n\
          Lægdesvingen 46<br>\n\
          5096 Bergen'
        },
    ];

    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
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




