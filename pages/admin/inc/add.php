<?php
session_start();
$table = $_POST["table"];
$name = $_POST["name"];
$yearRelease = $_POST["yearRelease"];
$new = $_POST["new"];
$price = $_POST["price"];
include "../../../inc/connect.php";
// print_r($_POST);
if ($_FILES['image']['name']) {
	$path = 'upload/' . time() . $_FILES['image']['name'];
	if (!move_uploaded_file($_FILES['image']['tmp_name'], "../" .$path)) {
		$_SESSION['message'] = 'Ошибка при загрузке фото';
		header('Location: ../index.php');
	}
	// echo $path;
	if ($table == "cars") {
		mysqli_query($connect, "INSERT INTO `cars`(`name`, `yearRelease`, `new`, `classId`, `price`, `imagePath`, `harackterId`) VALUES ('$name','$yearRelease','$new','1','$price','$path','1')");
	}
} else {
	$_SESSION['message'] = 'Загрузите фото';
	header("Location: ../index.php");
}
// echo $sring;

if ($table == "breakdown") {
	mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name')");
}
if ($table == "classes") {
	mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name','$price')");
}
if ($table == "components") {
	mysqli_query($connect, "INSERT INTO $table VALUES (NULL,'$name','$price')");
}

header('Location: ../index.php');
