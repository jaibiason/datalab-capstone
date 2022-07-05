<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/bookings.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Bookings</title>
    <?php require("navbar.html"); ?> 
</head>
<body>
    <section class="sidenav-bookings">
    <?php 
    $page = "bookings";
    require("sidenav.php"); 
    ?>
    <div class="container1">
        <h1>Bookings</h1>
         
        <div class="bookings-table"></div>
    </div>
    </section>
</body>
<footer>
<?php require("footer.html"); ?> 
</footer>
</html>