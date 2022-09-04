<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/accounts.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Datalab | Records</title>
    <?php 
    $page = "records";
    require("navbar.php"); 
    ?> 
</head>
<body>
    <div class="sidenav-accounts">
    <?php require("sidenav.php"); ?>
    <div class="container1">
        <div class="title">
            <a href="records.php"><svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.5625 8.57245H4.51375L9.73188 2.34444C9.97587 2.05272 10.0933 1.67664 10.0582 1.29892C10.0232 0.921206 9.83856 0.572793 9.545 0.330331C9.25144 0.0878688 8.87297 -0.0287806 8.49286 0.00604446C8.11275 0.0408695 7.76212 0.224317 7.51812 0.516029L0.330625 9.08669C0.282268 9.15486 0.239026 9.22648 0.20125 9.30096C0.20125 9.37238 0.20125 9.41523 0.100625 9.48665C0.0354684 9.65044 0.00135286 9.82478 0 10.0009C0.00135286 10.177 0.0354684 10.3513 0.100625 10.5151C0.100625 10.5866 0.100625 10.6294 0.20125 10.7008C0.239026 10.7753 0.282268 10.8469 0.330625 10.9151L7.51812 19.4858C7.65328 19.647 7.82253 19.7767 8.01384 19.8656C8.20515 19.9544 8.41382 20.0003 8.625 20C8.96087 20.0006 9.28638 19.8844 9.545 19.6715C9.69056 19.5515 9.81088 19.4043 9.89907 19.2381C9.98727 19.0719 10.0416 18.89 10.059 18.7029C10.0763 18.5158 10.0564 18.3272 10.0002 18.1478C9.94411 17.9683 9.85292 17.8017 9.73188 17.6574L4.51375 11.4293H21.5625C21.9437 11.4293 22.3094 11.2788 22.579 11.011C22.8486 10.7431 23 10.3797 23 10.0009C23 9.62205 22.8486 9.25872 22.579 8.99083C22.3094 8.72295 21.9437 8.57245 21.5625 8.57245Z" fill="black"/>
            </svg></a>
            <h1> Add New User </h1>
        </div>
        
        <div class="form-temp form-create-user">

            <form action="">
                <div class="form-row">
                    <div>
                        <label for="name">Name</label>
                        <input type="text">
                    </div>

                    <div>
                        <label for="code">Email Address</label>
                        <input type="text">
                    </div>

                </div class="form-row">

                <div class="form-row">
                    <div>
                        <label for="role">Role</label>
                            <div class="select-wrapper">
                                <select name="role" id="">
                                    <option value="">Admin</option>
                                    <option value="">Customer</option>
                                </select>
                        </div>  
                    </div>                    
                </div class="form-row">

                <div class="buttons-cont">
                    <button type="button" onclick="window.history.back()">Cancel</button>
                    <input type="submit" class="btn-primary" value="Create User">
                </div>
        </div>

    </div>

    </div>
</body>
<footer>
    <?php require("footer.html"); ?> 
</footer>
</html> 