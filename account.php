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
	<div class="small-page-heading">
		<div class="container">
			<h2>Личный кабинет</h2>
			<ul class="account__navigation account__navigation_desktop">
				<li class="active"><p><a href="#orders">Заказы</a></p></li>
				<li><p><a href="#alltechnics">Вся техника</a></p></li>
				<li><p><a href="#messages">Обращения</a></p></li>
				<li><p><a href="#settings">Личные данные</a></p></li>
				<li class="account__logout"><p><a href="#" class="fancybox"><img src="img/icon_logout.svg" alt="@@" width="18">Выход</a></p></li>
			</ul>
			<ul class="account__navigation account__navigation_desktop account-active">
				<li class="active"><p><a href="#technics">Техника</a></p></li>
				<li><p><a href="#operators">Операторы</a></p></li>
				<li><p><a href="#messages">Обращения</a></p></li>
				<li><p><a href="#settings">Личные данные</a></p></li>
				<li class="account__logout"><p><a href="#"><img src="img/icon_logout.svg" alt="@@" width="18">Выход</a></p></li>
			</ul>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__orders">
		<div class="container">
			<div class="account__orders-head">
				<div class="account__orders-head-desktop">
					<p>№</p>
					<p>Состав заказа</p>
					<p>Сумма</p>
					<p>Дата</p>
					<p>Статус</p>
				</div>
				<div class="account__orders-sorting">
					<p>Сортировать по:</p>
					<select name="" id="">
						<option value="">статусу</option>
					</select>
				</div>
			</div>
		</div>
		<div class="account__orders-status">
			<div class="container">
				<ul class="account__orders-list">
					<li>
						<p class="account__order-number">6568213</p>
						<p class="account__order-showinfo"><a href="#orderinfo">Посмотреть заказ</a>
						<a href="#" class="cancel">Отменить</a>
						</p>
						<p class="account__order-cost">70 000 руб.</p>
						<p class="account__order-date">19.09.2016</p>
						<p class="account__order-status account__order-status_notpaid">Не оплачен</p>
						<p class="account__order-status account__order-status_needtopay">Оплатить</p>
						<p class="account__order-docs"><a href="#">Получить счет</a></p>
					</li>
					<li>
						<p class="account__order-number">6568213</p>
						<p class="account__order-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
						<p class="account__order-cost">70 000 руб.</p>
						<p class="account__order-date">19.09.2016</p>
						<p class="account__order-status account__order-status_paid">Оплачен</p>
						<p class="account__order-docs"><a href="#"><img src="img/icon_account_docs.svg" alt="@@" width="23">Закрывающие документы</a></p>
					</li>
					<li>
						<p class="account__order-number">6568213</p>
						<p class="account__order-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
						<p class="account__order-cost">70 000 руб.</p>
						<p class="account__order-date">19.09.2016</p>
						<p class="account__order-status account__order-status_completed">Завершен</p>
						<p class="account__order-status account__order-status_partpayment">Оплачено<span>70%</span></p>
						<p class="account__order-docs"><a href="#">Получить счет</a></p>
					</li>
					<li>
						<p class="account__order-number">6568213</p>
						<p class="account__order-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
						<p class="account__order-cost">70 000 руб.</p>
						<p class="account__order-date">19.09.2016</p>
						<p class="account__order-status account__order-status_completed">Завершен</p>
						<p class="account__order-docs"><a href="#"><img src="img/icon_account_docs.svg" alt="@@" width="23">Закрывающие документы</a></p>
					</li>
					<li>
						<p class="account__order-number">6568213</p>
						<p class="account__order-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
						<p class="account__order-cost">70 000 руб.</p>
						<p class="account__order-date">19.09.2016</p>
						<p class="account__order-status account__order-status_completed">Завершен</p>
						<p class="account__order-docs"><a href="#"><img src="img/icon_account_docs.svg" alt="@@" width="23">Закрывающие документы</a></p>
					</li>
					<li>
						<p class="account__order-number">6568213</p>
						<p class="account__order-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
						<p class="account__order-cost">70 000 руб.</p>
						<p class="account__order-date">19.09.2016</p>
						<p class="account__order-status account__order-status_completed">Завершен</p>
						<p class="account__order-docs"><a href="#"><img src="img/icon_account_docs.svg" alt="@@" width="23">Закрывающие документы</a></p>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__orderinfo">
		<div class="container account__orderinfo-prehead">
			<p class="toptext"><a href="#orders"><img src="img/arrow_green_left.svg" alt="@@" width="31" class="bounce">Все заказы</a></p>
			<p class="account__order-number">9379992</p>
			<p class="account__orderinfo-status">Оплачен</p>
			<p class="account__order-date">10.09.2016</p>
		</div>
		<div class="account__order-details">
			<div class="container">
				<div class="account__orderinfo-head">
					<p>Техника</p>
				</div>
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
			<div class="account__order-fullpayment">
				<p class="account__order-cost_total">Сумма: 210 000 руб. <br>
				<span>Заказ оплачен</span></p>
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
			<div class="account__order-partpayment">
				<p class="account__order-cost_total">Сумма: 210 000 руб. <br>
				<span>К оплате 105 000 руб.</span></p>
				<div class="account__order-progressbar">
					<div class="progress"></div>
					<p>Оплачено</p>
					<p class="percents">70%</p>
				</div>
				<a href="#" class="button button_green"><span class="button__border-top"></span>Оплатить<span class="button__border-bottom"></span></a>
			</div>
		</div>
		<form class="account__order-partpaymentform">
			<div class="container">
				<p class="formheading">Оплата заказа</p>
				<div class="formpart">
					<p>Сумма оплаты</p>
					<p class="total">210 000 руб.</p>
				</div>
				<div class="formpart">
					<p>Введите сумму оплаты (предоплаты)</p>
					<input type="text">
					<p class="small">Не менее суммы N</p>
				</div>
				<div class="formpart radio">
					<p>Выберите тип оплаты</p>
					<div class="radiodiv">
						<input name="paymenttype" type="radio" id="popupradio1" value="online">
						<label for="popupradio1"><span></span></label>
						<p>Онлайн</p>
					</div>
					<div class="radiodiv">
						<input name="paymenttype" type="radio" id="popupradio2" value="count">
						<label for="popupradio2"><span></span></label>
						<p>Получить счет</p>
					</div>
				</div>
				<p class="small formpart">*Фактом оплаты вы подтверждаете то, <br>
				что вы ознакомились и согласны с условиями <br>
				публичной оферты</p>
				<button class="button button_green"><span class="button__border-top"></span>Оплатить<span class="button__border-bottom"></span></button>
			</div>
		</form>
	</div>

	<!------------------------------------------------->

	<div class="account__alltechnics">
		<div class="container account__alltechnics-prehead">
			<div class="account__alltechnics-sorting">
				<p>Сортировать по:</p>
				<select name="" id="">
					<option value="">дате</option>
				</select>
			</div>
		</div>
		<div class="account__order-details">
			<div class="container">
				<div class="account__alltechnics-head">
					<p>Техника</p>
				</div>
				<ul class="account__alltechnics-list">
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__alltechnics-order">Заказ #9379992</p>
						<p class="account__alltechnics-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
					</li>
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__alltechnics-order">Заказ #9379992</p>
						<p class="account__alltechnics-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
					</li>
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__alltechnics-order">Заказ #9379992</p>
						<p class="account__alltechnics-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
					</li>
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__alltechnics-order">Заказ #9379992</p>
						<p class="account__alltechnics-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
					</li>
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__alltechnics-order">Заказ #9379992</p>
						<p class="account__alltechnics-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
					</li>
					<li>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__alltechnics-order">Заказ #9379992</p>
						<p class="account__alltechnics-showinfo"><a href="#orderinfo">Посмотреть заказ</a></p>
					</li>
				</ul>

        <div class="diagramm-outer">
          <div class="diagram__header-buttons">
            <span class="diagram__header-button diagram__header-button_minus" data-diagram="prev"></span>
            <span class="diagram__header-button diagram__header-button_plus" data-diagram="next"></span>
          </div>
        <div class="diagram">
          <div class="diagram__scroll">
          <div class="diagram__wrapper">
          <!-- Шапка -->
          <div class="diagram__header">
            <div class="diagram__header-month" data-month="2">
              <p class="diagram__header-name"><span>Февраль</span></p>
              <ol class="diagram__header-days">
                <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
              </ol>
            </div>
            <div class="diagram__header-month" data-month="3">
              <p class="diagram__header-name"><span>Март</span></p>
              <ol class="diagram__header-days">
                <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
              </ol>
            </div>
          </div>

          <!-- Диаграмма -->
          <div class="diagram__navigation">
            <div class="diagram__row">
              <div class="diagram__highlight" data-from="01.02" data-to="07.02"></div>
              <div class="diagram__highlight diagram__highlight_grey" data-from="09.02" data-to="11.02"></div>
            </div>
            <div class="diagram__row">
              <div class="diagram__highlight" data-from="03.02" data-to="15.02"></div>
              <div class="diagram__highlight_grey" data-from="16.02" data-to="01.03"></div>
            </div>
            <div class="diagram__row">
              <div class="diagram__highlight diagram__highlight_grey" data-from="07.02" data-to="10.03"></div>
            </div>
            <div class="diagram__row">
              <div class="diagram__highlight diagram__highlight_grey" data-from="11.02" data-to="16.03"></div>
            </div>
            <div class="diagram__row">
              <div class="diagram__highlight diagram__highlight_grey" data-from="20.02" data-to="29.03"></div>
            </div>
            <div class="diagram__row">
              <div class="diagram__highlight diagram__highlight_grey" data-from="15.02" data-to="22.03"></div>
            </div>
          </div>

          </div>
        </div>
        </div>
        </div>


			</div>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__messages">
		<div class="container account__messages-prehead">
			<a href="#" class="button button_green"><span class="button__border-top"></span>Создать обращение<span class="button__border-bottom"></span></a>
			<select name="" id="">
				<option value="">Все 6</option>
			</select>
			<ul class="account__messages-categories">
				<li class="active"><a href="#">Все<span>6</span></a></li>
				<li><a href="#">Открыт<span>2</span></a></li>
				<li><a href="#">Отвечен<span>1</span></a></li>
				<li><a href="#">Закрыт<span>3</span></a></li>
				<li><a href="#">Непрочитанные<span>3</span></a></li>
			</ul>
		</div>
		<div class="account__message-listhead">
			<div class="container">
				<p>Тема</p>
				<p>Состояние</p>
				<p class="update">Обновление</p>
			</div>
		</div>
		<div class="container account-message-listbody">
			<ul class="account__message-list">
				<li>
					<p class="account__message-theme"><span class="account__message-number">#568213</span><a href="#message-info">Увеличить допустимый размер загружаемых файлов...</a></p>
					<p class="account__message-status account__message-status_red">Открыт<span class="account__message-count">1</span></p>
					<p class="account__message-updatedate">19.09.2016 12:44</p>
				</li>
				<li>
					<p class="account__message-theme"><span class="account__message-number">#568213</span><a href="#">Увеличить допустимый размер загружаемых файлов...</a></p>
					<p class="account__message-status account__message-status_grey">Закрыт</p>
					<p class="account__message-updatedate">19.09.2016 12:44</p>
				</li>
				<li>
					<p class="account__message-theme"><span class="account__message-number">#568213</span><a href="#">Увеличить допустимый размер загружаемых файлов...</a></p>
					<p class="account__message-status account__message-status_red">Отвечен<span class="account__message-count">1</span></p>
					<p class="account__message-updatedate">19.09.2016 12:44</p>
				</li>
				<li>
					<p class="account__message-theme"><span class="account__message-number">#568213</span><a href="#">Увеличить допустимый размер загружаемых файлов...</a></p>
					<p class="account__message-status account__message-status_grey">Закрыт</p>
					<p class="account__message-updatedate">19.09.2016 12:44</p>
				</li>
				<li>
					<p class="account__message-theme"><span class="account__message-number">#568213</span><a href="#">Увеличить допустимый размер загружаемых файлов...</a></p>
					<p class="account__message-status account__message-status_grey">Закрыт</p>
					<p class="account__message-updatedate">19.09.2016 12:44</p>
				</li>
				<li>
					<p class="account__message-theme"><span class="account__message-number">#568213</span><a href="#">Увеличить допустимый размер загружаемых файлов...</a></p>
					<p class="account__message-status account__message-status_grey">Закрыт</p>
					<p class="account__message-updatedate">19.09.2016 12:44</p>
				</li>
			</ul>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__message-info">
		<div class="container account__messages-infoparts">
			<div class="account__messages-infopart">
				<p class="toptext"><a href="#messages"><img src="img/arrow_green_left.svg" alt="@@" width="31" class="bounce">Все обращения</a></p>
				<div class="account__message-details">
					<p class="account__message-detailsheading">Детали:</p>
					<p class="account__message-detailstheme"><span class="number">#568213</span>Увеличить допустимый размер загружаемых файлов</p>
					<p><span>Статус:</span>Открыт</p>
					<p><span>Последнее обновление:</span>25.09.2016</p>
				</div>
				<a href="#" class="account__close-dialogue"><img src="img/icon_close_dialogue.svg" alt="@@" width="20">Закрыть диалог</a>
			</div>
			<div class="account__messages-infopart">
				<a href="#" class="account__add-answer"><span class="icon">+</span>Добавить ответ</a>
				<div class="account__add-answerfield">
					<textarea></textarea>
					<a href="" class="button button_green"><span class="button__border-top"></span>Отправить<span class="button__border-bottom"></span></a>
				</div>
				<div class="account__message-answer">
					<div class="account__message-answerhead">
						<p class="name">Admin</p>
						<p>Сотрудник</p>
						<p class="date">25.09.2016, 12:03</p>
					</div>
					<div class="account__message-answerbody">
						<p>Titan Machinery owns and operates a network of full-service agriculture and construction equipment stores in the United States and Europe. At our stores, we sell and rent new and used construction and agriculture equipment and provide superior parts and service support. We're proud to represent our manufacturing partner, the CNHi family of brands - including Case IH, Case Construction, New Holland Agriculture, and New Holland Construction.</p>
					</div>
				</div>
				<div class="account__message-answer">
					<div class="account__message-answerhead">
						<p class="name">Валентин Сорокин</p>
						<p>Клиент</p>
						<p class="date">25.09.2016, 12:03</p>
					</div>
					<div class="account__message-answerbody">
						<p>Titan Machinery owns and operates a network of full-service agriculture and construction equipment stores in the United States and Europe. At our stores, we sell and rent new and used construction and agriculture equipment and provide superior parts and service support. We're proud to represent our manufacturing partner, the CNHi family of brands - including Case IH, Case Construction, New Holland Agriculture, and New Holland Construction.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__settings account__settings_jur">
		<div class="container">
			<form action="" class="account__settings-form">
				<div class="account__settings-infoblock">
					<p class="account__settings-infoheading">Сведения об организации:</p>
					<div class="account__settings-infofield">
						<p class="fieldname">Название компании<br>
						на русском языке</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Свидетельство о внесении<br>
						в Единый государственный реестр<br>
						юр. лиц (дата, №, кем выдано)</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">ОГРН</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">ИНН</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">КПП</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">ОКПО</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Расчетный счет -№</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Корреспондентский<br>
						счет-№</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Код БИК</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Наименование и адрес<br>
						обслуживающего банка</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield account__settings-infofield_file">
						<p class="fieldname">Добавить файл</p>
						<p class="account__settings-file">Выберите файл<a href="#"></a></p>
						<p class="small">Если необходимо, прикрепите подтверждающие<br>
						документы</p>
					</div>
				</div>
				<div class="account__settings-infoblock account__settings-infoblock_address" id="settings-address">
					<p class="account__settings-infoheading">Адресные данные:</p>
					<div class="account__settings-infofield">
						<p class="fieldname">Юридический адрес</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Фактический адрес</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Телефон</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Email</p>
						<input type="text">
					</div>
				</div>
				<div class="account__settings-infoblock account__settings-infoblock_manager" id="settings-manager">
					<p class="account__settings-infoheading">Сведения о руководителе,<br>
					от имени которого<br>
					заключается договор:</p>
					<div class="account__settings-infofield">
						<p class="fieldname">ФИО</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Должность</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">На основании<br>
						чего действует</p>
						<input type="text">
					</div>
				</div>
				<div class="account__settings-checkdivblock">
					<div class="checkdiv">
						<input type="checkbox" id="jurcheck1" value="Да">
						<label for="jurcheck1"><img src="img/icon_check_2.svg" alt="@@" width="14"></label>
						<p>Получать уведомления по смс</p>
					</div>
					<div class="checkdiv">
						<input type="checkbox" id="jurcheck2" value="Да">
						<label for="jurcheck2"><img src="img/icon_check_2.svg" alt="@@" width="14"></label>
						<p>Получать уведомления по email</p>
					</div>
				</div>
				<div class="account__settings-buttonblock">
					<button class="button button_green"><span class="button__border-top"></span>Сохранить изменения<span class="button__border-bottom"></span></button>
				</div>
				<div class="account__settings-formnav">
					<p class="account__settings-navlink"><a href="#settings-address">Адресные данные:</a></p>
					<p class="account__settings-navlink"><a href="#settings-manager">Сведения о руководителе,<br>
					от имени которого<br>
					заключается договор:</a></p>
				</div>
			</form>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__settings account__settings_fiz">
		<div class="container">
			<form action="" class="account__settings-form">
				<div class="account__settings-infoblock">
					<div class="account__settings-infofield">
						<p class="fieldname">ФИО</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Дата рождения</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield account__settings-infofield_passport">
						<p class="fieldname">Паспорт</p>
						<input type="text" placeholder="Серия" name="series">
						<input type="text" placeholder="Номер" name="number">
						<input type="text" placeholder="Кем выдан" name="issuedby">
						<input type="text" placeholder="Код подразделения" name="departmentcode">
						<input type="text" placeholder="Дата выдачи" name="dateofissue">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Адрес регистрации</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Номер телефона</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield">
						<p class="fieldname">Email</p>
						<input type="text">
					</div>
					<div class="account__settings-infofield account__settings-infofield_file">
						<p class="fieldname">Добавить файл</p>
						<p class="account__settings-file">Выберите файл<a href="#"></a></p>
						<p class="small">Добавить сканкопию паспорта</p>
					</div>
				</div>
				<div class="account__settings-checkdivblock">
					<div class="checkdiv">
						<input type="checkbox" id="fizcheck1" value="Да">
						<label for="fizcheck1"><img src="img/icon_check_2.svg" alt="@@" width="14"></label>
						<p>Получать уведомления по смс</p>
					</div>
					<div class="checkdiv">
						<input type="checkbox" id="fizcheck2" value="Да">
						<label for="fizcheck2"><img src="img/icon_check_2.svg" alt="@@" width="14"></label>
						<p>Получать уведомления по email</p>
					</div>
				</div>
				<div class="account__settings-buttonblock">
					<button class="button button_green"><span class="button__border-top"></span>Сохранить изменения<span class="button__border-bottom"></span></button>
				</div>
			</form>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__technics">
		<div class="container account__technics-prehead">
			<a href="#" class="button button_green"><span class="button__border-top"></span>Оплатить<span class="button__border-bottom"></span></a>
			<div class="account__technics-searchfield">
				<input type="text" value="VIN">
				<a href="#"><img src="img/icon_loupe.svg" alt="@@" width="22"></a>
			</div>
			<select name="" id="">
				<option value="">Тип техники</option>
			</select>
		</div>
		<div class="account__technics-cards">
			<div class="container">
				<div class="account__alltechnics-head">
					<p>Техника</p>
				</div>
				<ul class="account__technics-list">
					<li class="account__technics-card">
						<a href="#" class="sideicon"></a>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__technics-vin">VIN 2354659864</p>
						<div class="account__technics-card-edit">
							<p><a href="#technics-info">Редактировать</a></p>
							<p class="account__technics-note-reserve desktop"><a href="#">Отметить бронь</a></p>
							<p><a href="#">+ Оператор</a></p>
						</div>
						<div class="account__technics-note-reserve mobile">
							<p><img src="img/icon_calendar.svg" alt="@@" width="31">Отметить бронь</p>
						</div>
					</li>
					<li class="account__technics-card">
						<a href="#" class="sideicon"></a>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__technics-vin">VIN 2354659864</p>
						<div class="account__technics-card-edit">
							<p><a href="#">Редактировать</a></p>
							<p class="account__technics-save desktop"><a href="#">Сохранить</a></p>
							<p><a href="#"><img src="img/icon_edit.svg" alt="@@" width="15">Виталий Валерьевич</a></p>
						</div>
						<div class="account__technics-note-reserve mobile">
							<p><img src="img/icon_calendar.svg" alt="@@" width="31">Отметить бронь</p>
						</div>
					</li>
					<li class="account__technics-card">
						<a href="#" class="sideicon"></a>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__technics-vin">VIN 2354659864</p>
						<div class="account__technics-card-edit">
							<p><a href="#technics-info">Редактировать</a></p>
							<p class="account__technics-note-reserve desktop"><a href="#">Отметить бронь</a></p>
							<p><a href="#">+ Оператор</a></p>
						</div>
						<div class="account__technics-note-reserve mobile">
							<p><img src="img/icon_calendar.svg" alt="@@" width="31">Отметить бронь</p>
						</div>
					</li>
					<li class="account__technics-card account__technics-card_ready">
						<a href="#" class="sideicon"></a>
						<p>Бульдозер гусеничный <br>
						KOMATSU D85ESS-2A</p>
						<p class="account__technics-vin">VIN 2354659864</p>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__technics-info">
		<div class="container">
			<p class="toptext"><a href="#technics"><img src="img/arrow_green_left.svg" alt="@@" width="31" class="bounce">Вся техника</a></p>
			<div class="account__technics-infofield">
				<p class="fieldname">Тип техники</p>
				<select name="" id="">
					<option value=""></option>
				</select>
			</div>
			<div class="account__technics-infofield">
				<p class="fieldname">Категория допуска</p>
				<input type="text">
			</div>
			<div class="account__technics-infofield">
				<p class="fieldname">Марка</p>
				<input type="text">
			</div>
			<div class="account__technics-infofield">
				<p class="fieldname">Модель</p>
				<input type="text">
			</div>
			<div class="account__technics-infofield">
				<p class="fieldname">VIN</p>
				<input type="text">
			</div>
			<div class="account__technics-infofield">
				<p class="fieldname">Год выпуска</p>
				<input type="text">
			</div>
			<div class="account__technics-infofield">
				<p class="fieldname">Эксплуатационная масса (кг)</p>
				<input type="text">
			</div>
			<div class="account__technics-infofield">
				<p class="fieldname">Мощьность двигателя (л. с.)</p>
				<input type="text">
			</div>
			<div class="account__technics-infofield">
				<p class="fieldname">Тип отвала</p>
				<input type="text">
			</div>
			<div class="account__technics-infofield account__technics-infofield_mod">
				<p class="fieldname">Модификации</p>
				<select>
					<option value=""></option>
				</select>
				<a href="#" class="plusicon">+</a>
			</div>
			<div class="account__technics-infofield account__technics-infofield_file">
				<p class="fieldname">Добавить фото</p>
				<p class="account__technics-file">Выберите файл<a href="#"></a></p>
				<p class="small">Необходимо загрузка фотографий техники с 4-х сторон, кабины изнутри и счетчика моточасов. Разрешение изображений должно быть не менее 1200х900 px</p>
			</div>
			<div class="account__technics-photos">
				<div>
					<a href="#" class="closeicon"></a>
					<img src="img/account_technics_1.jpg" alt="@@">
				</div>
				<div>
					<a href="#" class="closeicon"></a>
					<img src="img/account_technics_2.jpg" alt="@@">
				</div>
				<div>
					<a href="#" class="closeicon"></a>
					<img src="img/account_technics_2.jpg" alt="@@">
				</div>
				<div>
					<a href="#" class="closeicon"></a>
					<img src="img/account_technics_1.jpg" alt="@@">
				</div>
			</div>
			<div class="account__technics-infofield account__technics-infofield_file bottom">
				<p class="fieldname">Добавить файл</p>
				<p class="account__technics-file">Выберите файл<a href="#"></a></p>
				<p class="small">Прикрепите скан паспорта самоходной машины и свидетельства о регистрации в технадзоре</p>
			</div>
			<div class="account__technics-infofield account__technics-infofield_description">
				<p class="fieldname">Описание</p>
				<textarea></textarea>
			</div>
		</div>
		<div class="account__technics-infomap">
			<p>Задайте местоположение <br>
			техники</p>
			<input type="text">
			<div class="account__technics-map" id="accountmap"></div>
		</div>
		<div class="container">
			<a href="#" class="button button_green"><span class="button__border-top"></span>Сохранить изменения<span class="button__border-bottom"></span></a>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__operators">
		<div class="container account__operators-prehead">
			<a href="#" class="button button_green"><span class="button__border-top"></span>Добавить оператора<span class="button__border-bottom"></span></a>
			<div class="account__operators-sorting">
				<p>Сортировать по:</p>
				<select name="" id="">
					<option value="">статусу</option>
				</select>
			</div>
		</div>
		<div class="account__operators-cards">
			<div class="container">
				<ul class="account__operators-list">
					<li class="account__operators-card">
						<div class="image">
							<img src="img/operator_1.jpg" alt="@@">
							<p class="status status_free">Свободен</p>
						</div>
						<div class="info">
							<p class="name">Ковалев Валерий Константинович</p>
							<p>36 лет</p>
							<p>тел. 8 (876) 342 56 73</p>
							<p>Водительские права, кат. D</p>
						</div>
						<div class="actions">
							<p class="green"><a href="#operators-info">Редактировать</a></p>
							<p class="red"><a href="#">Уволить</a></p>
						</div>
					</li>
					<li class="account__operators-card">
						<div class="image">
							<img src="img/operator_2.jpg" alt="@@">
							<p class="status status_busy">Занят</p>
						</div>
						<div class="info">
							<p class="name">Ковалев Валерий Константинович</p>
							<p>36 лет</p>
							<p>тел. 8 (876) 342 56 73</p>
							<p>Водительские права, кат. D</p>
						</div>
						<div class="actions">
							<p class="green"><a href="#">Редактировать</a></p>
							<p class="red"><a href="#">Уволить</a></p>
						</div>
					</li>
					<li class="account__operators-card">
						<div class="image">
							<img src="img/operator_1.jpg" alt="@@">
							<p class="status status_free">Свободен</p>
						</div>
						<div class="info">
							<p class="name">Ковалев Валерий Константинович</p>
							<p>36 лет</p>
							<p>тел. 8 (876) 342 56 73</p>
							<p>Водительские права, кат. D</p>
						</div>
						<div class="actions">
							<p class="green"><a href="#">Редактировать</a></p>
							<p class="red"><a href="#">Уволить</a></p>
						</div>
					</li>
					<li class="account__operators-card">
						<div class="image">
							<img src="img/operator_1.jpg" alt="@@">
							<p class="status status_free">Свободен</p>
						</div>
						<div class="info">
							<p class="name">Ковалев Валерий Константинович</p>
							<p>36 лет</p>
							<p>тел. 8 (876) 342 56 73</p>
							<p>Водительские права, кат. D</p>
						</div>
						<div class="actions">
							<p class="green"><a href="#">Редактировать</a></p>
							<p class="red"><a href="#">Уволить</a></p>
						</div>
					</li>
					<li class="account__operators-card">
						<div class="image">
							<img src="img/operator_1.jpg" alt="@@">
							<p class="status status_free">Свободен</p>
						</div>
						<div class="info">
							<p class="name">Ковалев Валерий Константинович</p>
							<p>36 лет</p>
							<p>тел. 8 (876) 342 56 73</p>
							<p>Водительские права, кат. D</p>
						</div>
						<div class="actions">
							<p class="green"><a href="#">Редактировать</a></p>
							<p class="red"><a href="#">Уволить</a></p>
						</div>
					</li>
					<li class="account__operators-card">
						<div class="image">
							<img src="img/operator_1.jpg" alt="@@">
							<p class="status status_free">Свободен</p>
						</div>
						<div class="info">
							<p class="name">Ковалев Валерий Константинович</p>
							<p>36 лет</p>
							<p>тел. 8 (876) 342 56 73</p>
							<p>Водительские права, кат. D</p>
						</div>
						<div class="actions">
							<p class="green"><a href="#">Редактировать</a></p>
							<p class="red"><a href="#">Уволить</a></p>
						</div>
					</li>
					<li class="account__operators-card">
						<div class="image">
							<img src="img/operator_1.jpg" alt="@@">
							<p class="status status_free">Свободен</p>
						</div>
						<div class="info">
							<p class="name">Ковалев Валерий Константинович</p>
							<p>36 лет</p>
							<p>тел. 8 (876) 342 56 73</p>
							<p>Водительские права, кат. D</p>
						</div>
						<div class="actions">
							<p class="green"><a href="#">Редактировать</a></p>
							<p class="red"><a href="#">Уволить</a></p>
						</div>
					</li>
					<li class="account__operators-card disabled">
						<div class="image">
							<img src="img/operator_1.jpg" alt="@@">
						</div>
						<div class="info">
							<p class="name">Ковалев Валерий Константинович</p>
							<p>36 лет</p>
							<p>тел. 8 (876) 342 56 73</p>
							<p>Водительские права, кат. D</p>
						</div>
						<div class="actions">
							<p class="green"><a href="#">Редактировать</a></p>
							<p class="red"><a href="#">Принять на работу</a></p>
						</div>
					</li>
				</ul>
				<a href="#" class="button button_green"><span class="button__border-top"></span>Показать еще<span class="button__border-bottom"></span></a>
			</div>
		</div>
	</div>

	<!------------------------------------------------->

	<div class="account__operators-info">
		<div class="container">
			<p class="toptext"><a href="#operators"><img src="img/arrow_green_left.svg" alt="@@" width="31" class="bounce">Все операторы</a></p>
			<div class="account__operators-infofield">
				<p class="fieldname">ФИО</p>
				<input type="text">
			</div>
			<div class="account__operators-infofield">
				<p class="fieldname">Номер телефона</p>
				<input type="text">
			</div>
			<div class="account__operators-infofield">
				<p class="fieldname">Возраст</p>
				<input type="text">
			</div>
			<div class="account__operators-infofield">
				<p class="fieldname">Документ, подтверждающий <br>
				право управления</p>
				<input type="text">
			</div>
			<div class="account__operators-infofield account__operators-infofield_file">
				<p class="fieldname">Добавить файл</p>
				<p class="account__operators-file">Выберите файл<a href="#"></a></p>
				<p class="small">Документы, подтверждающие право управления техникой</p>
			</div>
			<div class="account__operators-infofield account__operators-infofield_cat">
				<p class="fieldname">Категория</p>
				<input type="text">
				<a href="#" class="plusicon">+</a>
			</div>
			<div class="account__operators-infofield account__operators-infofield_file">
				<p class="fieldname">Добавить фото</p>
				<p class="account__operators-file">Выберите файл<a href="#"></a></p>
				<p class="small">Размер файла не должен превышать 500 Kb</p>
			</div>
			<div class="account__operators-photos">
				<div>
					<a href="#" class="closeicon"></a>
					<img src="img/operator_1.jpg" alt="@@">
				</div>
			</div>
			<div class="account__operators-buttonblock">
				<a href="#" class="button button_green"><span class="button__border-top"></span>Сохранить изменения<span class="button__border-bottom"></span></a>
			</div>
		</div>
	</div>

	<!------------------------------------------------->

	<ul class="account__navigation account__navigation_mobile">
		<li class="active"><a href="#orders"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.99 352.24" width="35"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_1</title><path class="cls-1" d="M512,261.2l-30.94-20.89L437.31,165.2l-107.37.1L132.19,80.74A10.66,10.66,0,0,0,120.46,83L99.13,104.33l0,0c-0.21.21-.41,0.43-0.59,0.66l-0.14.16c-0.19.23-.36,0.46-0.52,0.7l-0.1.16c-0.13.2-.27,0.41-0.38,0.63l-0.12.21c-0.12.24-.24,0.48-0.35,0.73a2.15,2.15,0,0,0-.12.28c-0.1.24-.19,0.49-0.27,0.73l-0.07.26a7.16,7.16,0,0,0-.18.69,2.55,2.55,0,0,0-.06.25,8.06,8.06,0,0,0-.13.87c0,0.07,0,.14,0,0.22,0,0.31,0,.63,0,0.94v64a10.66,10.66,0,1,0,21.33,0V128.68L226.7,180.15,277.33,285v29.56H10.67a10.67,10.67,0,0,0,0,21.34H21.34V378.8A10.67,10.67,0,0,0,32,389.47H65.06a53.33,53.33,0,0,0,104.62-.53H363.62a53.32,53.32,0,0,0,104.7,0h43.45Zm-55.87-21.34H384V186.59l41.06,0Zm-93.47-53.26v53.26H341.4l0-53.24h21.22Zm-105.29,8,20,9.39v32Zm35.17-7L124.94,108.68l5.5-5.49L320,184.24V314.53H298.65V197.2A10.64,10.64,0,0,0,292.53,187.56ZM65.06,368.12H42.67V335.87h43A53.32,53.32,0,0,0,65.06,368.12Zm52.26,42.67a32,32,0,1,1,32-32A32,32,0,0,1,117.32,410.79Zm52.15-43.2A53.31,53.31,0,0,0,149,335.87H320v31.72H169.46ZM416,410.79a32,32,0,1,1,32-32A32,32,0,0,1,416,410.79Zm52.16-43.2a53.34,53.34,0,0,0-104.3,0H341.31l0.08-106.39H473.87l16.78,11.33-0.06,31.06H480a10.67,10.67,0,1,0,0,21.34h10.58l-0.08,42.66H468.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M416,368.12a10.67,10.67,0,1,0,10.67,10.67A10.66,10.66,0,0,0,416,368.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M117.32,368.12A10.67,10.67,0,1,0,128,378.79,10.67,10.67,0,0,0,117.32,368.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M53.43,250.75c0,1.39,0,13.8,8.91,22.94,4,4,11.15,8.84,23,8.84s18.92-4.81,22.87-8.84c8.8-9,9.05-21.2,9-23.22v-42.6a10.66,10.66,0,0,0-21.33,0V250.7a15.3,15.3,0,0,1-1.61,6.22c-1.14,2.12-3.1,4.28-9,4.28s-7.92-2.21-9-4.14a14.41,14.41,0,0,1-1.58-6v0.14h0c0-.22,0-0.45,0-0.67a10.66,10.66,0,0,0-21.33,0c0,0.08,0,.15,0,0.22h0Z" transform="translate(-0.01 -79.88)"/></svg></a></li>
		<li><a href="#messages"><svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.45 17.8" width="26"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_2</title><path class="cls-1" d="M491,271.22H467.59V289H491v-17.8Zm-1.12,16.68H468.72V272.35h21.21V287.9Z" transform="translate(-467.59 -271.22)"/><path class="cls-1" d="M488.15,285.56L482.26,280l0.08-.07,5.78-5.19-0.75-.83-8,7.22-1.66-1.49-0.08-.06-6.34-5.67-0.75.84,5.94,5.3-0.08.08-5.83,5.46,0.77,0.82,6-5.6,0.07,0.06,1.6,1.43a0.58,0.58,0,0,0,.75,0l1.72-1.54,0.07,0.06,5.88,5.59Z" transform="translate(-467.59 -271.22)"/></svg></a></li>
		<li><a href="#settings"><svg id="Режим_изоляции" data-name="Режим изоляции" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.8 40.6" width="30"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_3</title><path class="cls-1" d="M476.75,292.1h24.4c0-.2.06-0.49,0.08-0.79a12.21,12.21,0,0,0-7.47-11.61l-0.69-.3,0.54-.52a7.52,7.52,0,0,0,2.4-5.48c0-4-3.32-7.5-7.1-7.5s-7.1,3.5-7.1,7.5a7.9,7.9,0,0,0,2.41,5.49l0.52,0.52-0.67.29A12.33,12.33,0,0,0,476.75,292.1ZM484,273.4c0-2.5,2.1-5.3,4.9-5.3s4.9,2.8,4.9,5.3-2.09,5.3-4.9,5.3S484,275.9,484,273.4Zm5,7.5a10.11,10.11,0,0,1,9.94,8.42L499,289.9H479l0.1-.59A10.11,10.11,0,0,1,489,280.9Z" transform="translate(-449.5 -259.5)"/><rect class="cls-1" x="8.86" y="19.2" width="15.74" height="2.2"/><rect class="cls-1" x="8.86" y="30.4" width="11.68" height="2.2"/><path class="cls-1" d="M449.5,259.5v40.6h59.8V259.5H449.5Zm57.6,38.4H451.7V261.7h55.4v36.2Z" transform="translate(-449.5 -259.5)"/><rect class="cls-1" x="8.86" y="8" width="15.74" height="2.2"/></svg></a></li>
	</ul>
	<ul class="account__navigation account__navigation_mobile account-active">
		<li class="active"><a href="#technics"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.99 352.24" width="35"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_1</title><path class="cls-1" d="M512,261.2l-30.94-20.89L437.31,165.2l-107.37.1L132.19,80.74A10.66,10.66,0,0,0,120.46,83L99.13,104.33l0,0c-0.21.21-.41,0.43-0.59,0.66l-0.14.16c-0.19.23-.36,0.46-0.52,0.7l-0.1.16c-0.13.2-.27,0.41-0.38,0.63l-0.12.21c-0.12.24-.24,0.48-0.35,0.73a2.15,2.15,0,0,0-.12.28c-0.1.24-.19,0.49-0.27,0.73l-0.07.26a7.16,7.16,0,0,0-.18.69,2.55,2.55,0,0,0-.06.25,8.06,8.06,0,0,0-.13.87c0,0.07,0,.14,0,0.22,0,0.31,0,.63,0,0.94v64a10.66,10.66,0,1,0,21.33,0V128.68L226.7,180.15,277.33,285v29.56H10.67a10.67,10.67,0,0,0,0,21.34H21.34V378.8A10.67,10.67,0,0,0,32,389.47H65.06a53.33,53.33,0,0,0,104.62-.53H363.62a53.32,53.32,0,0,0,104.7,0h43.45Zm-55.87-21.34H384V186.59l41.06,0Zm-93.47-53.26v53.26H341.4l0-53.24h21.22Zm-105.29,8,20,9.39v32Zm35.17-7L124.94,108.68l5.5-5.49L320,184.24V314.53H298.65V197.2A10.64,10.64,0,0,0,292.53,187.56ZM65.06,368.12H42.67V335.87h43A53.32,53.32,0,0,0,65.06,368.12Zm52.26,42.67a32,32,0,1,1,32-32A32,32,0,0,1,117.32,410.79Zm52.15-43.2A53.31,53.31,0,0,0,149,335.87H320v31.72H169.46ZM416,410.79a32,32,0,1,1,32-32A32,32,0,0,1,416,410.79Zm52.16-43.2a53.34,53.34,0,0,0-104.3,0H341.31l0.08-106.39H473.87l16.78,11.33-0.06,31.06H480a10.67,10.67,0,1,0,0,21.34h10.58l-0.08,42.66H468.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M416,368.12a10.67,10.67,0,1,0,10.67,10.67A10.66,10.66,0,0,0,416,368.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M117.32,368.12A10.67,10.67,0,1,0,128,378.79,10.67,10.67,0,0,0,117.32,368.12Z" transform="translate(-0.01 -79.88)"/><path class="cls-1" d="M53.43,250.75c0,1.39,0,13.8,8.91,22.94,4,4,11.15,8.84,23,8.84s18.92-4.81,22.87-8.84c8.8-9,9.05-21.2,9-23.22v-42.6a10.66,10.66,0,0,0-21.33,0V250.7a15.3,15.3,0,0,1-1.61,6.22c-1.14,2.12-3.1,4.28-9,4.28s-7.92-2.21-9-4.14a14.41,14.41,0,0,1-1.58-6v0.14h0c0-.22,0-0.45,0-0.67a10.66,10.66,0,0,0-21.33,0c0,0.08,0,.15,0,0.22h0Z" transform="translate(-0.01 -79.88)"/></svg></a></li>
		<li><a href="#operators"><svg id="Режим_изоляции" data-name="Режим изоляции" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.94 31.25" width="30"><defs><style>.cls-1,.cls-2{fill:#fff;}</style></defs><title>icon_account_nav_4</title><g id="_Группа_" data-name="&lt;Группа&gt;"><path id="_Контур_" data-name="&lt;Контур&gt;" class="cls-1" d="M480.65,293c0.08,0.1.08,0.11,0,.12l-1.35.13-1.83.14-0.92.05c-0.69,0-1.38.07-2,0-0.88,0-1.73,0-2.57-.08s-1.73-.11-2.59-0.19a50.31,50.31,0,0,1-6.05-.9,3.81,3.81,0,0,1-.94-0.31,0.43,0.43,0,0,1-.13,0,1.87,1.87,0,0,1-.45-0.53,1.22,1.22,0,0,1-.06-0.43,8.11,8.11,0,0,1,.24-1.55,10.56,10.56,0,0,1,1-2.81,4.87,4.87,0,0,1,2.37-2.37c0.79-.41,1.61-0.75,2.43-1.1a27.32,27.32,0,0,0,3.26-1.58l0.3-.18c0.06,0,.06-0.07,0-0.12a5.92,5.92,0,0,1-1.27-2.5,0.34,0.34,0,0,0-.09-0.15,5.39,5.39,0,0,1-1.41-2.76,3.91,3.91,0,0,1,0-1.4,0.5,0.5,0,0,1,.32-0.46,0.21,0.21,0,0,0,.18-0.26c0-.77,0-1.55,0-2.32a4.84,4.84,0,0,1,1.47-3.41,4.67,4.67,0,0,1,2.24-1.15c0.25-.06.51-0.09,0.77-0.13a7.74,7.74,0,0,1,3.35.36,4.49,4.49,0,0,1,2.79,3.23,5.9,5.9,0,0,1,.17,1.48c0,0.68,0,1.36,0,2a0.11,0.11,0,0,0,.11.14,0.41,0.41,0,0,1,.32.28,1.76,1.76,0,0,1,.12.6,5,5,0,0,1-1.45,3.76,0.47,0.47,0,0,0-.11.2,5.84,5.84,0,0,1-1.26,2.44c-0.07.08,0,.11,0,0.14a17.16,17.16,0,0,0,1.84,1l0.68,0.31c0.08,0,.09.07,0,0.15" transform="translate(-460.9 -265.99)"/><path id="_Составной_контур_" data-name="&lt;Составной контур&gt;" class="cls-2" d="M500.34,287.69a9,9,0,0,1-9,9.05,9.07,9.07,0,0,1-8.27-5.26,3.21,3.21,0,0,0-.39-0.85c-0.07-.56-0.28-1.09-0.35-1.65a10.39,10.39,0,0,1-.08-1.71,9.08,9.08,0,0,1,.24-1.7A9.35,9.35,0,0,1,483,284a8.92,8.92,0,0,1,.86-1.5,9,9,0,0,1,1.12-1.3,9.13,9.13,0,0,1,1.35-1.06,9,9,0,0,1,1.52-.79,8.74,8.74,0,0,1,1.64-.49A9.06,9.06,0,0,1,500.34,287.69Zm-9.06,7.14a7,7,0,0,0,2.48-.44,7.13,7.13,0,0,0,2.26-1.34,1.08,1.08,0,0,0-.1-1.71l-3.35-1.94a0.16,0.16,0,0,0-.19,0,2,2,0,0,1-2.13,0,0.21,0.21,0,0,0-.24,0l-3.3,1.91a1.07,1.07,0,0,0-.15,1.71A7.13,7.13,0,0,0,491.28,294.84Zm0.86-11.08c0,0.65,0,1.3,0,1.94a0.2,0.2,0,0,0,.11.2,2,2,0,0,1,1.07,1.85,0.19,0.19,0,0,0,.11.19l1,0.6,2.26,1.31a1.08,1.08,0,0,0,1.56-.69,6.93,6.93,0,0,0,0-2.71,7.07,7.07,0,0,0-2.44-4.23,6.87,6.87,0,0,0-2.34-1.31,1.07,1.07,0,0,0-1.4,1Q492.14,282.84,492.14,283.76Zm-1.71,0q0-.92,0-1.85a1.06,1.06,0,0,0-.8-1,1.32,1.32,0,0,0-.84.11,7.16,7.16,0,0,0-4.61,7.47,3.29,3.29,0,0,0,.15.83,1.08,1.08,0,0,0,1.51.55l3.25-1.87a0.3,0.3,0,0,0,.17-0.3,2,2,0,0,1,1-1.76,0.22,0.22,0,0,0,.13-0.22C490.43,285.05,490.43,284.41,490.43,283.77Zm1.7,3.92a0.84,0.84,0,0,0-.84-0.85,0.85,0.85,0,1,0,0,1.69A0.84,0.84,0,0,0,492.13,287.69Z" transform="translate(-460.9 -265.99)"/></g></svg></a></li>
		<li><a href="#messages"><svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.45 17.8" width="26"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_2</title><path class="cls-1" d="M491,271.22H467.59V289H491v-17.8Zm-1.12,16.68H468.72V272.35h21.21V287.9Z" transform="translate(-467.59 -271.22)"/><path class="cls-1" d="M488.15,285.56L482.26,280l0.08-.07,5.78-5.19-0.75-.83-8,7.22-1.66-1.49-0.08-.06-6.34-5.67-0.75.84,5.94,5.3-0.08.08-5.83,5.46,0.77,0.82,6-5.6,0.07,0.06,1.6,1.43a0.58,0.58,0,0,0,.75,0l1.72-1.54,0.07,0.06,5.88,5.59Z" transform="translate(-467.59 -271.22)"/></svg></a></li>
		<li><a href="#settings"><svg id="Режим_изоляции" data-name="Режим изоляции" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.8 40.6" width="30"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icon_account_nav_3</title><path class="cls-1" d="M476.75,292.1h24.4c0-.2.06-0.49,0.08-0.79a12.21,12.21,0,0,0-7.47-11.61l-0.69-.3,0.54-.52a7.52,7.52,0,0,0,2.4-5.48c0-4-3.32-7.5-7.1-7.5s-7.1,3.5-7.1,7.5a7.9,7.9,0,0,0,2.41,5.49l0.52,0.52-0.67.29A12.33,12.33,0,0,0,476.75,292.1ZM484,273.4c0-2.5,2.1-5.3,4.9-5.3s4.9,2.8,4.9,5.3-2.09,5.3-4.9,5.3S484,275.9,484,273.4Zm5,7.5a10.11,10.11,0,0,1,9.94,8.42L499,289.9H479l0.1-.59A10.11,10.11,0,0,1,489,280.9Z" transform="translate(-449.5 -259.5)"/><rect class="cls-1" x="8.86" y="19.2" width="15.74" height="2.2"/><rect class="cls-1" x="8.86" y="30.4" width="11.68" height="2.2"/><path class="cls-1" d="M449.5,259.5v40.6h59.8V259.5H449.5Zm57.6,38.4H451.7V261.7h55.4v36.2Z" transform="translate(-449.5 -259.5)"/><rect class="cls-1" x="8.86" y="8" width="15.74" height="2.2"/></svg></a></li>
	</ul>
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
