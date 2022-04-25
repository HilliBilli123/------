<?php
$id = $_POST["id"];
$date = $_POST["chek"];
// print_r($_POST);
// echo $date, $id;
include "../../../inc/connect.php";
mysqli_query($connect, "UPDATE `repair` SET `dateEnd`='$date' WHERE `id`='$id'");
header('Location: ../index.php');
