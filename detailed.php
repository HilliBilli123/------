<?php
// session_start();

include "inc/connect.php";
$carId = $_GET['carID'];
$details = mysqli_query($connect, "SELECT * FROM `detailed`");
$classes = mysqli_query($connect, "SELECT * FROM `classes`");
$cars = mysqli_query($connect, "SELECT * FROM `cars`");
$harackters = mysqli_query($connect, "SELECT * FROM `harackter`");
foreach ($cars as $car) {
	if($carId == $car['id']) {
		$needCar = $car;
	}
}

foreach ($details as $detail) {
	if($detail['id'] == $needCar['detailed']) {
		$needDetail = $detail;
	}
}
$harackterId = $needCar['harackterId'];
foreach ($harackters as $harackter) {
	if($harackterId == $harackter['id']) {
		$needHarackter = $harackter;
	}
}

$cars = mysqli_query($connect, "SELECT * FROM `cars` where `id`=$carId");
print_r($needHarackter);
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
					<a href="index.php" class="logo__image">
						<img src="resurses/logo.png" alt="">
					</a>
				</div>
				<div class="menu__link__block"><a href="index.php" class="menu__link">Негізгі</a></div>
				<div class="menu__link__block"><a href="#har" class="menu__link">Сипаттама</a></div>
				<div class="menu__link__block"><a href="#int" class="menu__link">Интерьер</a></div>
				<div class="menu__link__block"><a href="#sec" class="menu__link">Қауіпсіздік</a></div>
				<div class="menu__link__block"><a href="#eng" class="menu__link">Қозғалтқыш</a></div>
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
		<section class="harackter" id="har">
			<div class="harackter__contein _contein">
				<div class="detail__titels">Сипаттама</div>
				<div class="harackter__content">
					<div class="harackter__description">
						<div class="description__block">
							<div class="description__title">
								Қозғалтқыш көлемі	
							</div>
							<div class="description__text">
								<?php echo $needHarackter['engCap'] ?>	
							</div>
						</div>
						<div class="description__block">
							<div class="description__title">
								Жанармай түрі	
							</div>
							<div class="description__text">
								<?php echo $needHarackter['fuelType'] ?>	
							</div>
						</div>
						<div class="description__block">
							<div class="description__title">
								Жетек түрі
							</div>
							<div class="description__text">
								<?php echo $needHarackter['typeDrive'] ?>	
							</div>
						</div>
						<div class="description__block">
							<div class="description__title">
								Қозғалтқыш қуаты
							</div>
							<div class="description__text">
								<?php echo $needHarackter['engPower'] ?>	
							</div>
						</div>
						<div class="description__block">
							<div class="description__title">
								Қозғалтқыш қуаты
							</div>
							<div class="description__text">
								<?php echo $needHarackter['gearboxType'] ?>	
							</div>
						</div>
						<div class="description__block">
							<div class="description__title">
								Беріліс саны	
							</div>
							<div class="description__text">
								<?php echo $needHarackter['numberGears'] ?>	
							</div>
						</div>
					</div>
					<div class="harackter__price">
						<div class="price__title">Бастапқы бағасы</div>
						<div class="price">
							<?php echo $needCar['price'] ?>
						</div>
						<div class="harackter__img">
							<img class="img" src="<?php echo $needCar['imagePath'] ?>" alt="">
						</div>
					</div>
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
					<div class="footer__contacts _footer-title">Контактілер</div>
					<ul class="footer__contacts__list">
						<li><a href="tel:87475608836" class="footer__contacts__link">87475251918</a></li>
						<li><a href="tel:87475608836" class="footer__contacts__link">87475251918</a></li>
						<li><a href="tel:87475608836" class="footer__contacts__link icon-whatsapp">87475251918</a></li>
						<li><a href="" class="footer__contacts__link icon-location2">Туран 53А</a></li>
					</ul>
				</div>
				<div class="footer__socialMedia">
					<div class="footer__socialMedia _footer-title">Бізге жазылыңыздар</div>
					<ul class="footer__socialMedia__list">
						<li><a href="" class="footer__socialMedia__link icon-facebook2">DiDriver</a></li>
						<li><a href="" class="footer__socialMedia__link icon-instagram">DiDriver</a></li>
						<li><a href="" class="footer__socialMedia__link icon-telegram">DiDriver</a></li>
						<li><a href="" class="footer__socialMedia__link icon-telegram">DiDriver</a></li>
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