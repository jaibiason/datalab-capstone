<!DOCTYPE html>
    <head>
        <!-- *uncomment when opening it directly  
        <link rel="stylesheet" type="text/css" href="global.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <style>
            .navbar-top{
                display: flex;
                width: 100%;
                height: 48px;
                background: #1C212D;
                position: relative;
                justify-content: space-between;
            }
            .logo{
                display: flex;
            }
            .logo img.mobile{
                z-index: 10;
            }
            .navbar-top .mobile{
                display: none;
            }
            
            .navbar-top .top-icons, .navbar-top .user-wrapper{
                display: flex;
                color: white;
                align-items: center;
            }
            .top-icons a{
                display: flex;
                align-items: center;
                height: 100%;
                padding: 0 15px;
            }
            .user-wrapper h3{
                margin-left: 15px;
                font-weight: 400;
            }
            .top-icons a.web:hover{
                background-color: white;
                transition: .15s ease-in;
            }
            .top-icons a:hover svg path,        /* fix soon user acc icon thinner */
            .top-icons a:hover svg{
                fill: #F3A452;
                stroke: #F3A452;
                stroke-width: .3px;
            }
            .top-icons a:hover h3{
                color: #F3A452;
                transition: .15s ease-in;
            }

            /* .top-icons img, .user-wrapper img{
                height: 35%;
            } */

            .nav {
                display: flex;
                justify-content: space-around;
                width: 30%;
            }

            .navlink {
                list-style: none;
                margin: 0;
            }

            .burger {
                font-size: 1.2em;
                display: none;
            }

            @media screen and (max-width: 678px) {
                .nav-active::-webkit-scrollbar { display: none !important }
                .navbar-top{
                    background: black;
                }
                .navbar-top .web{
                    display: none;
                }
                .navbar-top .mobile{
                    display: unset;
                }
                .burger {
                    display: block;
                    z-index: 10;
                    cursor: pointer;
                    margin-right: 1rem;
                }
                .logo .mobile{
                    margin-left: 1rem;
                }
                .navbar-top .page-title{
                    display: flex;
                    align-items: center;
                    color: white;
                    font-size: 19px;
                    text-transform: uppercase;
                }
                .nav {
                margin: 0;
                background: black;
                position: fixed;
                top: -150%;
                right: 0;
                /* % works better for web */
                width: 100vw; 
                height: 100vh;
                flex-direction: column;
                justify-content: space-around;
                padding-top: 70px;
                transition: all 400ms;
                }
                .navlink {
                    text-align: center;
                }
                .navlink a {
                color: white;
                text-decoration: none;
                font-size: 1.2em;
                padding: 25px 36px;
                justify-content: space-between;
                }
                .navbar-top .nav > li:nth-child(1) a,
                .navbar-top .nav > li:nth-child(2) a,
                .navbar-top .nav > li:nth-child(3) a{
                    justify-content: center;
                }

                .nav-active {
                    top: 0;
                    left: 0;
                    z-index: 9;
                    overflow: auto;
                }
                .navlink.active-page a{
                    color: #F3A452;
                }
                .navlink.active-page path{
                    stroke: #F3A452;
                    fill: #F3A452;
                }
            }

            /* @media (max-width: 400px){
                .side-grad{
                    width: 100vw;
                    height: 71px;
                    background: linear-gradient(90deg, #F5D97E 0%, #F3A452 73.19%);
                    padding: 0 11px;
                    position: absolute;
                    text-align: start;
                }
            } */
        </style>
    </head>
    <body>
        <section class="navbar-top">
            <div class="logo">
                <img class="web" src="assets/logo full white.svg" alt="Datalab Logo and Text White">
                <img class="mobile" src="assets/datalab icon white.svg" alt="Datalab Logo White">
            </div>
            <h1 class="page-title mobile"><?php echo $page; ?></h1>
            <div class="top-icons ">
                <a class="web" href="">
                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.99497 20C8.4642 20 7.95518 19.7893 7.57987 19.4142C7.20457 19.0391 6.99372 18.5304 6.99372 18H10.9962C10.9962 18.5304 10.7854 19.0391 10.4101 19.4142C10.0348 19.7893 9.52573 20 8.99497 20ZM16.9999 17H0.98999V15L2.99123 14V8.5C2.99123 5.038 4.41312 2.793 6.99372 2.18V0H10.9962V2.18C13.5768 2.792 14.9987 5.036 14.9987 8.5V14L16.9999 15V17ZM8.99497 3.75C8.39402 3.71122 7.79293 3.82362 7.24667 4.07693C6.70042 4.33024 6.22642 4.71636 5.86802 5.2C5.24518 6.18456 4.93958 7.33638 4.99248 8.5V15H12.9975V8.5C13.0503 7.33639 12.7447 6.18458 12.1219 5.2C11.7635 4.71636 11.2895 4.33024 10.7433 4.07693C10.197 3.82362 9.59591 3.71122 8.99497 3.75Z" fill="white"/>
                        </svg>                        
                    </a>
                <a href="" class="user-wrapper web">
                    <svg width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66639 10.8195C9.48284 10.8195 10.281 10.5401 10.9598 10.0166C11.6387 9.49314 12.1678 8.74913 12.4802 7.87864C12.7927 7.00815 12.8744 6.05029 12.7151 5.12619C12.5558 4.20209 12.1627 3.35324 11.5854 2.687C11.008 2.02076 10.2725 1.56704 9.47173 1.38323C8.67097 1.19941 7.84095 1.29375 7.08665 1.65432C6.33234 2.01489 5.68763 2.62549 5.23403 3.4089C4.78044 4.19232 4.53833 5.11337 4.53833 6.05558C4.53833 7.31904 4.97325 8.53075 5.74741 9.42416C6.52157 10.3176 7.57156 10.8195 8.66639 10.8195ZM8.66639 2.6528C9.24957 2.6528 9.81965 2.85237 10.3045 3.22627C10.7894 3.60017 11.1674 4.13161 11.3905 4.75339C11.6137 5.37517 11.6721 6.05935 11.5583 6.71943C11.4446 7.3795 11.1637 7.98582 10.7514 8.4617C10.339 8.93759 9.81361 9.26168 9.24163 9.39297C8.66966 9.52427 8.07679 9.45688 7.538 9.19933C6.99921 8.94179 6.5387 8.50564 6.21471 7.94606C5.89071 7.38648 5.71777 6.72858 5.71777 6.05558C5.71777 5.1531 6.02843 4.2876 6.5814 3.64945C7.13437 3.01131 7.88437 2.6528 8.66639 2.6528Z" fill="white"/>
                        <path d="M8.66639 10.8195C9.48284 10.8195 10.281 10.5401 10.9598 10.0166C11.6387 9.49314 12.1678 8.74913 12.4802 7.87864C12.7927 7.00815 12.8744 6.05029 12.7151 5.12619C12.5558 4.20209 12.1627 3.35324 11.5854 2.687C11.008 2.02076 10.2725 1.56704 9.47173 1.38323C8.67097 1.19941 7.84095 1.29375 7.08665 1.65432C6.33234 2.01489 5.68763 2.62549 5.23403 3.4089C4.78044 4.19232 4.53833 5.11337 4.53833 6.05558C4.53833 7.31904 4.97325 8.53075 5.74741 9.42416C6.52157 10.3176 7.57156 10.8195 8.66639 10.8195ZM8.66639 2.6528C9.24957 2.6528 9.81965 2.85237 10.3045 3.22627C10.7894 3.60017 11.1674 4.13161 11.3905 4.75339C11.6137 5.37517 11.6721 6.05935 11.5583 6.71943C11.4446 7.3795 11.1637 7.98582 10.7514 8.4617C10.339 8.93759 9.81361 9.26168 9.24163 9.39297C8.66966 9.52427 8.07679 9.45688 7.538 9.19933C6.99921 8.94179 6.5387 8.50564 6.21471 7.94606C5.89071 7.38648 5.71777 6.72858 5.71777 6.05558C5.71777 5.1531 6.02843 4.2876 6.5814 3.64945C7.13437 3.01131 7.88437 2.6528 8.66639 2.6528Z" stroke="white" stroke-width="0.6" mask="url(#path-1-outside-1_243_121)"/>
                        <path d="M16.0202 15.8352C15.0745 14.6816 13.9348 13.7628 12.6709 13.1349C11.407 12.5069 10.0454 12.183 8.66934 12.183C7.29327 12.183 5.93167 12.5069 4.66775 13.1349C3.40384 13.7628 2.26418 14.6816 1.31845 15.8352C1.11341 16.0879 0.999536 16.4213 1 16.7675V20.3472C1 20.7082 1.12426 21.0544 1.34545 21.3097C1.56664 21.565 1.86664 21.7084 2.17945 21.7084H15.1533C15.4661 21.7084 15.7661 21.565 15.9873 21.3097C16.2085 21.0544 16.3328 20.7082 16.3328 20.3472V16.7675C16.3348 16.4222 16.2231 16.089 16.0202 15.8352ZM15.1533 20.3472H2.17945V16.7607C3.01522 15.7451 4.02132 14.9364 5.13652 14.3837C6.25173 13.8311 7.45271 13.5461 8.66639 13.5461C9.88007 13.5461 11.0811 13.8311 12.1963 14.3837C13.3115 14.9364 14.3176 15.7451 15.1533 16.7607V20.3472Z" fill="white"/>
                        <path d="M16.0202 15.8352C15.0745 14.6816 13.9348 13.7628 12.6709 13.1349C11.407 12.5069 10.0454 12.183 8.66934 12.183C7.29327 12.183 5.93167 12.5069 4.66775 13.1349C3.40384 13.7628 2.26418 14.6816 1.31845 15.8352C1.11341 16.0879 0.999536 16.4213 1 16.7675V20.3472C1 20.7082 1.12426 21.0544 1.34545 21.3097C1.56664 21.565 1.86664 21.7084 2.17945 21.7084H15.1533C15.4661 21.7084 15.7661 21.565 15.9873 21.3097C16.2085 21.0544 16.3328 20.7082 16.3328 20.3472V16.7675C16.3348 16.4222 16.2231 16.089 16.0202 15.8352ZM15.1533 20.3472H2.17945V16.7607C3.01522 15.7451 4.02132 14.9364 5.13652 14.3837C6.25173 13.8311 7.45271 13.5461 8.66639 13.5461C9.88007 13.5461 11.0811 13.8311 12.1963 14.3837C13.3115 14.9364 14.3176 15.7451 15.1533 16.7607V20.3472Z" stroke="white" stroke-width="0.6" mask="url(#path-2-outside-2_243_121)"/>
                        </svg>                        
                    <h3>Merites Suarez</h3>
                </a>

            <!-- MOBILE -->
                <ul class="nav mobile">
                    <li class="navlink <?php if ($page == "profile") {echo "active-page";} ?>"><a href="#">Profile</a></li>
                    <li class="navlink <?php if ($page == "notification") {echo "active-page";} ?>"><a href="#">Notifications</a></li>
                    <li class="navlink <?php if ($page == "logout") {echo "active-page";} ?>"><a href="#">Logout</a></li>
                    <li class="navlink <?php if ($page == "dashboard") {echo "active-page";} ?>"><a href="#">Dashboard
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 0.5L12.57 1.893L20.15 9.5H0V11.5H20.15L12.57 19.073L14 20.5L24 10.5L14 0.5Z" fill="white"/>
                        </svg>
                    </a></li>
                    <li class="navlink <?php if ($page == "bookings") {echo "active-page";} ?>" ><a href="#">Bookings
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0.5L12.57 1.893L20.15 9.5H0V11.5H20.15L12.57 19.073L14 20.5L24 10.5L14 0.5Z" fill="white"/>
                        </svg>
                    </a></li>
                    <li class="navlink <?php if ($page == "calendar") {echo "active-page";} ?>"><a href="#">Calendar
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0.5L12.57 1.893L20.15 9.5H0V11.5H20.15L12.57 19.073L14 20.5L24 10.5L14 0.5Z" fill="white"/>
                        </svg>
                    </a></li>
                    <li class="navlink <?php if ($page == "records") {echo "active-page";} ?>"><a href="#">Records
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0.5L12.57 1.893L20.15 9.5H0V11.5H20.15L12.57 19.073L14 20.5L24 10.5L14 0.5Z" fill="white"/>
                        </svg>
                    </a></li>
                    <li class="navlink <?php if ($page == "finances") {echo "active-page";} ?>" ><a href="#">Finances
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0.5L12.57 1.893L20.15 9.5H0V11.5H20.15L12.57 19.073L14 20.5L24 10.5L14 0.5Z" fill="white"/>
                        </svg>
                    </a></li>
                    <li class="navlink <?php if ($page == "accounts") {echo "active-page";} ?>" ><a href="#">Accounts
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0.5L12.57 1.893L20.15 9.5H0V11.5H20.15L12.57 19.073L14 20.5L24 10.5L14 0.5Z" fill="white"/>
                        </svg>
                    </a></li>
                    <li class="navlink <?php if ($page == "settings") {echo "active-page";} ?>"><a href="#">Settings
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0.5L12.57 1.893L20.15 9.5H0V11.5H20.15L12.57 19.073L14 20.5L24 10.5L14 0.5Z" fill="white"/>
                        </svg>
                    </a></li>
                </ul>
                <div class="burger mobile">
                    <img class="fas fa-bars" id="brgicon" src="assets/burger.svg" alt="">
                </div>
            </div>
        </section>

        <script>
            // Selection of HTML objects
            const burger = document.querySelector('.burger img');
            const nav = document.querySelector('.nav');

            // Defining a function
            function toggleNav() {
                // burger.classList.toggle('fa-bars');
                // burger.classList.toggle('fa-times');
                var img = document.getElementById('brgicon').src;
                if (img.indexOf('burger.svg')!=-1) {
                    document.getElementById('brgicon').src  = 'assets/close.svg';
                }
                else {
                document.getElementById('brgicon').src = 'assets/burger.svg';
                }

                nav.classList.toggle('nav-active');
            }

            // Calling the function after click event occurs
            burger.addEventListener('click', function() {
                toggleNav();
            });
        </script>
    </body>
</html>