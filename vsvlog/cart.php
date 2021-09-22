<?php 
/**
 * Template Name: Cart Template
 * 
 * 
 * 
 */
?>

<?php get_header(); ?>
<div class="content content--bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<!-- Title Page -->
						<h1 class="title-page">Cart</h1>
						<!-- End of Title Page -->
						<!-- Table Cart -->
						<table class="table-cart mb30">
							<thead>
								<tr>
									<th class="table-cart__head-product">Product</th>
									<th class="table-cart__head-quantity">Quantity</th>
									<th class="table-cart__head-remove">Remove</th>
									<th class="table-cart__head-price">Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
                                        <?php 
                                            $args = array(
                                            'post_type' => 'product',
                                            'post_status' => 'publish',
                                            'posts_per_page' => '1'
                                            ); 
                                            $posts = new WP_Query($args);
                                            if ($posts->have_posts() )
                                            while($posts->have_posts() ) {
                                            $posts->the_post(); 
                                                get_template_part('/template-parts/cart', 'posts');
                                            }
						                ?> 
									</td>
									<td>
                                            <!-- Spinner -->
                                            <div data-trigger="spinner" class="spinner">
                                                <span data-spin="down" class="spinner__button">-</span>
                                                <input type="text" class="form-control spinner__input" value="1" data-rule="quantity">
                                                <span data-spin="up" class="spinner__button">+</span>
                                            </div>
                                            <!-- End of Spinner -->
                                        </td>
                                        <td>
                                            <a href="#" class="table-cart__remove">
                                                <!-- <i class="icon-trash"></i>-->
											<i class="fa fa-trash"></i> 
                                            </a>
                                        </td>
                                        <td>
                                            <p class="table-cart__price">$16.00</p>
                                        </td>
								</tr>
								
							</tbody>
						</table>
						<!-- End of Table Cart -->
					</div>
				</div>
				<div class="mb60">
					<div class="row">
						<div class="col-md-6">
							<!-- Input -->
							<div class="input__holder ">
								<input type="text" class="input " name="cupon" placeholder="Coupon code">
								<button class="input__button">
									<i class="fa fa-chevron-right"></i>
								</button>
							</div>
							<!-- End of Input -->
							<div class="mb20 visible-sm visible-xs"></div>
						</div>
						<div class="col-md-18">
							<div class="right">
								<!-- Button -->
								<button class="button"> 
									<i class="button__icon fa fa-sync-alt"></i>Update Cart </button>
								<!-- End of Button -->
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="title-section title-section--small title-section--left title-section--separator"> Calculate Shipping </h3>
						<form action="#">
							<div class="row">
								<div class="col-md-24">
									<!-- Dropdown -->
									<div class="dropdown dropdown--full mb20">
										<div class="dropdown__label">Select a Country</div>
										<ul class="dropdown__list"> 
											<li class="dropdown__item">United States</li>
											<li class="dropdown__item">United Kingdom</li>
											<li class="dropdown__item">France</li>
											<li class="dropdown__item">Japan</li>
										</ul>
									</div>
									<!-- End of Dropdown -->
								</div>
								<div class="col-md-12">
									<!-- Input -->
									<input type="text" class="input mb20" name="state" placeholder="State">
									<!-- End of Input -->
								</div>
								<div class="col-md-12">
									<!-- Input -->
									<input type="text" class="input mb20" name="zip" placeholder="Zip Code">
									<!-- End of Input -->
								</div>
							</div>
							<div class="row">
								<div class="col-md-24">
									<div class="right">
										<!-- Button -->
										<a href="#" class="button ">
											<i class="button__icon fa fa-sync-alt"></i>Update Totals </a>
										<!-- End of Button -->
									</div>
								</div>
							</div>
						</form>
						<div class="mb60 visible-sm visible-xs"></div>
					</div>
					<div class="col-md-11 col-md-offset-1">
						<h3 class="title-section title-section--small title-section--left title-section--separator"> Cart Totals </h3>
						<!-- Cart Totals -->
						<div class="cart-totals mb30">
							<div class="cart-totals__row">
								<div class="cart-totals__column">
									<h4 class="cart-totals__key">Cart Subtotal</h4>
								</div>
								<div class="cart-totals__column">
									<p class="cart-totals__value">$16.00</p>
								</div>
							</div>
							<div class="cart-totals__row">
								<div class="cart-totals__column">
									<h4 class="cart-totals__key">Shipping</h4>
								</div>
								<div class="cart-totals__column">
									<p class="cart-totals__value">Free-Shipping</p>
								</div>
							</div>
							<div class="cart-totals__row">
								<div class="cart-totals__column">
									<h4 class="cart-totals__key cart-totals__key--total">Order Total</h4>
								</div>
								<div class="cart-totals__column">
									<p class="cart-totals__value cart-totals__value--total">$16.00</p>
								</div>
							</div>
						</div>
						<!-- End of Cart Totals -->
						<div class="right">
							<!-- Button -->
							<a href="#" class="button ">
								<i class="button__icon fa fa-shopping-cart"></i>Checkout </a>
							<!-- End of Button -->
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>