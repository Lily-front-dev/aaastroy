<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aaastroy
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stroy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<!-- Формат номера телефона для формы обратного звонка-->
<script src="<?php echo get_template_directory_uri (); ?>/js/bootstrap-formhelpers.js"></script>
<link href="<?php echo get_template_directory_uri (); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo get_template_directory_uri (); ?>/css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri (); ?>/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri (); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri (); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri (); ?>/favicon/favicon/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri (); ?>/favicon/faviconsafari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/custom.css">
</head>

<body>
<!--......HEADER......-->
	<header class="header paralax">
		<div class="container">
<!--......HEADER NAV......-->
	<div class="row">	
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container-fluid">
				<a class="navbar-brand col-9 col-sm-6 col-md-6 col-lg-5" href="#">
					<img src="<?php echo get_template_directory_uri (); ?>/img/header/logo.svg" alt="logo" class="img-fluid">
				</a>		
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>				
				<div class="collapse navbar-collapse" id="collapsibleNavbar">				
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#mission">Наша миссия</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#projects">Реализованные проекты</a>
						</li>
						<li class="nav-item mr-130">
							<a class="nav-link" href="#contacts">Контакты</a>
						</li>
						<li class="nav-item d-flex flex-row justify-content-center">
							<a class="nav-link lang_ru justify-content-center" id="lang_ru" style="cursor: default;">RU</a>
							<a class="nav-link lang_delimiter" href="#contacts" id="lang_del">|</a>	
							<a class="nav-link lang_ua justify-content-center" href="<?php echo get_template_directory_uri (); ?>/stroy-ua.html" id="lang_ua">UA</a>
						</li> 			
					</ul>						
				</div>  
			</div>	
		</nav>
	</div>
<!--......HEADER titles......-->
<div class="row">
	<div class="col-12 col-xl-10">
		<h1 class="header__title"><?php the_field('header__title'); ?></h1>	
		<div class="header__slogan"><?php the_field('header__slogan'); ?></div>
	</div>
</div>

<!--......HEADER button......-->
		<div class="row">
			<div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 themed-grid-col">
				<a class="button btn-block" href="#" data-toggle="modal" data-target="#exampleModalCenter">Заказать консультацию</a>
			</div>	
		</div>
	</div>

<!--   MODAL WINDOW (FORM) при нажатии на Заказать консультацию -->	
<div class="container">	
<div class="row">
	<div class="col-2"></div>
		<div class="col-8">
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="form">
										<form method="post" id="feedback-form3">
																		
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true" style="color: black; position: absolute; right: 5px; top: -20px; font-size: 50px;">&times;</span>
											</button>
												
											<p class="form__text1"><span>ЗАПОЛНИТЕ ФОРМУ</span></span></p>
											<p class="form__text2">и наши специалисты свяжутся с Вами в ближайшее время!</p>
											<div class="form-group">
												<input type="text" name="nameFF" class="form-control is-valid i-name" placeholder="Ваше имя" autocomplete="off">
											</div>
											<div class="form-group">
												<input type="text" name="mobFF" class="bfh-phone form-control is-valid i-mob" pattern="^\+38 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" data-format="+38 (ddd) ddd-dd-dd" data-number="15555555555" required>
											</div>
											<div class="form-group">
												  <button class="btn btn-primary btn-block form-btn zakazmx1" name="submit" value="Submit" type="submit">Отправить</button>
											</div>
										</form>

										<script>
										document.getElementById('feedback-form3').addEventListener('submit', function(evt){
										  var http = new XMLHttpRequest(), f = this;
										  evt.preventDefault();
										  http.open("POST", "contacts.php", true);
										  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
										  http.send("nameFF=" + f.nameFF.value + "&mobFF=" + f.mobFF.value);
										  http.onreadystatechange = function() {
											if (http.readyState == 4 && http.status == 200) {
											  alert(http.responseText + ', Ваша заявка отправлена.\nМы свяжемся с Вами в ближайшее время!');    
											  f.messageFF.removeAttribute('value'); // очистить поле сообщения (две строки)
											  f.messageFF.value='';
											}
										  }
										  http.onerror = function() {
											alert('Извините, данные не были переданы');
										  }
										}, false);
										</script>
								</div>
							</div>
						 </div>
					</div>
	</div>
	<div class="col-2"></div>	
</div>
</div>		
	</header>