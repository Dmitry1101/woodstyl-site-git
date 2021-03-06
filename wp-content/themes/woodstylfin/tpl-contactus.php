<?php 
/* 
	Template Name: Contact US 
*/ ?>

<?php get_header(); ?>

<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="mainn contact">
			<div class="container">
				<div class="row">
					
					<div class="fxx fxx-wrap contact__wrapp">
						<div class="fxx-it fxx-it__1 fxx-bs-50">
							<img class="contact__img" src="<?php bloginfo('template_directory');?>/dist/img/contact1.jpg">
						</div>
						<div class="fxx-it fxx-it__2 fxx-bs-50">
							<div class="sect-title c-bwn">
								КОНТАКТЫ 
							</div>
							<div class="content">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
								</p>
								<ul class="contact__list">
									<li>
										<i class="icon icon-contact1"></i>
										<a href="tel:+7 990 888-77-6655">+7 990 888-77-6655</a>   
									</li>
									<li>
										<i class="icon icon-contact2"></i>

										г. Москва, ул. Новая 53.
									</li>
									<li>
										<i class="icon icon-contact3"></i>

										<a href="mailto:info@woodstyl.ru">info@woodstyl.ru</a>  
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
		<div class="mapp" id="mapp"></div>

		<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH_a-4D8RrBb2znnptDLhBL_ynJt-cjDo"></script>
		

		<script type="text/javascript">
					//GOOGLE MAP
			(function () {
				
				var objj = {
					mapp : document.getElementById('mapp'),
					latLng : [ 55.686779, 37.368563 ],
					zoom : 15,
					icon : '<?php bloginfo('template_directory');?>/dist/img/marker-cust.png',
				}
								
				if (typeof(objj.mapp) != 'undefined' && objj.mapp != null) {

				  // Create the map
				  var map = new google.maps.Map( objj.mapp, {
				    zoom: objj.zoom,
				    center: new google.maps.LatLng( objj.latLng[0], objj.latLng[1] )
				  });

				  var marker1 = new google.maps.Marker({
				    map: map,
				    position: new google.maps.LatLng( objj.latLng[0], objj.latLng[1] ),
				    icon: objj.icon,
				  });
				}  
			
			})();
		</script>	


	<?php
	endwhile; ?>

<?php 
endif; ?>


<?php get_footer(); ?>