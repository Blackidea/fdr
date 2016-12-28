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

<section class="account">
	<div class="heading">
		<div class="gradient"></div>
		<div class="container">
			<h2>Личный кабинет</h2>
		</div>
	</div>
	<div class="account__orders" style="display:none;">
		<div class="container">
			<div class="account__orders-sorting">
				<p>Сортировать по:</p>
				<select name="" id="">
					<option value="">статусу</option>
				</select>
			</div>
		</div>
		<div class="account__orders-status">
			<div class="container">
				<ul class="account__orders-list">
					<li>
						<p class="account__order-status account__order-status_notpaid">Не оплачен</p>
						<p class="account__order-number">Заказ #6568213</p>
						<p class="account__order-cost">Сумма: 70 000 руб.</p>
						<p class="account__order-date">Дата: 19.09.2016</p>
						<p><a href="#">Посмотреть заказ</a></p>
					</li>
					<li>
						<p class="account__order-status account__order-status_paid">Оплачен</p>
						<p class="account__order-number">Заказ #6568213</p>
						<p class="account__order-cost">Сумма: 70 000 руб.</p>
						<p class="account__order-date">Дата: 19.09.2016</p>
						<p><a href="#">Посмотреть заказ</a></p>
					</li>
					<li>
						<p class="account__order-status account__order-status_completed">Завершен</p>
						<p class="account__order-number">Заказ #6568213</p>
						<p class="account__order-cost">Сумма: 70 000 руб.</p>
						<p class="account__order-date">Дата: 19.09.2016</p>
						<p><a href="#">Посмотреть заказ</a></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="account__orderinfo">
		<div class="container">
			<p class="toptext"><a href="#"><img src="img/arrow_green_left.svg" alt="@@" width="31" class="bounce">Все заказы</a></p>
			<p class="account__order-number">Заказ #9379992</p>
			<p class="account__order-date">10.09.2016</p>
		</div>
		<div class="account__order-details">
			<div class="container">
				<ul class="account__orders-list account__orders-list_info">
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__order-cost_info">70 000 руб.</p>
						<div class="searchform__field searchform__field_date">
							<p>Дата:</p>
							<p class="huge">24.10</p>
							<img src="img/icon_arrow_right.png" alt="@@">
							<p class="huge">02.11</p>
							<a href="#"><img src="img/icon_calendar.svg" alt="@@"></a>
						</div>
					</li>
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__order-cost_info">70 000 руб.</p>
						<div class="searchform__field searchform__field_date">
							<p>Дата:</p>
							<p class="huge">24.10</p>
							<img src="img/icon_arrow_right.png" alt="@@">
							<p class="huge">02.11</p>
							<a href="#"><img src="img/icon_calendar.svg" alt="@@"></a>
						</div>
					</li>
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__order-cost_info">70 000 руб.</p>
						<div class="searchform__field searchform__field_date">
							<p>Дата:</p>
							<p class="huge">24.10</p>
							<img src="img/icon_arrow_right.png" alt="@@">
							<p class="huge">02.11</p>
							<a href="#"><img src="img/icon_calendar.svg" alt="@@"></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<p class="account__order-cost_total">Сумма: 210 000 руб.</p>
			<p>Заказ оплачен</p>
			<a href="#" class="button button_green"><span class="button__border-top"></span>Продлить время работ<span class="button__border-bottom"></span></a>
			<div class="account__order-documents">
				<p><img src="img/icon_account_docs.svg" alt="@@" width="23"><a href="#moredocs">Закрывающие документы</a></p>
				<ul class="account__order-documentslist">
					<li><p><a href="#"><img src="img/icon_account_docs_download.svg" alt="@@" width="19">Закрывающий документ 1.pdf</a></p></li>
					<li><p><a href="#"><img src="img/icon_account_docs_download.svg" alt="@@" width="19">Закрывающий документ 2.pdf</a></p></li>
					<li><p><a href="#"><img src="img/icon_account_docs_download.svg" alt="@@" width="19">Закрывающий документ 3.pdf</a></p></li>
					<li><p><a href="#"><img src="img/icon_account_docs_download.svg" alt="@@" width="19">Закрывающий документ 4.pdf</a></p></li>
					<li><p><a href="#"><img src="img/icon_account_docs_download.svg" alt="@@" width="19">Закрывающий документ 5.pdf</a></p></li>
					<li><p><a href="#"><img src="img/icon_account_docs_download.svg" alt="@@" width="19">Закрывающий документ 6.pdf</a></p></li>
				</ul>
			</div>
		</div>
	</div>
	<ul class="account__navigation">
		<li class="active"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.99 352.24"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_1</title><path class="cls-1" d="M512,261.2l-30.94-20.89L437.31,165.2l-107.37.1L132.19,80.74A10.66,10.66,0,0,0,120.46,83L99.13,104.33l0,0c-0.21.21-.41,0.43-0.59,0.66l-0.14.16c-0.19.23-.36,0.46-0.52,0.7l-0.1.16c-0.13.2-.27,0.41-0.38,0.63l-0.12.21c-0.12.24-.24,0.48-0.35,0.73a2.15,2.15,0,0,0-.12.28c-0.1.24-.19,0.49-0.27,0.73l-0.07.26a7.16,7.16,0,0,0-.18.69,2.55,2.55,0,0,0-.06.25,8.06,8.06,0,0,0-.13.87c0,0.07,0,.14,0,0.22,0,0.31,0,.63,0,0.94v64a10.66,10.66,0,1,0,21.33,0V128.68L226.7,180.15,277.33,285v29.56H10.67a10.67,10.67,0,0,0,0,21.34H21.34V378.8A10.67,10.67,0,0,0,32,389.47H65.06a53.33,53.33,0,0,0,104.62-.53H363.62a53.32,53.32,0,0,0,104.7,0h43.45Zm-55.87-21.34H384V186.59l41.06,0Zm-93.47-53.26v53.26H341.4l0-53.24h21.22Zm-105.29,8,20,9.39v32Zm35.17-7L124.94,108.68l5.5-5.49L320,184.24V314.53H298.65V197.2A10.64,10.64,0,0,0,292.53,187.56ZM65.06,368.12H42.67V335.87h43A53.32,53.32,0,0,0,65.06,368.12Zm52.26,42.67a32,32,0,1,1,32-32A32,32,0,0,1,117.32,410.79Zm52.15-43.2A53.31,53.31,0,0,0,149,335.87H320v31.72H169.46ZM416,410.79a32,32,0,1,1,32-32A32,32,0,0,1,416,410.79Zm52.16-43.2a53.34,53.34,0,0,0-104.3,0H341.31l0.08-106.39H473.87l16.78,11.33-0.06,31.06H480a10.67,10.67,0,1,0,0,21.34h10.58l-0.08,42.66H468.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M416,368.12a10.67,10.67,0,1,0,10.67,10.67A10.66,10.66,0,0,0,416,368.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M117.32,368.12A10.67,10.67,0,1,0,128,378.79,10.67,10.67,0,0,0,117.32,368.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M53.43,250.75c0,1.39,0,13.8,8.91,22.94,4,4,11.15,8.84,23,8.84s18.92-4.81,22.87-8.84c8.8-9,9.05-21.2,9-23.22v-42.6a10.66,10.66,0,0,0-21.33,0V250.7a15.3,15.3,0,0,1-1.61,6.22c-1.14,2.12-3.1,4.28-9,4.28s-7.92-2.21-9-4.14a14.41,14.41,0,0,1-1.58-6v0.14h0c0-.22,0-0.45,0-0.67a10.66,10.66,0,0,0-21.33,0c0,0.08,0,.15,0,0.22h0Z" transform="translate(-0.01 -79.88)"/></svg></li>
		<li><svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.45 17.8"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_2</title><path class="cls-1" d="M491,271.22H467.59V289H491v-17.8Zm-1.12,16.68H468.72V272.35h21.21V287.9Z" transform="translate(-467.59 -271.22)"/><path class="cls-1" d="M488.15,285.56L482.26,280l0.08-.07,5.78-5.19-0.75-.83-8,7.22-1.66-1.49-0.08-.06-6.34-5.67-0.75.84,5.94,5.3-0.08.08-5.83,5.46,0.77,0.82,6-5.6,0.07,0.06,1.6,1.43a0.58,0.58,0,0,0,.75,0l1.72-1.54,0.07,0.06,5.88,5.59Z" transform="translate(-467.59 -271.22)"/></svg></li>
		<li><svg id="Режим_изоляции" data-name="Режим изоляции" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.8 40.6"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_3</title><path class="cls-1" d="M476.75,292.1h24.4c0-.2.06-0.49,0.08-0.79a12.21,12.21,0,0,0-7.47-11.61l-0.69-.3,0.54-.52a7.52,7.52,0,0,0,2.4-5.48c0-4-3.32-7.5-7.1-7.5s-7.1,3.5-7.1,7.5a7.9,7.9,0,0,0,2.41,5.49l0.52,0.52-0.67.29A12.33,12.33,0,0,0,476.75,292.1ZM484,273.4c0-2.5,2.1-5.3,4.9-5.3s4.9,2.8,4.9,5.3-2.09,5.3-4.9,5.3S484,275.9,484,273.4Zm5,7.5a10.11,10.11,0,0,1,9.94,8.42L499,289.9H479l0.1-.59A10.11,10.11,0,0,1,489,280.9Z" transform="translate(-449.5 -259.5)"/><rect class="cls-1" x="8.86" y="19.2" width="15.74" height="2.2"/><rect class="cls-1" x="8.86" y="30.4" width="11.68" height="2.2"/><path class="cls-1" d="M449.5,259.5v40.6h59.8V259.5H449.5Zm57.6,38.4H451.7V261.7h55.4v36.2Z" transform="translate(-449.5 -259.5)"/><rect class="cls-1" x="8.86" y="8" width="15.74" height="2.2"/></svg></li>
	</ul>
</section>

<!-------------------------------------------------->

<?php include "blocks/footer.php"; ?>

</div>



<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>