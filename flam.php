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
            <h2>Train</h2>
            <ul class="address">
                <li>C.1.: Bergen -> Myrdal @ 8:39 - 10:51 am</li>
                <li>C.2.: <a href="https://flamsbana.business.site/">Myrdal -> Flåm</a> @ 11:55 am</li>
            </ul>
        </div>  

        <div class="stop">
            <h2>Boat</h2>
            <ul class="address">
                <li>C.3.: <a href="https://www.lustrabaatane.com/naeroyfjord-gudvangen-flam">LustraBaatane </a></li>
                <li>Fjord Voyage</li>
                <li>Flåm -> Gudvangen @ 13:30 - 15:15</li>
            </ul>
        </div>

        <div class="stop">
            <h2>Train</h2>
            <ul class="address">
                <li>C.4.: Voss -> Bergen @ 17:40 - 18:55</li>
            </ul>
        </div>

        <div id="map"></div>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW2KX_6CTT2KpHWuhQz4LWDV2O3AABWV8 &callback=initMap">
        </script>
    </body>
</html>


