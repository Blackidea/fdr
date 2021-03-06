<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title>Foderent | Новые технологии аренды спецтехники</title>
    <?php include "blocks/css.php"; ?>
</head>

<body>

<?php include "blocks/burgermenu.php"; ?>

<div class="page">
	<div class="overlay"></div>

<?php include "blocks/header.php"; ?>

<!-------------------------------------------------->

<section class="productcard">
	<div class="productcard__slider slider">
		<div class="productcard__wrapper wrapper">
			<div class="productcard__slide slide active" data-slide="1">
				<div class="productcard__slideimage">
					<img src="img/product_card.jpg" alt="@@" class="mobile">
					<img src="img/product_card_desktop.jpg" alt="@@" class="desktop">
				</div>
			</div>
			<div class="productcard__slide slide" data-slide="2">
				<div class="productcard__slideimage">
					<img src="img/product_card.jpg" alt="@@" class="mobile">
					<img src="img/product_card_desktop.jpg" alt="@@" class="desktop">
				</div>
			</div>
			<div class="productcard__slide slide" data-slide="3">
				<div class="productcard__slideimage">
					<img src="img/product_card.jpg" alt="@@" class="mobile">
					<img src="img/product_card_desktop.jpg" alt="@@" class="desktop">
				</div>
			</div>
			<div class="productcard__slide slide" data-slide="4">
				<div class="productcard__slideimage">
					<img src="img/product_card.jpg" alt="@@" class="mobile">
					<img src="img/product_card_desktop.jpg" alt="@@" class="desktop">
				</div>
			</div>
			<div class="productcard__slide slide" data-slide="5">
				<div class="productcard__slideimage">
					<img src="img/product_card.jpg" alt="@@" class="mobile">
					<img src="img/product_card_desktop.jpg" alt="@@" class="desktop">
				</div>
			</div>
		</div>
		<div class="productcard__sliderarrows">
			<img src="img/icon_slidearrow.svg" alt="@@" width="20" height="36" class="arrow left">
			<img src="img/icon_slidearrow.svg" alt="@@" width="20" height="36" class="arrow right">
		</div>
		<div class="productcard__sliderdots">
			<div class="dot active" data-slide="1"></div>
			<div class="dot" data-slide="2"></div>
			<div class="dot" data-slide="3"></div>
			<div class="dot" data-slide="4"></div>
			<div class="dot" data-slide="5"></div>
		</div>
		<div class="productcard__slidertextblock">
			<div class="productcard__slideinfo active" data-slide="1">
				<p class="price">10 000 руб./смена</p>
				<p>Бульдозер гусеничный Komatsu D65-E12</p>
				<p class="year">2005 год выпуска</p>
			</div>
			<div class="productcard__slideinfo" data-slide="2">
				<p class="price">20 000 руб./смена</p>
				<p>Бульдозер гусеничный Komatsu D65-E12</p>
				<p class="year">2006 год выпуска</p>
			</div>
			<div class="productcard__slideinfo" data-slide="3">
				<p class="price">30 000 руб./смена</p>
				<p>Бульдозер гусеничный Komatsu D65-E12</p>
				<p class="year">2007 год выпуска</p>
			</div>
			<div class="productcard__slideinfo" data-slide="4">
				<p class="price">40 000 руб./смена</p>
				<p>Бульдозер гусеничный Komatsu D65-E12</p>
				<p class="year">2008 год выпуска</p>
			</div>
			<div class="productcard__slideinfo" data-slide="5">
				<p class="price">50 000 руб./смена</p>
				<p>Бульдозер гусеничный Komatsu D65-E12</p>
				<p class="year">2009 год выпуска</p>
			</div>
		</div>
	</div>
	<div class="productcard__content">
		<div class="container">
			<div class="productcard__block productcard__choosedate">
				<p class="productcard__blockheading">Выберите дату</p>
        <div class="searchform__field searchform__field_date">
					<p class="huge datefrom">24.10</p>
					<img src="img/icon_arrow_right.svg" alt="@@" width="46" height="25">
					<p class="huge dateto">02.11</p>
					<a href="#" class="calendar" data-dateopen="card_datepicker"><img src="img/icon_calendar.svg" alt="@@"></a>
					<div class="datepicker" id="card_datepicker"></div>
					<input type="text" value="" class="inputdatefrom" name="srokarendifrom">
          <input type="text" value="" class="inputdateto" name="srokarendito">
				</div>
			</div>
			<div class="productcard__block productcard__characteristics">
				<p class="productcard__blockheading">
				Характеристики</p>
				<ul class="productcard__characteristicslist">
					<li><p>Марка</p><p>KOMATSU</p></li>
					<li><p>Модель</p><p>D65-E12</p></li>
					<li><p>Год выпуска</p><p>2005</p></li>
					<li><p>Эксплуатационная масса (кг)</p><p>19500</p></li>
					<li><p>Мощность двигателя (л.с.)</p><p>190</p></li>
					<li><p>Тип отвала</p>
						<div class="selectbox selectbox_white">
							<select name="dumptype">
								<option value="straight">Прямой</option>
								<option value="point1">Пункт 1</option>
								<option value="point2">Пункт 2</option>
								<option value="point3">Пункт 3</option>
							</select>
							<ul class="selectbox__selectlist"></ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="productcard__block productcard__addtocost">
				<p class="productcard__blockheading">Учесть в стоимость:</p>
				<div class="checkdiv">
					<input id="check1" type="checkbox" name="check1" value="Да">
					<label for="check1"><img src="img/icon_check.svg" alt="@@" width="16" height="10"></label>
					<p>С учетом расхода топлива</p>
				</div>
				<div class="checkdiv">
					<input id="check2" type="checkbox" name="check1" value="Да">
					<label for="check2"><img src="img/icon_check.svg" alt="@@" width="16" height="10"></label>
					<p>Работа по выходным</p>
				</div>
				<div class="checkdiv">
					<input id="check3" type="checkbox" name="check1" value="Да">
					<label for="check3"><img src="img/icon_check.svg" alt="@@" width="16" height="10"></label>
					<p>Доставка</p>
				</div>
				<div class="checkdiv">
					<input id="check4" type="checkbox" name="check1" value="Да">
					<label for="check4"><img src="img/icon_check.svg" alt="@@" width="16" height="10"></label>
					<p>Проживание персонала</p>
				</div>
			</div>
			<div class="productcard__block productcard__description">
				<p class="productcard__blockheading">Описание</p>
				<p>Компания ООО"Нафтаком" предлагает услуги по аренде спецтехники: <br>
				• Бульдозер Komatsu D65E-12 <br>
				• Полусферический отвал с изменяемым углом перекоса. <br>
				• Трехстоечный рыхлитель. <br>
				• Техника предоставляется с машинистом. <br>
				Полностью укомплектованы в отличном техническом состоянии. Индивидуальный подход в расчете стоимости и условий предоставления техники в аренду. <br>
				Мы работаем по всей России.</p>
			</div>
			
			<div class="productcard__rightblock">
			<div class="productcard__block productcard__delivery">
				<p class="productcard__blockheading">Укажите адрес доставки</p>
				<input type="text" placeholder="Введите адрес">
				<div class="map" id="productcardmap"></div>
			</div>
			<div class="productcard__block productcard__choosedate">
				<p class="productcard__blockheading">Выберите дату</p>
                <div class="searchform__field searchform__field_date">
					<p class="huge datefrom">24.10</p>
					<img src="img/icon_arrow_right.svg" alt="@@" width="46" height="25">
					<p class="huge dateto">02.11</p>
					<a href="#" class="calendar" data-dateopen="card2_datepicker"><img src="img/icon_calendar.svg" alt="@@"></a>
					<div class="datepicker" id="card2_datepicker"></div>
					<input type="text" value="" class="inputdatefrom" name="srokarendifrom">
                    <input type="text" value="" class="inputdateto" name="srokarendito">
				</div>
			</div>
			<div class="productcard__block productcard__topay">
				<p>К оплате: 120 000 руб.</p>
				<a href="#" class="button button_green"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
			</div>
			</div>			
			
			<div class="productcard__similarmodels">
				<p class="productcard__similarheading">Похожие модели</p>
				<div class="productcard__similarslider slider">
					<div class="productcard__similarwrapper wrapper">
						<div class="productcard__similarslide slide">
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
						</div>
						<div class="productcard__similarslide slide">
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
						</div>
						<div class="productcard__similarslide slide">
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
						</div>
						<div class="productcard__similarslide slide">
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
							<a href="#" class="productcard__similarcard">
								<div class="image">
									<img src="img/product_2.jpg" alt="@@">
								</div>
								<p>Бульдозер гусеничный <br>KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
							</a>
						</div>
					</div>
					<div class="productcard__similarsliderdots">
						<div class="dot active" data-slide="1"></div>
						<div class="dot" data-slide="2"></div>
						<div class="dot" data-slide="3"></div>
						<div class="dot" data-slide="4"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-------------------------------------------------->

<?php include "blocks/footer.php"; ?>

</div>



<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
<script src="js/datepicker.js"></script>

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
                var mapElement = document.getElementById('productcardmap');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

            }
        </script>

</body>
</html>
