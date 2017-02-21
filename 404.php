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

<section class="firstscreen firstscreen_pagenotfound">
	<div class="firstscreen__bg">
		<img src="img/bg_1_screen.jpg" alt="@@" class="firstscreen__bg-image">
	</div>
	<div class="container">
		<p class="firstscreen_pagenotfound__large-text">4<img src="img/nut.svg" alt="@@" width="80">4</p>
		<p>Такой страницы нет, <br>
		копай дальше...</p>
		<a href="#" class="button"><span class="button__border-top"></span>На главную<span class="button__border-bottom"></span></a>
	</div>
</section>

<!-------------------------------------------------->

<?php include "blocks/footer.php"; ?>

</div>



<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>