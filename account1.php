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

<?php include "blocks/headeractive.php"; ?>

<!-------------------------------------------------->

<section class="accountpage">
	<div class="small-page-heading">
		<div class="container">
			<h2>Личный кабинет</h2>
			<ul class="accountpage__desktopnav">
				<li class="active">Техника</li>
				<li>Операторы</li>
				<li>Обращения</li>
				<li>Личные данные</li>
				<li class="accountpage__desktopnav-logout">Выход</li>
			</ul>
		</div>
	</div>

	<!------------------------------------------------->

  <div class="accountpage__content"><div class="container">

    <!-- #################### -->
    <!-- #################### -->
    <!-- #################### -->

    <!-- техника -->
    <div class="accountpage__contentblock accountpage__contentblock_active accountpage__technics">
      <!-- head -->
      <div class="accountpage__contenthead accountpage__contenthead_technics">
        <div class="accountpage__desktopleftcol">
          <a href="#submit-form" class="button button_green button_big"><span class="button__border-top"></span>Оплатить<span class="button__border-bottom"></span></a>
        </div>

        <div class="accountpage__desktoprightcol">
          <form class="accountpage__searchfilter" action="index.html" method="post">
            <input type="search" name="search" placeholder="VIN">
            <button type="submit"><img src="img/index/search.svg"></button>
          </form>

          <div class="selectbox selectbox_account">
              <select name="type">
                  <option value="type0">Тип техники</option>
                  <option value="type1">Тип техники 1</option>
                  <option value="type2">Тип техники 2</option>
              </select>
              <ul class="selectbox__selectlist"></ul>
          </div>
        </div>
      </div>
      <!-- // head -->

      <!-- content -->
      <div class="accountpage__blockcontent">
        <div class="accountpage__desktopleftcol">
          <div class="accountpage__desktopheading">
            <p class="accountpage__desktopheading-text">Техника</p>
          </div>
          <div class="accountpage__technics-cards">
            <?php include "blocks/account-technicscard.php"; ?>
            <?php include "blocks/account-technicscard.php"; ?>
            <?php include "blocks/account-technicscard.php"; ?>
            <?php include "blocks/account-technicscardchecked.php"; ?>
          </div>
        </div>
        <div class="accountpage__desktoprightcol accountpage__diagramcol">
          <?php include "blocks/account-diagram-live.php"; ?>
        </div>
      </div>
      <!-- // content -->
    </div>
    <!-- // техника -->

    <!-- #################### -->
    <!-- #################### -->
    <!-- #################### -->

    <!-- редактировать технику -->
    <!-- // редактировать технику -->

    <!-- #################### -->
    <!-- #################### -->
    <!-- #################### -->

  </div></div>

	<!------------------------------------------------->

  <?php include "blocks/account-mobilenav.php"; ?>
</section>

<!-------------------------------------------------->

<?php include "blocks/footer.php"; ?>

</div>



<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
<!--
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
                var mapElement = document.getElementById('accountmap');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

            }
        </script>
-->
</body>
</html>
