<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>June 23-24</title>
        <script src="js/oslo.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/general.js"></script>
    </head>
    <body id="oslo">

        <?php include 'nav.php'; ?>

        <h1>Oslo Norway</h1>
        <div class="stop">
        <h2>C: Oslo rental home:</h2>

        <ul class="address">
            <li></li>
            <li>Mandalls gate 12</li>
            <li>Oslo, Norway</li>
            <li><a href="https://tinyurl.com/y3oszdzp">AirBnB info</a></li>
        </ul>
        </div>
        
        <div class="stop">
        <h2>D: Olso Airport</h2>
        Fly out June 26, 2019 @ 8:45am<br>
        AMERICAN AIRLINES OPERATED BY FINNAIR  flt# 8989<br>
        </div>
        
        <div id="map"></div>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW2KX_6CTT2KpHWuhQz4LWDV2O3AABWV8 &callback=initMap">
        </script>
    </body>
</html>


