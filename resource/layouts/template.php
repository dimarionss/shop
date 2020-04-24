<!DOCTYPE html>
<html>
<head>
	<title>Roys</title>
	<link rel="stylesheet" type="text/css" href="resource/public/css/style.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="resource/public/css/bootstrap.min.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<!-------------------------Меню-header---------------------------------->
	<header id="header1">
		<h1 class="logo">LOGO</h1>
		<h5 align="center">+38(093)334-44-21</h5>
		<h5 align="center">royshop@gmail.com.ua</h5>
</div>
<div><a href="#" class="menu-toggle">Меню</a></div>
	<div id="mainmenu">
		<ul>
			<li><a class="menu__links-item" href="index.php">Главная</a></li>
			<li><a class="menu__links-item" href="index.php?view=shop">Магазин</a></li>
			<li><a class="menu__links-item" href="index.php?view=blog">Блог</a></li>
			<li><a class="menu__links-item" href="index.php?view=about">О нас</a></li>
			<li><a class="menu__links-item" href="index.php?view=contact">Контакты</a></li>
		</ul>
	</div>
	</header>
		<div class="clr"></div>
<!-------------------------Меню-header---------------------------------->
	<div class="content">
	
	<?php require_once 'resource/views/'.$view.'.php';?>
	
	</div>
	
	
	<!---------------------------------------------------------------------->


<footer id="footer1">
	<div  class="footertableblock">	
		<article>
			<h4>Меню</h4>
			<div id="menufooter">
						<ul>
							<li><a href="index.php">Главная</a></li>
							<li><a href="index.php?view=shop">Магазин</a></li>
							<li><a href="index.php?view=blog">Блог</a></li>
							<li><a href="index.php?view=about">О нас</a></li>
							<li><a href="index.php?view=contact">Контакты</a></li>
						</ul>
				</div>
		</article>
		<article>
			<h4>Каталог товаров</h4>
			<div id="menufooter">
						<ul>
							<li><a href="#">Мужские сумки</a></li>
							<li><a href="#">Женские сумки</a></li>
							<li><a href="#">Молодежные сумки</a></li>
							<li><a href="#">Спортивные сумки</a></li>
							<li><a href="#">Кошельки</a></li>
						</ul>
				</div>
		</article>
		<article>
			<h4>Информация</h4>
				<p><i class="fa fa-car" aria-hidden="true">c 9:00 до 21:00</i></p>
				<p><i class="fa fa-car" aria-hidden="true">+38(093)334-44-21</i></p>
				<p><i class="fa fa-car" aria-hidden="true">+38(093)334-44-21</i></p>
		</article>
	</div>

	<div class="wrapper">
	  <ul class="wrap">
	    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></a></i></li>
	    <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></a></i></li>
	    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></a></i></li>
	    <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></a></i></li>
	    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></a></i></li>
	  </ul>
	</div>


		<div>
			<h6 id="copyrig">&copy;Roys prodaction</h6>
		</div>
</footer>

<!---------------------------------------------------------------------->
<!--------------------------------script-------------------------------------->
<script type="text/javascript" src="resource/public/js/JQuery.min.js"></script>
<script type="text/javascript" src="resource/public/js/slider.js"></script>

<!--------------------------------script-------------------------------------->
</body>
</html>
