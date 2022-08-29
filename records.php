<?php require("table_pagination.php"); ?> 
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/records.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Records</title>
    <?php $page = "records";
    require("navbar.php"); ?> 
</head>
<body>
    <div class="sidenav-records">
    <?php require("sidenav.php"); ?>
    <div class="container1">
        <h1>Records</h1>

        <div class="view-folder">
            <h2>View by Folder</h2>
            <div class="folders-cont">
                <?php for($i=0;$i<4;$i++){ ?>
                    <div class="folder-item"> <a href=" <?php echo "records_folder.php" ?> ">
                        <h3> <?php echo "Baptism Records" ?> </h3>
                        <p> Created by <?php echo "Jose Rizal" ?> </p>
                        </a>
                    </div>
                <?php } ?>
                <div class="add-folder"> <a href="records_createFolder.php">
                    <!-- add.svg -->
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.779 0.0132222L17 0C17.4627 6.1031e-05 17.9092 0.169917 18.2549 0.477351C18.6007 0.784785 18.8215 1.20841 18.8757 1.66789L18.8889 1.88889V15.1111H32.1111C32.5738 15.1112 33.0203 15.281 33.366 15.5885C33.7118 15.8959 33.9326 16.3195 33.9868 16.779L34 17C33.9999 17.4627 33.8301 17.9092 33.5226 18.2549C33.2152 18.6007 32.7916 18.8215 32.3321 18.8757L32.1111 18.8889H18.8889V32.1111C18.8888 32.5738 18.719 33.0203 18.4115 33.366C18.1041 33.7118 17.6805 33.9326 17.221 33.9868L17 34C16.5373 33.9999 16.0908 33.8301 15.7451 33.5226C15.3993 33.2152 15.1785 32.7916 15.1243 32.3321L15.1111 32.1111V18.8889H1.88889C1.42624 18.8888 0.979697 18.719 0.633964 18.4115C0.288231 18.1041 0.0673524 17.6805 0.0132222 17.221L0 17C6.1031e-05 16.5373 0.169917 16.0908 0.477351 15.7451C0.784785 15.3993 1.20841 15.1785 1.66789 15.1243L1.88889 15.1111H15.1111V1.88889C15.1112 1.42624 15.281 0.979697 15.5885 0.633964C15.8959 0.288231 16.3195 0.0673524 16.779 0.0132222L17 0L16.779 0.0132222Z" fill="#B9B9B9"/>
                    </svg>
                </a>
                </div>
            </div>
        </div>

        <h2>View by Full List</h2>
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
                    <!-- Show Filter -->
                    <div class="record-filter">
                        <h4>Show: &nbsp;</h4>
                        <div class="select-wrapper">
                            <select name="" id="">
                                <option value="">All</option>
                            </select>
                        </div>    
                    </div>
                </div>
                
                <div class="addrecord-download">
                    <button onclick="window.location.href='records_addRecord.php'" class="btn-add-record">Add New Record</button>
                    <button class="btn-dl-records"> 
                        <!-- download.svg -->
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_484_549)">
                        <rect x="-10" y="-11" width="41" height="41" rx="4" fill="#00AA07"/>
                        <path d="M11 13V1M11 13L7 9M11 13L15 9M1 15L1.621 17.485C1.72915 17.9177 1.97882 18.3018 2.33033 18.5763C2.68184 18.8508 3.11501 18.9999 3.561 19H18.439C18.885 18.9999 19.3182 18.8508 19.6697 18.5763C20.0212 18.3018 20.2708 17.9177 20.379 17.485L21 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_484_549">
                        <path d="M-1038 -20C-1038 -28.2843 -1031.28 -35 -1023 -35H42C50.2843 -35 57 -28.2843 57 -20V592H-1038V-20Z" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </button>
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
                        <tr>
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
                    <div>
                        <span class="codetext-cont">
                            <h3>Code </h3>
                            <h4> <?php echo "BIN-". $row['id'] ?> </h4>
                        </span>
                        <div class="new hidden">NEW</div>
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

    </div>
</body>
<footer>
    <?php require("footer.html"); ?> 
</footer>
</html>