<?php
    $table = $_POST["table"];
    $items = $_POST["item"];
    $sring = "";
    foreach($items as $item){
        $item = "'$item'";
        if(strlen($sring) > 0){
            $sring = "$sring,$item";
        }else{
            $sring = $item;
        }
    }
    echo $sring;
    include "../../../inc/connect.php";
    $result = mysqli_query($connect,"INSERT INTO $table VALUES (NULL,$sring)");
    // header('Location: ../index.php');
?>