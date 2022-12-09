<!-- requires pagination -->
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="css/cust_calendar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Bookings</title>
    <?php 
    $page = "bookings";
    require("cust_navbar.php"); ?> 
</head>
<body>
    <div class="sidenav-calendar event-pg">
    <?php require("cust_sidenav.php"); ?>
    <div class="container1 tabs">
        <!-- top user header -->
        <div class="title ">
            <a href="records.php"><svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.5625 8.57245H4.51375L9.73188 2.34444C9.97587 2.05272 10.0933 1.67664 10.0582 1.29892C10.0232 0.921206 9.83856 0.572793 9.545 0.330331C9.25144 0.0878688 8.87297 -0.0287806 8.49286 0.00604446C8.11275 0.0408695 7.76212 0.224317 7.51812 0.516029L0.330625 9.08669C0.282268 9.15486 0.239026 9.22648 0.20125 9.30096C0.20125 9.37238 0.20125 9.41523 0.100625 9.48665C0.0354684 9.65044 0.00135286 9.82478 0 10.0009C0.00135286 10.177 0.0354684 10.3513 0.100625 10.5151C0.100625 10.5866 0.100625 10.6294 0.20125 10.7008C0.239026 10.7753 0.282268 10.8469 0.330625 10.9151L7.51812 19.4858C7.65328 19.647 7.82253 19.7767 8.01384 19.8656C8.20515 19.9544 8.41382 20.0003 8.625 20C8.96087 20.0006 9.28638 19.8844 9.545 19.6715C9.69056 19.5515 9.81088 19.4043 9.89907 19.2381C9.98727 19.0719 10.0416 18.89 10.059 18.7029C10.0763 18.5158 10.0564 18.3272 10.0002 18.1478C9.94411 17.9683 9.85292 17.8017 9.73188 17.6574L4.51375 11.4293H21.5625C21.9437 11.4293 22.3094 11.2788 22.579 11.011C22.8486 10.7431 23 10.3797 23 10.0009C23 9.62205 22.8486 9.25872 22.579 8.99083C22.3094 8.72295 21.9437 8.57245 21.5625 8.57245Z" fill="black"/>
            </svg></a>
            <h1> <?php echo "Baptism, Heneral Luna" ?> </h1>
        </div>

        <div class="sched-details">
            
            <div class="view-user-nav web">
                <div>
                    <a type="button" id="defaultOpen" class="tablinks active" onclick="showUserRecord(event, 'SchedInfo')" >Schedule Information List</a>
                    <a type="button" class="tablinks" onclick="showUserRecord(event, 'Files')">Files</a>
                    <a type="button" class="tablinks" onclick="showUserRecord(event, 'Certificate')">Certificate</a>
                </div>
            </div>
            
            <div class="attendance-schedInfo">

                <!-- * schedule info -->
                <div class="schedInfo-cont tabcontent" id="SchedInfo"> 
                    <div class="sched-info">
                        
                        <div>
                            <h2>Service Date</h2>
                            <p> <?php echo "March 25, 2023" ?> </p>
                        </div>

                        <div>
                            <h2>Event Name</h2>
                            <p> <?php echo "Baptism Seminar" ?> </p>
                        </div>

                        <div>
                            <h2>Event Time</h2>
                            <p> <?php echo "1:30:00 PM" ?> </p>
                        </div>

                        <div>
                            <h2>Status</h2>
                            <p> <?php echo "Completing Requirements" ?> </p>
                        </div>

                    </div>

                    <div class="requirements">
                        <h2>Requirements:</h2>
                        <div class="req-items">
                            <!-- add .green to indicate completed reqs -->
                            <div class="item green">
                                <span>
                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5L5.5 11.5L13 1.5" stroke="#B1B1B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p>Birth Certificate of the baby</p>
                                </span>
                                <span>
                                    <p>Upload Document</p>
                                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.735365 13.2371L6.521 7.86645L6.91577 7.5L6.521 7.13355L0.735364 1.7629L1.90283 0.681531L9.2642 7.5L1.90283 14.3185L0.735365 13.2371Z" fill="#F3A452" stroke="white"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="item green">
                                <span>
                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5L5.5 11.5L13 1.5" stroke="#B1B1B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p>Valid ID of Godparents (Ninong at Ninang)</p>
                                </span>
                                <span>
                                    <p>Upload Document</p>
                                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.735365 13.2371L6.521 7.86645L6.91577 7.5L6.521 7.13355L0.735364 1.7629L1.90283 0.681531L9.2642 7.5L1.90283 14.3185L0.735365 13.2371Z" fill="#F3A452" stroke="white"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="item">
                                <span>
                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5L5.5 11.5L13 1.5" stroke="#B1B1B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p>Attendance to Baptism Seminar</p>
                                </span>
                                <span>
                                    <p>Upload Document</p>
                                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.735365 13.2371L6.521 7.86645L6.91577 7.5L6.521 7.13355L0.735364 1.7629L1.90283 0.681531L9.2642 7.5L1.90283 14.3185L0.735365 13.2371Z" fill="#F3A452" stroke="white"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="item">
                                <span>
                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5L5.5 11.5L13 1.5" stroke="#B1B1B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p>Payment</p>
                                </span>
                                <span>
                                    <p>Upload Document</p>
                                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.735365 13.2371L6.521 7.86645L6.91577 7.5L6.521 7.13355L0.735364 1.7629L1.90283 0.681531L9.2642 7.5L1.90283 14.3185L0.735365 13.2371Z" fill="#F3A452" stroke="white"/>
                                    </svg>
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="buttons">
                        <button class="btn-delete">Cancel Schedule</button>
                    </div>

                </div>

                <!-- * files -->
                <div class="files-cont tabcontent" id="Files">
                    <?php for($i=0;$i<3;$i++){ ?>
                    <div>
                        <div class="text">
                            <img src="../assets/file.svg" alt="">
                            <a href=""><p> <?php echo "proof_payment_parish_church.png" ?> </p></a>
                        </div>
                        
                        <div class="buttons">
                            <button class="btn-view-file">
                                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.8698 6.962C20.3438 7.582 20.3438 8.419 19.8698 9.038C18.3768 10.987 14.7948 15 10.6128 15C6.4308 15 2.8488 10.987 1.3558 9.038C1.12519 8.74113 1 8.37592 1 8C1 7.62408 1.12519 7.25887 1.3558 6.962C2.8488 5.013 6.4308 1 10.6128 1C14.7948 1 18.3768 5.013 19.8698 6.962Z" fill="#F3A452" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.6128 11C12.2696 11 13.6128 9.65685 13.6128 8C13.6128 6.34315 12.2696 5 10.6128 5C8.95594 5 7.61279 6.34315 7.61279 8C7.61279 9.65685 8.95594 11 10.6128 11Z" fill="#F3A452" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button class="btn-dl-records">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 13V1M11 13L7 9M11 13L15 9M1 15L1.621 17.485C1.72915 17.9177 1.97882 18.3018 2.33033 18.5763C2.68184 18.8508 3.11501 18.9999 3.561 19H18.439C18.885 18.9999 19.3182 18.8508 19.6697 18.5763C20.0212 18.3018 20.2708 17.9177 20.379 17.485L21 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- insert pagination -->

                </div>


                <!-- * certificate -->
                <div class="cert-cont tabcontent" id="Certificate">
                    <div class="tab-header">
                        <h2>Certificate</h2>
                        <div class="buttons">
                            <button class="btn-primary">Request Certificate</button>
                        </div>
                    </div>

                    <div class="files-cont">
                    <?php for($i=0;$i<3;$i++){ ?>
                    <div>
                        <div class="text">
                            <img src="../assets/file.svg" alt="">
                            <a href=""><p> <?php echo "proof_payment_parish_church.png" ?> </p></a>
                        </div>
                        
                        <div class="buttons">
                            <button class="btn-view-file">
                                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.8698 6.962C20.3438 7.582 20.3438 8.419 19.8698 9.038C18.3768 10.987 14.7948 15 10.6128 15C6.4308 15 2.8488 10.987 1.3558 9.038C1.12519 8.74113 1 8.37592 1 8C1 7.62408 1.12519 7.25887 1.3558 6.962C2.8488 5.013 6.4308 1 10.6128 1C14.7948 1 18.3768 5.013 19.8698 6.962Z" fill="#F3A452" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.6128 11C12.2696 11 13.6128 9.65685 13.6128 8C13.6128 6.34315 12.2696 5 10.6128 5C8.95594 5 7.61279 6.34315 7.61279 8C7.61279 9.65685 8.95594 11 10.6128 11Z" fill="#F3A452" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button class="btn-dl-records">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 13V1M11 13L7 9M11 13L15 9M1 15L1.621 17.485C1.72915 17.9177 1.97882 18.3018 2.33033 18.5763C2.68184 18.8508 3.11501 18.9999 3.561 19H18.439C18.885 18.9999 19.3182 18.8508 19.6697 18.5763C20.0212 18.3018 20.2708 17.9177 20.379 17.485L21 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                    
                </div>

            </div>

        </div>

    </div>

    </div>
</body>
<footer>
    <?php require("cust_footer.php"); ?> 
</footer>

    <div class="dashboard-bottom-nav mobile service-pg">
        <div>
            <a id="nav-schedInfo" class="" href="#SchedInfo">Schedule Information</a>
            <a id="nav-attendees" class="" href="#Files">Files</a>
            <a id="nav-attendees" class="" href="#Certificate">Certificate</a>
        </div>
    </div>

<script src="js/cust_view_userTabs.js"></script>
</html>