<?php 
/**
 * Template Name: Product Template
 */
?> 

<?php get_header(); ?>
<div class="content content--top content--bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Gallery -->
						<ul class="gallery"> 
								<img src="<?php the_post_thumbnail_url(); ?>" class="gallery__image" alt="product"> 
						</ul>
						<!-- End of Gallery -->
					</div>
					<div class="mb30 visible-sm visible-xs"></div>
					<div class="col-md-11 col-md-offset-1">
						<!-- Product --> 
						<article class="product">
							<div class="row"> 
								<div class="col-md-24">
									<h1 class="product__title"><?php the_title(); ?></h1>
									<p class="product__code">Product code: 47285217</p>
									<p class="product__price">$16.00</p>
									<p class="product__description"> <?php the_excerpt(); ?> </p>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-15 col-sm-15">
									<div class="product__section">
										<h3 class="product__subtitle">Size:</h3>
										<ul class="product__sizes">
											<li class="product__size">xs</li>
											<li class="product__size">s</li>
											<li class="product__size">m</li>
											<li class="product__size product__size--active">l</li>
											<li class="product__size">xl</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-24">
									<div class="product__section">
										<h3 class="product__subtitle">Quantity</h3>
										<!-- Spinner -->
										<div data-trigger="spinner" class="spinner">
											<span data-spin="down" class="spinner__button">-</span>
											<input type="text" class="form-control spinner__input" value="1" data-rule="quantity">
											<span data-spin="up" class="spinner__button">+</span>
										</div>
										<!-- End of Spinner -->
									</div>
									<div class="product__section">
										<!-- List -->
										<ul class="list list--buttons list--horizontal">
											<li class="list__item">
												<!-- Button -->
												<button class="button button--upper">
													<i class="button__icon fa fa-shopping-cart"></i>Add to Cart </button>
												<!-- End of Button -->
											</li>
											<li class="list__item">
												<!-- Button -->
												<button class="button button--upper">
													<i class="button__icon fa fa-heart"></i>Add to Wishlist </button>
												<!-- End of Button -->
											</li>
										</ul>
										<!-- End of List -->
									</div>
								</div>
							</div>  
						</article>
						<!-- End of Product -->
					</div>
				</div>
				<div class="mb60 visible-md visible-lg"></div>
				<div class="mb30 visible-sm visible-xs"></div>
				<div class="row">
					<div class="col-md-16 col-md-offset-4">
						<!-- Tabs -->
						<div class="tabs mb60 js-tabs">
							<ul class="tabs__header">
								<li class="tabs__title">
									<a class="tabs__link" href="#impressions">Impressions</a>
								</li>
								<li class="tabs__title">
									<a class="tabs__link" href="#details">Product details</a>
								</li>
								<li class="tabs__title">
									<a class="tabs__link" href="#delivery">Delivery & Returns</a>
								</li>
							</ul>
							<div id="impressions" class="tabs__content">
								<!-- Impression -->
								<p class="impression impression--center"> Eum eveniet tempora totam itaque at aspernatur id consequuntur ad nam
									<span class='impression__mark'>nihil nemo facere</span>, doloremque repellat, aut
									<span class='impression__mark'>temporibus ea</span>? Recusandae, adipisci pariatur voluptate! Maiores quos commodi magni, laborum harum debitis reiciendis labore! </p>
								<!-- End of Impression -->
							</div>
							<div id="details" class="tabs__content">
								<!-- Attributes -->
								<table class="attributes">
									<tbody>
										<tr>
											<th>Name:</th>
											<td>Totam ex nesciunt dolor quia temporibus quasi</td>
										</tr>
										<tr>
											<th>Brand:</th>
											<td>Tempore beatae</td>
										</tr>
										<tr>
											<th>Material:</th>
											<td>100% Cotton</td>
										</tr>
										<tr>
											<th>Size:</th>
											<td>185.5cm/6'1"</td>
										</tr>
									</tbody>
								</table>
								<!-- End of Attributes -->
							</div>
							<div id="delivery" class="tabs__content">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<!-- Box -->
										<div class="box mb30">
											<i class="box__icon fa fa-home"></i>
											<h3 class="box__title">Quia sed</h3>
											<p class="box__description">Dolore, ratione distinctio ipsam laboriosam reprehenderit perspiciatis debitis accusamus natus iste cum.</p>
										</div>
										<!-- End of Box -->
									</div>
									<div class="col-md-12 col-sm-12">
										<!-- Box -->
										<div class="box mb30">
											<i class="box__icon fa fa-umbrella"></i>
											<h3 class="box__title">Pariatur adipisci</h3>
											<p class="box__description">Explicabo maiores illum fuga sed illo unde sint aliquid earum! Sapiente, laboriosam.</p>
										</div>
										<!-- End of Box -->
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<!-- Box -->
										<div class="box ">
											<i class="box__icon fa fa-globe"></i>
											<h3 class="box__title">Voluptate consectetur</h3>
											<p class="box__description">Amet reiciendis ab ut molestias perferendis non illum voluptatem dolorum distinctio vel!</p>
										</div>
										<!-- End of Box -->
									</div>
									<div class="col-md-12 col-sm-12">
										<!-- Box -->
										<div class="box ">
											<i class="box__icon fa fa-plane"></i>
											<h3 class="box__title">Amet quos</h3>
											<p class="box__description">Delectus ut quo ullam libero dolorum fuga excepturi distinctio porro, tempora odit.</p>
										</div>
										<!-- End of Box -->
									</div>
								</div>
							</div>
						</div>
						<!-- End of Tabs -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-24">
						<aside>
							<div class="row">
								<div class="col-md-24">
									<h3 class="title-section title-section--small mb30"> Related products </h3>
								</div>
							</div>
							<div class="row">
								<!-- <div class="col-md-6 col-sm-12"> -->
									<!-- Thumb Product --> 
									<?php  
										$args = array(
										'post_type' => 'product',
										'post_status' => 'publish',
										'posts_per_page' => '4'
										); 
										$posts = new WP_Query($args);
										if ($posts->have_posts() )
										while($posts->have_posts() ) {
										$posts->the_post(); 
											get_template_part('/template-parts/related', 'posts');
										}
									?> 	
									<!-- End of Thumb Product --> 
									<!-- <div class="mb30 vissible-sm"></div>  -->
								<!-- </div>  -->
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>