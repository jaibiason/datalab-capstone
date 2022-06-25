
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/signIn.css">
    <title>Change Password</title>
    <?php require("side_grad.html"); ?> 

    <style>
        .cont_textwrap{
            width: 524px;
            font-size: 24px;
            margin: 80px 0 110px 0;
        }

        @media (max-width: 400px){
            .container1 img{
                height: 104px;
            }
            .cont_textwrap{
                width: 336px;
                font-size: 16px;
                margin: 45px 0 140px;
            }
        }
    </style>
</head>
<body>
    <section>
    <div class="container1">
        <img src="assets/check circle.svg" alt="Check inside circle">
        <div class="cont_textwrap width_fontsize">
            <p>You have successfully changed your password.</p>
            <p>You may now use your new password.</p>
        </div>
        <button>Proceed to Sign In</button>
    </div>
    </section>
</body>
<footer>
<?php require("footer.html"); ?> 
</footer>
</html>