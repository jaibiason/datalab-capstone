<!DOCTYPE html>
    <head>
        <!-- *uncomment when opening it directly 
        <link rel="stylesheet" type="text/css" href="global.css"> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <style>
            .footer{
                display: flex;
                width: 100%;
                height: 12.5rem;
                background: #EEEEEE;
                position: relative;
                padding: 2.8125rem 5.1875rem 3.375rem 5.1875rem;
            }
            .footer__pages{
                display: flex;
                flex-direction: column;
                margin-left: 52.344vw;
            }
            .footer__pages a{
                margin: .625rem;
                text-decoration: none;
                color: black;
            }

            @media (max-width: 678px){
                .footer{
                width: 100vw;
                height: fit-content;
                padding: 1.875rem 0;
                text-align: center;
                flex-direction: column;
                }
                .footer img{
                    height: 4.5rem;
                    margin-bottom: 2.5rem;
                }
                .footer__pages{
                    margin-left: 0;
                }
                .footer__pages a{
                    margin-bottom: 2.5rem;
                }
            }
        </style>
    </head>
    <body>
        <div class="footer">
            <img src="assets/Logo Full Black and Gradient.svg" alt="Logo Full Black and Gradient">
            <div class="footer__pages">
                <a href="#">Help</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Documentation</a>
            </div>
        </div>
    </body>
</html>