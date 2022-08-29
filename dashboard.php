<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Dashboard</title>
    <?php 
    $page = "dashboard";
    require("navbar.php"); 
    ?> 
</head>
<body>
    <div class="sidenav-dashboard">
    <?php 
    require("sidenav.php"); 
    ?>
    <div class="container1">

        <div class="rev-rem">   <!-- Revenue + Reminders -->
            <div class="revenue" id="revenue">
                <h2> <?php echo "Monthly Revenue" ?> </h2>
                <h3 class="gray"> <?php echo "Jun 2022" ?> </h3>
                <div class="stats">
                    <h3 class="green"> <?php echo "+9.78%" ?> </h3>
                    <h1> <?php echo "PHP 54,000.00" ?> </h1>
                </div>
                <h3><a href="">view more</a></h3>
            </div>

            <div class="reminders" id="reminder">
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

        <div class="usertransactions" id="transactions">
            <table class="web">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th></th>
                        <th>Name</th>
                        <th>Event</th>
                        <th>Event Date</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>	
                    <!-- loop to show new transactions -->
                    <?php for($i=0;$i<2;$i++){ ?>
                    <tr>
                        <td> <?php echo "BIN-01"; ?> </td>
                        <td>
                            <div class="new"> NEW </div>
                        </td>
                        <td> <?php echo "Jose Protacio Rizal"; ?> </td>
                        <td> <?php echo "Baptism"; ?> </td>
                        <td> <?php echo "March 17,2023"; ?> </td>
                        <td> <?php echo "Requesting for Certificate"; ?> </td>
                    </tr>
                    <?php } ?>
                    <!-- loop to show other transactions that aren't new -->
                    <?php for($i=0;$i<5;$i++){ ?>
                    <tr>
                        <td> <?php echo "BIN-01"; ?> </td>
                        <td>
                            <div class="new hidden"> NEW </div>
                        </td>
                        <td> <?php echo "Jose Protacio Rizal"; ?> </td>
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
                        <span class="codetext-cont">
                            <h3>Code </h3>
                            <h4> <?php echo "BIN-01" ?> </h4>
                        </span>
                        <div class="new hidden">NEW</div>
                    </div>
                    <div>
                        <h3>Name </h3>
                        <h4> <?php echo "Jose Protacio Rizal" ?> </h4>
                    </div>
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
    <div class="container2">
        <!-- CALENDAR CODES -->
        <div class="calendar-sched" id="events">

            <div class="calendar">
                <div class="calendar__month">
                    <div class="cal-month__previous">
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.41 10.59L2.83 6L7.41 1.41L6 0L0 6L6 12L7.41 10.59Z" fill="black" fill-opacity="0.54"/>
                        </svg>
                    </div>
                    <div class="cal-month__current"></div>
                    <div class="cal-month__next">
                        
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.589966 10.59L5.16997 6L0.589966 1.41L1.99997 0L7.99997 6L1.99997 12L0.589966 10.59Z" fill="black" fill-opacity="0.54"/>
                        </svg>
                    </div>
                </div>
                <div class="calendar__head">
                    <div class="cal-head__day"></div>
                    <div class="cal-head__day"></div>
                    <div class="cal-head__day"></div>
                    <div class="cal-head__day"></div>
                    <div class="cal-head__day"></div>
                    <div class="cal-head__day"></div>
                    <div class="cal-head__day"></div>
                </div>
                <div class="calendar__body">
                    <div class="cal-body__week">
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                    </div>
                    <div class="cal-body__week">
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                    </div>
                    <div class="cal-body__week">        <!-- includes event class for demo -->
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day event"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day event"></div>
                    </div>
                    <div class="cal-body__week">
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                    </div>
                    <div class="cal-body__week">
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                    </div>
                    <div class="cal-body__week">
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                        <div class="cal-body__day"></div>
                    </div>
                </div>
                <span> <a href="">view more</a> </span>
            </div>

            <div class="schedule">
                <?php for($i=0;$i<6;$i++){ ?>
                    <div class="schedule__item">
                        <h3> <?php echo "8 AM" ?> </h3>
                        <div>
                            <h1> <?php echo "Baptism" ?> </h1>
                            <h2> <?php echo "54 " ?> customers </h2>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="overlay"></div>
        </div>
    </div>

    </div>

</body>
<footer>
 <?php require("footer.html"); ?> 
</footer>

    <div class="dashboard-bottom-nav mobile">
        <div>
            <a id="nav-events" class="" href="#events">Events</a>
            <a id="nav-transact" href="#transactions"> <nobr>Recent Transactions</nobr></a>
            <a id="nav-remind" href="#reminder">Reminder</a>
            <a id="nav-rev" href="#revenue">Revenue</a>
        </div>
    </div>

    <!-- Calendar Library + JS -->
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <script src="js/dashboard.js"></script>
</html>