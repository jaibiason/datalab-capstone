<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/signIn.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Sign Up</title>
    <?php require("side_grad.html"); ?> 
</head>
<body>
    <section>
    <div class="container1">
        <h1>Sign In to Datalab</h1>
        <form action="">
            <label for="email">Email</label>
            <input type="text" placeholder="Enter your email address">
            <label for="password">Password</label>
            <input type="text" placeholder="Enter your password">
            <a href="change_pass.php">Forgot your Password?</a>
            <input type="submit" name="submit" value="Sign In">
        </form>
        <div class="cont_textwrap">
            <p>Planning to add a new account? Reach out to your administrator for account creation</p>
        </div>
    </div>
    </section>
</body>
<footer>
<?php require("footer.html"); ?> 
</footer>
</html>