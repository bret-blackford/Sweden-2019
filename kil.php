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

            <h2>E: Kil rental home:</h2>
            <a href="https://tinyurl.com/y2f5bj3q">lat: 59.547767, lng: 13.294745</a>

            <ul class="address">
                <li></li>
                <li>Kil</li>
                <li>Värmlands län Rud 8, 665 91</li>
                <li>Kil, Sweden</li>
                <li><a href="https://tinyurl.com/y3knp5lw" class="addr">AirBnB info</a></li>
            </ul>
        </div>
        <div id="stop3" class="stop">
            <h2>F: Forshaga</h1>
                <a href="https://goo.gl/maps/ETqxxH4RZX62">lat: 59.530600, lng: 13.478434</a>
        </div>
        <div id="stop2" class="stop">
            <h2>G: Stormon</h1>
                <a href="https://goo.gl/maps/nZrvNCiusLq">lat: 59.536337, lng: 13.500746</a>
                <p>Birthplace of <a href="http://www.sweden.mbret.tech/History/MargitTree/Margit.html">Margit Vanja Bengtsson Steele</a></p>
        </div>
        <div id="map"></div>

        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/iR7P7NQ2xEc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>


        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW2KX_6CTT2KpHWuhQz4LWDV2O3AABWV8 &callback=initMap">
        </script>
    </body>
</html>

