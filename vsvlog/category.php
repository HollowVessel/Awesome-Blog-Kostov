<?php get_header(); ?>

<div class="content content--bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-24">
				<!-- Title Page --> 
				<h1 class="title-page"></h1> 
				<!-- End of Title Page -->
				<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part('/template-parts/posts'); ?>
				<?php endwhile; ?> 
				<!-- <div class="mb80 hidden-sm hidden-xs"></div>
				<div class="mb60 hidden-lg hidden-md"></div>
			
				<div class="mb80 hidden-sm hidden-xs"></div>
				<div class="mb60 hidden-lg hidden-md"></div> -->
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
<?php get_footer(); ?> 