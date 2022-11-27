<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
				<p class="projects__subtitle" id="mission">Ми - команда однодумців, які люблять створювати нове, обожнюють кожен свій проект і цінують час. Кожен проект розглядаємо як новий танець. 
				</p>
			</div>
			</div>
			<div class="row">
				<h2 class="projects__title" id="projects">Реалізовані проекти</h2>
			</div>
			<div class="project">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<div class="project__info">
							<div class="row">
							<div class="col-md-6 col-lg-12">
								<h3 class="project__name">CosmasGolf</h3>
								<div class="project__help">допомога у створенні нового унікального простору для Києва та України (управління повним циклом проекту, загальнобудівельні роботи, монтажу спеціалізованого гольфічного обладнання, електрика, вода, каналізація).</div>
							</div>
							<div class="col-md-6 col-lg-12">
						<div class="project__square">
							<img src="img/projects/m2.svg" alt="icon">Площа – 200 м.кв.</div>
						<div class="project__time">
							<img src="img/projects/time.svg" alt="icon">Термін роботи – 3 місяці</div>
						<div class="project__site">
							<img src="img/projects/site.svg" alt="icon">Сайт – cosmosgolf.com.ua</div>
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
        								<img src="img/projects/project_1/img_1.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_1/img_2.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_1/img_3.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_1/img_4.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_1/img_5.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_1/img_6.jpg" alt="project_img">
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
								<div class="project__help">генеральний підрядник (управління повним циклом проекту, загальнобудівельні роботи, електрика).</div>
							</div>
							<div class="col-md-6 col-lg-12">		
						<div class="project__square">
							<img src="img/projects/m2.svg" alt="icon">Площа 414 м.кв.</div>
						<div class="project__time">
							<img src="img/projects/time.svg" alt="icon">Термін роботи – 3 місяці</div>
						<div class="project__site">
							<img src="img/projects/site.svg" alt="icon">Сайт – virginizakaya.com.ua</div>
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
        								<img src="img/projects/project_2/2img_1.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_2/2img_2.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_2/2img_3.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_2/2img_4.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_2/2img_5.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_2/2img_6.jpg" alt="project_img">
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
								<div class="project__help">Arsenal Kiev Food Market – Генеральний підрядник (управління повним циклом проекту, загальнобудівельні роботи, електрика).</div>
							</div>
							<div class="col-md-6 col-lg-12">
						<div class="project__square">
							<img src="img/projects/m2.svg" alt="icon">Площа – 200 м.кв.</div>
						<div class="project__time">
							<img src="img/projects/time.svg" alt="icon">Термін роботи – 3 місяці</div>
						<div class="project__site">
							<img src="img/projects/site.svg" alt="icon">Сайт – fishfetish.com.ua</div>
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
        								<img src="img/projects/project_3/3img_1.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_3/3img_2.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_3/3img_3.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_3/3img_4.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_3/3img_5.jpg" alt="project_img">
        							</div>
        							<div class="swiper-slide">
        								<img src="img/projects/project_3/3img_6.jpg" alt="project_img">
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
