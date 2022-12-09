<!-- requires pagination -->
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="css/cust_bookings.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Bookings</title>
    <?php 
    $page = "bookings";
    require("cust_navbar.php"); 
    ?> 
</head>
<body>
    <section class="sidenav-bookings">
    <?php 
    require("cust_sidenav.php"); 
    ?>
    <div class="container1">
        <h1>Bookings</h1>
         
        <div class="bookings-table" id="bookings-table">
            <div class="search-download-cont">
                <div class="search-sort-show">
                    <form action="">
                        <div class="searchbar-wrapper">
                            <img src="../assets/search.svg" alt="Search icon">
                            <input type="search" id="" name="" placeholder="Search">
                        </div>
                    </form>
                    <!-- Sort By -->
                    <div class="record-filter">
                        <h4>Sort by: &nbsp;</h4>
                        <div class="select-wrapper">
                            <select name="" id="">
                                <option value="">Alphabetical A-Z</option>
                            </select>
                        </div>    
                    </div>
                </div>
                
            </div>  
            
            <div class="records-table">
                <!-- web -->
                <table class="web">
                    <thead>
                        <tr>
                            <th>Event Type</th>
                            <th>Event Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>	
                        <?php for($i=0;$i<5;$i++) { ?>
                        <tr onclick=" window.location.href='#' ">
                            <td> <?php echo "Bapstism"; ?> </th>
                            <td> <?php echo "March 17, 2023"; ?> </th>
                            <td> <?php echo "Completing Requirements"; ?> </th>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <!-- mobile -->
                <?php  for($i=0;$i<5;$i++) { ?>
                <div class="usertransactions__item mobile">
                    <div>
                        <h3>Event </h3>
                        <h4> <?php echo "Baptism"; ?> </h4>
                    </div>
                    <div>
                        <h3>Event Date </h3>
                        <h4><?php echo "March 17, 2023"; ?></h4>
                    </div>
                    <div>
                        <h3>Status </h3>
                        <h4> <?php echo "Completing Requirements"; ?> </h4>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>

    </div>
    </section>
</body>
<footer>
<?php require("cust_footer.php"); ?> 
</footer>
</html>