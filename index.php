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
    <body>
        <?php include 'nav.php'; ?>

        <div>
            <!--Currency Converter widget by FreeCurrencyRates.com -->
            <div id='gcw_mainFeOCsMG8x' class='gcw_mainFeOCsMG8x'></div>
            <a id='gcw_siteFeOCsMG8x' href='https://freecurrencyrates.com/en/'>FreeCurrencyRates.com</a>
            <script>function reloadFeOCsMG8x(){ var sc = document.getElementById('scFeOCsMG8x'); if (sc) sc.parentNode.removeChild(sc); sc = document.createElement('script'); sc.type = 'text/javascript'; sc.charset = 'UTF-8'; sc.async = true; sc.id = 'scFeOCsMG8x'; sc.src = 'https://freecurrencyrates.com/en/widget-vertical?iso=USDNOKSEKEUR&df=2&p=FeOCsMG8x&v=fi&source=fcr&width=130&width_title=0&firstrowvalue=1&thm=aaaaaa,ffffff,aaaaaa,cccccc,222222,C5C5c5,aaaaaa,212121,000000&title=Currency%20Converter&tzo=360'; var div = document.getElementById('gcw_mainFeOCsMG8x'); div.parentNode.insertBefore(sc, div); } reloadFeOCsMG8x();</script>
            <!-- put custom styles here: .gcw_mainFeOCsMG8x{}, .gcw_headerFeOCsMG8x{}, .gcw_ratesFeOCsMG8x{}, .gcw_sourceFeOCsMG8x{} -->
            <!--End of Currency Converter widget by FreeCurrencyRates.com -->
        </div>
        <?php
        //include 'bergen.php';
        ?>
    </body>
</html>
