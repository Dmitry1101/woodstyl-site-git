<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div class="whole">  
		<div class="top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2">
						<div class="top__blck blck-1">
							<a href="/">
								<img src="<?bloginfo('template_directory');?>/dist/img/logo.png">
							</a>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="top__blck blck-2">
							
							<?php 
							wp_nav_menu( array(
								'theme_location'  => 'menu-1',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'top__menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) ); ?>

						</div>
					</div>
					<div class="col-lg-3">
						<div class="top__blck blck-3">
							<button class="to-mod butt butt-grn">СВЯЗАТЬСЯ С НАМИ</button>
						</div>
					</div>
				</div>
			</div>
		</div>