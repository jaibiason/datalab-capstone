<!-- config for database -->
<?php 

    $con = mysqli_connect('localhost','root','','test');
    if(!$con)
    {
        echo ' Please Check Your Connection ';
    }


?>