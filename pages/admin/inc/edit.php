<?php
$table = $_POST["table"];
$id = $_POST["id"];
$items = $_POST["item"];
$sring = "";
foreach ($items as $item) {
	$item = "'$item'";
	if (strlen($sring) > 0) {
		$sring = "$sring,$item";
	} else {
		$sring = $item;
	}
}
include "../../../inc/connect.php";
$result = mysqli_query($connect, "UPDATE $table SET $sring WHERE id = $id");
header('Location: ../index.php');
