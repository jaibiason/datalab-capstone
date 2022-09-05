<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/calendar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Bookings</title>
    <?php
    $page = "bookings"; 
    require("navbar.php"); 
    ?> 
</head>
<body>
    <div class="sidenav-calendar">
    <?php require("sidenav.php"); ?>

    <div class="container1">
        <h1>Which of the calendars do you want to view?</h1>
         
        <div class="calendar-buttons">
            <button> Events/Services Calendar </button>
            <button> Leaves Calendar </button>
        </div>
    </div>
    
    </div>
</body>
<footer>
    <?php require("footer.html"); ?> 
</footer>
</html>