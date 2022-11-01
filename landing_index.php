<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/landing.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Christ the King Parish</title>
    
</head>
<body>

    <div class="header">
        <img src="assets/landing_logo_sample.svg" alt="">
        <div class="book-login">
            <a href="">Book an event</a>
            <button class="blue">Employee Login</button>
        </div>
    </div>

    <div class="container index">
        <div class="cover">
            <div class="title">
                <h1>Christ The King Parish</h1>
            </div>
        </div>

        <div class="bookEvent">
            <img src="assets/landing_cktkp.png" alt="">
            <div class="text">
                <h2>Christ The King Parish</h2>
                <p>Christ The King Parish is a Roman Catholic Church located at Brgy San Mariano in the town of Roxas, Oriental Mindoro</p>
                <button>Book an Event</button>
            </div>
        </div>

        <div class="events-services">
            <h2>Our Events and Services</h2>
            <p>Learn more about our offered events and services together with their requirements in our app!</p>
            <div class="itemScroll no-scrollbar" id="itemScroll">


                <div class="item" style="background-image: url(assets/landing_baptism.png);">
                    Baptism</div>
                
                <div class="item" style="background-image: url(assets/landing_wedding.png);">
                    Wedding</div>
                
                <div class="item" style="background-image: url(assets/landing_funeral.png);">
                    Funeral</div>
                
                <div class="item" style="background-image: url(assets/landing_weddingSeminar.png);">
                    Wedding Seminar</div>
                
                <div class="item" style="background-image: url(assets/landing_privMass.png);">
                    Private Mass</div>
                
                <div class="item" style="background-image: url(assets/landing_houseBlessing.png);">
                    House Blessing</div>
                

            </div>
        </div>

        <div class="download-cont">
            <img src="assets/landing_mockup.png" alt="">
            <div class="text">
                <h3>Download the Datalab app today</h3>
                <p>Start connecting with us by downloading our mobile application on your mobile phones! Scheduling events and services has never been this easy.</p>
                <button class="blue">Download APK</button>
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

<script>

const target = document.getElementById('itemScroll')

target.addEventListener('wheel', event => {
  const toLeft  = event.deltaY < 0 && target.scrollLeft > 0
  const toRight = event.deltaY > 0 && target.scrollLeft < target.scrollWidth - target.clientWidth

  if (toLeft || toRight) {
    event.preventDefault()
    target.scrollLeft += event.deltaY
  }
})

</script>
</html> 