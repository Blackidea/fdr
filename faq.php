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

<section class="faq">
	<div class="small-page-heading">
		<div class="container">
			<h2>FAQ</h2>
			<div class="faq__searchfield faq__searchfield_desktop">
				<input type="text" placeholder="Введите вопрос">
				<a href="#"><img src="img/icon_loupe.svg" alt="@@" width="31"></a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="faq__searchfield faq__searchfield_mobile">
			<input type="text" placeholder="Введите вопрос">
			<a href="#"><img src="img/icon_loupe.svg" alt="@@" width="23"></a>
		</div>
		<div class="faq__main">
			<ul class="faq__categorylist">
				<li><a href="#technics-selection">Подбор техники</a></li>
				<li><a href="#oferts">Договор оферты</a></li>
				<li><a href="#technics-selection">Скидки<img src="img/icon_select_arrow.svg" alt="@@" width="10"></a>
					<ul class="faq__hiddenlist">
						<li><a href="#oferts">Самосвалы</a></li>
						<li><a href="#oferts">Ковши</a></li>
						<li><a href="#oferts">Бульдозеры</a></li>
						<li><a href="#oferts">Тракторы</a></li>
					</ul>
				</li>
				<li><a href="#oferts">Партнеры</a></li>
				<li><a href="#technics-selection">Подбор техники<img src="img/icon_select_arrow.svg" alt="@@" width="10"></a>
					<ul class="faq__hiddenlist">
						<li><a href="#oferts">Самосвалы</a></li>
						<li><a href="#oferts">Ковши</a></li>
						<li><a href="#oferts">Бульдозеры</a></li>
						<li><a href="#oferts">Тракторы</a></li>
					</ul>
				</li>
				<li><a href="#oferts">Договор оферты<img src="img/icon_select_arrow.svg" alt="@@" width="10"></a>
					<ul class="faq__hiddenlist">
						<li><a href="#oferts">Самосвалы</a></li>
						<li><a href="#oferts">Ковши</a></li>
						<li><a href="#oferts">Бульдозеры</a></li>
						<li><a href="#oferts">Тракторы</a></li>
					</ul>
				</li>
				<li><a href="#technics-selection">Скидки</a></li>
				<li><a href="#oferts">Партнеры</a></li>
			</ul>
			<div class="faq__popular">
				<p class="faq__popularheading">Популярные темы:</p>
				<ul class="faq__popularlist">
					<li><a href="#technics-selection"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 467.96"><title>icon_faqtheme_1</title><path d="M454.19,418.41A13.76,13.76,0,1,0,468,432.17,13.78,13.78,0,0,0,454.19,418.41Z" transform="translate(0 -22.02)"/><path d="M344.09,418.41a13.76,13.76,0,1,0,13.76,13.76A13.78,13.78,0,0,0,344.09,418.41Z" transform="translate(0 -22.02)"/><path d="M234,418.41a13.76,13.76,0,1,0,13.76,13.76A13.78,13.78,0,0,0,234,418.41Z" transform="translate(0 -22.02)"/><path d="M289,418.41a13.76,13.76,0,1,0,13.76,13.76A13.78,13.78,0,0,0,289,418.41Z" transform="translate(0 -22.02)"/><path d="M399.14,418.41a13.76,13.76,0,1,0,13.76,13.76A13.78,13.78,0,0,0,399.14,418.41Z" transform="translate(0 -22.02)"/><path d="M503.74,473.46h-9.15a57.76,57.76,0,0,0-37.65-99v-27.6h24.77a8.26,8.26,0,0,0,8.26-8.26V250.49a8.26,8.26,0,0,0-8.26-8.26H456.95V228.47a8.26,8.26,0,0,0-8.26-8.26H434.92v-46.8a8.26,8.26,0,0,0-5.65-7.83l-33-11a8.26,8.26,0,0,0-10.87,7.83v57.81H371.61a8.26,8.26,0,0,0-8.26,8.26v13.76H346.84V162.41a8.26,8.26,0,0,0-8.26-8.26h-7.14l-50.8-61a41.33,41.33,0,0,0-40.73-38.13h-0.43a41.28,41.28,0,0,0-4.51.25L91.22,63.76l2.35-32.89A8.26,8.26,0,0,0,85.34,22H19.27A8.26,8.26,0,0,0,11,30.28v300H8.26A8.26,8.26,0,0,0,0,338.58v49.55a57.87,57.87,0,0,0,57.81,57.81H129a8.26,8.26,0,1,0,0-16.52H115.61V388.13a57.91,57.91,0,0,0-43.56-56L86.58,128.65,213,136.09l16.74,43.14a96.12,96.12,0,0,0-31.57,71.26v88.09a8.26,8.26,0,0,0,8.26,8.26h24.77v27.6a57.76,57.76,0,0,0-37.65,99h-9.15a8.26,8.26,0,0,0,0,16.52H503.74A8.26,8.26,0,0,0,503.74,473.46ZM27.53,113.72a30.25,30.25,0,0,0,24.36,12.89l18.22,1.07L55.62,330.32H27.53V113.72Zm11-17.38A13.76,13.76,0,1,1,52.3,110.11,13.78,13.78,0,0,1,38.54,96.34ZM99.1,388.13v41.29H57.81a41.34,41.34,0,0,1-41.29-41.29V346.84H57.81A41.34,41.34,0,0,1,99.1,388.13ZM74.59,64.74L51.88,66.08A30.26,30.26,0,0,0,27.53,79V38.54H76.46ZM205,119.08l-117.28-6.9L90,80.38l115-6.76A41.17,41.17,0,0,0,205,119.08Zm196.85,54.79,16.52,5.51v40.84H401.89V173.87Zm-22,62.87h60.56v27.53H379.87V236.73ZM276.69,114.25l33.25,39.9h-15.4a95.77,95.77,0,0,0-51.09,14.7l-12.3-31.69s6.81,0.48,8.33.48h0A41.34,41.34,0,0,0,276.69,114.25Zm-62-17.9a24.81,24.81,0,0,1,21.74-24.58l3.2-.19a24.77,24.77,0,0,1,0,49.54l-3.2-.19A24.81,24.81,0,0,1,214.71,96.34Zm0,234V250.49a79.92,79.92,0,0,1,79.83-79.83h35.79v79.83a8.26,8.26,0,0,0,8.26,8.26h24.77v13.76a8.26,8.26,0,0,0,8.26,8.26h77.07a8.26,8.26,0,0,0,8.26-8.26V258.75h16.52v71.57H214.71Zm225.72,16.52v27.53H247.74V346.84H440.43Zm13.76,126.62H234a41.29,41.29,0,0,1,0-82.58H454.19A41.29,41.29,0,1,1,454.19,473.46Z" transform="translate(0 -22.02)"/><path d="M302.8,250.49v-44a8.26,8.26,0,0,0-8.26-8.26,52.36,52.36,0,0,0-52.3,52.3,8.26,8.26,0,0,0,8.26,8.26h44A8.26,8.26,0,0,0,302.8,250.49Zm-16.52-8.26H259.71a35.91,35.91,0,0,1,26.57-26.57v26.57Z" transform="translate(0 -22.02)"/><path d="M426.67,297.29H261.51a8.26,8.26,0,0,0,0,16.52H426.67A8.26,8.26,0,0,0,426.67,297.29Z" transform="translate(0 -22.02)"/></svg>Как подобрать эскаватор?</a></li>
					<li><a href="#technics-selection"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 351.34"><title>icon_faqtheme_2</title><path d="M334.15,358.91a29.64,29.64,0,1,0,29.64-29.64A29.68,29.68,0,0,0,334.15,358.91Zm43.12,0a13.47,13.47,0,1,1-13.47-13.47A13.49,13.49,0,0,1,377.26,358.91Z" transform="translate(0 -80.33)"/><path d="M137.43,329.27a29.64,29.64,0,1,0,29.64,29.64A29.68,29.68,0,0,0,137.43,329.27Zm0,43.11a13.47,13.47,0,1,1,13.47-13.47A13.49,13.49,0,0,1,137.43,372.39Z" transform="translate(0 -80.33)"/><path d="M503.92,167.59H473.31a39.42,39.42,0,0,1-5.81-7c-2.66-3.86-5.4-7.84-15.23-15.24-4.63-3.49-10-5.88-15.6-8.42a98.82,98.82,0,0,1-14-7.21,83.17,83.17,0,0,1-10-8.35c-4.86-4.5-9.89-9.15-16.22-12.68s-12.85-5.26-19.28-7a95.34,95.34,0,0,1-12.63-4,98.3,98.3,0,0,1-11.19-6.07c-6-3.6-12.25-7.32-19.42-9.19-8.79-2.29-17.56-1.62-25.29-1-3.38.26-6.58,0.5-9.59,0.5a55.35,55.35,0,0,1-7.5-.73c-5.29-.75-11.28-1.6-17.2.38-6.31,2.1-10.65,6.47-14.48,10.32a46,46,0,0,1-5.05,4.64,47.44,47.44,0,0,1-6.64,3.71c-4.53,2.24-9.67,4.79-13.55,9.34s-5.59,9.79-7.13,14.46a38.47,38.47,0,0,1-2.77,7,44.71,44.71,0,0,1-5.84,7.18c-3.14,3.38-6.38,6.87-8.27,11.33-3.37,7.93-3.36,11.93-3,16.34,0.05,0.62.09,1.18,0.11,1.76H183.89l-30-30a8.08,8.08,0,0,0-5.72-2.37H40.42a8.08,8.08,0,0,0-8.08,8.08v24.25H18.86a8.08,8.08,0,0,0-8.08,8.08v24.25H8.08A8.08,8.08,0,0,0,0,208v150.9A8.08,8.08,0,0,0,8.08,367H65.13A72.71,72.71,0,0,0,91.77,415.5h-19a8.08,8.08,0,1,0,0,16.17h355.7a8.08,8.08,0,1,0,0-16.17h-19a72.69,72.69,0,0,0-19.08-124.3l105.15-32.35a8.08,8.08,0,0,0,5.71-7.73v-35h2.7A8.08,8.08,0,0,0,512,208V175.67A8.08,8.08,0,0,0,503.92,167.59ZM225.56,155.8c0.79-1.86,2.95-4.18,5.24-6.65a58.46,58.46,0,0,0,7.91-10,50.47,50.47,0,0,0,4.2-10.12c1.18-3.57,2.29-6.95,4.08-9s5-3.63,8.42-5.33a60.16,60.16,0,0,0,9-5.12,58.33,58.33,0,0,0,7-6.31c2.81-2.82,5.46-5.49,8.13-6.38,2.31-.77,6-0.25,9.82.29a69.38,69.38,0,0,0,9.77.89c3.63,0,7.28-.28,10.82-0.55,7.1-.54,13.8-1.05,20,0.56,4.93,1.28,9.91,4.26,15.19,7.42a112,112,0,0,0,13.08,7,108.7,108.7,0,0,0,14.8,4.8c5.75,1.56,11.18,3,15.64,5.52,4.64,2.59,8.76,6.4,13.12,10.43a96.07,96.07,0,0,0,12,10A112.91,112.91,0,0,0,430,151.71c4.79,2.16,9.32,4.19,12.51,6.59,5.88,4.43,8.29,6.94,10.06,9.29H224c0-1.17-.09-2.18-0.17-3.07C223.59,162.14,223.48,160.71,225.56,155.8Zm-198.61,28H43.12v16.17H26.95V183.76Zm5.39,167.07H16.17V334.66H32.34v16.17h0Zm0-32.34H16.17V302.33H32.34v16.17h0Zm0-32.34H16.17V270H32.34v16.17h0Zm32.34,8.08v56.59H48.51V261.9a8.08,8.08,0,0,0-8.08-8.08H16.17V216.09H130.29l8.76,70.06H72.76A8.08,8.08,0,0,0,64.67,294.24Zm-5.39-94.32V183.76H75.45v16.17H59.28Zm32.34,0V183.76h16.17v16.17H91.62Zm32.34,0V183.76h10.13L160,209.63l10.85,84.66a72.23,72.23,0,0,0-15.17-5.83L145.45,207a8.09,8.09,0,0,0-8-7.08H124ZM91.77,302.32a73.38,73.38,0,0,0-10.93,10.93V302.32H91.77ZM137.43,415.5A56.59,56.59,0,1,1,194,358.91,56.65,56.65,0,0,1,137.43,415.5Zm45.66,0A72.71,72.71,0,0,0,209.73,367h81.76a72.72,72.72,0,0,0,26.64,48.51h-135Zm27.1-64.67V313.1H291v37.73H210.19Zm210.19,8.08a56.59,56.59,0,1,1-56.59-56.59A56.65,56.65,0,0,1,420.38,358.91Zm64.67-113.76L305.7,300.34a8.07,8.07,0,0,0-6.58-3.4h-97A8.08,8.08,0,0,0,194,305v2.7s-5.05-.11-5.23-0.28l-11.71-91.34h308v29.06h0Zm10.78-45.23H173.12l-30-30a8.08,8.08,0,0,0-5.72-2.37H48.51V151.42h96.36l30,30a8.08,8.08,0,0,0,5.72,2.37H495.83v16.17h0Z" transform="translate(0 -80.33)"/><path d="M234.44,259.21H363.79a8.08,8.08,0,0,0,0-16.17H234.44A8.08,8.08,0,0,0,234.44,259.21Z" transform="translate(0 -80.33)"/></svg>Как взять технику в аренду?</a></li>
					<li><a href="#technics-selection"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.32 433.9"><title>icon_faqtheme_3</title><path d="M494.64,173.56H381.83V112.81c0-5.21-3.47-8.68-8.68-8.68H199.59V43.39c0-5.21-3.47-8.68-8.68-8.68H8.68C3.47,34.71,0,38.18,0,43.39V459.93c0,5.21,3.47,8.68,8.68,8.68h486c5.21,0,8.68-3.47,8.68-8.68V182.24C503.32,177,499.85,173.56,494.64,173.56ZM373.15,381.83H321.09V329.76H425.22v52.07H373.15Zm-121.49,0H199.59V329.76H303.73v52.07H251.66Zm-121.49,0H78.1V329.76H182.24v52.07H130.17Zm-112.81,0V329.76H60.75v52.07H17.36ZM69.42,121.49h52.07v52.07H17.36V121.49H69.42Zm182.24,69.42h52.07V243H199.59V190.92h52.07ZM433.9,260.34H486v52.07H381.83V260.34H433.9Zm-69.42,52.07H260.34V260.34H364.48v52.07Zm-173.56,0H138.85V260.34H243v52.07H190.91Zm-121.49,0H17.36V260.34H121.49v52.07H69.42ZM17.36,190.91H60.75V243H17.36V190.91ZM182.24,243H78.1V190.92H182.24V243h0Zm260.34,86.78H486v52.07H442.58V329.76ZM486,243H442.58V190.92H486V243Zm-60.75,0H321.08V190.92H425.22V243Zm-60.74-69.42H260.34V121.49H364.48v52.07h0Zm-121.49,0H138.85V121.49H243v52.07Zm-60.75-69.42H78.1V52.07H182.24v52.07h0ZM17.36,52.07H60.75v52.07H17.36V52.07Zm0,347.12H121.49v52.07H17.36V399.19Zm121.49,0H243v52.07H138.85V399.19Zm121.49,0H364.47v52.07H260.34V399.19ZM486,451.25H381.83V399.19H486v52.07h0Z" transform="translate(0 -34.71)"/></svg>Как подобрать самосвал под работу?</a></li>
					<li>
<a href="#technics-selection"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.13 512"><title>icon_faqtheme_4</title><path d="M511.15,175.85L468.48,90.52q-2.56-5.12-7.68-5.12H223a9.25,9.25,0,0,0-1.71,0H219L192.85,6a8.2,8.2,0,0,0-7.68-6H157c-4.27,0-7.68,2.56-8.53,6L122.29,85.4H102.4V76.87c0-5.12-3.41-8.53-8.53-8.53H51.2c-5.12,0-8.53,3.41-8.53,8.53v25.6H8.53C3.41,102.47,0,105.88,0,111v17.07a42.25,42.25,0,0,0,42.67,42.67v25.6c0,5.12,3.41,8.53,8.53,8.53H93.87c5.12,0,8.53-3.41,8.53-8.53V187.8h17.07V495H68.27c-5.12,0-8.53,3.41-8.53,8.53s3.41,8.53,8.53,8.53H315.73c5.12,0,8.53-3.41,8.53-8.53s-3.41-8.53-8.53-8.53H221.87V187.8H418.13v90.45C407,290,401.07,305.94,401.07,322.63v10.24c0,5.12,3.41,8.53,8.53,8.53h8.53v17.07c0,5.12,3.41,8.53,8.53,8.53a17.07,17.07,0,1,1-17.07,17.07c0-5.12-3.41-8.53-8.53-8.53s-8.53,3.41-8.53,8.53a34.13,34.13,0,1,0,42.67-33V341.4h8.53c5.12,0,8.53-3.41,8.53-8.53V322.63A64.89,64.89,0,0,0,435.2,278.4V187.8h68.27a10.82,10.82,0,0,0,7.68-3.41C512,181.83,512.85,178.41,511.15,175.85ZM465,121.13l-37.78,45.2L403.46,136.6l27.31-34.13h24.92ZM155.79,123.8l-19.26,13.48v-27Zm220.35-21.33h32.77l-16.38,20.48Zm5.46,34.13-23.21,29-23.21-29,23.21-29Zm-57.34-13.65-16.38-20.48h32.77ZM313.34,136.6l-23.21,29-23.21-29,23.21-29ZM256,122.95l-16.38-20.48h32.77Zm-51.2,14.34L185.54,123.8l19.26-13.48v27Zm-5.69,16.84-28.44,22.76-28.44-22.76,28.44-19.91Zm-62.58,25.15v-7.85L157,187.8l-20.48,16.38V179.27ZM184.32,392.6l20.48-16.38V409Zm16.21,35-29,26.1-29.91-27,28.95-23.16Zm4.27-119.64v32.77l-20.48-16.38Zm-34.13,5.46-29-23.21,29-23.21,29,23.21Zm29,45.06-29,23.21-29-23.21,29-23.21Zm5.12-86-20.48-16.38,20.48-16.38v32.77Zm-34.13-27.31-29-23.21,29-23.21,29,23.21ZM157,256.07l-20.48,16.38V239.68Zm0,68.27-20.48,16.38V307.95Zm0,68.3L136.53,409V376.25Zm1.49,72.86-21.93,19.76V445.76Zm12.68,11.41L191.24,495H151Zm13.11-11.8,20.55-18.5v37ZM204.8,179.27v24.92L184.32,187.8l20.48-16.38v7.85Zm17.07-23.6a7.42,7.42,0,0,0,0-4.75V107.59l23.21,29-23.21,29v-9.94Zm50.52,15.07H239.62L256,150.25Zm51.88-20.48,16.38,20.48H307.88Zm68.27,0,16.38,20.48H376.15ZM163,17.13H179.2l24,73.51-32.5,22.75L138.21,90.67ZM17.07,128.07v-8.53h25.6v34.13A25.14,25.14,0,0,1,17.07,128.07ZM85.33,187.8H59.73V85.4h25.6V187.8Zm17.07-17.07V102.47h17.07v68.27H102.4Zm332.8,153.6H418.13v-1.71a47.63,47.63,0,0,1,8.53-28.16,47.63,47.63,0,0,1,8.53,28.16v1.71h0Zm10.42-153.6,27.65-33.08,16.54,33.08H445.62Z" transform="translate(0 -0.07)"/></svg>Как взять технику в аренду?</a></li>
				</ul>
			</div>
			<div class="faq__details" id="technics-selection">
				<p class="faq__detailstoptext"><a href="#faq-main"><img src="img/arrow_green_left.svg" alt="@@" width="31" class="bounce">Назад</a></p>
				<p class="faq__detailsheading">Подбор техники</p>
				<p>Выполняют ПИР по объекту: «Устройство вентилируемого фасада и замена остекления в здании колледжа по адресу: г. Москва, Кировоградская ул., д.11 с.1» ПАО «Мосэнерго». Для разработки ПД просим Вас выставить предложение о стоимости аренды указанных грузоподъемных механизмов либо их аналогов сроком на 66 днеи: подъемник Salerno Т25 - 5 шт;  </p>
				<p>Для разработки ПД просим Вас выставить предложение о стоимости аренды указанных грузоподъемных механизмов либо их аналогов сроком на 66 дней: подъемник Salerno Т25 - 5 шт; Выполняют ПИР по объекту: «Устройство вентилируемого фасада и замена остекления в здании колледжа по адресу: г. Москва, Кировоградская ул., д.11 с.1» ПАО «Мосэнерго». Для разработки ПД просим Вас выставить предложение о стоимости аренды указанных грузоподъемных механизмов либо их аналогов сроком на 66 днеи: подъемник Salerno Т25 - 5 шт;  подъемник Salerno Т25 - 5 шт; </p>
				<p>Для разработки ПД просим Вас выставить предложение о стоимости аренды указанных грузоподъемных механизмов либо их аналогов сроком на 66 дней: подъемник Salerno Т25 - 5 шт; Выполняют ПИР по объекту: «Устройство вентилируемого фасада и замена остекления в здании колледжа по адресу: г. Москва, Кировоградская ул., д.11 с.1» ПАО «Мосэнерго». Для разработки ПД просим Вас выставить предложение о стоимости аренды указанных грузоподъемных механизмов либо их аналогов сроком на 66 днеи: подъемник Salerno Т25 - 5 шт;  подъемник Salerno Т25 - 5 шт; </p>
			</div>
			<div class="faq__details" id="oferts">
				<p class="faq__detailstoptext"><a href="#faq-main"><img src="img/arrow_green_left.svg" alt="@@" width="31" class="bounce">Назад</a></p>
				<p class="faq__detailsheading">Договор оферты</p>
				<p>Выполняют ПИР по объекту: «Устройство вентилируемого фасада и замена остекления в здании колледжа по адресу: г. Москва, Кировоградская ул., д.11 с.1» ПАО «Мосэнерго». Для разработки ПД просим Вас выставить предложение о стоимости аренды указанных грузоподъемных механизмов либо их аналогов сроком на 66 днеи: подъемник Salerno Т25 - 5 шт;  </p>
				<div class="image"></div>
				<p>Для разработки ПД просим Вас выставить предложение о стоимости аренды указанных грузоподъемных механизмов либо их аналогов сроком на 66 дней: подъемник Salerno Т25 - 5 шт; Выполняют ПИР по объекту: «Устройство вентилируемого фасада и замена остекления в здании колледжа по адресу: г. Москва, Кировоградская ул., д.11 с.1» ПАО «Мосэнерго». Для разработки ПД просим Вас выставить предложение о стоимости аренды указанных грузоподъемных механизмов либо их аналогов сроком на 66 днеи: подъемник Salerno Т25 - 5 шт;  подъемник Salerno Т25 - 5 шт; </p>
			</div>
		</div>
	</div>
	
	<?php include "blocks/questionform.php"; ?>
	
</section>

<!-------------------------------------------------->

<?php include "blocks/footer.php"; ?>

</div>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>

</body>
</html>