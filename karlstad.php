<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>June 16-18</title>
        <script src="js/karlstad.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/general.js"></script>
    </head>
    <body id="karlstad">

        <?php include 'nav.php'; ?>

        <h1>Karlstad Sweden</h1>
        <div class="stop">
            <h2>D: Elite Stadshotellet Karlstad:</h2>
            <a href="https://goo.gl/maps/axEXFfsRfAr">lat: 59.911070, lng: 10.763146</a>

            <ul class="address">
                <li></li>
                <li>Kungsgatan 22</li>
                <li>651 08 Karlstad</li>
                <li>Karlstad, Sweden</li>
                <li><a href="https://www.elite.se/sv/hotell/karlstad/stadshotellet/">Hotel info</a></li>
            </ul>
        </div>


        <div id="map"></div>

        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ue3C_WCWcvo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        </div> 

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW2KX_6CTT2KpHWuhQz4LWDV2O3AABWV8 &callback=initMap">
        </script>
    </body>
</html>


