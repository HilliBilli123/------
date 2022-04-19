<?php
    $productId = $_GET['id'];
    $table = $_GET['table'];
    include "../../../inc/connect.php";
    $result = mysqli_query($connect,"DELETE FROM `$table` WHERE id = $productId");
    header('Location: ../index.php');
?>