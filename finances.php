<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/finances.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Finances</title>
    <?php
    $page = "finances"; 
    require("navbar.php"); 
    ?> 
</head>
<body>
    <div class="sidenav-finances">
    <?php require("sidenav.php"); ?>

    <div class="container1">
        <div class="title">

            <div class="cal-controls">

                <span> <img src="assets/cal-prev.svg" alt=""> </span>
                <span> <?php echo "June 2022" ?> </span>
                <span> <img src="assets/cal-next.svg" alt=""> </span>

            </div>

            <button class="btn-dl-records"> 
                <!-- download.svg -->
                <img src="assets/download.svg" alt="">
            </button>

        </div>

        <div class="top-cont">

            <div>
                <h2>Monthly Revenue</h2>
                <span>
                    <p> <?php echo "+9.78%" ?> </p>
                    <h1> <?php echo "PHP 54,000.00" ?> </h1>
                </span>
            </div>

            <div>
                <h2>Monthly Debit</h2>
                <span>
                    <p> <?php echo "+9.78%" ?> </p>
                    <h1> <?php echo "PHP 54,000.00" ?> </h1>
                </span>
            </div>

            <div>
                <h2>Monthly Credit</h2>
                <span>
                    <p> <?php echo "+9.78%" ?> </p>
                    <h1> <?php echo "PHP 54,000.00" ?> </h1>
                </span>
            </div>

            <div>
                <h2>Monthly Sundries</h2>
                <span>
                    <p> <?php echo "+9.78%" ?> </p>
                    <h1> <?php echo "PHP 54,000.00" ?> </h1>
                </span>
            </div>

        </div>

        <div class="bottom-cont">
            <h1>Files</h1>
            <div class="files-cont">

                <?php for($i=0;$i<10;$i++) { ?>
                <div>
                    <p>June 2022 Debit</p>
                    <p>Last Modified by:&nbsp; <?php echo "Juan Ponce Enrile" ?> </p>
                    <p>Created by:&nbsp; <?php echo "Emilio Aguinaldo" ?> </p>
                    <a href=""> view more </a>
                </div>
                <?php } ?> 

            </div>
        </div>

    </div>
    
    </div>
</body>
<footer>
    <?php require("footer.php"); ?> 
</footer>
</html>