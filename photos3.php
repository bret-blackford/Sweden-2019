<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>SlickSlider</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

        <!--link rel="stylesheet" type="text/css" href="slick/slick.css"/-->
        <!--link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/-->
        <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    </head>

    <body id="PHoToS 3">

        <?php include 'nav.php'; ?>

        <h1>2019 Sweden Trip (3)</h1>

        <div id="slideshow">
            <p>Slick Carousel</p>
            <div class="slick"> 

                <?php
                $dir = "media/*";
                foreach (glob($dir) as $file) {
                    echo '<div><img src=' . $file . '></div>';
                }
                ?>

            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#slideshow .slick').slick({
                    autoplay: true,
                    autoplaySpeed: 3000,
                });
            });

        </script>

    </body>
</html>



