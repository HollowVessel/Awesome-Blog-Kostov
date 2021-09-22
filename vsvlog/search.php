<?php
/**
 * Default Search Template 
 * 
 * 
 * @package blogger
 */
?>

<?php get_header(); ?>

<div class="content content--bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-24">
				<!-- Title Page --> 
				<!-- End of Title Page -->
				<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part('/template-parts/posts'); ?>
				<?php endwhile; ?> 

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
