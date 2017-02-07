!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="mainpage"> 

<?php include "blocks/burgermenu.php"; ?>
<?php include "blocks/header.php"; ?>

<div class="page">
	<div class="overlay"></div>
	
	<!-------------------------------------------------->

	
	
	<!-------------------------------------------------->
	
	<section class="accordion">
		<div class="container">
			<p class="accordion__button" data-accordion="infoaccordion">Информация о сервисе<span class="accordion__arrow">
			    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.09 14.46"><defs><style>.cls-1{fill:none;stroke:#2ca447;stroke-linecap:square;stroke-miterlimit:10;stroke-width:2px;}</style></defs><line class="cls-1" x1="13.04" y1="13.04" x2="24.67" y2="1.41"/><line id="_Контур_2" data-name="&lt;Контур&gt;" class="cls-1" x1="13.04" y1="13.04" x2="1.41" y2="1.41"/></svg>
			</span></p>
			<div class="accordion__info" id="infoaccordion">
			     <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>
			</div>
		</div>
	</section>
	
	<!-------------------------------------------------->
	
	<?php include "blocks/footer.php"; ?>
	
</div>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
<script src="js/main-calculator.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUaCNfcDZQL7nZK07DQmAHsEetCCMIQ5w&callback=initMap"></script>
<script src="js/searchmap.js"></script>
</body>
</html>