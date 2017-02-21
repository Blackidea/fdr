<!-- Desktop -->
<div class="technics-search-page">
<section class="technics">
        <img src="img/filter-cross.svg" alt="@@" class="technics__filtercross">
    
		<!-- Шаг 1-3. Категории товаров -->
		<div class="technics__categories">
					<div class="technics__category active-step-two active-step-three">
							<div class="technics__category-image"><img src="img/technics_1.jpg" alt=""></div>
							<p class="technics__category-name"><span>Землеройная</span></p>
							<div class="technics__category-secondimage"><img src="img/technics_7.jpg" alt=""></div>
					</div>

					<!-- ####### -->

					<div class="technics__category">
							<div class="technics__category-image"><img src="img/technics_2.jpg" alt=""></div>
							<p class="technics__category-name"><span>Погрузочная</span></p>
							<div class="technics__category-secondimage"><img src="img/technics_7.jpg" alt=""></div>
					</div>

					<!-- ####### -->

					<div class="technics__category">
							<div class="technics__category-image"><img src="img/technics_3.jpg" alt=""></div>
							<p class="technics__category-name"><span>Дорожная</span></p>
							<div class="technics__category-secondimage"><img src="img/technics_7.jpg" alt=""></div>
					</div>

					<!-- ####### -->

					<div class="technics__category">
							<div class="technics__category-image"><img src="img/technics_4.jpg" alt=""></div>
							<p class="technics__category-name"><span>Карьерная</span></p>
							<div class="technics__category-secondimage"><img src="img/technics_7.jpg" alt=""></div>
					</div>

					<!-- ####### -->

					<div class="technics__category">
							<div class="technics__category-image"><img src="img/technics_5.jpg" alt=""></div>
							<p class="technics__category-name"><span>Мини техника</span></p>
							<div class="technics__category-secondimage"><img src="img/technics_7.jpg" alt=""></div>
					</div>

					<!-- ####### -->

					<div class="technics__category">
							<div class="technics__category-image"><img src="img/technics_6.jpg" alt=""></div>
							<p class="technics__category-name"><span>Коммунальная</span></p>
							<div class="technics__category-secondimage"><img src="img/technics_7.jpg" alt=""></div>
					</div>

					<!-- ####### -->

					<div class="technics__category">
							<div class="technics__category-image"><img src="img/technics_7.jpg" alt=""></div>
							<p class="technics__category-name"><span>Подъемная</span></p>
							<div class="technics__category-secondimage"><img src="img/technics_7.jpg" alt=""></div>
					</div>
		</div>

		<!-- ############### -->
		<!-- ############### -->
		<!-- ############### -->

		<!-- Фильтр: сводка по выбранным параметрам -->
		<div class="technics__step-three-summary active-step-three">
				<p class="technics__stepback">Назад</p>
				<p class="technics__summary-heading"><span>Мини-погрузчик</span></p>
				<ul class="technics__summary-list">
						<li>Bobcat</li>
						<li>Колесный</li>
						<li>S330</li>
						<li>2007 г.</li>
							<li>150-600 л. с.</li>
							<li>Прямой, полусферический</li>
							<li>С 24.10 по 2.11</li>
				</ul>
				<a href="#submit-form" class="button button_green technics__summary-button"><span class="button__border-top"></span>Подобрать<span class="button__border-bottom"></span></a>
		</div>

			<!-- Все фильтры -->
			<form class="technics__allfilters active-step-three">
					<div class="technics__allfilters-scrollarea active-step-three">

							<div class="technics__allfilters-row">
									<div class="technics__allfilters-col">
											<label for="brand" class="technics__label">Бренд</label>
											<div class="selectbox">
													<select name="brand" id="brand" data-leftinfo="true">
															<option value="Bobcat1" selected>Bobcat1</option>
															<option value="Bobcat2">Bobcat2</option>
															<option value="Bobcat3">Bobcat3</option>
													</select>
													<ul class="selectbox__selectlist">
													</ul>
											</div>

											<label for="type1" class="technics__label">Тип</label>
											<div class="checkradio">
													<input type="radio" name="type" id="type1" checked data-leftinfo="true" value="Колесный">
													<label for="type1"><span></span>Колесный</label>
											</div>
											<div class="checkradio">
													<input type="radio" name="type" id="type2" value="Колесный">
													<label for="type2"><span></span>Колесный</label>
											</div>

											<label for="model" class="technics__label">Модель</label>
											<div class="selectbox">
													<select name="model" id="model" data-leftinfo="true">
															<option value="S330" selected>S330</option>
															<option value="S530">S530</option>
													</select>
													<ul class="selectbox__selectlist"></ul>
											</div>

											<label for="mass" class="technics__label">Эксплуатационная масса (кг)</label>
											<div class="parameter-slider">
													<div class="slider" data-from="0" data-to="600" data-leftinfo="true" data-left-name="кг"></div>
													<input type="text" class="number_from" name="massfrom">
													<input type="text" class="number_to" name="massto">
											</div>

											<label for="kovsh" class="technics__label">Тип ковша</label>
											<div class="selectbox">
													<select name="kovsh" id="kovsh" data-leftinfo="true">
															<option value="Стандартный" selected>Стандартный</option>
															<option value="Нестандартный">Нестандартный</option>
													</select>
													<ul class="selectbox__selectlist"></ul>
											</div>

											<label for="volume" class="technics__label">Объем ковша (м3)</label>
											<div class="selectbox">
													<select name="volume" id="volume">
															<option value="1,3" selected>1,3</option>
															<option value="2,3">2,3</option>
													</select>
													<ul class="selectbox__selectlist"></ul>
											</div>
									</div>

									<div class="technics__allfilters-col">
											<label for="perevozka1" class="technics__label">Перевозка</label>
											<div class="checkradio">
													<input type="radio" name="perevozka" id="perevozka1" checked value="Да">
													<label for="perevozka1"><span></span>Да</label>
											</div>
											<div class="checkradio">
													<input type="radio" name="perevozka" id="perevozka2" value="Нет">
													<label for="perevozka2"><span></span>Нет</label>
											</div>

											<label for="inprice1" class="technics__label">Учесть в стоимость</label>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice1" checked>
													<label for="inprice1"><span></span>Наличие продоплаты</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice2">
													<label for="inprice2"><span></span>Перевозка за счет заказчика</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice3">
													<label for="inprice3"><span></span>ГСМ</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice4">
													<label for="inprice4"><span></span>Оператор</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice5">
													<label for="inprice5"><span></span>Работа в 2 смены</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice6">
													<label for="inprice6"><span></span>Мин. количество смен в месяц</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice7">
													<label for="inprice7"><span></span>Мин. количество часов в смены</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice8" disabled>
													<label for="inprice8"><span></span>Проживание за счет заказчика</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice9" disabled>
													<label for="inprice9"><span></span>Питание за счет заказчика</label>
											</div>
											<div class="checkradio">
													<input type="checkbox" name="inprice" id="inprice10">
													<label for="inprice10"><span></span>Охрана техники</label>
											</div>
									</div>
							</div>

							<div class="technics__allfilters-row">
									<div class="technics__allfilters-col">
											<label for="maxkovsh" class="technics__label">Макс. высота разгрузки ковша (мм)</label>
											<div class="parameter-slider">
													<div class="slider" data-from="0" data-to="600"></div>
													<input type="text" class="number_from" name="massfrom">
													<input type="text" class="number_to" name="massto">
											</div>
									</div>

									<div class="technics__allfilters-col">
											<label for="srokarendi" class="technics__label">Срок аренды</label>
											<div class="dates-input-block">
													<div class="dates-input-block__dates">
															<p class="datefrom">20.10</p>
															<span class="technics__bigarrow"></span>
															<p class="dateto">21.10</p>
													</div>
													<img src="img/icon_calendar.svg" alt="@@" class="dates-input-block__icon" width="31" height="27" data-dateopen="technics_datepicker">
													<div class="datepicker" id="technics_datepicker" data-leftinfo="true"></div>

													<input type="text" value="" class="inputdatefrom" name="srokarendifrom">
													<input type="text" value="" class="inputdateto" name="srokarendito">
											</div>
									</div>
							</div>

							<div class="technics__allfilters-row">
									<div class="technics__allfilters-col">
											<label for="nalicieoborud" class="technics__label">Наличие навесного оборудования</label>
											<div class="selectbox">
													<select name="nalicieoborud" id="nalicieoborud">
															<option value="Выбрать" selected>Выбрать</option>
															<option value="Да">Да</option>
													</select>
													<ul class="selectbox__selectlist"></ul>
											</div>
									</div>

									<div class="technics__allfilters-col">
											<label for="expluatplace" class="technics__label">Место эксплуатации</label>
											<input type="text" id="expluatplace" placeholder="Введите адрес">
									</div>
							</div>

					</div>
					<div class="technics__allfilters-bg"><img src="img/calculator/filters-bg.jpg" alt="@@"></div>
			</form>

</section>
</div>

<!-------------------------------------------------->

<section class="searchresult">
	<div class="container searchresult__buttons">
		<a data-action="openfilter" class="button filter_button">Фильтр</a>
		<a href="searchresult__map" class="button">Карта</a>
		<a href="searchresult__cards" class="button" style="display:none;">Список</a>
	</div>
	<div class="searchresult__main" style="min-height: 400px;">
		<div class="container">
			<div class="searchresult__cards ">
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<div class="searchresult__cards_item">
					<div class="image">
						<div class="overlay">
							<a href="#" class="button"><span class="button__border-top"></span>В корзину<span class="button__border-bottom"></span></a>
							<a href="#" class="button"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
						</div>
						<img src="img/technics_3.jpg" alt="@@">
					</div>
					<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
				</div>
				<a href="#" class="button button_green searchresult__showmore"><span class="button__border-top"></span>Показать еще<span class="button__border-bottom"></span></a>
			</div>
		</div>
		<div class="searchresult__map fixed_map" id="searchresultmap" ></div>
		<div class="searchresult__mapcard">
			<div class="image"><img src="img/technics_3.jpg" alt="@@"></div>
			<p>Бульдозер гусеничный KOMATSU D85ESS-2A <span>от&nbsp;10000 руб/смена</span></p>
		</div>
	</div>
</section>

<section class="accordion accordion_searchpage">
	<div class="container">
		<p class="accordion__button" data-accordion="infoaccordion">Информация о сервисе<span class="accordion__arrow">
		    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.09 14.46"><defs><style>.cls-1{fill:none;stroke:#2ca447;stroke-linecap:square;stroke-miterlimit:10;stroke-width:2px;}</style></defs><line class="cls-1" x1="13.04" y1="13.04" x2="24.67" y2="1.41"/><line id="_Контур_2" data-name="&lt;Контур&gt;" class="cls-1" x1="13.04" y1="13.04" x2="1.41" y2="1.41"/></svg>
		</span></p>
		<div class="accordion__info" id="infoaccordion">
		     <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>
		</div>
	</div>
</section>

<script src="js/main-calculator.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCUaCNfcDZQL7nZK07DQmAHsEetCCMIQ5w&callback=initialize"></script>
<script type="text/javascript">
		// Аккордион
		$(window).scroll(function(){
			var thes_scroll = $(window).scrollTop();
			var stop_fixed = $('.accordion_searchpage').offset().top - $(window).height() - 60;

			if (thes_scroll >= stop_fixed) {
				$('#searchresultmap').removeClass('fixed_map')
				$('#searchresultmap').addClass('not_fixed_map')
			}
			else {
				$('#searchresultmap').removeClass('not_fixed_map')
				$('#searchresultmap').addClass('fixed_map')
			}
 		});
    
    
    
    
    
    
    
    
    
    
    
    
		 var comments_size = $('.searchresult__cards').find('.searchresult__cards_item').length;
		 $('.searchresult__cards_item').hide()
		 var x=12;
		 $('.searchresult__cards_item:lt('+x+')').show();
		 $('.searchresult__showmore').click(function (e) {
		    console.log('zazaz')
			 	e.preventDefault();
			 	x= (x+4 <= comments_size) ? x+4 : comments_size;
			 	$('.searchresult__cards_item:lt('+x+')').show();
		 });
    
    
    
    
    
    

		 $('.searchresult__buttons a[href="searchresult__map"]').click(function(e) {
			 e.preventDefault()
			 $(this).hide()
			 $('.searchresult__buttons a[href="searchresult__cards"]').show()
			 $('.searchresult__cards').hide()
			 $('.searchresult').css('padding-bottom', "0px")
			 $('.searchresult__map').show()
			 initMap()
		 });
		 $('.searchresult__buttons a[href="searchresult__cards"]').click(function(e) {
			e.preventDefault()
			$(this).hide()
			$('.searchresult__buttons a[href="searchresult__map"]').show()
			$('.searchresult__map').hide()
			$('.searchresult').css('padding-bottom', "32px")
			$('.searchresult__cards').show()
			initMap()
		});

		$("[data-accordion]").click(function(){
    		var target = $(this).data("accordion");
    		$(this).toggleClass("active");
    		$("#"+target).slideToggle();
		});

		function showFilter() {
			var target = $(".technics-search-page");
			target.show();
			setTimeout(function(){
				target.addClass("active");
			}, 0);
            fixscreen();
		}

		function hideFilter() {
			var target = $(".technics-search-page");
			target.removeClass("active");
			setTimeout(function(){
				target.hide();
			}, 500);
            unfixscreen();
		}


		$("[data-action]").click(function(){
			if ($(this).data("action") === "openfilter") {
				showFilter();
			}
		});
    
    $(".technics__filtercross, .technics-search-page .technics__stepback, .technics-search-page .technics__summary-button").click(function(){
        hideFilter();
    });

    // When the window has finished loading create our google map below
    //google.maps.event.addDomListener(window, 'load', initMap);

    
    
    
    
    
    
    
    
    

function initialize() {
	
	//Координаты филиалов
    var myLatlng1 = new google.maps.LatLng(59.944123, 30.306596);
    var myLatlng2 = new google.maps.LatLng(59.938908, 30.430187);
	
    //Стили карты
    var styles = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#0f9324"},{"lightness":20},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#00700a"},{"lightness":17},{"weight":1.2},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"color":"#93c991"},{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20},{"visibility":"on"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];
    
    window.basiczoom = 12;
	window.basiczoom2 = 16;
	
	//Настройки большой карты
	var mapOptions = {
		zoom: basiczoom,
		center: myLatlng1,
		disableDefaultUI: true
	}
	
	//Большая карта
	var map = new google.maps.Map(document.getElementById('searchresultmap'), mapOptions);
    map.setOptions({styles: styles});
	
    
    
    
    
    
    
    
    
    
    

    function CustomMarker(latlng, map, args) {
	this.latlng = latlng;	
	this.args = args;	
	this.setMap(map);	
}

CustomMarker.prototype = new google.maps.OverlayView();

CustomMarker.prototype.draw = function() {
	
	var self = this;
	
	var div = this.div;
	
	if (!div) {
	
		div = this.div = document.createElement('div');
		
		div.className = 'marker';
		
		div.style.position = 'absolute';
		div.style.width = '1px';
		div.style.height = '1px';
        div.innerHTML = '<img src="img/map-pin.svg" class="marker__pin"/><a href="'+self.args.link+'" class="marker__content"><img src='+self.args.image+' class="marker__image"><p class="marker__name">'+self.args.name+'</p><p class="marker__price">'+self.args.price+'</p></div>';
			
		
		if (typeof(self.args.marker_id) !== 'undefined') {
			div.dataset.marker_id = self.args.marker_id;
		}
        
        if (typeof(self.args.image) !== 'undefined') {
			div.getElementsByTagName("span").innerHTML = self.args.image;
		}
		
		
		google.maps.event.addDomListener(div, "click", function(event) {
			//alert('You clicked on a custom marker!');			
			//google.maps.event.trigger(self, "click");
		});
		
		
		var panes = this.getPanes();
		panes.overlayImage.appendChild(div);
        
        $(".marker__pin").click(function(){
            $(".marker__content").removeClass("active");
	    	$(this).next(".marker__content").addClass("active");
	    });
	}
	
	var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
	
	if (point) {
		div.style.left = (point.x) + 'px';
		div.style.top = (point.y) + 'px';
	}
};

CustomMarker.prototype.remove = function() {
	if (this.div) {
		this.div.parentNode.removeChild(this.div);
		this.div = null;
	}	
};

CustomMarker.prototype.getPosition = function() {
	return this.latlng;	
};
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	//Кастомные маркеры
	overlay = new CustomMarker(
		myLatlng1, 
		map,
		{
			marker_id: 'marker1',
            image: "img/account_technics_1.jpg",
            name: "Бульдозер гусеничный KOMATSU D85ESS-2A",
            price: "от 10000 руб/смена",
            link: "productcard.php"
		}
	);
    
    overlay = new CustomMarker(
		myLatlng2, 
		map,
		{
			marker_id: 'marker1',
            image: "img/account_technics_1.jpg",
            name: "Бульдозер гусеничный KOMATSU D85ESS-2A",
            price: "от 10000 руб/смена",
            link: "productcard.php"
		}
	);
	
	
}




</script>
<script src="js/datepicker.js"></script>
<script src="js/custom-select.js"></script>