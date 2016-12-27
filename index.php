<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body> 

<?php include "blocks/burgermenu.php"; ?>

<div class="page">
	<div class="overlay"></div>

<?php include "blocks/header.php"; ?>
	
	<!-------------------------------------------------->
	
	<section class="firstscreen">
			<div class="firstscreen__vert-line"></div>
			<div class="firstscreen__vert-line"></div>
			<div class="firstscreen__vert-line"></div>
		<div class="container small">
			<h1>Лучший сервис <br>
			<span>аренды спецтехники</span></h1>
			<form class="searchform">
				<div class="searchform__field">
					<select name="type" id="technictype">
						<option value="">Тип техники</option>
					</select>
				</div>
				<div class="searchform__field searchform__field_date">
					<p class="huge">24.10</p>
					<img src="img/icon_arrow_right.png" alt="@@">
					<p class="huge">02.11</p>
					<a href="#"><img src="img/icon_calendar.svg" alt="@@"></a>
				</div>
				<div class="searchform__field">
					<input type="text" name="workplace" placeholder="Место работ">
				</div>
				<!-- Desktop -->
				<button class="desktop"><img src="img/icon_loupe.svg" alt="@@"></button>
				<!-- Mobile -->
				<button class="firstscreen__button">Найти</button>
			</form>
		</div>
		<!-- Desktop -->
		<a href="#" class="firstscreen__mouseicon"><img src="img/icon_mouse.png" alt="@@"></a>
	</section>
	
	<!-------------------------------------------------->
	
	<!-- Desktop -->
	<section class="technics" style="display:none;">
		<div>
			<img src="img/nut2.png" alt="@@" class="light">
			<p>Выберите тип техники <img src="img/arrow_right_medium.png" alt="@@"></p>
		</div>
		<div>
			<p>Землеройная</p>
		</div>
		<div>
			<p>Погрузочная</p>
		</div>
		<div>
			<p>Дорожная</p>
		</div>
		<div>
			<p>Карьерная</p>
		</div>
		<div>
			<p>Мини техника</p>
		</div>
		<div>
			<p>Коммунальная</p>
		</div>
		<div>
			<p>Подъемная</p>
		</div>
		<div>
			<p>Расширенный <br>фильтр <img src="img/icon_arrow_right_white.png" alt="@@" class="bounce"></p>
		</div>
	</section>
	
	<!-------------------------------------------------->
	
	<section class="advantages">
		<div class="container">
			<h2>Преимущества сервиса</h2>
			<ul class="advantages__list">
				<li>
					<div class="image"><img src="img/icon_advantages_1.svg" alt="@@"></div>
					<p>Быстрый поиск доступных предложений по аренде спецтехники </p>
				</li>
				<li>
					<div class="image"><img src="img/icon_advantages_2.svg" alt="@@"></div>
					<p>Простой способ бронирования <br>и получения техники </p>
				</li>
				<li>
					<div class="image"><img src="img/icon_advantages_3.svg" alt="@@"></div>
					<p>Гарантии технического состояния техники и уровня квалификации операторов </p>
				</li>
				<li>
					<div class="image"><img src="img/icon_advantages_4.svg" alt="@@"></div>
					<p>Полноценное информационное <br>и документарное сопровождение <br>и поддержка заказов </p>
				</li>
			</ul>
		</div>
	</section>
	
	<!-------------------------------------------------->
	
	<section class="sale">
		<div class="container">
			<div class="sale__bg">
				<!-- Mobile -->
				<div class="sale__mobileblock">
					<p class="small">с 16/09/16 по 30/09/16</p>
					<p>Быстрая аренда спецтехники <br> по оптовым ценам</p>
				</div>
				<!-- Desktop -->
				<div class="sale__desktopblock">
					<p class="heading">Аренда спецтехники</p>
					<p>При заказе свыше пяти смен <br>предоставляется скидка!</p>
					<a href="#" class="button button_green"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
				</div>
			</div>
			<p class="sale__link"><a href="#">Все акции <img src="img/icon_arrow_right_2.svg" alt="@@" width="31" class="bounce"></a></p>
		</div>
	</section>
	
	<!-------------------------------------------------->
	
	<section class="news">
		<div class="container">
			<h2>Новости</h2>
			<div class="newsblocks">
				<div>
					<div class="bg"></div>
					<p class="small">16/09/16</p>
					<p>Специалисты <br>проводят работы <br>по объекту</p>
				</div>
				<div>
					<div class="bg"></div>
					<p class="small">03/09/16</p>
					<p>Специалисты <br>проводят работы <br>по объекту</p>
				</div>
			</div>
			<p class="news__link"><a href="#">Все новости <img src="img/icon_arrow_right_2.svg" alt="@@" width="31" class="bounce"></a></p>
		</div>
	</section>
	
	<!-------------------------------------------------->
	
	<section class="banners">
		<div class="container">
			<!-- Desktop -->
			<div class="banners__block">
				<img src="img/banner_1.png" alt="@@">
			</div>
			<!-- Desktop -->
			<div class="banners__block banners__block_wide">
				<img src="img/banner_2.png" alt="@@">
			</div>
			<!-- Desktop -->
			<div class="banners__block">
				<img src="img/banner_3.png" alt="@@">
			</div>
			<div class="banners__block banners__block_wide">
				<img src="img/banner_4.png" alt="@@">
				<img src="img/banner_5.png" alt="@@">
			</div>
		</div>
	</section>
	
	<!-------------------------------------------------->
	
	<section class="accordion">
		<div class="container">
			<p>Информация о сервисе<img src="img/icon_select_arrow.svg" alt="@@"></p>
		</div>
	</section>
	
	<!-------------------------------------------------->
	
	<?php include "blocks/footer.php"; ?>
	
</div>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>