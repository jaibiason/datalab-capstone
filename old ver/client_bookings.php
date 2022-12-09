<!-- requires pagination -->
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="css/client_bookings.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Bookings</title>
    <?php 
    $page = "bookings";
    require("client_navbar.php"); 
    ?> 
</head>
<body>
    <section class="sidenav-bookings">
    <?php 
    require("client_sidenav.php"); 
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
            <!-- PAGINATION -->
            <div class="table-pagination web">
            <?php 
        
                // $pr_query = "select * from tb_dl_recordtest ";
                // $pr_result = mysqli_query($con,$pr_query);
                // $total_record = mysqli_num_rows($pr_result );
                
                // $total_page = ceil($total_record/$num_per_page);
                
                // prev page button
                // if($tb_page>1){
                    echo "<div><a href='records.php?page="."#"."#bookings-table'>
                        <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns=http://www.w3.org/2000/svg'>
                        <path d='M7.41 10.59L2.83 6L7.41 1.41L6 0L0 6L6 12L7.41 10.59Z' fill='#C4CDD5' />
                        </svg>
                    </a></div>";
                // }
                // page numbers
                // for($i=1;$i<= $total_page;$i++) {
                //     $active = $i == $tb_page ? 'class="active"' : '';
                //     if($i<3) {
                        echo "<div ". "class='active'"."><a href='records.php?page="."#"."#bookings-table' >#</a></div>";
                    // }
                    // between pages
                    // if($total_page>5 && $i==5){
                        echo "<div><a> ... </a></div>";
                    // }
                    // elseif ($i>=($total_page-1)) {
                        echo "<div ". "class=''" ."><a href='records.php?page="."#"."#bookings-table' >#</a></div>";
                //     }
                    
                // }
                // next page button
                // if($i>$tb_page){
                    echo "<div><a href='records.php?page="."#"."#bookings-table' >
                        <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M0.589966 10.59L5.16997 6L0.589966 1.41L1.99997 0L7.99997 6L1.99997 12L0.589966 10.59Z' fill='#C4CDD5'/>
                        </svg>
                    </a></div>";
                // }

            ?>
            </div>

            <!-- MOBILE PAGINATION  -->
            <div class="table-pagination mobile">
            <?php 

                    echo "<div><a href='records.php?page="."#"."#bookings-table'>
                        <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns=http://www.w3.org/2000/svg'>
                        <path d='M7.41 10.59L2.83 6L7.41 1.41L6 0L0 6L6 12L7.41 10.59Z' fill='#C4CDD5' />
                        </svg>
                    </a></div>";

                        echo "<div class='active' ><a href='records.php?page="."#"."#bookings-table' >#</a></div>";
                        echo "<div><a> ... </a></div>";
                        echo "<div class='' ><a href='records.php?page="."#"."#bookings-table' >#</a></div>";
                    
                    echo "<div><a href='records.php?page="."#"."#bookings-table' >
                        <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M0.589966 10.59L5.16997 6L0.589966 1.41L1.99997 0L7.99997 6L1.99997 12L0.589966 10.59Z' fill='#C4CDD5'/>
                        </svg>
                    </a></div>";

            ?>
            </div>

        </div>

    </div>
    </section>
</body>
<footer>
<?php require("client_footer.php"); ?> 
</footer>
</html>