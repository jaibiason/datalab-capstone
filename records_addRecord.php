<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/records.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Records</title>
    <?php 
    $page = "records";
    require("navbar.php"); 
    ?> 
</head>
<body>
    <div class="sidenav-records">
    <?php require("sidenav.php"); ?>
    <div class="container1">
        
        <div class="form-add-record">
            <h1>Add New Record</h1>
            <form action="">
                <div class="form-row">
                    <div class="left-col">
                        <label for="code">Code</label>
                        <input type="text">
                    </div>

                    <div class="mid-col">
                        <label for="name">Name</label>
                        <input type="text">
                    </div>

                    <div class="right-col">
                        <label for="event">Event</label>
                        <input type="text">
                    </div>
                </div class="form-row">

                <div class="form-row">
                    <div class="left-col">
                        <label for="date">Event Date</label>
                        <input type="text">
                    </div>

                    <div class="mid-col">
                        <label for="status">Status</label>
                        <input type="text">
                    </div>
                </div class="form-row">

                <div class="buttons-cont">
                    <button type="button" onclick="window.history.back()">Cancel</button>
                    <input type="submit" value="Generate Certificate">
                </div>
        </div>

    </div>

    </div>
</body>
<footer>
    <?php require("footer.html"); ?> 
</footer>
</html>