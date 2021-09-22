<?php
/**
 * Template Name: About Template
 * 
 * 
 */
?>

<?php get_header(); ?>
<!-- Hero -->
<style>
	.hero { 
		background-image: url("<?php echo get_template_directory_uri() .  "/assets/img/common/backgrounds/about.jpg" ?>") !important;
	} 
</style> 
<div class="hero"> 
	<div class="hero__overlay"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-20 col-lg-13"> 
					<h1 class="hero__title mb50"><?php echo get_theme_mod('about_page_header', 'About Me'); ?></h1> 
					<p class="hero__description"><?php echo get_theme_mod('about_page_textarea1', 'I\'m a 20 year old metalhead, web design student that desperately wants concerts to be allowed so he can see his favorite bands on stage.'); ?> </p>
					<p class="hero__description">
					<?php echo get_theme_mod('about_page_textarea2', 'Labore quam nulla in harum debitis reiciendis consectetur voluptatem alias cupiditate, impedit quidem soluta ipsa consequuntur, aut totam dolorem eaque maxime repellat porro non accusantium iure? Pariatur earum, deleniti nostrum suscipit, possimus
						repudiandae a neque libero odit fugit blanditiis laudantium corporis, debitis culpa dolorum iusto sed! Odio vero natus obcaecati possimus dignissimos.'); ?>
					 </p>
					<div class="hidden-xs mt60">
						<!-- List --> 
						<ul class="list list--horizontal list--separator">
							<li class="list__item">
								<a href="https://www.youtube.com/"  target=”_blank” class="list__link"><?php echo get_theme_mod('about_page_youtube', 'YOUTUBE'); ?></a>
							</li>
							<li class="list__item">
								<a href="https://www.facebook.com/"  target=”_blank” class="list__link"><?php echo get_theme_mod('about_page_facebook', 'FACEBOOK'); ?></a>
							</li>
							<li class="list__item">
								<a href="https://instagram.com/"  target=”_blank” class="list__link"><?php echo get_theme_mod('about_page_instagram', 'INSTAGRAM'); ?></a>
							</li>
							<li class="list__item">
								<a href="https://twitter.com/"  target=”_blank” class="list__link"><?php echo get_theme_mod('about_page_twitter', 'TWITTER'); ?></a>
							</li>
						</ul>
						<!-- End of List -->
					</div>
					<div class="hidden-lg hidden-md hidden-sm">
						<!-- Socials -->
						<ul class="socials socials--large mt40">
							<li class="socials__item">
								<a href="https://www.facebook.com/" target=”_blank” class="socials__link">
									<i class="fa fa-facebook-f"></i>
								</a>
							</li> 
							<li class="socials__item">
								<a href="https://www.twitter.com/" target=”_blank” class="socials__link">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="socials__item">
								<a href="https://www.youtube.com/" target=”_blank” class="socials__link">
									<i class="fa fa-youtube"></i>
								</a>
							</li>
							<li class="socials__item">
								<a href="https://www.instagram.com/" target=”_blank” class="socials__link">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li class="socials__item">
								<a href="https://www.tumblr.com/" target=”_blank” class="socials__link"> 
									<i class="fa fa-tumblr"></i>
								</a>
							</li>
						</ul>
						<!-- End of Socials -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- End of Hero --> 
<div class="content content--top content--bottom"> 
	<div class="container">
		<div class="row">  
			<!-- <div class="col-md-11 col-sm-11">  -->
					<?php 
					$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => '4'
					); 
					$posts = new WP_Query($args);
					if ($posts->have_posts() )
					while($posts->have_posts() ) {
					$posts->the_post(); 
						get_template_part('/template-parts/about', 'post');
					}
				?> 	
			<!-- </div>  -->
		</div>

		<div class="row">
			<div class="col-md-24">
				<!-- Pagination -->
				<div class="pagination pagination--border-top">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-7">
							<div class="left">
								<a href="#" class="pagination__nav">Prev</a>
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-10">
							<p class="pagination__number">1 of 1</p>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-7">
							<div class="right">
								<a href="#" class="pagination__nav">Next</a>
							</div>
						</div>
					</div>
				  </div> 
					<!-- End of Pagination -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>


