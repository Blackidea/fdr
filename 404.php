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

<section class="pagenotfound firstscreen">
	<div class="firstscreen__vert-line"></div>
	<div class="firstscreen__vert-line"></div>
	<div class="firstscreen__vert-line"></div>
	<div class="container">
		<p class="large">4<img src="img/nut.svg" alt="@@" width="120">4</p>
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