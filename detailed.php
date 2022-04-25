<?php
// session_start();

include "inc/connect.php";
// $result = mysqli_query($connect, "SELECT products.*, category.nameCategory, category.nameCategoryKz FROM `products` join category on category.id = products.type");

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