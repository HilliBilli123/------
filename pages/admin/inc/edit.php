<?php
$table = $_POST["table"];
$id = $_POST["id"];
$items = $_POST["item"];
echo $items[0];
include "../../../inc/connect.php";
if ($table == "breakdown") {
	$name = $items[0];
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name' WHERE `id` = '$id'");
}
// header('Location: ../index.php');
