<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/signIn.css">
    <title>Change Password</title>
    <?php require("side_grad.html"); ?> 
</head>
<body>
    <section>
    <div class="container1">
        <h1>Change Your Password</h1>
        <form action="">
            <label for="email">Password</label>
            <input type="text" placeholder="Enter your preferred password">
            <div class="checklist_wrap">
                <div class="checklist_wrap_col1">
                    <p><img src="assets/check gray.svg" alt="grey">Atleast 8 characters</p>
                    <p><img src="assets/check gray.svg" alt="grey">Atleast has 1 uppercase</p>
                </div>
                <div class="checklist_wrap_col2">
                    <p><img src="assets/check gray.svg" alt="grey">Atleast has 1 lowercase</p>
                    <p><img src="assets/check gray.svg" alt="grey">Atleast has 1 special character</p>
                </div>
            </div>
            <label for="password">Re-enter Password</label>
            <input type="text" placeholder="Re-enter your password">
            <input class="continue_margin" type="submit" name="submit" value="Continue">
            <a href="signin.php" class="mobile_only_view">
                <button >Already have an account</button>
            </a>
        </form>
        <div class="cont_textwrap inline_center web_only_view">
            <p>Already have an account?&nbsp;</p>
            <a href="signin.php">Sign in here</a>
        </div>
    </div>
    </section>
</body>
<footer>
    <?php require("footer.html"); ?> 
</footer>
</html>