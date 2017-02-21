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

<section class="shoppingbag">
	<div class="small-page-heading">
		<div class="container">
			<h2>Корзина</h2>
		</div>
	</div>
	<div class="shoppingbag__order-forcheck">
		<div class="container">
			<div class="shoppingbag__technicblock">
				<div class="shoppingbag__listheading">
					<p>Техника</p>
				</div>
				<ul class="shoppingbag__orders-list">
					<li class="row-to-diagram">
						<a href="#" class="deleteicon"><img src="img/icon_close_popup.svg" alt="@@" width="12"></a>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="shoppingbag__order-cost_info">70 000 руб.</p>
						<div class="searchform__field searchform__field_date">
							<p>Дата:</p>
							<p class="huge">24.10</p>
							<img src="img/icon_arrow_right.png" alt="@@">
							<p class="huge">02.11</p>
							<a href="#"><img src="img/icon_calendar.svg" alt="@@"></a>
						</div>
					</li>
					<li class="row-to-diagram">
						<a href="#" class="deleteicon"><img src="img/icon_close_popup.svg" alt="@@" width="12"></a>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="shoppingbag__order-cost_info">70 000 руб.</p>
						<div class="searchform__field searchform__field_date">
							<p>Дата:</p>
							<p class="huge">24.10</p>
							<img src="img/icon_arrow_right.png" alt="@@">
							<p class="huge">02.11</p>
							<a href="#"><img src="img/icon_calendar.svg" alt="@@"></a>
						</div>
					</li>
					<li class="shoppingbag__notavailable row-to-diagram">
						<a href="#" class="deleteicon"><img src="img/icon_close_popup.svg" alt="@@" width="12"></a>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="shoppingbag__order-cost_info">70 000 руб.</p>
						<div class="searchform__field searchform__field_date">
							<p>Дата:</p>
							<p class="huge">24.10</p>
							<img src="img/icon_arrow_right.png" alt="@@">
							<p class="huge">02.11</p>
							<a href="#"><img src="img/icon_calendar.svg" alt="@@"></a>
						</div>
						<div class="shoppingbag__notavailabletext">
							<p>Нет в наличии</p>
							<a href="#">Выбрать другую</a><a href="#">Удалить</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="calendar">
			  <?php include "blocks/shop_diagram.php"; ?>
			</div>
		</div>
	</div>
	<div class="shoppingbag__topay shoppingbag__check">
		<div class="container">
			<p class="shoppingbag__cost-total">Сумма: <span>210 000 руб.</span></p>
			<div class="shoppingbag__actions">
				<a href="#" class="button button_green shoppingbag__pay_open"><span class="button__border-top"></span>Проверить наличие<span class="button__border-bottom"></span></a>
				<p class="red"><img src="img/icon_trash.svg" alt="@@" width="16"><a href="index.php">Очистить корзину</a></p>
				<p><img src="img/icon_truck.svg" alt="@@" width="24"><a href="index.php">Продолжить выбор</a></p>
			</div>
		</div>
	</div>
	<div class="shoppingbag__topay shoppingbag__pay">
		<div class="container">
			<p class="shoppingbag__cost-total">Сумма: <span>210 000 руб.</span></p>
			<div class="shoppingbag__actions">
				<a href="" class="button button_green shoppingbag__order-payment_open"><span class="button__border-top"></span>Оплатить<span class="button__border-bottom"></span></a>
				<p><img src="img/icon_extend.svg" alt="@@" width="29"><a href="#">Продлить бронь</a></p>
				<p class="red"><img src="img/icon_trash.svg" alt="@@" width="16"><a href="#">Отменить бронь</a></p>
			</div>
		</div>
	</div>
	<div class="shoppingbag__order-payment">
		<div class="container">
			<form action="">
				<p class="shoppingbag__formheading">Оплата заказа</p>
				<div class="shoppingbag__formparts">
					<div class="shoppingbag__formpart">
						<p>Сумма оплаты</p>
						<p class="shoppingbag__total">210 000 руб.</p>
					</div>
					<div class="shoppingbag__formpart">
						<p>Введите сумму оплаты (предоплаты)</p>
						<input type="text">
						<p class="small">Не менее суммы N</p>
					</div>
					<div class="shoppingbag__formpart">
						<p>Выберите тип оплаты</p>
						<div class="radiodiv">
							<input name="paymenttype" type="radio" id="radio11" value="online">
							<label for="radio11"><span></span></label>
							<p>Онлайн</p>
						</div>
						<div class="radiodiv">
							<input name="paymenttype" type="radio" id="radio12" value="count">
							<label for="radio12"><span></span></label>
							<p>Получить счет</p>
						</div>
					</div>
					<div class="shoppingbag__formpart desktop">
						<p class="small">*Фактом оплаты вы подтверждаете то, <br>
						что вы ознакомились и согласны с условиями <br>
						публичной оферты</p>
					</div>
				</div>
				<button class="button button_green"><span class="button__border-top"></span>Оплатить<span class="button__border-bottom"></span></button>
				<p class="small mobile">*Фактом оплаты вы подтверждаете то, <br>
				что вы ознакомились и согласны с условиями <br>
				публичной оферты</p>
			</form>
		</div>
	</div>
</section>

<!-------------------------------------------------->

<?php include "blocks/footer.php"; ?>

</div>



<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
