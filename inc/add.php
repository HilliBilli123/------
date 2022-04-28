<?php
include "connect.php";
$fio = $_POST["fioClient"];
$number = $_POST["number"];
$car = $_POST["car"];
$stats = $_POST["stats"];
mysqli_query($connect, "INSERT INTO `order1` VALUES (NULL,'$fio','$number','$car','$stats')");
header('Location: ../index.php');
