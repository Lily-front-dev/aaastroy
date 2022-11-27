<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aaastroy
 */

?>

	<!--......FOOTER......-->
<footer class="footer">
	<div class="container">
		<div class="footer-wrap">	
			<div class="row d-flex align-items-center">
				<div class="col-12 order-3 col-md-12 order-md-3 col-lg-5 order-lg-1">			
					<a class="footer__logo" href="#">
						<img src="<?php echo get_template_directory_uri (); ?>/img/footer/logo.svg" alt="logo" class="img-fluid">
					</a>
				<div class="footer__copyrigh">© 2021 aaastroy.com.ua Все права защищены</div>
				</div>
				<div class="col-6 order-1 col-md-6 order-md-1 col-lg-3 order-lg-2">			
				<div class="footer__nav">				
					<div class="footer_navbar-nav">
						<div class="footer__nav-item">
							<a class="footer__nav-link" href="#mission">Наша миссия</a>
						</div>
						<div class="footer__nav-item">
							<a class="footer__nav-link" href="#projects" id="projects_fr">Реализованные проекты</a>
						</div>
						<div class="footer__nav-item">
							<a class="footer__nav-link" href="#contacts">Контакты</a>
						</div> 
					</div>						
				</div> 
			</div>

			<div class="col-6 order-2 col-md-6 order-md-2 col-lg-4 order-lg-3">
				<div class="footer__contacts" id="contacts">
					<div class="contacts__tel"><a href="tel:+380674646984"><?php the_field('contacts__tel'); ?></a></div>
					<div class="contacts__mail"><?php the_field('contacts__mail'); ?></div>
					<div class="contacts__address" id="address"><?php the_field('contacts__address'); ?></div>
				</div>	
			</div>
	</div>	

</div>
</div>
</footer>


<!--......SCRIPTS......-->

<!-- Bootstrap в связке с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- Bootstrap для меню гамбургер -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!-- Bootstrap для формы -->
<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri (); ?>/js/jquery-3.6.0.js"></script>
	
	<!-- Bootstrap -->
	<script src="<?php echo get_template_directory_uri (); ?>/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap Form Helpers для формы обратного звонка-->
	<script src="<?php echo get_template_directory_uri (); ?>/js/bootstrap-formhelpers.min.js"></script>
<!-- Fancy box gallery -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
</body>
</html>
