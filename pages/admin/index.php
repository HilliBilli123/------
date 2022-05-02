<?php
session_start();
$positionId = $_SESSION["user"]["positionId"];
include("../../inc/connect.php");
$tableNames = mysqli_query($connect, "SELECT * FROM `tablename`");
$classes = mysqli_query($connect, "SELECT * FROM `classes`");
$cars = mysqli_query($connect, "SELECT * FROM `cars`");
$staff = mysqli_query($connect, "SELECT * FROM `staff`");
$customers = mysqli_query($connect, "SELECT * FROM `customers`");
$components = mysqli_query($connect, "SELECT * FROM `components`");
$positions = mysqli_query($connect, "SELECT * FROM `positions`");
$reason = mysqli_query($connect, "SELECT * FROM `reason`");
foreach ($positions as $position) {
    if ($position["id"] == $positionId) {
        $work = $position["name"];
    }
}
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
                if ($tableName["nameTable"] != "customers" && $tableName["nameTable"] != "reason") {
            ?>
                    <div class="left__menu__block"><a href="" class="left__menu__link" id="<? echo $tableName["nameTable"] ?>"><? echo $tableName["nameTableKZ"] ?></a></div>
            <?php
                    $i++;
                }
            }
            ?>
        </div>
        <div style="display: none;" id="work"><? echo $work ?></div>
        <div class="admin__panel__table">
            <div class="add__button__block">
                <a class="add__button__block__a" href="inc/logout.php">Выход</a>
                <!-- <a class="add__button__block__a add" href="">Добавить</a> -->
                <a class="add__button__block__a print" href="">Отчет</a>
            </div>
            <div class="admin__panel__body">
                <div class="panel__body__table welcome">
                    <div class="welcome__content">
                        WELCOME ADMIN PANEL
                    </div>
                </div>
                <div class="panel__body__table" id="breakdown">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <form action="inc/add.php" method="post" class="form">
                        <div class="from__content__add">
                            <label for="name">Название</label>
                            <input type="text" name="name">
                            <input type="text" style="display: none;" value="breakdown" name="table">
                            <button type="submit">Добавить</button>
                        </div>
                    </form>
                    <div class="body__table">
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
                                <div class="table__title"><a href="" class="icon-edit"></a>
                                    <form action="inc/edit.php" method="post" class="form">
                                        <div class="from__content__add">
                                            <input type="text" style="display: none;" name="id" value="<? echo $breakdown["id"] ?>">
                                            <input type="text" style="display: none;" value="breakdown" name="table">
                                            <label for="name">Название</label>
                                            <input type="text" name="name" value="<? echo $breakdown["name"] ?>">
                                            <button type="submit">Изменить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=breakdown" class="icon-bin"></a></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel__body__table" id="cars">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <form action="inc/add.php" method="post" class="form" enctype="multipart/form-data">
                        <div class="from__content__add">
                            <input type="text" style="display: none;" value="cars" name="table">
                            <label for="name">Наименование</label>
                            <input type="text" name="name">
                            <label for="yearRelease">Год выпуска</label>
                            <input type="text" name="yearRelease">
                            <label for="new">Новый?</label>
                            <input type="text" name="new">
                            <label for="price">Стоймость</label>
                            <input type="text" name="price">
                            <label for="price">Изображение</label>
                            <input type="file" name="image">
                            <button type="submit">Добавить</button>
                        </div>
                    </form>
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">Наименование</div>
                            <div class="table__header__title table__title">Год выпуска</div>
                            <div class="table__header__title table__title">Новый?</div>
                            <!-- <div class="table__header__title table__title">Класс</div> -->
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
                                <div class="table__title" id="new"><? echo $breakdown["price"] ?></div>
                                <div class="table__title"><a href="" class="icon-edit"></a>
                                    <form action="inc/edit.php" method="post" class="form" enctype="multipart/form-data">
                                        <div class="from__content__add">
                                            <input type="text" style="display: none;" name="id" value="<? echo $breakdown["id"] ?>">
                                            <input type="text" style="display: none;" value="cars" name="table">
                                            <label for="name">Наименование</label>
                                            <input type="text" name="name" value="<? echo $breakdown["name"] ?>">
                                            <label for="name">Год выпуска</label>
                                            <input type="text" name="yearRelease" value="<? echo $breakdown["yearRelease"] ?>">
                                            <label for="name">Новый?</label>
                                            <input type="text" name="new" value="<? echo $breakdown["new"] ?>">
                                            <label for="name">Стоймость</label>
                                            <input type="text" name="price" value="<? echo $breakdown["price"] ?>">
                                            <div><? echo $breakdown["imagePath"] ?></div>
                                            <input type="file" name="image" value="<? echo $breakdown["imagePath"] ?>">
                                            <button type="submit">Добавить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="table__title"><a href="inc/delete.php?id=<? echo $breakdown['id'] ?>&table=cars" class="icon-bin"></a></div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <?
                    if ($_SESSION['message']) {
                    ?>
                        <div class="message" style="display: none;"><? echo $_SESSION['message'] ?></div>
                        <script>
                            const message = document.querySelector(".message").innerHTML
                            alert(message)
                        </script>

                    <?
                    }
                    unset($_SESSION['message']);
                    ?>
                </div>
                <div class="panel__body__table" id="classes">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <form action="inc/edit.php" method="post" class="form">
                        <div class="from__content__add">
                            <input type="text" style="display: none;" value="classes" name="table">
                            <label for="name">Наименование</label>
                            <input type="text" name="name">
                            <label for="name">Цена</label>
                            <input type="text" name="price">
                            <button type="submit">Добавить</button>
                        </div>
                    </form>
                    <div class="body__table">
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
                                <div class="table__title"><a href="" class="icon-edit"></a>
                                    <form action="inc/edit.php" method="post" class="form">
                                        <div class="from__content__add">
                                            <input type="text" style="display: none;" name="id" value="<? echo $breakdown["id"] ?>">
                                            <input type="text" style="display: none;" value="classes" name="table">
                                            <label for="name">Наименование</label>
                                            <input type="text" name="name" value="<? echo $breakdown["name"] ?>">
                                            <label for="name">Цена</label>
                                            <input type="text" name="price" value="<? echo $breakdown["price"] ?>">
                                            <button type="submit">Изменить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="table__title"><a href="inc/delete.php?id=<? echo $breakdown['id'] ?>&table=classes" class="icon-bin"></a></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel__body__table" id="components">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <form action="inc/edit.php" method="post" class="form">
                        <div class="from__content__add">
                            <input type="text" style="display: none;" value="components" name="table">
                            <label for="name">Наименование</label>
                            <input type="text" name="name">
                            <label for="name">Цена</label>
                            <input type="text" name="price">
                            <button type="submit">Добавить</button>
                        </div>
                    </form>
                    <div class="body__table">
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
                                <div class="table__title"><a href="" class="icon-edit"></a>
                                    <form action="inc/edit.php" method="post" class="form">
                                        <div class="from__content__add">
                                            <input type="text" style="display: none;" name="id" value="<? echo $breakdown["id"] ?>">
                                            <input type="text" style="display: none;" value="components" name="table">
                                            <label for="name">Наименование</label>
                                            <input type="text" name="name" value="<? echo $breakdown["name"] ?>">
                                            <label for="name">Цена</label>
                                            <input type="text" name="price" value="<? echo $breakdown["price"] ?>">
                                            <button type="submit">Добавить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="table__title">
                                    <a href="inc/delete.php?id=<? echo $breakdown['id'] ?>&table=components" class="icon-bin"></a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- <div class="panel__body__table" id="customers">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">ФИО</div>
                            <div class="table__header__title table__title">Паспорт</div>
                            <div class="table__header__title table__title">Адрес</div>
                            <div class="table__header__title table__title">Телефон</div>
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
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div> -->
                <div class="panel__body__table" id="orders">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <form action="inc/edit.php" method="post" class="form">
                        <div class="from__content__add">
                            <input type="text" style="display: none;" value="orders" name="table">
                            <label for="name">Клиент</label>
                            <input type="text" name="name">
                            <label for="car">Машина</label>
                            <input type="text" name="car">
                            <label for="name">Класс</label>
                            <select  name="class" id="">
                                <?
                                foreach($classes as $classe){
                                    ?>
                                    <option value="<?echo $classe["id"]?>"><?echo $classe["name"] ?></option>
                                    <?
                                }
                                ?>
                            </select>
                            <label for="name">Компоненты</label>
                            <div class="components">
                            <?
                                foreach($components as $component){
                                    ?>
                                        <div class="components__input"><input type="checkbox" name="components[]" value="<?echo $component["name"]?>" id=""><?echo $component["name"]?></div>
                                    <?
                                }
                            ?>
                            </div>
                            <label for="name">Стоймость</label>
                            <input type="text" name="price">
                            <button type="submit">Добавить</button>
                        </div>
                    </form>
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">Клиент</div>
                            <div class="table__header__title table__title">Машина</div>
                            <!-- <div class="table__header__title table__title">Год выпуска</div> -->
                            <div class="table__header__title table__title">Класс</div>
                            <div class="table__header__title table__title">Компоненты</div>
                            <div class="table__header__title table__title">Цена</div>
                            <!-- <div class="table__header__title table__title">Дата продажи</div> -->
                            <div class="table__header__title table__title">Редактировать</div>
                            <div class="table__header__title table__title">Удалить</div>
                        </div>
                        <?php
                        $breakdowns = mysqli_query($connect, "SELECT * FROM `orders`");
                        foreach ($breakdowns as $breakdown) {
                        ?>
                            <div class="body__table__line _table-color flex">
                                <div class="table__title"><? echo $breakdown["id"] ?></div>
                                <div class="table__title"><? echo $breakdown["fioClient"] ?></div>
                                <div class="table__title"><? echo $breakdown["carId"] ?></div>
                                <!-- <div class="table__title"><? echo $breakdown["year"] ?></div> -->
                                <div class="table__title"><? echo $breakdown["clasessesId"] ?></div>
                                <div class="table__title"><? echo $breakdown["components"] ?></div>
                                <div class="table__title"><? echo $breakdown["price"] ?></div>
                                <!-- <div class="table__title"><? echo $breakdown["date"] ?></div> -->
                                <div class="table__title"><a href="" class="icon-edit"></a>
                                    <form action="inc/edit.php" method="post" class="form">
                                        <div class="from__content__add">
                                            <input type="text" style="display: none;" value="<? echo $breakdown["id"] ?>">
                                            <input type="text" style="display: none;" value="orders" name="table">
                                            <label for="name">Клиент</label>
                                            <input type="text" name="name" value="<? echo $breakdown["fioClient"] ?>">
                                            <label for="name">Машина</label>
                                            <input type="text" name="class" value="<? echo $breakdown["carId"] ?>">
                                            <label for="name">Класс</label>
                                            <input type="text" name="name" value="<? echo $breakdown["clasessesId"] ?>">
                                            <label for="name">Компоненты</label>
                                            <input type="text" name="name" value="<? echo $breakdown["components"] ?>">
                                            <label for="name">Стоймость</label>
                                            <input type="text" name="price" value="<? echo $breakdown["price"] ?>">
                                            <button type="submit">Добавить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="table__title"><a href="inc/delete.php?id=<?php echo $breakdown["id"] ?>&table=orders" class="icon-bin"></a></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel__body__table" id="order1">
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">Клиент</div>
                            <div class="table__header__title table__title">Номер</div>
                            <div class="table__header__title table__title">Машина</div>
                            <div class="table__header__title table__title">Статус</div>
                            <div class="table__header__title table__title">Редактировать</div>
                            <div class="table__header__title table__title">Удалить</div>
                        </div>
                        <?php
                        $breakdowns = mysqli_query($connect, "SELECT * FROM `order1`");
                        foreach ($breakdowns as $breakdown) {
                        ?>
                            <div class="body__table__line _table-color flex">
                                <div class="table__title"><? echo $breakdown["id"] ?></div>
                                <div class="table__title"><? echo $breakdown["fio"] ?></div>
                                <div class="table__title"><? echo $breakdown["number"] ?></div>
                                <div class="table__title"><? echo $breakdown["car"] ?></div>
                                <div class="table__title"><? echo $breakdown["stats"] ?></div>
                                <div class="table__title"><a href="" class="icon-edit"></a>
                                    <form action="inc/edit.php" method="post" class="form">
                                        <div class="from__content__add">
                                            <input type="text" style="display: none;" value="<? echo $breakdown["id"] ?>">
                                            <input type="text" style="display: none;" value="order1" name="table">
                                            <label for="name">ФИО покупателя</label>
                                            <input type="text" name="fio" value="<? echo $breakdown["fio"] ?>">
                                            <label for="name">Номер</label>
                                            <input type="text" name="number" value="<? echo $breakdown["number"] ?>">
                                            <label for="name">Машина</label>
                                            <input type="text" name="car" value="<? echo $breakdown["car"] ?>">
                                            <label for="name">Название</label>
                                            <input type="text" name="stats" value="<? echo $breakdown["stats"] ?>">
                                            <button type="submit">Добавить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="table__title"><a href="inc/delete.php?id=<? echo $breakdown['id'] ?>&table=order1" class="icon-bin"></a></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel__body__table" id="positions">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <form action="inc/add.php" method="post" class="form">
                        <div class="from__content__add">
                            <label for="name">Название</label>
                            <input type="text" name="name">
                            <input type="text" style="display: none;" value="positions" name="table">
                            <button type="submit">Добавить</button>
                        </div>
                    </form>
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">Наименование</div>
                        </div>
                        <?php
                        $breakdowns = mysqli_query($connect, "SELECT * FROM `positions`");
                        foreach ($breakdowns as $breakdown) {
                        ?>
                            <div class="body__table__line _table-color flex">
                                <div class="table__title"><? echo $breakdown["id"] ?></div>
                                <div class="table__title"><? echo $breakdown["name"] ?></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel__body__table" id="reason">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">Наименование</div>
                        </div>
                        <?php
                        $breakdowns = mysqli_query($connect, "SELECT * FROM `reason`");
                        foreach ($breakdowns as $breakdown) {
                        ?>
                            <div class="body__table__line _table-color flex">
                                <div class="table__title"><? echo $breakdown["id"] ?></div>
                                <div class="table__title"><? echo $breakdown["name"] ?></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel__body__table" id="staff">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">ФИО</div>
                            <div class="table__header__title table__title">Почта</div>
                            <div class="table__header__title table__title">Пароль</div>
                            <div class="table__header__title table__title">Адрес</div>
                            <div class="table__header__title table__title">Телефон</div>
                            <div class="table__header__title table__title">Должность</div>
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
                                <div class="table__title"><? echo $breakdown["email"] ?></div>
                                <div class="table__title"><? echo $breakdown["passowrd"] ?></div>
                                <div class="table__title"><? echo $breakdown["addres"] ?></div>
                                <div class="table__title"><? echo $breakdown["phone"] ?></div>
                                <?
                                foreach ($positions as $position) {
                                    if ($breakdown["postionId"] == $position["id"]) {
                                ?>
                                        <div class="table__title"><? echo $position["name"] ?></div>
                                <?
                                    }
                                }
                                ?>
                                <div class="table__title"><a href="" class="icon-edit"></a>
                                    <form action="inc/edit.php" method="post" class="form">
                                        <div class="from__content__add">
                                            <input type="text" style="display: none;" value="<? echo $breakdown["id"] ?>">
                                            <input type="text" style="display: none;" value="staff" name="table">
                                            <label for="name">ФИО покупателя</label>
                                            <input type="text" name="name" value="<? echo $breakdown["name"] ?>">
                                            <label for="name">Почта</label>
                                            <input type="text" name="email" value="<? echo $breakdown["email"] ?>">
                                            <label for="name">Пароль</label>
                                            <input type="text" name="password" value="<? echo $breakdown["passowrd"] ?>">
                                            <label for="name">Адрес</label>
                                            <input type="text" name="addres" value="<? echo $breakdown["addres"] ?>">
                                            <label for="name">Номер</label>
                                            <input type="text" name="phone" value="<? echo $breakdown["phone"] ?>">
                                            <label for="name">Должность</label>
                                            <select name="" id="">

                                                <?
                                                foreach ($positions as $position) {
                                                    if ($breakdown["postionId"] == $position["id"]) {
                                                ?>
                                                        <option value="<? echo $position["name"] ?>"><? echo $position["name"]  ?></option>
                                                    <?
                                                    } else {
                                                    ?>
                                                        <option value="<? echo $position["name"] ?>"><? echo $position["name"]  ?></option>
                                                <?
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <button type="submit">Добавить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="table__title"><a href="inc/delete.php?id=<? echo $breakdown['id'] ?>&table=staff" class="icon-bin"></a></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel__body__table" id="testdrive">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">ФИО</div>
                            <!-- <div class="table__header__title table__title">Паспорт</div> -->
                            <div class="table__header__title table__title">Автомобиль</div>
                            <div class="table__header__title table__title">Класс</div>
                            <div class="table__header__title table__title">Дата</div>
                            <div class="table__header__title table__title">Время</div>
                            <!-- <div class="table__header__title table__title">Окончание</div> -->
                            <div class="table__header__title table__title">Ответственный</div>
                            <div class="table__header__title table__title">Статус</div>
                        </div>
                        <?php
                        $breakdowns = mysqli_query($connect, "SELECT * FROM `testdrive`");
                        foreach ($breakdowns as $breakdown) {
                        ?>
                            <div class="body__table__line _table-color flex">
                                <div class="table__title"><? echo $breakdown["id"] ?></div>
                                <div class="table__title"><? echo $breakdown["fioClient"] ?></div>
                                <!-- <div class="table__title"><? echo $breakdown["pasportClient"] ?></div> -->
                                <div class="table__title"><? echo $breakdown["automobile"] ?></div>
                                <div class="table__title"><? echo $breakdown["classId"] ?></div>
                                <div class="table__title"><? echo $breakdown["dateTest"] ?></div>
                                <div class="table__title"><? echo $breakdown['timeBefore'], " от ", $breakdown['timeAfter'] ?></div>
                                <!-- <div class="table__title"><? echo $breakdown["timeAfter"] ?></div> -->
                                <div class="table__title"><? echo $breakdown["responsible"] ?></div>
                                <?
                                $date = date('H:i');
                                if ($breakdown["timeAfter"] > $date) {
                                ?>
                                    <div class="table__title">Тест-драйв<br>пройден</div>
                                <?
                                } else {
                                ?>
                                    <div class="table__title">В работе</div>
                                <?
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel__body__table" id="repair">
                    <a class="add__button__block__a add" href="">Добавить</a>
                    <div class="body__table">
                        <div class="body__table__line body__table__header flex">
                            <div class="table__header__title table__title">Код</div>
                            <div class="table__header__title table__title">ФИО</div>
                            <div class="table__header__title table__title">Паспорт</div>
                            <div class="table__header__title table__title">Адрес</div>
                            <div class="table__header__title table__title">Телефон</div>
                            <div class="table__header__title table__title">Должность</div>
                            <div class="table__header__title table__title">Статус</div>
                        </div>
                        <?php
                        $breakdowns = mysqli_query($connect, "SELECT * FROM `repair`");
                        foreach ($breakdowns as $breakdown) {
                        ?>
                            <div class="body__table__line _table-color flex">
                                <div class="table__title"><? echo $breakdown["id"] ?></div>
                                <div class="table__title"><? echo $breakdown["fioClient"] ?></div>
                                <div class="table__title"><? echo $breakdown["automobile"] ?></div>
                                <div class="table__title"><? echo $breakdown["classId"] ?></div>
                                <div class="table__title"><? echo $breakdown["fioMechanic"] ?></div>
                                <div class="table__title"><? echo $breakdown["cause"] ?></div>
                                <?
                                if (!$breakdown["dateEnd"]) {
                                    $now = new DateTime();
                                    $date = new DateTime($breakdown["date"]);
                                    // $date = strtotime($date);
                                    $interval = $now->diff($date);
                                    $chek = $interval->d
                                ?>
                                    <div class="table__title" id="chek">
                                        <?
                                        if ($chek > 1) {
                                            echo "В работе ", $chek, " дней";
                                        } else {
                                            echo "В работе ", $chek, " день";
                                        }
                                        ?>
                                        <form action="inc/edit.php" method="post" style="display: none;">
                                            <input type="text" name="chek" value="<? echo date("Y-m-d") ?>">
                                            <input type="text" name="id" value="<? echo $breakdown["id"] ?>">
                                            <button type="submit"></button>
                                        </form>
                                    </div>
                                <?
                                } else {
                                ?>
                                    <div class="table__title" id="chek">Ремонт закончен</div>
                                <?
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
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