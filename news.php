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

<section class="pagenews">
	<div class="small-page-heading">
		<div class="container">
			<h2>Новости</h2>
		</div>
	</div>
	<div class="container">
		<div class="top">
			<p class="toptext">Показать:</p>
			<div class="selectbox selectbox_white selectbox_inputbox">
				<select name="news">
					<option value="all">Все новости</option>
					<option value="part">Не все новости</option>
				</select>
			<ul class="selectbox__selectlist"></ul>
			</div>
		</div>
		<div class="newsblocks newsblocks_pagenews">
			<a href="newspage.php" class="news-linkblock">
				<div class="bg"></div>
				<img src="img/news_1.jpg" alt="@@">
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</a>
			<a href="newspage.php" class="news-linkblock">
				<div class="bg"></div>
				<img src="img/news_1.jpg" alt="@@">
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</a>
			<a href="newspage.php" class="news-linkblock">
				<div class="bg"></div>
				<img src="img/news_1.jpg" alt="@@">
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</a>
			<a href="newspage.php" class="news-linkblock">
				<div class="bg"></div>
				<img src="img/news_1.jpg" alt="@@">
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</a>
			<a href="newspage.php" class="news-linkblock">
				<div class="bg"></div>
				<img src="img/news_1.jpg" alt="@@">
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</a>
			<a href="newspage.php" class="news-linkblock">
				<div class="bg"></div>
				<img src="img/news_1.jpg" alt="@@">
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</a>
		</div>
		<a href="#" class="button button_green"><span class="button__border-top"></span>Показать еще<span class="button__border-bottom"></span></a>
	</div>
</section>

<!-------------------------------------------------->

<?php include "blocks/footer.php"; ?>

</div>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>