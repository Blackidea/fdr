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

<section class="contacts">
	<div class="heading">
		<div class="gradient"></div>
		<div class="container">
			<h2>Контакты</h2>
		</div>
	</div>
	<div class="contacts__mainblock">
		<div class="container">
			<p class="contacts__heading">Фактический адрес: </p>
			<p>1-й Волоколамский проезд, д. 10, стр. 1, <br>
			Москва, 123060 Россия</p>
			<p class="contacts__heading">Юридический адрес:</p>
			<p>1-й Волоколамский проезд, д. 10, стр. 1, <br>
			Москва, 123060 Россия</p>
			<p class="contacts__heading">Телефоны: </p>
			<p>+7 (144) 123-34-65, +7 (144) 123-34-65</p>
			<p class="contacts__heading">E-mail: </p>
			<p>foderent@foderent.com</p>
			<p class="contacts__heading">Реквизиты:</p>
			<p>Общество с ограниченной <br>
			ответственностью «СпецСтройТехника»</p>
			<p class="contacts__info">ИНН 5003081582 <br>
			КПП 500301001 <br>
			ОГРН 1085003003546 <br>
			Р/С 40702810340050002304</p>
		</div>
		<div class="contacts__map" id="contactsmap"></div>
	</div>
	<div class="contacts__formblock">
		<div class="container">
			<form action="" class="contacts__form">
				<p class="contacts__formheading">Обратная связь</p>
				<div class="contacts__formfields">
					<div class="contacts__formfield">
						<p>Имя</p>
						<input type="text" name="name">
					</div>
					<div class="contacts__formfield">
						<p>Телефон</p>
						<input type="tel" name="telephone">
					</div>
					<div class="contacts__formfield">
						<p>Email</p>
						<input type="email" name="email">
					</div>
					<div class="contacts__formfield contacts__formfield_file">
						<p>Вложения</p>
						<p class="contacts__formfile">technika.jpg<a href="#"></a></p>
						<p class="small">Разрешенные расширения: .jpg, .png, .jpeg, .gif</p>
					</div>
					<div class="contacts__formfield contacts__formfield_message">
						<p>Сообщение</p>
						<textarea name="message"></textarea>
					</div>
				</div>
				<button class="button contacts__formbutton"><span class="button__border-top"></span>отправить<span class="button__border-bottom"></span></button>
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
                var mapElement = document.getElementById('contactsmap');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

            }
        </script>

</body>
</html>