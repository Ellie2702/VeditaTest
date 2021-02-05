<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $stringCount = $_POST['stringCount'];

    function showStrings($count){
        include('config.php');
        $query = 'select * from Products where BOOL_HIDE = 0 ORDER BY DATE_CREATE';
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if($count != 0) {
            if($result){
                $rows = mysqli_num_rows($result);
                
                echo '<table><tr><th>PRODUCT_ID</th><th>PRODUCT_NAME</th><th>PRODUCT_PRICE</th>
                <th>PRODUCT_ARTICLE</th><th></th><th>PRODUCT_QUANTITY</th><th></th><th>DATE_CREATE</th></tr>';
                for($i = 0; $i < $rows && $i < $count ; $i++) {
                    $row = mysqli_fetch_row($result);
                    echo '<tr id="' . $i .'"><td>' . $row[1] . '</td><td>' . $row[2] . '</td><td>' . $row[3] . '</td>
                    <td>' . $row[4] . '</td><td><button onclick="quantityDecrease(' . $row[1] . ','. $i . ')">-</button></td>
                    <td>' . $row[5] . '</td><td><button onclick="quantityIncrease(' . $row[1] . ','. $i . ')">+</button>
                    </td><td>' . $row[6] . '</td> <td><button onclick="hideString(' . $row[1] . ','. $i . ')">
                    Скрыть</button></td></tr>';
                }
                echo '</table>';
            }
        }
        mysqli_close($link);
    }
    
    showStrings($stringCount);
    
?>
<script src="display.js"></script>
</body>
</html>
