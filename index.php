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
				<div class="menu__link__block"><a href="#" class="menu__link">Негізгі</a></div>
				<div class="menu__link__block"><a href="#models" class="menu__link">Модельдер</a></div>
				<div class="menu__link__block"><a href="#about" class="menu__link">Біз туралы</a></div>
				<div class="menu__link__block"><a href="pages/admin/login.html" class="menu__link">Кіру</a></div>
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
											<div class="detailed__content__text">Жаңа өзгеріс</div>
											<!-- <a href="" class="open__car__about">Подробное</a> -->
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
											<div class="detailed__content__text">Танысу</div>
											<div class="detailed__content__title">Жаңа Kia үлгілері</div>
											<!-- <a href="" class="open__car__about">Подробное</a> -->
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
		<section class="models pading" id="models">
			<div class="models__contain _contein">
				<div class="models__content">
					<div class="models__content__title">
						Kia Модельдері 
					</div>
					<div class="models-slider swiper">
						<div class="models-slider__wrapper swiper-wrapper ">
							<?php
							foreach ($cars as $car) {
							?>
								<div class="models-slider__slide swiper-slide ">
									<div class="models-slider__content">
										<a href="detailed.php?carID=<?php echo $car['id'] ?>" class="models-slider__link">
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
		<section class="about pading" id="about">
			<div class="about__contain _contein">
				<!-- <div class="about__title">О нас</div> -->
				<div class="about__menu">
					<div class="about__menu__links about__menu__active" id="company">Di-driver</div>
					<div class="about__menu__links" id="benefits">Артықшылықтары</div>
					<div class="about__menu__links" id="history">Тарихы</div>
				</div>
				<div class="about__block about__active" id="company">
					<div class="about__block__title">
						Di-driver сегодня
					</div>
					<div class="about__content">
						<div class="about__info">
							<div class="about__info__text">
							Di-driver компаниясы автомобильдердің адамзатқа маңыздылығы мен әсерін мойындайды. Біз тұтынушының өмірлік серігі болғымыз келетін, жай өндірушіден тыс рөл атқаруға тырысамыз. Біз Di-driver Group құрамында «өмір бойы автокөлік серіктесі» болу және «жақсы болашақ үшін бірге жұмыс істеу» туралы көзқарасымызды орындай отырып, тұтынушылармен жақсы қарым-қатынаста болуға тырысамыз.
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
								<li class="about__info__text item__benefist">Біз барлық күш-жігерімізді жұмсай отырып, ең жақсы сапалы және мінсіз қызмет көрсете отырып, тұтынушыға бағытталған корпоративтік мәдениетті алға жылжытамыз.</li>
								<li class="about__info__text item__benefist">Біз тоқмейілсуден бас тартамыз, Айнымас құмарлық пен тапқырлықпен, үлкен-кіші қиындыққа қарамастан кез келген мүмкіндікті аламыз. мақсаттарымызға қол жеткізетініне сенімді.</li>
								<li class="about__info__text item__benefist">Біз синергияны компания ішіндегі, сондай-ақ іскер серіктестерімізбен өзара байланыс пен ынтымақтастық арқылы жеңілдетілген «бірлік» сезімі арқылы жасаймыз.</li>
							</ul>
						</div>
						<div class="about__info">
							<ul class="list__benefits">
								<li class="about__info__text item__benefist">Біз мәдениеттер мен әдет-ғұрыптардың әртүрлілігін құрметтейміз, өз ісімізде әлемдегі ең жақсы болуға және беделді жаһандық корпоративтік азамат болуға ұмтыламыз.</li>
								<li class="about__info__text item__benefist">Біз автомобиль тұжырымдамасын бүгінгі қарапайым көліктен адамдарды отбасымен, жұмысымен және қоғаммен байланыстыратын жаңа кеңістікке дейін кеңейткіміз келеді. Көлікті адамдар кез келген жерде және кез келген уақытта сенім артатын бақытты кеңістікке айналдыру.</li>
								<li class="about__info__text item__benefist">Біздің ұйымның болашағы жеке мүшелердің жүрегі мен қабілеттерінде және дарындылықты құрметтейтін корпоративтік мәдениетті құру арқылы олардың әлеуетін дамытуға көмектесетініне сенеміз.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="about__block" id="history">
					<div class="about__content">
						<div class="about__info">
							<div class="about__info__text">
							KIA Motors (корей тілінде «Азиядан әлемге шығу») - штаб-пәтері Сеулде орналасқан ең көне кореялық автомобиль өндірушісі. Hyundai-KIA Automotive Group қазір әлемдегі бесінші ірі автокөлік өндірушісі. Ол сегіз елдегі 14 өндіріс және құрастыру орындарында жылына 1,4 миллионнан астам көлік шығарады.
							Сол кезде Kyungsung Precision Industry деп аталатын KIA 1944 жылы 15 мамырда Солтүстік Корея Оңтүстік Кореямен соғысуға дейін аз уақыт бұрын құрылған. Алғашында қазіргі Сеулдің оңтүстігіндегі Яндеунпо қаласындағы шағын зауытта компания велосипедтер, оларға арналған бөлшектер және өнеркәсіп өнімдерін шығарумен айналысса, кейінірек жүк және жеңіл көліктер шығара бастады.

							</div>
							<div class="about__image__history">
								<img class="img" src="resurses/fon4.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="order pading">
			<div class="order__contein _contein">
				<div class="order__content">
					<div class="order__title">
					Тапсырыс беру қызметі
					</div>
					<div class="order__from__content">
						<div class="order__menu">
							<div class="order__menu__links menu__links__active" id="order">Сатып алу</div>
							<div class="order__menu__links" id="repair">Жөндеу</div>
							<div class="order__menu__links" id="testDrive">Тест драйв</div>
						</div>
						<form action="inc/add.php" enctype="multipart/form-data" method="post" class="popap__form">
							<input name="order" value="1" type="text" style="display:none;">
							<div class="order__block _active" id="order">
								<div class="order__block__title">Көлікке тапсырыс беріңіз</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Клиенттің толық аты-жөні
									</div>
									<input name="fioClient" type="text" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Автомобиль
									</div>
									<select name="cars" id="cars" class="selected__popap">
										<?php
										foreach ($cars as $car) {
										?>
											<option data-price-car="<? echo $car["price"] ?>" class="<? echo $car["yearRelease"] ?>" value="<?php echo $car['name'] ?>"><?php echo $car['name'] ?>
											</option>

										<?php
										}
										?>
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Шыққан жылы
									</div>
									<input type="text" id="gode" value="" disabled class="popap__lable">

								</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Жабдық
									</div>
									<select name="classCars" id="class" class="selected__popap">
										<?php
										foreach ($classes as $classe) {
										?>
											<option data-class="<? echo $classe["price"] ?>" value="<?php echo $classe['name'] ?>"><? echo $classe["name"] ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Түс
									</div>
									<select name="colors" id="" class="selected__popap">
										<option value="Белый">Ақ</option>
										<option value="Черный">Қара</option>
										<option value="Серый">Сұр</option>
										<option value="Красный">Қызыл</option>
										<option value="Жёлтый">Сары</option>
										<option value="Синий">Көк</option>
									</select>
								</div>
								<div class="radio__block__title">Қосымша</div>
								<div class="radio__block">

									<?php
									foreach ($components as $component) {
									?>
										<div class="radio__block__content">
											<input id="componetW" data-components="<? echo $component["price"] ?>" type="checkbox" name="component[]" value="<?php echo $component['name'] ?>">
											<?php echo $component['name'] ?>
										</div>
									<?php
									}
									?>
								</div>
								<div class="button__orders__form">
									<button type="submit">Тапсырыс беру</button>
									<div class="input">
										<label for="price">Бағасы</label>
										<input type="text" id="pricesss" class="popap__lable price" disabled value="">
										<input type="text" id="fullPrice" name="price" id="" style="display: none;" value="">
									</div>
								</div>
							</div>
							<input name="year" type="text" id="gode" value="" style="display: none;" class="popap__lable">
						</form>
						<form action="inc/add.php" enctype="multipart/form-data" method="post" class="popap__form">
							<input name="order" value="2" type="text" style="display:none;">
							<div class="order__block" id="repair">
								<div class="order__block__title">Жөндеуге тапсырыс беріңіз</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Клиенттің толық аты-жөні
									</div>
									<input name="fioClient" type="text" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
										Механиктын толық аты-жөні
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
										Жабдық
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
									 Бұзылу себептері
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
									<button type="submit">Тапсырыс беру</button>
								</div>
							</div>
						</form>
						<form action="inc/add.php" enctype="multipart/form-data" method="post" class="popap__form">
							<input name="order" value="3" type="text" style="display:none;">
							<div class="order__block" id="testDrive">
								<div class="order__block__title">Тест-драйв тапсырыс беру</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Клиенттің толық аты-жөні
									</div>
									<input name="fioClient" type="text" class="popap__lable">
								</div>
								<!-- <div class="order__selected__block">
									<div class="selected__title">
										Паспорт клиента
									</div>
									<input name="pasportClient" type="text" class="popap__lable">
								</div> -->
								<div class="order__selected__block">
									<div class="selected__title">
										Автомобиль
									</div>
									<select name="cars" id="" class="selected__popap">
										<?php
										foreach ($cars as $car) {
										?>
											<option class="<? echo $car["yearRelease"] ?>" value="<?php echo $car['name'] ?>"><?php echo $car['name'] ?>
											</option>

										<?php
										}
										?>
									</select>
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Жабдық
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
									Сынақ жүргізу күні
									</div>
									<input name="dataTest" type="date" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Басталу уақыты
									</div>
									<input name="beforeTest" type="time" class="popap__lable">

								</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Аяқталу уақыты
									</div>
									<input name="afterTest" type="time" class="popap__lable">
								</div>
								<div class="order__selected__block">
									<div class="selected__title">
									Жауапты
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
									<button type="submit">Тапсырыс беру</button>
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
					<div class="footer__contacts _footer-title">Контактілер</div>
					<ul class="footer__contacts__list">
						<li><a href="tel:87475608836" class="footer__contacts__link">87475608836</a></li>
						<li><a href="tel:87475608836" class="footer__contacts__link">87475608836</a></li>
						<li><a href="tel:87475608836" class="footer__contacts__link icon-whatsapp">87475608836</a></li>
						<li><a href="" class="footer__contacts__link icon-location2">Аль фараби 110</a></li>
					</ul>
				</div>
				<div class="footer__socialMedia">
					<div class="footer__socialMedia _footer-title">Бізге жазылыңыздар</div>
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
	<script src="js/price.js"></script>
</body>

</html>