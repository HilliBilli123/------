<?php
include "connect.php";
$fio = $_POST["fioClient"];
$number = $_POST["number"];
$car = $_POST["car"];
$stats = $_POST["stats"];
mysqli_query($connect, "INSERT INTO `order1` VALUES (NULL,'$fio','$number','$car','$stats')");
$order = $_POST["order"];
print_r($_POST);
if ($order == 1) {
    $fioClient = $_POST["fioClient"];
    $numClient = $_POST["numClient"];
    $cars = $_POST["cars"];
    $classCars = $_POST["classCars"];
    // if ($components) {
    //     foreach ($components as $component) {
    //         if (!$componentName) {
    //             $componentName = "$component";
    //         } else {
    //             $componentName = "$componentName,$component";
    //         }
    //     }
    // } else {
    //     $componentName = "";
    // }
    $result = mysqli_query($connect, "INSERT INTO `orders` VALUES (NULL,'$fioClient','$numClient','$cars',NULL,'$classCars',NULL,'0',CURDATE(),NULL)");
}
if ($order == 2) {
    $fioClient = $_POST["fioClient"];
    $automobile = $_POST["automobile"];
    $numClient = $_POST["numClient"];
    $cause = $_POST["cause"];
    // $classCars = $_POST["classCars"];

    $result = mysqli_query($connect, "INSERT INTO `repair` VALUES (NULL,CURDATE(),'$fioClient','$numClient','$automobile',NULL,NULL,'$cause',NULL)");
}
if ($order == 3) {
    $fioClient = $_POST["fioClient"];
    $numClient = $_POST["numClient"];
    // $pasportClient = "В работе";
    $cars = $_POST["cars"];
    $classCars = $_POST["classCars"];
    $dataTest = $_POST["dataTest"];

    $result = mysqli_query($connect, "INSERT INTO `testdrive` VALUES (NULL,CURDATE(),'$fioClient','$numClient','$cars','$classCars','$dataTest',NULL,NULL,NULL)");
}
// $table = $_POST["table"];
// $items = $_POST["item"];
// $sring = "";
// foreach ($items as $item) {
//     $item = "'$item'";
//     if (strlen($sring) > 0) {
//         $sring = "$sring,$item";
//     } else {
//         $sring = $item;
//     }
//     // return $sring;
// }
// // echo $sring;
// include "../../../inc/connect.php";
// $result = mysqli_query($connect, "INSERT INTO $table VALUES (NULL,$sring)");
header('Location: ../index.php');
