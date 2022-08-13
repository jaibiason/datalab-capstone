<!-- Sets the number of records shown -->
<!-- ERROR: shows extra pages -->
<?php 

    require_once('config.php');

    if(isset($_GET['page']))
    {
        $tb_page = $_GET['page'];
    }
    else
    {
        $tb_page = 1;
    }

    $num_per_page = 8;
    $start_from = ($tb_page-1)*8;
    
    $query = "select * from tb_dl_recordtest limit $start_from,$num_per_page";
    $result = mysqli_query($con,$query);

    // mobile
    $mnum_per_page = 5;
    $mstart_from = ($tb_page-1)*5;
    
    //$query = "select * from tb_dl_recordtest limit $start_from,$num_per_page";
    $mresult = mysqli_query($con,$query);
?>