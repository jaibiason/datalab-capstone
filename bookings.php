<?php require("table_pagination.php"); ?> 
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/bookings.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Bookings</title>
    <?php 
    $page = "bookings";
    require("navbar.php"); 
    ?> 
</head>
<body>
    <section class="sidenav-bookings">
    <?php 
    require("sidenav.php"); 
    ?>
    <div class="container1">
        <h1>Bookings</h1>
         
        <div class="bookings-table" id="bookings-table">
            <div class="search-download-cont">
                <div class="search-sort-show">
                    <form action="">
                        <div class="searchbar-wrapper">
                            <img src="assets/search.svg" alt="Search icon">
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
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Event Type</th>
                            <th>Event Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>	
                        <?php while($row=mysqli_fetch_assoc($result)) { ?>
                        <tr onclick=" window.location.href='#' ">
                            <td> <?php echo $row['name']; ?> </th>
                            <td> <?php echo $row['num']; ?> </th>
                            <td> <?php echo $row['event']; ?> </th>
                            <td> <?php echo $row['date']; ?> </th>
                            <td> <?php echo $row['status']; ?> </th>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <!-- mobile -->
                <?php  while($row=mysqli_fetch_assoc($mresult)) { ?>
                <div class="usertransactions__item mobile">
                    <div class="new">
                        <h3>Code </h3>
                        <h4> <?php echo "BIN-". $row['id'] ?> </h4>
                    </div>
                    <div>
                        <h3>Name </h3>
                        <h4> <?php echo $row['name'] ?> </h4>
                    </div>
                    <div>
                        <h3>Event </h3>
                        <h4> <?php echo $row['event']; ?> </h4>
                    </div>
                    <div>
                        <h3>Event Date </h3>
                        <h4><?php echo $row['date']; ?></h4>
                    </div>
                    <div>
                        <h3>Status </h3>
                        <h4> <?php echo $row['status']; ?> </h4>
                    </div>
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

    </div>
    </section>
</body>
<footer>
<?php require("footer.php"); ?> 
</footer>
</html>