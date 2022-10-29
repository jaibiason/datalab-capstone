<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/landing.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Settings</title>
    <?php 
    // $page = "settings";
    // require("navbar.php"); 
    ?> 
</head>
<body>

    <div class="header">
        <img src="assets/landing_logo_sample.svg" alt="">
        <div class="book-login">
            <a href="">Book an event</a>
            <button class="blue">Employee Login</button>
        </div>
    </div>

    <div class="container">
        <div class="about">
            <h1>Christ The King Parish</h1>
            <p>We believe that life is best shared in community. We work hard to provide opportunities for people to grow together in their relationship with God and with each other. Our goal is to provide opportunities for all to share the gospel and share their lives.</p>
        </div>

        <div class="booking">
            <div class="booking-cont">
                <div class="form-cont">
                    <h2>Book an Event or Service</h2>
                    <form action="">
                        <label for="">First Name</label><br>
                        <input type="text">

                        <label for="">Last Name</label><br>
                        <input type="text">

                        <label for="">Email Address</label><br>
                        <input type="email">

                        <label for="">Event or Service</label><br>
                        <div class="select-wrapper">
                            <select name="" id="">
                                <option value="">Wedding</option>
                                <option value="">Baptism</option>
                                <option value="">Confirmation</option>
                                <option value="">Burial</option>
                            </select>
                        </div>

                        <label for="">Target Date</label><br>
                        <input type="date">

                        <input type="submit">
                    </form>
                </div>
                
            </div>
        </div>

    </div>

</body>
<footer>
</footer>
</html> 