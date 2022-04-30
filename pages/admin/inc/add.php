<?php
$table = $_POST["table"];
$name = $_POST["name"];
// echo $sring;
include "../../../inc/connect.php";
$result = mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name')");
header('Location: ../index.php');
