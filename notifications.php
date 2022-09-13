<?php require("table_pagination.php"); ?> 
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/notifications.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Settings</title>
    <?php 
    $page = "notifications";
    require("navbar.php"); 
    ?> 
</head>
<body>
    <div class="sidenav-notifications">
    <?php require("sidenav.php"); ?>
    <div class="container1">
        <h1> Notifications </h1>
        
        
        <div class="notifications-cont" id="notifications">
            <?php while($row=mysqli_fetch_assoc($result)) { ?>
            <div>
                <p> June 16, 2022 </p>
                <p> 11:01:00 AM </p>
                <span>
                    <h2><?php echo $row['name'] ?> </h2>
                    <p> &nbsp; has uploaded his requirements for Baptism on June 26, 2022 </p>
                </span>
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
                echo "<div><a href='notifications.php?page=".($tb_page-1)."'>
                    <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns=http://www.w3.org/2000/svg'>
                    <path d='M7.41 10.59L2.83 6L7.41 1.41L6 0L0 6L6 12L7.41 10.59Z' fill='#C4CDD5' />
                    </svg>
                </a></div>";
            }
            // page numbers
            for($i=1;$i<= $total_page;$i++) {
                $active = $i == $tb_page ? 'class="active"' : '';
                if($i<3) {
                    echo "<div ". $active ."><a href='notifications.php?page=".$i."' >$i</a></div>";
                }
                // between pages
                if($total_page>5 && $i==5){
                    echo "<div><a> ... </a></div>";
                }
                elseif ($i>=($total_page-1)) {
                    echo "<div ". $active ."><a href='notifications.php?page=".$i."' >$i</a></div>";
                }
                
            }
            // next page button
            if($i>$tb_page){
                echo "<div><a href='notifications.php?page=".($tb_page+1)."' >
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
                echo "<div><a href='notifications.php?page=".($tb_page-1)."#notifications'>
                    <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns=http://www.w3.org/2000/svg'>
                    <path d='M7.41 10.59L2.83 6L7.41 1.41L6 0L0 6L6 12L7.41 10.59Z' fill='#C4CDD5' />
                    </svg>
                </a></div>";
            }
            // page numbers
            for($i=1;$i<= $total_page;$i++) {
                $active = $i == $tb_page ? 'class="active"' : '';
                if($i<3) {
                    echo "<div ". $active ."><a href='notifications.php?page=".$i."#notifications' >$i</a></div>";
                }
                // between pages
                if($total_page>5 && $i==5){
                    echo "<div><a> ... </a></div>";
                }
                elseif ($i>=($total_page-1)) {
                    echo "<div ". $active ."><a href='notifications.php?page=".$i."#notifications' >$i</a></div>";
                }
                
            }
            // next page button
            if($i>$tb_page){
                echo "<div><a href='notifications.php?page=".($tb_page+1)."#notifications' >
                    <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M0.589966 10.59L5.16997 6L0.589966 1.41L1.99997 0L7.99997 6L1.99997 12L0.589966 10.59Z' fill='#C4CDD5'/>
                    </svg>
                </a></div>";
            }

        ?>
        </div>

    </div>

    </div>
</body>
<footer>
    <?php require("footer.php"); ?> 
</footer>
</html> 