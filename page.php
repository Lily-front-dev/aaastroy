<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aaastroy
 */

get_header();
?>

<!--......MAIN......-->
<main>
<!--......PROJECTS......-->
	<section class="projects">
	<div class="container">		
			<div class="row">
				<div class="col-12">
				<p class="projects__subtitle" id="mission"><?php the_field('projects__subtitle'); ?>
				</p>
			</div>
			</div>
			<div class="row">
				<h2 class="projects__title" id="projects">Реализованные проекты</h2>
			</div>
			<div class="project">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<div class="project__info">
							<div class="row">
							<div class="col-md-6 col-lg-12">
								<h3 class="project__name">CosmasGolf</h3>
								<div class="project__help">помощь в создании нового уникального пространства для Киева и Украины (управление полным циклом проекта, общестроительной работы, монтажа специализируемого гольфического оборудования, электрика, вода, канализация). </div>
							</div>
							<div class="col-md-6 col-lg-12">
						<div class="project__square">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/m2.svg" alt="icon">Площадь – 534 м.кв.</div>
						<div class="project__time">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/time.svg" alt="icon">Срок – работы 6 месяцев</div>
						<div class="project__site">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/site.svg" alt="icon">Сайт – cosmosgolf.com.ua</div>
						</div>	
						</div>
						</div>	
					</div>
					<div class="col-lg-8 col-md-12"> 
						<div class="project__images">
						<!-- Swiper -->
    						<div class="swiper-container mySwiper">
      							<div class="swiper-wrapper">
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_1/img_1.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_1/img_2.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_1/img_3.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_1/img_4.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_1/img_5.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_1/img_6.jpg" alt="project_img">
        							</div>
      							</div> 
      							<div class="swiper-pagination"></div>    							
    						</div>  							
					</div>
				</div>			
				</div>
			</div>

			<div class="project">
				<div class="row">
					<div class="col-lg-4 order-lg-2 col-md-12 order-md-1">
						<div class="project__info">
							<div class="row">
							<div class="col-md-6 col-lg-12">
								<h3 class="project__name">VIRGIN IZAKAY BAR</h3>
								<div class="project__help">Генеральный подрядчик (управление полным циклом проекта, общестроительные работы, электрика). </div>
							</div>
							<div class="col-md-6 col-lg-12">
						<div class="project__square">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/m2.svg" alt="icon">Площадь – 414 м.кв.</div>
						<div class="project__time">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/time.svg" alt="icon">Срок работы – 3 месяца</div>
						<div class="project__site">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/site.svg" alt="icon">Сайт – virginizakaya.com.ua</div>
						</div>	
						</div>
						</div>	
					</div>					
					<div class="col-lg-8 order-lg-1 col-md-12 order-md-2"> 
						<div class="project__images">
						<!-- Swiper -->
    						<div class="swiper-container mySwiper">
      							<div class="swiper-wrapper">
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_2/2img_1.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_2/2img_2.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_2/2img_3.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_2/2img_4.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_2/2img_5.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_2/2img_6.jpg" alt="project_img">
        							</div>
      							</div> 
      							<div class="swiper-pagination"></div>    							
    						</div>  							
					</div>
				</div>
			
			</div>
		</div>

			<div class="project">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<div class="project__info">
							<div class="row">
							<div class="col-md-6 col-lg-12">
								<h3 class="project__name">Fish Fetish</h3>
								<div class="project__help">Arsenal Kiev Food Market – Генеральный подрядчик (управление полным циклом проекта, общестроительные работы, электрика).</div>
							</div>
							<div class="col-md-6 col-lg-12">
						<div class="project__square">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/m2.svg" alt="icon">Площадь – 204 м.кв.</div>
						<div class="project__time">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/time.svg" alt="icon">Срок работы – 3 месяца</div>
						<div class="project__site">
							<img src="<?php echo get_template_directory_uri (); ?>/img/projects/site.svg" alt="icon">Сайт – fishfetish.com.ua</div>
						</div>	
						</div>
						</div>	
					</div>
					<div class="col-lg-8 col-md-12"> 
						<div class="project__images">
						<!-- Swiper -->
    						<div class="swiper-container mySwiper">
      							<div class="swiper-wrapper">
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_3/3img_1.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_3/3img_2.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_3/3img_3.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_3/3img_4.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_3/3img_5.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="<?php echo get_template_directory_uri (); ?>/img/projects/project_3/3img_6.jpg" alt="project_img">
        							</div>
      							</div> 
      							<div class="swiper-pagination"></div>    							
    						</div>  							
					</div>
				</div>			
				</div>
			</div>

		
	</div>
</section>

</main>
<?php
get_footer();
