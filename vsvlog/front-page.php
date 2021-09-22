<?php get_header(); ?>
<div class="content">
	<section role="main">
		<!-- Slider -->
		<div class="slider js-slider Wallop Wallop--fade">
					<div class="Wallop-list">
						<!-- Slider Item -->
						<div class="slider__item js-slider-item Wallop-item">
						<img src=<?php echo get_template_directory_uri() . "/assets/img/backgrounds/1.jpg"?> class="slider__image js-slider-image" alt="Slider Image">							<div class="slider__overlay">
								<div class="slider__position slider__position--center">
								<h2 class="slider__title js-slider-animated"><?php echo get_theme_mod('landing_small_header1', 'Rethink your life'); ?></h2>
							<p class="slider__subtitle js-slider-animated"><?php echo get_theme_mod( 'landing_textarea1', 'There are only two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle.'); ?></p>
								</div>
								<div class="slider__position slider__position--bottom">
									<a href="https://www.youtube.com/watch?v=eBSeCp__xhI" class="slider__play-button js-modal-video"> Play
									<i class="fa fa-arrow-right slider__play-button-icon"></i> 
									</a>
								</div>
							</div>
						</div>
						<!-- End of Slider Item -->
						<!-- Slider Item -->
						<div class="slider__item js-slider-item Wallop-item">
						<img src=<?php echo get_template_directory_uri() . "/assets/img/backgrounds/2.jpg" ?> class="slider__image js-slider-image" alt="Slider Image">							<div class="slider__overlay">
								<div class="slider__position slider__position--center">
								<h2 class="slider__title js-slider-animated"><?php echo get_theme_mod('landing_small_header2', 'Push to the limits.'); ?></h2>
								<p class="slider__subtitle js-slider-animated"><?php echo get_theme_mod('landing_textarea2', 'Darkness cannot drive out darkness: only light can do that. Hate cannot drive out hate: only love can do that.'); ?></p>
								</div>
								<div class="slider__position slider__position--bottom">
									<a href="https://www.youtube.com/watch?v=eBSeCp__xhI" class="slider__play-button js-modal-video"> Play
									<i class="fa fa-arrow-right slider__play-button-icon"></i>
								</a>
								</div>
							</div>
						</div>
						<!-- End of Slider Item -->
						<!-- Slider Item -->
						<div class="slider__item js-slider-item Wallop-item">
						<img src=<?php echo get_template_directory_uri() . "/assets/img/backgrounds/3.jpg" ?> class="slider__image js-slider-image" alt="Slider Image">							<div class="slider__overlay">
								<div class="slider__position slider__position--center">
								<h2 class="slider__title js-slider-animated"><?php echo get_theme_mod('landing_small_header3', 'Be what you are.'); ?></h2>
							    <p class="slider__subtitle js-slider-animated"><?php echo get_theme_mod('landing_textarea3', 'I am enough of an artist to draw freely upon my imagination. Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.'); ?></p>
								</div>
								<div class="slider__position slider__position--bottom">
									<a href="https://www.youtube.com/watch?v=eBSeCp__xhI" class="slider__play-button js-modal-video"> Play
									<i class="fa fa-arrow-right slider__play-button-icon"></i>
								</a>
								</div>
							</div>
						</div>
						<!-- End of Slider Item -->
					</div>
					<div class="slider__nav">
						<div class="slider__nav-btn slider__nav-btn--prev">
							<div class="slider__nav-image js-slider-prev"></div>
							<div class="slider__nav-text">prev</div>
						</div>
						<div class="slider__nav-btn slider__nav-btn--next">
							<div class="slider__nav-image js-slider-next"></div>
							<div class="slider__nav-text">next</div>
						</div>
					</div>
				</div>
		<!-- End of Slider --> 
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-17">
						<div class="pt15 pb15 hidden-sm hidden-xs">
							<!-- List -->
							<ul class="list list--horizontal list--separator list--category">
										<li class="list__item">
											<a href="#" class="list__link">Music</a>
										</li>
										<li class="list__item">
											<a href="#" class="list__link">Sport</a>
										</li>
										<li class="list__item">
											<a href="#" class="list__link">Games</a>
										</li>
										<li class="list__item">
											<a href="#" class="list__link">Movies</a>
										</li>
										<li class="list__item">
											<a href="#" class="list__link list__link--active">Lifestyle</a>
										</li>
									</ul>
							<!-- End of List -->
						</div> 
					</div> 
					<div class="col-sm-24 hidden-md hidden-lg">
						<!-- Dropdown --> 
						<div class="dropdown ">
							<div class="dropdown__label">Categories</div>
							<ul class="dropdown__list">
								<li class="dropdown__item">Music</li>
								<li class="dropdown__item">Sport</li>
								<li class="dropdown__item">Games</li>
								<li class="dropdown__item">Movies</li>
								<li class="dropdown__item">Lifestyle</li>
							</ul>
						</div>
						<!-- End of Dropdown -->
					</div>
					<div class="col-md-7 col-sm-24">
						<div class="right">
							<!-- Dropdown -->
							<div class="dropdown ">
								<div class="dropdown__label">Sort by</div>
								<ul class="dropdown__list">
									<li class="dropdown__item">Relevance</li>
									<li class="dropdown__item">Upload date</li>
									<li class="dropdown__item">View count</li>
									<li class="dropdown__item">Rating</li>
								</ul>
							</div>
							<!-- End of Dropdown -->
						</div>
					</div>
				</div>
				<div class="mb60 hidden-sm hidden-xs"></div>
				<div class="mb15 hidden-md hidden-lg"></div>
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-24">
						<!-- Video Preview --> 	
						<article class="thumb-video mb40">
							<a href="https://www.youtube.com/watch?v=xlQmXz7wzLE" class="thumb-video__link js-modal-video">
								<img src=<?php echo get_template_directory_uri() . "/assets/img/video_images/weekend_travel.jpg" ?> class="thumb-video__image" alt="Video preview">
								<span class="thumb-video__button"> 
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 415.346 415.346" style="enable-background:new 0 0 415.346 415.346;" xml:space="preserve" width="21px" height="29px">
										<g>
											<path d="M41.712,415.346c-11.763,0-21.3-9.537-21.3-21.3V21.299C20.412,9.536,29.949,0,41.712,0l346.122,191.697    c0,0,15.975,15.975,0,31.951C371.859,239.622,41.712,415.346,41.712,415.346z" fill="#FFFFFF" /> </g>
									</svg>
								</span>
								<span class="thumb-video__time ">19:30</span>
							</a>
							<h4 class="thumb-video__title">Weekend travel adventures: Canada, Banff </h4>
						</article>
						<!-- End of Video Preview --> 
					</div>
					<div class="col-md-8 col-sm-12 col-xs-24">
						<!-- Video Preview -->
						<article class="thumb-video mb40">
							<a href="https://www.youtube.com/watch?v=AVHozwCteL4" class="thumb-video__link js-modal-video">
								<img src=<?php echo get_template_directory_uri() . "/assets/img/video_images/iceland.jpg" ?> class="thumb-video__image" alt="Video preview">
								<span class="thumb-video__button">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 415.346 415.346" style="enable-background:new 0 0 415.346 415.346;" xml:space="preserve" width="21px" height="29px">
										<g>
											<path d="M41.712,415.346c-11.763,0-21.3-9.537-21.3-21.3V21.299C20.412,9.536,29.949,0,41.712,0l346.122,191.697    c0,0,15.975,15.975,0,31.951C371.859,239.622,41.712,415.346,41.712,415.346z" fill="#FFFFFF" /> </g>
									</svg>
								</span>
								<span class="thumb-video__time ">03:45</span>
							</a>
							<h4 class="thumb-video__title">Exploring Iceland</h4>
						</article>
						<!-- End of Video Preview -->
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-8 col-sm-12 col-xs-24">
						<!-- Video Preview -->
						<article class="thumb-video mb40">
							<a href="https://www.youtube.com/watch?v=3dWqr1BJeHA" class="thumb-video__link js-modal-video">
								<img src=<?php echo get_template_directory_uri() . "/assets/img/video_images/vintage_architecture.jpg" ?> class="thumb-video__image" alt="Video preview">
								<span class="thumb-video__button">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 415.346 415.346" style="enable-background:new 0 0 415.346 415.346;" xml:space="preserve" width="21px" height="29px">
										<g>
											<path d="M41.712,415.346c-11.763,0-21.3-9.537-21.3-21.3V21.299C20.412,9.536,29.949,0,41.712,0l346.122,191.697    c0,0,15.975,15.975,0,31.951C371.859,239.622,41.712,415.346,41.712,415.346z" fill="#FFFFFF" /> </g>
									</svg>
								</span>
								<span class="thumb-video__time thumb-video__time--dark">10:01</span>
							</a>
							<h4 class="thumb-video__title">Vintage architecture is still awesome in 2016</h4>
						</article>
						<!-- End of Video Preview -->
					</div>
					<div class="clearfix visible-md-block"></div>
					<div class="col-md-8 col-sm-12 col-xs-24">
						<!-- Video Preview -->
						<article class="thumb-video mb40">
							<a href="https://www.youtube.com/watch?v=1sb-vTHOpPo" class="thumb-video__link js-modal-video">
								<img src=<?php echo get_template_directory_uri() . "/assets/img/video_images/architechture_centuries.jpg" ?> class="thumb-video__image" alt="Video preview">
								<span class="thumb-video__button">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 415.346 415.346" style="enable-background:new 0 0 415.346 415.346;" xml:space="preserve" width="21px" height="29px">
										<g>
											<path d="M41.712,415.346c-11.763,0-21.3-9.537-21.3-21.3V21.299C20.412,9.536,29.949,0,41.712,0l346.122,191.697    c0,0,15.975,15.975,0,31.951C371.859,239.622,41.712,415.346,41.712,415.346z" fill="#FFFFFF" /> </g>
									</svg>
								</span>
								<span class="thumb-video__time ">19:30</span>
							</a>
							<h4 class="thumb-video__title">Architecture for centuries</h4>
						</article>
						<!-- End of Video Preview -->
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-8 col-sm-12 col-xs-24">
						<!-- Video Preview -->
						<article class="thumb-video mb40">
							<a href="https://www.youtube.com/watch?v=VOM__NZAFQM" class="thumb-video__link js-modal-video">
								<img src=<?php echo get_template_directory_uri() . "/assets/img/video_images/los_angeles.jpg" ?> class="thumb-video__image" alt="Video preview">
								<span class="thumb-video__button">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 415.346 415.346" style="enable-background:new 0 0 415.346 415.346;" xml:space="preserve" width="21px" height="29px">
										<g>
											<path d="M41.712,415.346c-11.763,0-21.3-9.537-21.3-21.3V21.299C20.412,9.536,29.949,0,41.712,0l346.122,191.697    c0,0,15.975,15.975,0,31.951C371.859,239.622,41.712,415.346,41.712,415.346z" fill="#FFFFFF" /> </g>
									</svg>
								</span>
								<span class="thumb-video__time ">03:45</span>
							</a> 
							<h4 class="thumb-video__title">Los Angeles is so awesome</h4>
						</article>
						<!-- End of Video Preview --> 
					</div>
					<div class="col-md-8 col-sm-12 col-xs-24">
						<!-- Video Preview --> 
						<article class="thumb-video mb40">
							<a href="https://www.youtube.com/watch?v=zuBV7NKN6EQ" class="thumb-video__link js-modal-video">
								<img src=<?php echo get_template_directory_uri() . "/assets/img/video_images/doggy.jpg" ?> class="thumb-video__image" alt="Video preview">
								<span class="thumb-video__button">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 415.346 415.346" style="enable-background:new 0 0 415.346 415.346;" xml:space="preserve" width="21px" height="29px">
										<g>
											<path d="M41.712,415.346c-11.763,0-21.3-9.537-21.3-21.3V21.299C20.412,9.536,29.949,0,41.712,0l346.122,191.697    c0,0,15.975,15.975,0,31.951C371.859,239.622,41.712,415.346,41.712,415.346z" fill="#FFFFFF" /> </g>
									</svg>
								</span>
								<span class="thumb-video__time ">10:01</span>
							</a>
							<h4 class="thumb-video__title">This is my dog, his name is Pikki. He loves autumn.</h4>
						</article>
						<!-- End of Video Preview -->
					</div>
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
		</section> 
		<section class="section section--grey">
			<div class="container">
				<div class="row">
					<div class="col-md-24"> 
						<!-- Title Section -->
						<h2 class="title-section"><?php echo get_theme_mod('app_section_header', 'New app available'); ?></h2>
						<!-- End of Title Section -->
						<!-- Subtitle Section -->
						<h4 class="subtitle-section"><?php echo get_theme_mod('app_section_textarea', 'Expedita sed, sint facere minus quis velit neque reiciendis, error omnis, voluptatibus culpa nobis quibusdam, ex officiis.'); ?></h4>
						<!-- End of Subtitle Section -->
					</div>
				</div> 
				<div class="row">
					<div class="col-md-10 col-md-offset-2 col-sm-10 hidden-xs">
						<!-- App Preview -->
						<div class="app-preview app-preview--mb">
							<img src=<?php echo get_template_directory_uri() . "/assets/img/backgrounds/1.png" ?> class="app-preview__image" alt="App"> </div>
						<!-- End of App Preview -->
					</div>
					<div class="col-md-12 col-sm-13 col-sm-offset-1 col-md-offset-0">
						<div class="mb60 hidden-xs"></div>
						<!-- List -->
						<ul class="list list--features">
							<li class="list__item">
								<!-- Feature -->
								<div class="feature"> 	
									<i class="feature__icon fa fa-signal"></i>
									<p class="feature__title"><?php echo get_theme_mod('app_section_text1', 'Highly optimized'); ?></p>
								</div>
								<!-- End of Feature -->
							</li>
							<li class="list__item">
								<!-- Feature -->
								<div class="feature"> 
								<i class="feature__icon fa fa-comment-alt"></i>
									<p class="feature__title"><?php echo get_theme_mod('app_section_text2', 'Instant feedback'); ?></p>
								</div>
								<!-- End of Feature -->
							</li>
							<li class="list__item">
								<!-- Feature -->
								<div class="feature"> 
									<i class="feature__icon fa fa-lightbulb"></i>
									<p class="feature__title"><?php echo get_theme_mod('app_section_text3', 'Handy features'); ?></p>
								</div>
								<!-- End of Feature -->
							</li>
							<li class="list__item">
								<!-- Feature -->
								<div class="feature">
									<!-- <i class="feature__icon icon-earphones-alt"></i> -->
									<i class="feature__icon fa fa-headphones"></i> 
									<p class="feature__title"><?php echo get_theme_mod('app_section_text4', 'Awesome support'); ?></p>
								</div>
								<!-- End of Feature -->
							</li>
						</ul>
						<!-- End of List -->
						<div class="mb60 hidden-sm hidden-xs"></div>
						<div class="mb15 hidden-lg hidden-md"></div>
						<!-- List -->
						<ul class="list list--buttons list--horizontal">
							<li class="list__item">
								<!-- Button --> 
								<a href="#" class="button button--download">
									<!-- <i class="button__icon fontello-apple"></i>for IOS</a> -->
									<i class="button__icon fa fa-apple"></i><?php echo get_theme_mod('app_section_ios', 'for IOS'); ?></a>
								<!-- End of Button -->
							</li>
							<li class="list__item">
								<!-- Button -->
								<a href="#" class="button button--download">
									<i class="button__icon fa fa-android"></i><?php echo get_theme_mod('app_section_android', 'for Android'); ?></a>
								<!-- End of Button -->
							</li>
						</ul>
						<!-- End of List -->
					</div>
				</div>
			</div>
		</section>
		<section class="section--red">
			<!-- Stats -->
			<div class="stats">
				<div class="stats__row">
					<div class="container">
						<div class="stats__columns">
							<div class="stats__item">
								<div class="stats__info">
									<h4 class="stats__number">
										<span class="js-animate-number" data-number="1500234">0</span>
									</h4>
									<p class="stats__text"><?php echo get_theme_mod('about_page_header', 'Mobile app downloads'); ?></p>
								</div>
							</div>
							<div class="stats__item">
								<div class="stats__info">
									<h4 class="stats__number">
										<span class="js-animate-number" data-number="100000">0</span>+</h4>
									<p class="stats__text"><?php echo get_theme_mod('app_section_insta_followers_heading', 'Instagram followers'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<div class="stats__row">
					<div class="container">
						<div class="stats__columns">
							<div class="stats__item">
								<div class="stats__info">
									<h4 class="stats__number">
										<span class="js-animate-number" data-number="250000">0</span>+</h4>
									<p class="stats__text"><?php echo get_theme_mod('app_section_youtube_followers_heading', 'Youtube followers'); ?></p>
								</div>
							</div>
							<div class="stats__item">
								<div class="stats__info">
									<h4 class="stats__number">
										<span class="js-animate-number" data-number="140000">0</span>+</h4>
									<p class="stats__text"><?php echo get_theme_mod('app_section_youtube_followers_heading', 'Facebook followers'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Stats -->
		</section>
	</section>
</div>

<?php get_footer(); ?> 