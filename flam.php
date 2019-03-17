<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>June 14</title>
        <script src="js/flam.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/general.js"></script>
    </head>
    <body id="flam">

        <?php include 'nav.php'; ?>

        <h1>Flåm Norway - Fjord Tour</h1>
        <div class="stop">
            <h1>Train</h1>
        <h3>C.1.: Bergen -> Myrdal @ 10:51 am</h3>
        
        <h3>C.2.: Myrdal -> Flåm @ 11:55 am</h3>
        </div>
        
        <div class="stop">
            <h1>Boat</h1>
        <h3>C.3.: Lustra Boatane</h3>
        <h3>Fjord Voyage</h3>
        <h3>Flåm -> Gudvangen @ 13:30 - 15:15</h3>
        </div>
        
        <div class="stop">
            <h1>Train</h1>
        <h3>C.4.: Voss -> Bergen @ 17:40 - 18:55</h3>
        </div>
        
        <div id="map"></div>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW2KX_6CTT2KpHWuhQz4LWDV2O3AABWV8 &callback=initMap">
        </script>
    </body>
</html>


