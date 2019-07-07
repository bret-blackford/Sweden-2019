<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>PhotoSlider</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">

        <!-- Place somewhere in the <head> of your document -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>

        <!-- Place in the <head>, after the three links -->
        <script type="text/javascript" charset="utf-8">
            $(window).load(function () {
                $('.flexslider').flexslider();
            });
        </script>

        <script>
            $(document).ready(function () {
                $('.flexslider').flexslider({
                    animation: 'fade',
                    controlsContainer: '.flexslider'
                });
            });
        </script>
    </head>
    <body id="PHoToS">

        <?php include 'nav.php'; ?>

        <h1>2019 Sweden Trip (2)</h1>

        <div class="flex-container">
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    $dir = "media/*";
                    foreach (glob($dir) as $file) {
                        echo '<li><img src=' . $file . ' height=50 width=50 /></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>

    </body>
</html>



