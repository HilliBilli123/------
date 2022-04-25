<?php
include "connect.php";
$order = $_POST["order"];
// print_r($_POST);
if ($order == 1) {
    $fioClient = $_POST["fioClient"];
    $cars = $_POST["cars"];
    $year = $_POST["year"];
    $classCars = $_POST["classCars"];
    $colors = $_POST["colors"];
    $components = $_POST["component"];
    if ($components) {
        foreach ($components as $component) {
            if (!$componentName) {
                $componentName = "$component";
            } else {
                $componentName = "$componentName,$component";
            }
        }
    } else {
        $componentName = "";
    }
    $result = mysqli_query($connect, "INSERT INTO `orders` VALUES (NULL,'$fioClient','$cars','$year','$classCars','$componentName','555',CURDATE(),'$colors')");
}
if ($order == 2) {
    $fioClient = $_POST["fioClient"];
    $fioMechanic = $_POST["fioMechanic"];
    $automobile = $_POST["automobile"];
    $cause = $_POST["cause"];
    $classCars = $_POST["classCars"];
    
    $result = mysqli_query($connect, "INSERT INTO `repair` VALUES (NULL,CURDATE(),'$fioClient','$automobile','$classCars','$fioMechanic','$cause',NULL)");
}
if ($order == 3) {
    $fioClient = $_POST["fioClient"];
    // $pasportClient = "В работе";
    $cars = $_POST["cars"];
    $classCars = $_POST["classCars"];
    $dataTest = $_POST["dataTest"];
    $beforeTest = $_POST["beforeTest"];
    $afterTest = $_POST["afterTest"];
    $fioResponsible = $_POST["fioResponsible"];

    $result = mysqli_query($connect, "INSERT INTO `testdrive` VALUES (NULL,CURDATE(),'$fioClient','$cars','$classCars','$dataTest','$beforeTest','$afterTest','$fioResponsible')");
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
