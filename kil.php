<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>June 18-23</title>
        <script src="js/kil.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/general.js"></script>

    </head>
    <body id="kil">

        <?php include 'nav.php'; ?>
        <h1>Kil Sweden</h1>
        <div id="stop1" class="stop">

            <h2>C: Kil rental home:</h2>

            <ul class="address">
                <li></li>
                <li>Kil</li>
                <li>Värmlands län 665 91</li>
                <li>Sweden</li>
                <li><a href="https://tinyurl.com/y3knp5lw" class="addr">AirBnB info</a></li>
            </ul>
        </div>
        <div id="stop3" class="stop">
            <h2>D: Forshaga</h1>
        </div>
        <div id="stop2" class="stop">
            <h2>E: Stormon</h1>
            <p>Birthplace of <a href="http://www.sweden.mbret.tech/History/MargitTree/Margit.html">Margit Vanja Bengtsson Steele</a></p>
        </div>
        <div id="map"></div>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW2KX_6CTT2KpHWuhQz4LWDV2O3AABWV8 &callback=initMap">
        </script>
    </body>
</html>

