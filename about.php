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

<section class="about">
	<div class="heading">
		<div class="gradient"></div>
		<div class="container">
			<h2>О компании</h2>
		</div>
	</div>
	<div class="about__differences">
		<div class="container">
			<p class="about__blockheading">Отличия сервиса FODERENT:</p>
			<ul class="about__differenceslist">
				<li><p>Мы проверяем и гарантируем цены и техническое состояние каждой единицы техники и квалификацию каждого оператора.</p></li>
				<li><p>Мы выступаем центральным контрагентов для арендаторов техники и несем ответственность за исполнение заказа при условии надлежащей оплаты.</p></li>
				<li><p>Мы гарантируем своевременную оплату аренды техники для арендодателей. <br>
				</p></li>
				<li><p>Мы предоставляем уникальное IT решение для управления техникой, контролем ее использования в режиме реального времени и арендными платежами в личном кабинете владельца техники.</p></li>
				<li><p>Мы осуществляем полноценное информационное сопровождение и поддержку ваших заказов и сдаваемой в аренду техники. Вся техника на портаре FODERENT проходит регулярный технический осмотр и обслуживание, страхуется от утери и оборудуется системой мониторинга. </p></li>
			</ul>
		</div>
	</div>
	<div class="about__targets">
		<div class="container">
			<p class="about__blockheading">Наши цели:</p>
			<ul class="about__targetslist">
				<li><img src="img/icon_about_targets_1.svg" alt="@@" width="190"><p>Создать специализированный <br>
				портал по аренде спецтехники <br>
				для консолидации всех <br>
				предложений от мелких и <br>
				крупных собственников и <br>
				привлечения туда арендаторов.</p></li>
				<li><img src="img/icon_about_targets_2.svg" alt="@@" width="173"><p>Предоставить участникам <br>
				рынка удобный <br>
				инструмент управления <br>
				собственным парком, <br>
				сервис по поиску и аренде <br>
				необходимых единиц <br>
				спецтехники.</p></li>
				<li><img src="img/icon_about_targets_3.svg" alt="@@" width="150"><p>Повысить уровень <br>
				автоматизации и <br>
				максимально упростить <br>
				процесс аренды спецтехники, <br>
				обеспечив стороны <br>
				необходимыми гарантиями.</p></li>
			</ul>
		</div>
	</div>
	<div class="about__advantages">
		<div class="container">
			<p class="about__blockheading">Наши преимущества</p>
			<ul class="about__advantageslist">
				<li>
					<div class="image"><img src="img/icon_about_advantages_1.svg" alt="@@" width="33"></div>
					<p>Гарантия цен и технического состояния</p>
				</li>
				<li>
					<div class="image"><img src="img/icon_about_advantages_2.svg" alt="@@" width="34"></div>
					<p>Уникальное IT решение</p>
				</li>
				<li>
					<div class="image"><img src="img/icon_about_advantages_3.svg" alt="@@" width="39"></div>
					<p>Поддержка и споровождение Ваших заказов</p>
				</li>
				<li>
					<div class="image"><img src="img/icon_about_advantages_4.svg" alt="@@" width="25"></div>
					<p>Любая техника под запрос</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="about__contacts">
		<div class="container">
			<p class="about__blockheading">Контакты</p>
			<div>
				<p class="about__contactheading">Адрес: </p>
				<p>1-й Волоколамский проезд, д. 10, стр. 1, <br>
				Москва, 123060 Россия</p>
			</div>
			<div>
				<p class="about__contactheading">Телефоны: </p>
				<p>+7 (144) 123-34-65, <br>
				+7 (144) 123-34-65</p>
			</div>
			<div>
				<p class="about__contactheading">E-mail: </p>
				<p>foderent@foderent.com</p>
			</div>
		</div>
	</div>
	<div class="about__map" id="aboutmap"></div>
	<div class="about__formblock">
		<div class="container">
			<form action="" class="about__form">
				<p class="about__formheading">Обратная связь</p>
				<div class="about__formfields">
					<div class="about__formfield">
						<p>Имя</p>
						<input type="text" name="name">
					</div>
					<div class="about__formfield">
						<p>Телефон</p>
						<input type="tel" name="telephone">
					</div>
					<div class="about__formfield">
						<p>Email</p>
						<input type="email" name="email">
					</div>
					<div class="about__formfield about__formfield_file">
						<p>Вложения</p>
						<p class="about__formfile">technika.jpg<a href="#"></a></p>
						<p class="small">Разрешенные расширения: .jpg, .png, .jpeg, .gif</p>
					</div>
					<div class="about__formfield about__formfield_message">
						<p>Сообщение</p>
						<textarea name="message"></textarea>
					</div>
				</div>
				<button class="button about__formbutton"><span class="button__border-top"></span>отправить<span class="button__border-bottom"></span></button>
			</form>
		</div>
	</div>
</section>

<!-------------------------------------------------->

<?php include "blocks/footer.php"; ?>

</div>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUaCNfcDZQL7nZK07DQmAHsEetCCMIQ5w&callback=initMap" async defer></script>
       
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function initMap() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
					
					mapTypeControl: false,
					scrollwheel: false,

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#0f9324"},{"lightness":20},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#00700a"},{"lightness":17},{"weight":1.2},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"color":"#93c991"},{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20},{"visibility":"on"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('aboutmap');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

            }
        </script>

</body>
</html>