<?php get_header(); ?> 
<div class="content content--bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<h1 class="article__title"><?php the_title(); ?></h1>
					</div>
				</div> 
				<div class="row">  
					<div class="col-md-17"> 
						<!-- Article --> 
						<article class="article mb40">  
							<img src="<?php the_post_thumbnail_url(); ?>" class="article__image">
							<!-- List -->
							<ul class="list list--separator list--horizontal list--meta mb30">
								<li class="list__item">
									<a href="#" class="article__author"><?php the_author(); ?></a>
								</li>
								<li class="list__item">
									<a href="#" class="article__category"><?php the_category(); ?></a>
								</li>
								<li class="list__item">
									<a href="#" class="article__date"><?php the_time('F jS, y'); ?></a>
								</li>
								<li class="list__item">
									<i class="fa fa-comment-alt article__meta-icon"></i>
									<span class="article__counter"><?php comments_number(); ?></span>
								</li>
								<li class="list__item">
									<i class="fa fa-eye article__meta-icon"></i>
									<span class="article__counter"></span>
								</li>
							</ul> 
							<!-- End of List -->
							<p class="article__paragraph"> <?php the_content(); ?> </p>
						</article>
						<!-- End of Article -->
						<!-- Pagination -->
						<div class="pagination pagination--border-top pagination--border-bottom mb40">
							<div class="row">
								<div class="col-md-8 col-sm-8 col-xs-7">
									<div class="left">
										<a href="" class="pagination__nav"><?php previous_posts_link(); ?>Prev</a>
									</div> 
								</div> 
								<div class="col-md-8 col-sm-8 col-xs-10">
								<p class="pagination__number">1 of 1</p>		 
							</div>
								<div class="col-md-8 col-sm-8 col-xs-7">
									<div class="right"> 
										<a href="" class="pagination__nav"><?php next_posts_link(); ?>Next</a>
									</div> 
								</div> 
							</div>
						</div>
						<!-- End of Pagination -->
						<!-- Comments --> 
						<?php 
                            comments_template(); 
                        ?> 
						<!-- Form Comment --> 
						<!-- <h3 class="article__widget-title mb20"> Leave a comment </h3> -->
						<!-- <form action="#" class="form-comment">
							<div class="row">
								<div class="col-md-12">
								<!-	Textarea -->
									<!-- <textarea name="comment-textarea" id="comment-textarea" cols="30" rows="10" class="textarea textarea--comment" placeholder="Your Comment"></textarea> -->
									<!-- End of Textarea -->
								<!-- </div> -->
								<!-- <div class="mb15 visible-sm visible-xs"></div>
								<div class="col-md-12"> -->
									<!-- Input --> 
									<!-- <input type="text" class="input mb15" name="Name" placeholder="Name"> -->
									<!-- End of Input -->
									<!-- Input -->
									<!-- <input type="text" class="input mb15" name="email" placeholder="Email"> -->
									<!-- End of Input -->
									<!-- Input -->
									<!-- <input type="text" class="input mb15" name="website" placeholder="Website"> -->
									<!-- End of Input -->
									<!-- <button class="form-comment__button">Submit</button> -->
								<!-- </div> -->
							<!-- </div> -->
						<!-- </form> -->
						<!-- End of Form Comment -->
					</div> 
					<div class="mb60 visible-sm visible-xs"></div>
					<div class="col-md-6 col-md-offset-1"> 
					<!-- Sidebar -->  
					 <!-- <aside class="sidebar">  -->
							<div class="row">
								<div class="col-md-24 col-sm-11"> 
									<?php get_sidebar(); ?>  
									<!-- Widget --> 
									 <!-- <div class="widget">   
										<h3 class="widget__title">About Me</h3> 
										<div class="widget__content">   -->
										<!-- Widget About -->
											<!-- <div class="widget-about">  
												<img src="http://placehold.it/600x600" class="widget-about__image" alt="about me image">
												<p class="widget-about__content"> Quod iste odio tempora sequi asperiores praesentium non nostrum quasi eligendi accusamus mollitia, aspernatur repellat cupid itate, eveniet rerum at iusto est dolorum. </p>
											</div>  -->
											<!-- End of Widget About -->
										<!-- </div>  --> 
								 	<!-- </div>  -->
									<!-- End of Widget -->
								</div>
								
								<!-- <div class="col-md-24 col-sm-11 col-sm-offset-1 col-md-offset-0"> -->
									<!-- Widget --> 
									<!-- <div class="widget">  -->
										<!-- <h3 class="widget__title">Categories</h3> 
										<div class="widget__content">  -->
											<!-- Widget Categories -->
											<!-- <nav> 
												<ul class="widget-categories">
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Food</a>
													</li>
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Places</a>
													</li>
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Style</a>
													</li>
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Interiors</a>
													</li>
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Inspiration</a>
													</li>
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Health</a>
													</li>
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Photography</a>
													</li>
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Travel</a>
													</li>
													<li class="widget-categories__item">
														<a hre.f="#" class="widget-categories__link">Quote</a>
													</li>
													<li class="widget-categories__item">
														<a href="#" class="widget-categories__link">Uncategorized</a>
													</li>
												</ul>
											</nav> --> 
											<!-- End of Widget Categories -->
										<!-- </div> -->
									<!-- </div> -->
									<!-- End of Widget -->
								<!-- </div> -->
								<!-- <div class="col-md-24 col-sm-11 col-sm-offset-1 col-md-offset-0"> -->
									<!-- Widget -->
									<!-- <div class="widget"> -->
										<!-- <h3 class="widget__title">Recent Blog Posts</h3> -->
										<!-- <div class="widget__content"> -->
											<!-- Widget Posts -->
											<!-- <ul class="widget-posts"> 
												<li class="widget-posts__item"> 
													<img src="http://placehold.it/200x200" class="widget-posts__image" alt="post image">
													<h3 class="widget-posts__title">
														<a href="#" class="widget-posts__link">Architecto voluptatibus quisquam, esse quod totam!</a>
													</h3>
												</li>
												<li class="widget-posts__item">
													<img src="http://placehold.it/200x200" class="widget-posts__image" alt="post image">
													<h3 class="widget-posts__title">
														<a href="#" class="widget-posts__link">Quos aperiam, exercitationem voluptas modi optio maiores!</a>
													</h3>
												</li>
												<li class="widget-posts__item">
													<img src="http://placehold.it/200x200" class="widget-posts__image" alt="post image">
													<h3 class="widget-posts__title">
														<a href="#" class="widget-posts__link">Neque amet quod aliquam accusamus natus ut.</a>
													</h3>
												</li>
												<li class="widget-posts__item">
													<img src="http://placehold.it/200x200" class="widget-posts__image" alt="post image">
													<h3 class="widget-posts__title">
														<a href="#" class="widget-posts__link">Sit, perferendis ullam quo. Molestiae distinctio, quam!</a>
													</h3>
												</li>
											</ul> -->
											<!-- End of Widget Posts -->
										<!-- </div>
									</div> -->
									<!-- End of Widget -->
								<!-- </div> -->
								<div class="clearfix visible-sm"></div>
								<div class="col-md-24 col-sm-11">
									<!-- Widget -->
									<!-- End of Widget -->
								</div> 
							</div>
						<!-- </aside> -->
						<!-- End of Sidebar -->
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>