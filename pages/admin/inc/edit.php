<?php
session_start();
$id = $_POST["id"];
// echo $id;
$table = $_POST["table"];
$name = $_POST["name"];
$yearRelease = $_POST["yearRelease"];
$new = $_POST["new"];
$price = $_POST["price"];
$chek = $_POST["chek"];
include "../../../inc/connect.php";
// $break = mysqli_query($connect, "SELECT * FROM `cars` WHERE `id` = '$id'");
// print_r($break);
if ($table == "cars") {
	if ($_FILES['image']['name']) {
		// echo "323123123";
		$path = 'upload/' . time() . $_FILES['image']['name'];
		if (!move_uploaded_file($_FILES['image']['tmp_name'], "../" . $path)) {
			$_SESSION['message'] = 'Ошибка при загрузке фото';
			header('Location: ../index.php');
		}
		mysqli_query($connect, "UPDATE `cars` SET `name` = '$name',`yearRelease` = '$yearRelease',`new` = '$new',`price` = '$price', `imagePath` = '$path' WHERE `id` = '$id'");
	} else {
		$_SESSION['message'] = 'Загрузите фото';
		header("Location: ../index.php");
	}
}
// echo $path;
if ($table == "breakdown") {
	mysqli_query($connect, "UPDATE $table SET `name` = '$name' WHERE `id`='$id'");
}
if ($table == "classes") {
	mysqli_query($connect, "UPDATE $table SET `name` = '$name' , `price` = '$price' WHERE `id`='$id'");
}
if ($table == "components") {
	mysqli_query($connect, "UPDATE $table SET `name` = '$name' , `price` = '$price' WHERE `id`='$id'");
}
if ($table == "change") {
	mysqli_query($connect, "UPDATE `repair` SET `dateEnd` = '$chek' WHERE `id`='$id'");
}

// mysqli_query($connect, "UPDATE `repair` SET `dateEnd`='$date' WHERE `id`='$id'");
header('Location: ../index.php');
