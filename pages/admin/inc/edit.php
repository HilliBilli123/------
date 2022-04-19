<?php
$table = $_POST["table"];
$id = $_POST["id"];
$items = $_POST["item"];
// echo $items[0];
include "../../../inc/connect.php";
if ($table == "breakdown") {
	$name = $items[0];
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name' WHERE `id` = '$id'");
}
if ($table == "cars") {
	$name = $items[0];
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name', `yearRelease`='$items[1]', `new`='$items[2]' WHERE `id` = '$id'");
}
if ($table == "classes") {
	$name = $items[0];
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name' WHERE `id` = '$id'");
}
if ($table == "components") {
	$name = $items[0];
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name' WHERE `id` = '$id'");
}
if ($table == "customers") {
	$name = $items[0];
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name', `pasport`='$items[1]', `addres`='$items[2]', `phone`='$items[3]' WHERE `id` = '$id'");
}
if ($table == "positions") {
	$name = $items[0];
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name' WHERE `id` = '$id'");
}
if ($table == "reason") {
	$name = $items[0];
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name' WHERE `id` = '$id'");
}
if ($table == "staff") {
	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name', `pasport`='$items[1]', `addres`='$items[2]', `phone`='$items[3]' WHERE `id` = '$id'");
}
// if ($table == "breakdown") {
// 	$name = $items[0];
// 	$result = mysqli_query($connect, "UPDATE `$table` SET `name`='$name' WHERE `id` = '$id'");
// }
header('Location: ../index.php');
