<?php
session_start();
$table = $_POST["table"];
$name = $_POST["name"];
$yearRelease = $_POST["yearRelease"];
$new = $_POST["new"];
$price = $_POST["price"];
// echo $_FILES["image"];
if ($_FILES['image']['name']) {
	$path = 'upload/' . time() . $_FILES['image']['name'];
	if (!move_uploaded_file($_FILES['image']['tmp_name'], "../" . $path)) {
		$_SESSION['message'] = 'Ошибка при загрузке фото';
		header('Location: ../index.php');
	}
	if ($table == "cars") {
		mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name','$yearRelease','$new','1','$price','$path')");
	}
} else {
	$_SESSION['message'] = 'Загрузите фото';
	header("Location: ../index.php");
}
// echo $sring;
include "../../../inc/connect.php";
if ($table == "breakdown") {
	mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name')");
}
if ($table == "classes") {
	mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name','$price')");
}
if ($table == "components") {
	mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name','$price')");
}
if ($table == "orders") {
	mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name','$price')");
}


header('Location: ../index.php');
