<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/records.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Records</title>
    <?php require("navbar.html"); ?> 
</head>
<body>
    <div class="sidenav-records">
    <?php 
    $page = "records";
    require("sidenav.php"); 
    ?>
    <div class="container1">
        <h1>Baptism Records</h1>

        <div class="bookings-table">
            <div class="search-download-cont">
                <form action="">
                    <div class="searchbar-wrapper">
                        <img src="assets/search.svg" alt="Search icon">
                        <input type="search" id="" name="" placeholder="Search">
                    </div>
                </form>
                <div class="sortby">
                    <h4>Sort by: </h4>
                    <select name="" id="">
                        <option value="">Alphabetical A-Z</option>
                    </select>
                </div>
                <button>Add New Record</button>
            </div>  
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Email Address</th>
                        <th>Event Date</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>	
                    <?php for($i=0;$i<4;$i++){ ?>
                    <tr>
                        <td> <?php echo "Jose Protacio Y Realonda"; ?> </th>
                        <td> <?php echo "+63901234567"; ?> </th>
                        <td> <?php echo "joserizal@gmail.com"; ?> </th>
                        <td> <?php echo "March 17,2023"; ?> </th>
                        <td> <?php echo "Completing Requirements"; ?> </th>
                    </tr>
                    <tr>
                        <td> <?php echo "Jose Protacio Y Realonda"; ?> </th>
                        <td> <?php echo "+63901234567"; ?> </th>
                        <td> <?php echo "joserizal@gmail.com"; ?> </th>
                        <td> <?php echo "March 17,2023"; ?> </th>
                        <td> <?php echo "Completing Requirements"; ?> </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    </div>
</body>
<footer>
<?php require("footer.html"); ?> 
</footer>
</html>