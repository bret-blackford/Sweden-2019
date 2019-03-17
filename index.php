<!DOCTYPE html>

<html>
    <head>
        <title>Sweden 2019</title>
        <script src="js/oslo.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/general.js"></script>
    </head>
    <body id="home">
        <?php include 'nav.php'; ?>

        <div id="currency">
            <!--Currency Converter widget by FreeCurrencyRates.com -->
            <div id='gcw_mainFeOCsMG8x' class='gcw_mainFeOCsMG8x'></div>
            <a id='gcw_siteFeOCsMG8x' href='https://freecurrencyrates.com/en/'>FreeCurrencyRates.com</a>
            <script>function reloadFeOCsMG8x() {
                    var sc = document.getElementById('scFeOCsMG8x');
                    if (sc)
                        sc.parentNode.removeChild(sc);
                    sc = document.createElement('script');
                    sc.type = 'text/javascript';
                    sc.charset = 'UTF-8';
                    sc.async = true;
                    sc.id = 'scFeOCsMG8x';
                    sc.src = 'https://freecurrencyrates.com/en/widget-vertical?iso=USDNOKSEKEUR&df=2&p=FeOCsMG8x&v=fi&source=fcr&width=130&width_title=0&firstrowvalue=1&thm=aaaaaa,ffffff,aaaaaa,cccccc,222222,C5C5c5,aaaaaa,212121,000000&title=Currency%20Converter&tzo=360';
                    var div = document.getElementById('gcw_mainFeOCsMG8x');
                    div.parentNode.insertBefore(sc, div);
                }
                reloadFeOCsMG8x();</script>
            <!-- put custom styles here: .gcw_mainFeOCsMG8x{}, .gcw_headerFeOCsMG8x{}, .gcw_ratesFeOCsMG8x{}, .gcw_sourceFeOCsMG8x{} -->
            <!--End of Currency Converter widget by FreeCurrencyRates.com -->
        </div>


        <table class="tableizer-table">
            <thead>
                <tr class="tableizer-header">
                    <th>06/10/19</th><th> </th><th colspan="2">departing</th><th colspan="2">arriving</th>
                </tr>
                <tr class="tableizer-header">
                    <th>carrier</th><th>flt #</th><th>city</th><th>date</th><th>city</th><th>date</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>American Arilines</td><td>86</td><td>ORD Chicago</td><td>06/10/19 05:05 PM</td><td>UHR London</td><td>06/11/19 06:50 AM</td>
                </tr>
                <tr>
                    <td>British Airways</td><td>794</td><td>UHR London</td><td>06/11/19 08:25 AM</td><td>HEL Helsinki</td><td>06/11/19 01:20 PM</td>
                </tr>
                <tr>
                    <td>Finnair</td><td>941</td><td>HEL Helsinki</td><td>06/11/19 03:20 PM</td><td>BGO Bergen</td><td>06/11/19 04:15 PM</td>
                </tr>
            </tbody>
        </table>



        <ol class="stops">
            <li>June 11 - 16<br/>Bergen, Norway
                <ul class="home">
                    <li><a href="https://tinyurl.com/y4kzjaax">AirBnB</a></li>
                    <li><a href="https://goo.gl/maps/xFSLmKTUu862">lat: 60.369744, lng: 5.368918</a></li>
                    <li>Lægdesvingen 46</li>
                    <li>5096 Bergen, Norway</li>
                    <li>&HorizontalLine;</li>
                </ul>
            </li>
            <li>June 16 - 18<br/>Karlstad, Sweden
                <ul class="home">
                    <li>Hotel Elite Stadshotellet Karstad</li>
                    <li><a href="https://goo.gl/maps/axEXFfsRfAr">lat: 59.911070, lng: 10.763146</a></li>
                    <li>Kungsgatan 22</li>
                    <li>651 08 Karlstad, Sweden</li>
                    <li><a href="https://www.elite.se/sv/hotell/karlstad/stadshotellet/">Hotel info</a></li>
                    <li>&HorizontalLine;</li>
                </ul>
            </li>
            <li>June 18 - 23<br/>Kil, Sweden
                <ul class="home">
                    <li><a href="https://tinyurl.com/y3knp5lw">AirBnB:</a></li>
                    <li><a href="https://goo.gl/maps/krSgwqw76xk">lat: 59.547767, lng: 13.294745</a></li>
                    <li>Värmlands län 665 91</li>
                    <li>Kil, Sweden</li>
                    <li>&HorizontalLine;</li>
                </ul>
            </li>
            <li>June 23 - 26<br/>Oslo, Norway
                <ul class="home">
                    <li><a href="https://tinyurl.com/y3oszdzp">AirBnB:</a></li>
                    <li><a href="https://goo.gl/maps/W8RxeyPQuCz">lat: 59.911070, lng: 10.763146</a></li>
                    <li>Mandalls gate 12</li>
                    <li>Oslo, Norway</li>
                    <li>&HorizontalLine;</li>
                </ul>
            </li>
        </ol>

        <table class="tableizer-table">
            <thead>
                <tr class="tableizer-header">
                    <th>06/26/19</th><th> </th><th colspan="2">departing</th><th colspan="2">arriving</th>
                </tr>
                <tr class="tableizer-header">
                    <th>carrier</th><th>flt #</th><th>city</th><th>date</th><th>city</th><th>date</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>AA via Finnair</td><td>8989</td><td>OSL Oslo</td><td>06/26/19 08:45 AM</td><td>HEL Helsinki</td><td>06/26/19 11:05 AM</td>
                </tr>
                <tr>
                    <td>AA via Finnair</td><td>8987</td><td>HEL Helsinki</td><td>06/26/19 01:56 PM</td><td>ORD Chicago</td><td>06/26/19 03:20 PM</td>
                </tr>
            </tbody>
        </table>

        <footer>
            Back home sometime June 26, 2019
        </footer>

        <?php
//include 'bergen.php';
        ?>
    </body>
</html>
