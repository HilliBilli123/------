<?php
    include("../../inc/connect.php");
    $ressult = mysqli_query($connect , "SHOW TABLES FROM `di-driver`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ панель</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="admin__panel flex">
        <div class="admin__left__menu flex">
            <?php 
                $i = 1;
                foreach($ressult as $product){
            ?>
            <div class="left__menu__block"><a href="" class="left__menu__link" id="<?echo $i?>"><? echo $product["Tables_in_di-driver"]?></a></div>
            <?php 
            $i++;
            }
            ?>
        </div>
        <div class="admin__panel__body">
            <?php 
                $i = 1;
                foreach($ressult as $product){
                $prp = $product['Tables_in_di-driver'];
                $table = mysqli_query($connect,"SELECT * FROM `$prp`");
                $table = mysqli_fetch_assoc($table)
            ?>
                <div class="element" id="<?echo $i?>"><?print_r($table)?></div>
            <?php 
                $i++;
                }
            ?>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>