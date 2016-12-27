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
	<div class="heading">
		<div class="gradient"></div>
		<div class="container">
			<h2>Новости</h2>
		</div>
	</div>
	<div class="container">
		<div class="top">
			<p class="toptext">Показать:</p>
			<select name="" id="">
				<option value="">Все новости</option>
			</select>
		</div>
		<div class="newsblocks">
			<div>
				<div class="bg"></div>
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</div>
			<div>
				<div class="bg"></div>
				<p class="small">03/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</div>
			<div>
				<div class="bg"></div>
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</div>
			<div>
				<div class="bg"></div>
				<p class="small">03/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</div>
			<!-- Desktop -->
			<div>
				<div class="bg"></div>
				<p class="small">16/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</div>
			<div>
				<div class="bg"></div>
				<p class="small">03/09/16</p>
				<p>Специалисты <br>проводят работы <br>по объекту</p>
			</div>
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