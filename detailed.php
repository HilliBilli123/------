<?php
// session_start();

include "inc/connect.php";
$carId = $_GET['carID'];
$details = mysqli_query($connect, "SELECT * FROM `detailed`");
$cars = mysqli_query($connect, "SELECT * FROM `cars`");
foreach ($details as $detail) {
	if($carId == $detail['carId']) {
		$needDetail = $detail;
	}
}
foreach ($cars as $car) {
	if($carId == $car['id']) {
		$needCar = $car;
	}
}
$cars = mysqli_query($connect, "SELECT * FROM `cars` where `id`=$carId");
// print_r($needCar);
// print_r($detail);
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
				<div class="menu__link__block"><a href="index.php" class="menu__link">Негізгі</a></div>
				<div class="menu__link__block"><a href="#int" class="menu__link">Интерьер</a></div>
				<div class="menu__link__block"><a href="#sec" class="menu__link">Қауіпсіздік</a></div>
				<div class="menu__link__block"><a href="#eng" class="menu__link">Қозғалтқыш</a></div>
				<div class="menu__link__block"><a href="pages/admin/index.php" class="menu__link">Вход</a></div>
			</div>
		</div>
	</header>
	<div class="page__body">
		<section class="title__detail">
			<div class="title__contein">
				<div class="title__content">
					<img class="img" src="<?php echo $needDetail['titleImg'] ?>" alt="">
				</div>
			</div>
		</section>
		<section class="interior" id="int">
			<div class="interior__contein _contein">
				<div class="detail__titels">ИНТЕРЬЕР</div>
				<div class="interior__content flex">
					<div class="interior__img">
						<img src="<?php echo $needDetail['interiorImg'] ?>" alt="">
					</div>
					<div class="interior__block">
						<div class="interior__title">Ең кішкентай бөлшектерге дейін практикалық</div>
						<div class="interior__text">
							<?php echo $needDetail['interior'] ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="security" id="sec">
			<div class="security__contein _contein">
				<div class="detail__titels">ҚАУІПСІЗДІК</div>
				<div class="security__content flex">
					<div class="security__block">
						<div class="security__title">Мұқият және сенімділікпен</div>
						<div class="security__text">
							<?php echo $needDetail['security'] ?>
						</div>
					</div>
					<div class="security__img">
						<img src="<?php echo $needDetail['securityImg'] ?>" alt="">
					</div>
				</div>
			</div>
		</section>
		<section class="engine" id="eng">
			<div class="engine__contein _contein">
				<div class="detail__titels">қозғалтқыш</div>
				<div class="engine__content flex">
					<div class="engine__img">
						<img src="<?php echo $needDetail['engineImg'] ?>" alt="">
					</div>
					<div class="engine__block">
						<div class="engine__title">Жолдар мен шыңдарды бағындыру</div>
						<div class="engine__text">
							<?php echo $needDetail['engine'] ?>
						</div>
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