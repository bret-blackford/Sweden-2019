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

        <!--link rel="stylesheet" type="text/css" href="slick/slick.css"/-->
        <!--link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/-->
        <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    </head>

    <body id="PHoToS 3">

        <?php include 'nav.php'; ?>

        <h1>2019 Sweden Trip (3)</h1>

        <div class="slickslider">

            <?php
            $dir = "media/*";
            foreach (glob($dir) as $file) {
                echo '<div><img src=' . $file . '/></div>';
            }
            ?>

        </div>


        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <script>
            $('.basic').slick({
                fade: true,
                cssEase: 'ease-in-out'
            });
        </script>

    </body>
</html>



