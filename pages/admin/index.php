<?php
include("../../inc/connect.php");
$tableNames = mysqli_query($connect, "SELECT * FROM `tablename`");
$classes = mysqli_query($connect, "SELECT * FROM `classes`");
$cars = mysqli_query($connect, "SELECT * FROM `cars`");
$staff = mysqli_query($connect, "SELECT * FROM `staff`");
$customers = mysqli_query($connect, "SELECT * FROM `customers`");
$components = mysqli_query($connect, "SELECT * FROM `components`");
$positions = mysqli_query($connect, "SELECT * FROM `positions`");
$reason = mysqli_query($connect, "SELECT * FROM `reason`");
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
            foreach ($tableNames as $tableName) {
            ?>
                <div class="left__menu__block"><a href="" class="left__menu__link" id="<? echo $tableName["nameTable"] ?>"><? echo $tableName["nameTableKZ"] ?></a></div>
            <?php
                $i++;
            }
            ?>
        </div>

        <div class="admin__panel__table">
            <div class="add__button__block">
                <a class="add__button__block__a" href="../../index.html">На главную</a>
                <a class="add__button__block__a add" href="">Добавить</a>
                <a class="add__button__block__a print" href="">Отчет</a>
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
                        <div class="table__header__title table__title">Класс</div>
                        <div class="table__header__title table__title">Стоймость</div>
                        <div class="table__header__title table__title">Редактировать</div>
                        <div class="table__header__title table__title">Удалить</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `cars`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <div class="table__title" id="name"><? echo $breakdown["name"] ?></div>
                            <div class="table__title" id="yearRelease"><? echo $breakdown["yearRelease"] ?></div>
                            <div class="table__title" id="new"><? echo $breakdown["new"] ?></div>
                            <?
                            foreach ($classes as $classe) {
                                if ($breakdown["classId"] == $classe['id']) {
                            ?>
                                    <div class="table__title" id="new"><? echo $classe["name"] ?></div>
                                    <div class="table__title" id="new"><? echo $breakdown["price"] + $classe["price"] ?></div>
                            <?
                                }
                            }
                            ?>
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
                        <div class="table__header__title table__title">Цена</div>
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
                            <div class="table__title"><? echo $breakdown["price"] ?></div>
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
                        <div class="table__header__title table__title">Цена</div>
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
                            <div class="table__title"><? echo $breakdown["price"] ?></div>
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
                        <div class="table__header__title table__title">Клиент</div>
                        <div class="table__header__title table__title">Машина</div>
                        <div class="table__header__title table__title">Класс</div>
                        <div class="table__header__title table__title">Компоненты</div>
                        <div class="table__header__title table__title">Цена</div>
                        <div class="table__header__title table__title">Дата продажи</div>
                        <div class="table__header__title table__title">Продовец</div>
                        <div class="table__header__title table__title">Редактировать</div>
                    </div>
                    <?php
                    $breakdowns = mysqli_query($connect, "SELECT * FROM `orders`");
                    foreach ($breakdowns as $breakdown) {
                    ?>
                        <div class="body__table__line _table-color flex">
                            <div class="table__title"><? echo $breakdown["id"] ?></div>
                            <?
                            foreach ($customers as $customer) {
                                if ($customer["id"] == $breakdown["clientId"]) {
                            ?>
                                    <div class="table__title"><? echo $customer["name"] ?></div>
                            <?
                                }
                            }
                            ?>
                            <?
                            foreach ($cars as $car) {
                                if ($car["id"] == $breakdown["carId"]) {
                            ?>
                                    <div class="table__title"><? echo $car["name"] ?></div>
                            <?
                                }
                            }
                            ?>
                            <?
                            foreach ($classes as $classess) {
                                if ($classess["id"] == $breakdown["clasessesId"]) {
                            ?>
                                    <div class="table__title"><? echo $classess["name"] ?></div>
                            <?
                                }
                            }
                            ?>
                            <div class="table__title"><? echo $breakdown["components"] ?></div>
                            <div class="table__title"><? echo $breakdown["price"] ?></div>
                            <div class="table__title"><? echo $breakdown["date"] ?></div>
                            <?
                            foreach ($staff as $staffs) {
                                if ($staffs["id"] == $breakdown["staffId"]) {
                            ?>
                                    <div class="table__title"><? echo $staffs["name"] ?></div>
                            <?
                                }
                            }
                            ?>
                            <div class="table__title"><a href="" class="icon-edit"></a></div>
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
    <form action="inc/otchet.php" style="display: none;" method="post">
    <div class="otchet" style="display: none;">

    </div>
    </form>
    <script src="js/script.js"></script>
    <script src="js/otchet.js"></script>
</body>

</html>