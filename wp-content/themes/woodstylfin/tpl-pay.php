<?php /* Template Name: Pay */ ?>

<?php get_header(); ?>

<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="mainn">
			
			<div class="s pay-1">
				<div class="fxx fxx-wrap mainn__wrapp">
					<div class="fxx-it fxx-it__1 fxx-bs-35 as-c">
						<img class="contact__img" src="<?php bloginfo('template_directory');?>/dist/img/pay1.jpg">
					</div>
					<div class="fxx-it fxx-it__2 fxx-bs-65 as-c">
						<div class="txt-blck">
							<div class="sect-title c-bwn">
								ДОСТАВКА 
							</div>
							<div class="content">
								<p>
									Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
								</p>
								<p>
									 At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="s pay-2 bg-grad">
				<div class="fxx fxx-wrap mainn__wrapp">
					<div class="fxx-it fxx-it__2 fxx-bs-65 as-c ">
						<div class="txt-blck fl-rght">
							<div class="sect-title c-bwn">
								ОПЛАТА 
							</div>
							<div class="content">
								<p>
									Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
								</p>
								<p>
									 At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et 
								</p>
							</div>
						</div>
					</div>

					<div class="fxx-it fxx-it__1 fxx-bs-35 as-c">
						<img class="contact__img fl-rght" src="<?php bloginfo('template_directory');?>/dist/img/pay2.jpg">
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