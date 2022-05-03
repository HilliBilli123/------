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
$fioClient = $_POST["fioClient"];
$car = $_POST["car"];
$class = $_POST["class"];
$components = $_POST["components"];
$numClient = $_POST["numClient"];
$cause = $_POST["cause"];
$stats = $_POST["stats"];
$dateTest = $_POST["dateTest"];
if($components){
	foreach($components as $component){
		if(!$txt){
			$txt = "$component";
		}else{
			$txt = "$txt,$component";
	}
	}
}else{
	$txt = NULL;
}


include "../../../inc/connect.php";
// $break = mysqli_query($connect, "SELECT * FROM `cars` WHERE `id` = '$id'");
// print_r($break);
if ($table == "cars") {
	if ($_FILES['image']['name']) {
		$path = 'upload/' . time() . $_FILES['image']['name'];
		if (!move_uploaded_file($_FILES['image']['tmp_name'], "../" .$path)) {
			$_SESSION['message'] = 'Ошибка при загрузке фото';
			header('Location: ../index.php');
		}
		
		$path1 = "pages/admin/" .$path;
		// echo $path1;
		// echo $detail;
		if ($table == "cars") {
			mysqli_query($connect, "INSERT INTO `cars` (`name`, `yearRelease`, `new`, `classId`, `price`, `imagePath`, `harackterId`, `detailed`) VALUES ('$name','$yearRelease','$new','1','$price','$path1','1','$detail')");
		}
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
// if ($table == "change") {
// 	mysqli_query($connect, "UPDATE `repair` SET `dateEnd` = '$chek' WHERE `id`='$id'");
// }
if ($table == "orders") {
	mysqli_query($connect, "UPDATE `orders` SET `fioClient` = '$fioClient', `numClient` = '$numClient', `carId` = '$car', `clasessesId` = '$class', `components` = '$txt', `price` = '$price' WHERE `id`='$id'");
}
if ($table == "repair") {
	mysqli_query($connect, "UPDATE `repair` SET `fioClient` = '$fioClient', `numClient` = '$numClient', `automobile` = '$car', `fioMechanic` = '$stats', `cause` = '$cause' WHERE `id`='$id'");
}
if ($table == "testdrive") {
	mysqli_query($connect, "UPDATE `testdrive` SET `fioClient` = '$fioClient', `numClient` = '$numClient', `automobile` = '$car', `classId` = '$class', `responsible` = '$stats', `dateTest` = '$dateTest' WHERE `id`='$id'");
}

// mysqli_query($connect, "UPDATE `repair` SET `dateEnd`='$date' WHERE `id`='$id'");
header('Location: ../index.php');
