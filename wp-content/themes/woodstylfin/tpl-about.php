<?php /* Template Name: AboutUs */ ?>

<?php get_header(); ?>

<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="mainn">
			<div class="s pay-1">
				<div class="fxx fxx-wrap mainn__wrapp">
					<div class="fxx-it fxx-it__1 fxx-bs-35 as-c">
						<img class="contact__img" src="<?php bloginfo('template_directory');?>/dist/img/about1.jpg">
					</div>
					<div class="fxx-it fxx-it__2 fxx-bs-65 as-c">
						<div class="txt-blck">
							<div class="sect-title c-bwn">

								<?php the_title(); ?>

							</div>
							<div class="content">
								
								<?php the_content(); ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="pay-2">
				<div class="sect-title c-grn txt-cent">
					ПРОЦЕСС ПРОИЗВОДСТВА МЕБЕЛИ 
				</div>
				<div class="fxx fxx-wrap mainn__wrapp">
					<div class="fxx-it fxx-it__2 fxx-bs-50 as-c ">
						<div class="txt-blck-2 fl-rght">
							<div class="content">
								<p style="font-size: 21px;">
									На каждом этапе работы,мы уделяем большое внимание эргономике изделий,ведем жесткий контроль качества нашей продукции.Удобство и функциональность-вот главные критерии в процессе производства мебели нашим предприятием.
								</p>
							</div>
						</div>
					</div>
					<div class="fxx-it fxx-it__1 fxx-bs-50 as-c">
						<img class="contact__img fl-rght" src="<?php bloginfo('template_directory');?>/dist/img/about2.jpg">
					</div>
				</div>
			</div>

			<div class="pay-2 bg-grad">
				<div class="fxx fxx-wrap mainn__wrapp">
					<div class="fxx-it fxx-it__1 fxx-bs-50 as-c">
						<img class="contact__img" src="<?php bloginfo('template_directory');?>/dist/img/about3.jpg">
					</div>
					<div class="fxx-it fxx-it__2 fxx-bs-50 as-c ">
						<div class="txt-blck-2">
							<div class="content">
								<p style="font-size: 21px;">
									Мы предлагаем полный цикл изготовления мебели: от разработки проекта до установки готовой продукции.Наши дизайнеры и  конструкторы создают эскизные проекты мебели с помощью специального програмного обеспечения,благодаря чему Ваша мебель будет соответствовать наивысшим стандартам качества.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part( 'kd89-parts/divan' ); ?>
			
		</div><!-- .mainn -->

	<?php
	endwhile; ?>

<?php 
endif; ?>


<?php get_footer(); ?>