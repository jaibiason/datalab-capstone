<?php require("table_pagination.php"); ?> 
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/records.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Records</title>
    <?php 
    $page = "records";
    $userPage = "activities";
    require("navbar.php"); ?> 
</head>
<body>
    <div class="sidenav-records view-userRecords">
    <?php require("sidenav.php"); ?>
    <div class="container1">
        <!-- top user header -->
        <div class="title title-btns">
            <div class="user">
                <a href="records.php"><svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.5625 8.57245H4.51375L9.73188 2.34444C9.97587 2.05272 10.0933 1.67664 10.0582 1.29892C10.0232 0.921206 9.83856 0.572793 9.545 0.330331C9.25144 0.0878688 8.87297 -0.0287806 8.49286 0.00604446C8.11275 0.0408695 7.76212 0.224317 7.51812 0.516029L0.330625 9.08669C0.282268 9.15486 0.239026 9.22648 0.20125 9.30096C0.20125 9.37238 0.20125 9.41523 0.100625 9.48665C0.0354684 9.65044 0.00135286 9.82478 0 10.0009C0.00135286 10.177 0.0354684 10.3513 0.100625 10.5151C0.100625 10.5866 0.100625 10.6294 0.20125 10.7008C0.239026 10.7753 0.282268 10.8469 0.330625 10.9151L7.51812 19.4858C7.65328 19.647 7.82253 19.7767 8.01384 19.8656C8.20515 19.9544 8.41382 20.0003 8.625 20C8.96087 20.0006 9.28638 19.8844 9.545 19.6715C9.69056 19.5515 9.81088 19.4043 9.89907 19.2381C9.98727 19.0719 10.0416 18.89 10.059 18.7029C10.0763 18.5158 10.0564 18.3272 10.0002 18.1478C9.94411 17.9683 9.85292 17.8017 9.73188 17.6574L4.51375 11.4293H21.5625C21.9437 11.4293 22.3094 11.2788 22.579 11.011C22.8486 10.7431 23 10.3797 23 10.0009C23 9.62205 22.8486 9.25872 22.579 8.99083C22.3094 8.72295 21.9437 8.57245 21.5625 8.57245Z" fill="black"/>
                </svg></a>
                <h1> <?php echo "Jose Protacio Rizal" ?> </h1>
            </div>
            <div class="buttons">
                <button class="btn-acc-edit">
                    <img src="assets/edit.svg" alt="">
                </button>
                <button class="btn-delete">
                    <img src="assets/delete.svg" alt="">
                </button>
            </div>
        </div>

        <div class="user-table-details">
            <!-- left section -->
            <div class="bookings-activities-files">
                
                <div class="view-user-nav">
                    <div>
                        <a id="nav-bookings" class="<?php if ($userPage == "bookings") {echo "active";} ?>" href="#">Bookings</a>
                        <a id="nav-activities" class="<?php if ($userPage == "activities") {echo "active";} ?>" href="#"> <nobr>Activities</nobr></a>
                        <a id="nav-files" class="<?php if ($userPage == "files") {echo "active";} ?>" href="#">Files</a>
                    </div>
                </div>

                <!-- left table -->
                <div class="activities-cont">
                    <?php for($i=0;$i<10;$i++){ ?>
                    <div>
                        <p> <?php echo "June 16, 2022" ?> </p>
                        <p> <?php echo "11:01:00 AM" ?> </p>
                        <p> <?php echo "Jose Rizal has uploaded his requirements for Baptism on June 26, 2022" ?> </p>
                    </div>
                    <?php } ?>
                </div>

                <!-- PAGINATION -->
                    <div class="table-pagination web">
                    <?php 
                
                        $pr_query = "select * from tb_dl_recordtest ";
                        $pr_result = mysqli_query($con,$pr_query);
                        $total_record = mysqli_num_rows($pr_result );
                        
                        $total_page = ceil($total_record/$num_per_page);
                        
                        // prev page button
                        if($tb_page>1){
                            echo "<div><a href='records.php?page=".($tb_page-1)."#bookings-table'>
                                <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns=http://www.w3.org/2000/svg'>
                                <path d='M7.41 10.59L2.83 6L7.41 1.41L6 0L0 6L6 12L7.41 10.59Z' fill='#C4CDD5' />
                                </svg>
                            </a></div>";
                        }
                        // page numbers
                        for($i=1;$i<= $total_page;$i++) {
                            $active = $i == $tb_page ? 'class="active"' : '';
                            if($i<3) {
                                echo "<div ". $active ."><a href='records.php?page=".$i."#bookings-table' >$i</a></div>";
                            }
                            // between pages
                            if($total_page>5 && $i==5){
                                echo "<div><a> ... </a></div>";
                            }
                            elseif ($i>=($total_page-1)) {
                                echo "<div ". $active ."><a href='records.php?page=".$i."#bookings-table' >$i</a></div>";
                            }
                            
                        }
                        // next page button
                        if($i>$tb_page){
                            echo "<div><a href='records.php?page=".($tb_page+1)."#bookings-table' >
                                <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M0.589966 10.59L5.16997 6L0.589966 1.41L1.99997 0L7.99997 6L1.99997 12L0.589966 10.59Z' fill='#C4CDD5'/>
                                </svg>
                            </a></div>";
                        }

                    ?>
                    </div>

                    <!-- MOBILE PAGINATION error: pages more than records -->
                    <div class="table-pagination mobile">
                    <?php 
                
                        $pr_query = "select * from tb_dl_recordtest ";
                        $pr_result = mysqli_query($con,$pr_query);
                        $total_record = mysqli_num_rows($pr_result );
                        
                        $total_page = ceil($total_record/$mnum_per_page);
                        
                        // prev page button
                        if($tb_page>1){
                            echo "<div><a href='records.php?page=".($tb_page-1)."#bookings-table'>
                                <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns=http://www.w3.org/2000/svg'>
                                <path d='M7.41 10.59L2.83 6L7.41 1.41L6 0L0 6L6 12L7.41 10.59Z' fill='#C4CDD5' />
                                </svg>
                            </a></div>";
                        }
                        // page numbers
                        for($i=1;$i<= $total_page;$i++) {
                            $active = $i == $tb_page ? 'class="active"' : '';
                            if($i<3) {
                                echo "<div ". $active ."><a href='records.php?page=".$i."#bookings-table' >$i</a></div>";
                            }
                            // between pages
                            if($total_page>5 && $i==5){
                                echo "<div><a> ... </a></div>";
                            }
                            elseif ($i>=($total_page-1)) {
                                echo "<div ". $active ."><a href='records.php?page=".$i."#bookings-table' >$i</a></div>";
                            }
                            
                        }
                        // next page button
                        if($i>$tb_page){
                            echo "<div><a href='records.php?page=".($tb_page+1)."#bookings-table' >
                                <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M0.589966 10.59L5.16997 6L0.589966 1.41L1.99997 0L7.99997 6L1.99997 12L0.589966 10.59Z' fill='#C4CDD5'/>
                                </svg>
                            </a></div>";
                        }

                    ?>
                    </div>
            </div>

            <!-- right section: user details -->
            <div class="user-cont">
                <div class="user-pic">
                    <img src="assets/user icon placeholder.png" alt="">
                </div>
                <div class="user-details">
                    
                    <div>
                        <h3> <?php echo "Jose Protacio Rizal Y Realonda" ?> </h3>
                        <h4>Name</h4>
                    </div>

                    <div>
                        <h3> <?php echo "+63901234567" ?> </h3>
                        <h4>Number</h4>
                    </div>

                    <div>
                        <h3> <?php echo "joserizal@gmail.com" ?> </h3>
                        <h4>Email</h4>
                    </div>

                    <div>
                        <h3> <?php echo "G/F 8439 South Super Hi-Way, West Marcelo Green Village, Paranaque City" ?> </h3>
                        <h4>Address</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
</body>
<footer>
    <?php require("footer.php"); ?> 
</footer>
</html>