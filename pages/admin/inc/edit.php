<?php

include "../../../inc/connect.php";
mysqli_query($connect, "UPDATE `repair` SET `dateEnd`='$date' WHERE `id`='$id'");
header('Location: ../index.php');
