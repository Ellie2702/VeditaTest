<?php
    session_start();
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Products</title>
</head>
<body>

    <form method="POST" action="CProducts.php">
        <div>
        <?php
            $query = 'select * from Products where BOOL_HIDE = 0 ORDER BY DATE_CREATE';
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            $rows = mysqli_num_rows($result);
            echo 'Количество строк: <input type="number"  max="'. $rows .'" name="stringCount" required>';
        ?>
        </div>
        <button type="submit">Вывести</button> 
    </form>

    

</body>
</html>