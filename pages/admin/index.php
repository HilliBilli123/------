<?php
include("../../inc/connect.php");
$ressult = mysqli_query($connect, "SHOW TABLES FROM `di-driver`");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ панель</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="admin__panel flex">
        <div class="admin__left__menu flex">
            <?php
            $i = 1;
            foreach ($ressult as $product) {
                $prp = $product['Tables_in_di-driver'];
                $tableName = mysqli_query($connect, "SELECT * FROM `tablename` WHERE `nameTable` = '{$prp}'");
                $tableName = mysqli_fetch_assoc($tableName);
                if ($tableName["nameTable"] == $prp) {
            ?>
                    <div class="left__menu__block"><a href="" class="left__menu__link" id="<? echo $prp ?>"><? echo $tableName["nameTableKZ"] ?></a></div>
            <?php
                }
                $i++;
            }
            ?>
        </div>

        <div class="admin__panel__table">
            <div class="add__button__block">
                <a class="add__button__block__a" href="../../index.html">На главную</a>
                <a class="add__button__block__a add" href="">Добавить</a>
                <form class="form" action="inc/add.php" method="post">
                    <div class="from__content__add">

                    </div>
                </form>
            </div>
            <div class="admin__panel__body">
                <div class="panel__body__table welcome">
                    <div class="welcome__content">
                        WELCOME ADMIN PANEL
                    </div>
                </div>
                <div class="panel__body__table" id="breakdown">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">Название</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `breakdown`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title" id="id"><? echo $breakdown["id"] ?></div>
                            <div class="table__title" id="name"><? echo $breakdown["name"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=breakdown" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="panel__body__table" id="cars">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">Наименование</div>
                        <div class="table__header__title table__title">Год выпуска</div>
                        <div class="table__header__title table__title">Новый?</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `cars`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title" id="id"><? echo $breakdown["id"] ?></div>
                            <div class="table__title" id="name"><? echo $breakdown["name"] ?></div>
                            <div class="table__title" id="yearRelease"><? echo $breakdown["yearRelease"] ?></div>
                            <div class="table__title" id="new"><? echo $breakdown["new"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=cars" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="panel__body__table" id="classes">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">Наименование</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `classes`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <div class="table__title"><? echo $breakdown["name"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=classes" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="panel__body__table" id="components">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">Наименование</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `components`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <div class="table__title"><? echo $breakdown["name"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=components" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="panel__body__table" id="customers">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">ФИО</div>
                        <div class="table__header__title table__title">Паспорт</div>
                        <div class="table__header__title table__title">Адрес</div>
                        <div class="table__header__title table__title">Телефон</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `customers`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <div class="table__title"><? echo $breakdown["name"] ?></div>
                            <div class="table__title"><? echo $breakdown["pasport"] ?></div>
                            <div class="table__title"><? echo $breakdown["addres"] ?></div>
                            <div class="table__title"><? echo $breakdown["phone"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=customers" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="panel__body__table" id="orders">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">ФИО</div>
                        <div class="table__header__title table__title">Паспорт</div>
                        <div class="table__header__title table__title">Адрес</div>
                        <div class="table__header__title table__title">Телефон</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `orders`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <div class="table__title"><? echo $breakdown["name"] ?></div>
                            <div class="table__title"><? echo $breakdown["pasport"] ?></div>
                            <div class="table__title"><? echo $breakdown["addres"] ?></div>
                            <div class="table__title"><? echo $breakdown["phone"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=orders" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="panel__body__table" id="positions">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">Наименование</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `positions`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <div class="table__title"><? echo $breakdown["name"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=positions" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="panel__body__table" id="reason">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">Наименование</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `reason`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <div class="table__title"><? echo $breakdown["name"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=reason" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="panel__body__table" id="staff">
                    <div class="body__table__line body__table__header flex">
                        <div class="table__header__title table__title">Код</div>
                        <div class="table__header__title table__title">ФИО</div>
                        <div class="table__header__title table__title">Паспорт</div>
                        <div class="table__header__title table__title">Адрес</div>
                        <div class="table__header__title table__title">Телефон</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `staff`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <div class="table__title"><? echo $breakdown["name"] ?></div>
                            <div class="table__title"><? echo $breakdown["pasport"] ?></div>
                            <div class="table__title"><? echo $breakdown["addres"] ?></div>
                            <div class="table__title"><? echo $breakdown["phone"] ?></div>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
                            <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=staff" class="icon-bin"></a></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>