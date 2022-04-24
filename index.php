<?php
// session_start();

include "inc/connect.php";
// $result = mysqli_query($connect, "SELECT products.*, category.nameCategory, category.nameCategoryKz FROM `products` join category on category.id = products.type");
$cars = mysqli_query($connect, "SELECT * FROM `cars`");
$classes = mysqli_query($connect, "SELECT * FROM `classes`");
$components = mysqli_query($connect, "SELECT * FROM `components`");
$breakdowns = mysqli_query($connect, "SELECT * FROM `breakdown`");
$staffs = mysqli_query($connect, "SELECT * FROM `staff` where `postionId`='3'");
$staffs2 = mysqli_query($connect, "SELECT * FROM `staff` where `postionId`='5'");
// print_r($staffs)
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Главная</title>
</head>

<body>
	<header class="header">
		<div class="header__contein _contein">
			<div class="header__contein__menu flex">
				<div class="menu__link__block">
					<a href="" class="logo__image">
						<img src="resurses/logo.png" alt="">
					</a>
				</div>
				<div class="menu__link__block"><a href="" class="menu__link">Главная</a></div>
				<div class="menu__link__block"><a href="" class="menu__link">Товары</a></div>
				<div class="menu__link__block"><a href="" class="menu__link">О нас</a></div>
				<div class="menu__link__block"><a href="pages/admin/index.php" class="menu__link">Вход</a></div>
			</div>
		</div>
	</header>
	<div class="page__body">
		<div class="slider">
			<div class="image-slider swiper">
				<div class="image-slider__wrapper swiper-wrapper">
					<div class="image-slider__slide swiper-slide">
						<div class="image-slider_content">
							<div class="slider__content">
								<div class="slider__contein">
									<img class="img" src="resurses/dr_alyur.jpg" alt="">
									<div class="detailed__contain flex">
										<div class="detailed__contant flex">
											<div class="detailed__content__title">Trade-in</div>
											<div class="detailed__content__text">Новые изменение</div>
											<a href="" class="open__car__about">Подробное</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-slider__slide swiper-slide">
						<div class="image-slider_content">
							<div class="slider__content">
								<div class="slider__contein">
									<img class="img" src="resurses/slajd.jpg" alt="">
									<div class="detailed__contain flex">
										<div class="detailed__contant flex">
											<div class="detailed__content__text">Встречайте</div>
											<div class="detailed__content__title">Новые модели Kia</div>
											<a href="" class="open__car__about">Подробное</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Стрелки -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
		<section class="models">
			<div class="models__contain _contein">
				<div class="models__content">
					<div class="models__content__title">
						Модели Kia
					</div>
					<div class="models-slider swiper">
						<div class="models-slider__wrapper swiper-wrapper ">
							<?php	
							foreach ($cars as $car) {	
							?>
								<div class="models-slider__slide swiper-slide ">
									<div class="models-slider__content">
										<a href="" class="models-slider__link">
											<div class="models-slider__img">
												<img class="img" src="<?php echo $car['imagePath'] ?>" alt="">
											</div>
											<div class="models-slider__title">
												<?php echo $car['name'] ?>
											</div>
										</a>
									</div>
								</div>
							<?php 
								}
							?>	
						</div>
						<!-- Стрелки -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
						<!-- Пагинация -->
						<div class="swiper-pagination"></div>
					</div>
					<!-- <div class="models__buttons">
						<a href="" class="models__button">Все модели</a>
					</div> -->
				</div>
			</div>
		</section>
		<section class="about">
			<div class="about__contain _contein">
				<!-- <div class="about__title">О нас</div> -->
				<div class="about__menu">
					<div class="about__menu__links about__menu__active" id="company">Di-driver</div>
					<div class="about__menu__links" id="benefits">Преимущества</div>
					<div class="about__menu__links" id="history">История</div>
				</div>
				<div class="about__block about__active" id="company">
					<div class="about__block__title">
						Di-driver сегодня
					</div>
					<div class="about__content">
						<div class="about__info">
							<div class="about__info__text">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim accusamus ducimus sint accusantium
								saepe porro fuga adipisci esse
								a! Quaerat necessitatibus veritatis molestias voluptates obcaecati asperiores aperiam. Incidunt,
								nostrum minima?
							</div>
							<div class="about__image">
								<img class="img" src="resurses/fon3.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="about__block" id="benefits">
					<!-- <div class="about__block__title">
						Наши преимущества
					</div> -->
					<div class="about__content flex">
						<div class="about__info">
							<ul class="list__benefits">
								<li class="about__info__text item__benefist">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, minima?</li>
								<li class="about__info__text item__benefist">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, minima?</li>
								<li class="about__info__text item__benefist">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, minima?</li>
								<li class="about__info__text item__benefist">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, minima?</li>
							</ul>
						</div>		
						<div class="about__info">
							<ul class="list__benefits">
								<li class="about__info__text item__benefist">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, minima?</li>
								<li class="about__info__text item__benefist">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, minima?</li>
								<li class="about__info__text item__benefist">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, minima?</li>
								<li class="about__info__text item__benefist">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, minima?</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="about__block" id="history">
					<div class="about__content">
						<div class="about__info">
							<div class="about__info__text">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim accusamus ducimus sint accusantium
								saepe porro fuga adipisci esse
								a! Quaerat necessitatibus veritatis molestias voluptates obcaecati asperiores aperiam. Incidunt,
								nostrum minima?
							</div>
							<div class="about__image__history">
								<img class="img" src="resurses/fon4.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="order">
			<div class="order__contein _contein">
				<div class="order__content">
					<div class="order__title">
						Заказать услугу
					</div>
					<div class="order__from__content">
						<div class="order__menu">
							<div class="order__menu__links menu__links__active" id="order">Купить</div>
							<div class="order__menu__links" id="repair">Ремонт</div>
							<div class="order__menu__links" id="testDrive">Тест драйв</div>
						</div>
						<form action="inc/add.php" enctype="multipart/form-data" method="post" class="popap__form">
							<input name="order" value="1" type="text" style="display:none;">
							<div class="order__block _active" id="order">
								<div class="order__block__title">Заказать автомобиль</div>
								<div class="order__selected__block">
									<div class="selected__title">
										ФИО клиента
									</div>
									<input name="fioClient" type="text" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Автомобиль
									</div>
									<select name="cars" id="" class="selected__popap">
										<?php
											foreach ($cars as $car) {
										?>
											<option class="<?echo $car["yearRelease"]?>" value="<?php echo $car['name'] ?>"><?php echo $car['name'] ?>
											</option>
											
										<?php
											}
										?>
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Год выпуска
									</div>
									<input name="year" type="text" id="gode" disabled class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Комплектация
									</div>
									<select name="classCars" id="" class="selected__popap">
										<?php
											foreach ($classes as $classe) {
										?>
											<option value="<?php echo $classe['name'] ?>"><? echo $classe["name"] ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Цвет
									</div>
									<select name="colors" id="" class="selected__popap">
										<option value="Белый">Белый</option>
										<option value="Черный">Черный</option>
										<option value="Серый">Серый</option>
										<option value="Красный">Красный</option>
										<option value="Жёлтый">Жёлтый</option>
										<option value="Синий">Синий</option>
										<option value="Оранжевый">Оранжевый</option>
									</select>
								</div>
								<div class="radio__block">
									<div class="radio__block__title">Дополнительное</div>
									<?php
										foreach ($components as $component) {
									?>
										<div class="radio__block__content">
											<input type="checkbox"  name="component[]" value="<?php echo $component['name'] ?>">
											<?php echo $component['name'] ?>	
										</div>
									<?php
										}
									?>
								</div>
								<div class="button__orders__form">
									<button type="submit">Заказать</button>
								</div>
							</div>	
						</form>			
						<form action="inc/add.php" enctype="multipart/form-data" method="post" class="popap__form">
							<input name="order" value="2" type="text" style="display:none;">
							<div class="order__block" id="repair">
								<div class="order__block__title">Заказать ремонт</div>
								<div class="order__selected__block">
									<div class="selected__title">
										ФИО клиента
									</div>
									<input name="fioClient" type="text" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										ФИО Механика
									</div>
									<select name="fioMechanic" id="" class="selected__popap">
										<?php
											foreach ($staffs as $staff) {
										?>
											<option value="<?php echo $staff['name'] ?>"><? echo $staff["name"] ?></option>
										<?php
											}
										?>	
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Автомобиль
									</div>
									<input name="automobile" type="text" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Комплектация
									</div>
									<select name="classCars" id="" class="selected__popap">
										<?php
											foreach ($classes as $classe) {
										?>
											<option value="<?php echo $classe['name'] ?>"><? echo $classe["name"] ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Причина поломки
									</div>
									<select name="cause" id="" class="selected__popap">
										<?php
											foreach ($breakdowns as $breakdown) {
										?>
											<option value="<?php echo $breakdown['name'] ?>"><? echo $breakdown["name"] ?></option>
										<?php
											}
										?>	
									</select>
								</div>
								<div class="button__orders__form">
									<button type="submit">Заказать</button>
								</div>
							</div>
						</form>	
						<form action="inc/add.php" enctype="multipart/form-data" method="post" class="popap__form">	
							<input name="order" value="3" type="text" style="display:none;">
							<div class="order__block" id="testDrive">
								<div class="order__block__title">Заказать Тест-драйв</div>
								<div class="order__selected__block">
									<div class="selected__title">
										ФИО клиента
									</div>
									<input name="fioClient" type="text" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Паспорт клиента
									</div>
									<input name="pasportClient" type="text" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Автомобиль
									</div>
									<select name="cars" id="" class="selected__popap">
										<?php
											foreach ($cars as $car) {
										?>
											<option class="<?echo $car["yearRelease"]?>" value="<?php echo $car['id'] ?>"><?php echo $car['name'] ?>
											</option>
											
										<?php
											}
										?>
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Комплектация
									</div>
									<select name="classCars" id="" class="selected__popap">
										<?php
											foreach ($classes as $classe) {
										?>
											<option value="<?php echo $classe['name'] ?>"><? echo $classe["name"] ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Дата тест-драйва
									</div>
									<input name="dataTest" type="date" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Время начало
									</div>
									<input name="beforeTest" type="time" class="popap__lable">
									
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Время конца
									</div>
									<input name="afterTest" type="time" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Ответственный
									</div>
									<select name="fioResponsible" id="" class="selected__popap">
										<?php
											foreach ($staffs2 as $staff2) {
										?>
											<option value="<?php echo $staff2['name'] ?>"><? echo $staff2["name"] ?></option>
										<?php
											}
										?>	
									</select>
								</div>	
								<div class="button__orders__form">
									<button type="submit">Заказать</button>
								</div>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</section>
	</div>
	<footer class="footer" id="footerMain">
		<div class="footer__cpntainer _contein">
			<div class="footer__body">
				<div class="footer__contacts">
					<div class="footer__contacts _footer-title">Контакты</div>
					<ul class="footer__contacts__list">
						<li><a href="tel:87475608836" class="footer__contacts__link">87475608836</a></li>
						<li><a href="tel:87475608836" class="footer__contacts__link">87475608836</a></li>
						<li><a href="tel:87475608836" class="footer__contacts__link icon-whatsapp">87475608836</a></li>
						<li><a href="" class="footer__contacts__link icon-location2">Аль фараби 110</a></li>
					</ul>
				</div>
				<div class="footer__socialMedia">
					<div class="footer__socialMedia _footer-title">Следите за нами</div>
					<ul class="footer__socialMedia__list">
						<li><a href="" class="footer__socialMedia__link icon-facebook2">TestDrive</a></li>
						<li><a href="" class="footer__socialMedia__link icon-instagram">TestDrive</a></li>
						<li><a href="" class="footer__socialMedia__link icon-telegram">TestDrive</a></li>
						<li><a href="" class="footer__socialMedia__link icon-telegram">TestDrive</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/script.js"></script>
</body>

</html>