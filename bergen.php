<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>June 11-14</title>
        <script src="js/bergen.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/general.js"></script>
    </head>
    <body id="bergen">
        <?php include 'nav.php'; ?>
        <h1>Bergen Norway</h1>
        
        <div class="stop">
        <h2>A: Bergen Airport</h2>
        <p>We arrive at the Bergen airport at 4:15pm on June 11</p>
        </div>
        <div class="stop">
        <h2>B: Bergen rental home:</h2>

        <ul class="address">
            <li>Lægdesvingen 46</li>
            <li>5096 Bergen</li>
            <li>Norway</li>
            <li><a href="https://www.airbnb.com/rooms/17697811?euid=e5513720-5cfb-f0b0-ae15-bea078e53dff" class="under">AirBnB info</a></li>
        </ul>
        </div>
        
        <div id="map"></div>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW2KX_6CTT2KpHWuhQz4LWDV2O3AABWV8 &callback=initMap">
        </script>
    </body>
</html>