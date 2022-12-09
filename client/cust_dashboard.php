<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="css/cust_dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Dashboard</title>
    <?php 
    $page = "dashboard";
    require("cust_navbar.php"); 
    ?> 
</head>
<body>
    <div class="sidenav-dashboard">
    <?php 
    require("cust_sidenav.php"); 
    ?>
    <div class="container1">

        <div class="rev-rem"> 
            <div class="reminders no-scrollbar" id="reminder">
                <h2> <?php echo "Reminder" ?> </h2>
                <?php for($i=0;$i<3;$i++){ ?>
                <div class="reminders__item">
                    <div>
                        <h3>Schedule Requested exceeded <?php echo "15" ?> days</h3>
                        <h4 class="web"><a href="">view more</a></h4>
                    </div>
                    <h4>Code: <?php echo "B-14" ?> </h4>
                    <h4>Event Name: <?php echo "House Blessing"." - "."Juan Ponce Enrile" ?> </h4>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="usertransactions no-scrollbar" id="transactions">
            <table class="web">
                <!-- sticky table header -->
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Event Date</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>	
                    <?php for($i=0;$i<5;$i++){ ?>
                        <td> <?php echo "Baptism"; ?> </td>
                        <td> <?php echo "March 17,2023"; ?> </td>
                        <td> <?php echo "Requesting for Certificate"; ?> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
            <!-- mobile -->
            <?php for($i=0;$i<3;$i++){ ?>
                <div class="usertransactions__item mobile">
                    <div>
                        <h3>Event </h3>
                        <h4> <?php echo "Baptism" ?> </h4>
                    </div>
                    <div>
                        <h3>Event Date </h3>
                        <h4><?php echo "March 17, 2023" ?></h4>
                    </div>
                    <div>
                        <h3>Status </h3>
                        <h4> <?php echo "Pending Seminar Atrendance" ?> </h4>
                    </div>
                </div>
            <?php } ?>
            <span> <a href="records.php">view more</a> </span>
        </div>
    </div>
    

    </div>

</body>
<footer>
 <?php require("cust_footer.php"); ?> 
</footer>

    <!-- <div class="dashboard-bottom-nav mobile">
        <div>
            <a id="nav-events" class="" href="#events">Events</a>
            <a id="nav-transact" href="#transactions"> <nobr>Recent Transactions</nobr></a>
            <a id="nav-remind" href="#reminder">Reminder</a>
            <a id="nav-rev" href="#revenue">Revenue</a>
        </div>
    </div> -->

    <!-- Calendar Library + JS -->
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <script src="js/dashboard.js"></script>
</html>