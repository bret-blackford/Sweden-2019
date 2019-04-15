<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>June 11-16</title>
        <script src="js/B2K.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/general.js"></script>
    </head>
    <body id="B2K">
        <?php include 'nav.php'; ?>
        <h1>Bergen to Karlstad - 423 miles</h1>
        <h3>Bergen to Oslo - 290 miles then Oslo to Karlstad - 133 miles</h3>

        <div class="stop">
            <h2>1: Bergen rental home:</h2>
            <a href="https://goo.gl/maps/xFSLmKTUu862">lat: 60.369744, lng: 5.368918</a>
            <p>Checkout and catch bus ~ 7:20am on June 16<br>
                Lægdesvingen 46, 5096 Bergen</p>
            <h2>2: Bergen Train Station:</h2>
            <a href="https://goo.gl/maps/tU7mX8sowxw">lat: 59.911217, lng: 10.752441</a>
            <p>We depart Bergen station at 7:57am on June 16</p>
            5015 Bergen, Norway
        </div>
        <div class="stop">
            <h2>3: Oslo Train Station</h2>
            <a href="https://goo.gl/maps/i5f6xrU1WVw">lat: 60.861924, lng: 7.111432</a>
            <p>Arrive at 14:45 pm<br>
                Jernbanetorget 1, 0154 Oslo, Norway</p>

            <h2>4: Oslo Bus Station (same as train)</h2>
            <a href="https://goo.gl/maps/i5f6xrU1WVw">lat: 60.861924, lng: 7.111432</a>
            <p>depart at 15:45 pm<br>
                Jernbanetorget 1, 0154 Oslo, Norway</p>
        </div>
        <div class="stop">
            <h2>5: Karlstad Bus Station</h2>
            <a href="https://goo.gl/maps/i5f6xrU1WVw">lat: 60.861924, lng: 7.111432</a>
            <p>Arrive at 17:45 pm<br>
                Jernbanetorget 1, 0154 Oslo, Norway</p>

            <h2>6: <a href="https://www.elite.se/sv/hotell/karlstad/stadshotellet/">Elite Stadshotellet Karlsdat</a></h2>
            <a href="https://goo.gl/maps/axEXFfsRfAr">lat: 59.911070, lng: 10.763146</a>
        </div>

        <div id="map"></div>
        <section class="maps">
            Below is the Norwegian State Railways (NSB) route map from Bergen station to Central Station in Oslo.
            <img src="includes/Bergen2Oslo.jpg" alt="Bergen to Oslo train map"> 
            <img src="includes/Bergen2Oslo-2.png" alt="Bergen to Oslo train map with elevation"> 
        </section>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW2KX_6CTT2KpHWuhQz4LWDV2O3AABWV8 &callback=initMap">
        </script>
    </body>
</html>


