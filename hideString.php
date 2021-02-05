<?php
    if(!isset($_GET['id'])) exit(0);
    
    include('config.php');

    $id = $_GET['id'];
    $query = $query = mysqli_prepare($link,'UPDATE products SET BOOL_HIDE = 1 WHERE PRODUCT_ID = ?');
    mysqli_stmt_bind_param($query, "i", $id);
    mysqli_stmt_execute($query) or die("Ошибка" . mysqli_error($link));
    mysqli_stmt_close($query);

    mysqli_close($link);
?>