<!DOCTYPE html>
<!--
written by: M Bret Blackford
-->
<html>
    <head>
        <title>Photos</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>

<script src="src/js/jquery.swipebox.js"></script>
<link rel="stylesheet" href="src/css/swipebox.css">
</head>
<body id="PHoToS">

    <?php include 'nav.php'; ?>

    <h1>2019 Sweden Trip</h1>

    <!---ul id="lightSlider" class="gallery">
        <li data-thumb="mdia/001-.jpg"> <a href="#" class="swipebox" title="My Caption 1"> <img src="media/001-.jpg" /> </a> </li>
        <li data-thumb="media/002-.jpg"> <a href="#" class="swipebox" title="My Caption 2"> <img src="media/002-.jpg" /> </a> </li>
        <li data-thumb="media/003-.jpg"> <a href="#" class="swipebox" title="My Caption 3"> <img src="media/003-.jpg" /> </a> </li>

    </ul--->
    
    <?php
    $dir = "media/*";
    foreach ( glob($dir) as $file) {
        echo '<img src='.$file.' height=50 width=50 />';
            }
    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.lightSlider.js"></script>

<script type="text/javascript">
;( function( $ ) {
	$( '.swipebox' ).swipebox();
} )( jQuery );
</script>

</body>
</html>


