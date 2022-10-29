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
                <!-- Form -->
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
                
                <!-- Success View -->
                <!-- .hidden hides section -->
                <div class="success-cont hidden">
                    <h2>Booking Success!</h2>
                    <svg width="188" height="188" viewBox="0 0 188 188" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M59.6 98.3L85.4 124.1L128.4 72.5" stroke="#F3A452" stroke-width="15" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M94 180C141.496 180 180 141.496 180 94C180 46.5035 141.496 8 94 8C46.5035 8 8 46.5035 8 94C8 141.496 46.5035 180 94 180Z" stroke="#F3A452" stroke-width="15"/>
                    </svg>
                    <h3>Booking Code</h3>
                    <div class="code">
                        <p>14357</p>
                    </div>
                    <p>Your booking is a success! Please download our mobile applicaton to upload your requirements. The mobile application may be downloaded <a href="">here</a>.</p>
                </div>
                
            </div>
        </div>

    </div>

</body>
<footer>
    <div class="footer">
        <img src="assets/landing_logo_sample.svg" alt="">
        <div class="links">
            <a href="">About Us</a>
            <a href="">Download our App</a>
            <a href="">Events and Services</a>
            <a href="">Schedule an Event</a>
        </div>
    </div>
</footer>
</html> 