<?php
/**
 * Template Name: Contact Template
 * 
 * 
 * 
 */
?>

<?php get_header(); ?>

<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<!-- Title Page -->
						<h1 class="title-page">Contact</h1>
						<!-- End of Title Page -->
					</div>
				</div>
				<div class="mb60">
					<div class="row">
						<div class="col-md-12">
							<!-- Widget Contact -->
							<div class="widget-contact">
								<img src=<?php echo get_template_directory_uri() . "/assets/img/common/backgrounds/contact.jpg" ?> class="widget-contact__image" alt="Contact Image">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<h3 class="widget-contact__name"><?php echo get_theme_mod('contact_page_name_header', 'Zachary Stone'); ?></h3>
										<div class="mb30 visible-xs"></div>
									</div>
									<div class="col-md-12 col-sm-12">
										<!-- Socials -->
										<ul class="socials socials--right">
											<li class="socials__item">
												<a href="#" class="socials__link">
													<!-- <i class="fontello-facebook"></i> -->
													<i class="fa fa-facebook-f"></i>
												</a>
											</li> 
											<li class="socials__item">
												<a href="#" class="socials__link">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li class="socials__item">
												<a href="#" class="socials__link">
													<i class="fa fa-youtube"></i>
												</a>
											</li>
											<li class="socials__item">
												<a href="#" class="socials__link">
													<i class="fa fa-instagram"></i>
												</a>
											</li>
											<li class="socials__item">
												<a href="#" class="socials__link">
													<i class="fa fa-tumblr"></i>
												</a>
											</li>
										</ul>
										<!-- End of Socials -->
									</div>
								</div>
							</div>
							<!-- End of Widget Contact -->
							<div class="mb30 visible-sm visible-xs"></div>
						</div>
						<div class="col-md-12">
							<!-- Form Contact -->
							<form action="blocks/form-contact/form-contact.php" class="form-contact js-form-contact">
								<div class="form-contact__modal js-form-contact__modal">
									<h3 class="form-contact__message"> Your message was sent successfully.
										<br>Thank you! </h3>
								</div>
								<div class="row">
									<div class="col-md-12">
										<!-- Input -->
										<input type="text" class="input mb15" name="full-name" placeholder="Name" data-validation="required">
										<!-- End of Input -->
									</div>
									<div class="col-md-12">
										<!-- Input -->
										<input type="text" class="input mb15" name="email" placeholder="Email" data-validation="required email">
										<!-- End of Input -->
									</div>
									<div class="col-md-24">
										<!-- Input -->
										<input type="text" class="input mb15" name="subject" placeholder="Subject" data-validation="required">
										<!-- End of Input -->
									</div>
									<div class="col-md-24">
										<!-- Textarea -->
										<textarea name="message" id="message-textarea" cols="30" rows="10" class="textarea mb20" placeholder="Message" data-validation="required"></textarea>
										<!-- End of Textarea -->
									</div>
									<div class="col-md-24 right">
										<!-- Button -->
										<button class="button ">
											<i class="button__icon fa fa-paper-plane"></i>Send </button>
										<!-- End of Button -->
									</div>
								</div>
							</form>
							<!-- End of Form Contact -->
						</div>
					</div>
				</div>
			</div>
			<section class="section section--grey">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-8">
							<!-- Box -->
							<div class="box box--contacts">
								<i class="box__icon fa fa-comments"></i>
								<h3 class="box__title"><?php echo get_theme_mod('contact_page_thing1', 'General'); ?></h3>
								<p class="box__description"><?php echo get_theme_mod('contact_page_thing1_description', 'Asperiores earum fugiat soluta ut ratione corporis id rerum inventore qui dolore.'); ?></p>
							</div>
							<!-- End of Box -->
							<div class="mb30 visible-xs"></div>
						</div>
						<div class="col-md-7 col-sm-8 col-md-offset-1 col-sm-offset-0">
							<!-- Box -->
							<div class="box box--contacts">
								<i class="box__icon fa fa-heart"></i> 
								<h3 class="box__title"><?php echo get_theme_mod('contact_page_thing2', 'Fun Mail'); ?></h3>
								<p class="box__description"><?php echo get_theme_mod('contact_page_thing2_description', 'Necessitatibus consectetur voluptates expedita possimus unde minima nihil ipsum numquam, adipisci labore?'); ?></p>
							</div>
							<!-- End of Box -->
							<div class="mb30 visible-xs"></div>
						</div>
						<div class="col-md-7 col-sm-8 col-md-offset-1 col-sm-offset-0">
							<!-- Box -->
							<div class="box box--contacts">
								<i class="box__icon fa fa-briefcase"></i> 
								<h3 class="box__title"><?php echo get_theme_mod('contact_page_thing3', 'Business'); ?></h3>
								<p class="box__description"><?php echo get_theme_mod('contact_page_thing3_description', 'Eum placeat quia itaque repellendus, illum cupiditate provident! Molestiae aspernatur quis, dolore!'); ?></p>
							</div>
							<!-- End of Box -->
						</div>
					</div>
				</div>
			</section>
		</div>
<?php get_footer(); ?>