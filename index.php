<?php get_header();?>

					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Howdy. This is Dopetrope.</h2>
								<p>A responsive template by HTML5 UP</p>
							</header>
						</section>

					<!-- Intro -->
						<section id="intro" class="container">
							<div class="row">
								<div class="4u">
									<section class="first">
										<i class="icon featured fa-cog"></i>
										<header>
											<h2>Ipsum consequat</h2>
										</header>
										<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
									</section>
								</div>
								<div class="4u">
									<section class="middle">
										<i class="icon featured alt fa-flash"></i>
										<header>
											<h2>Magna etiam dolor</h2>
										</header>
										<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
									</section>
								</div>
								<div class="4u">
									<section class="last">
										<i class="icon featured alt2 fa-star"></i>
										<header>
											<h2>Tempus adipiscing</h2>
										</header>
										<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
									</section>
								</div>
							</div>
							<footer>
								<ul class="actions">
									<li><a href="#" class="button big">Get Started</a></li>
									<li><a href="#" class="button alt big">Learn More</a></li>
								</ul>
							</footer>
						</section>
		
				</div>
			</div>

				</div>
			</div>

		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Portfolio -->
								<section>
									<header class="major">
										<h2>My Portfolio</h2>
									</header>
									<div class="row">
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic02.jpg" alt="" /></a>
												<header>
													<h3>Ipsum feugiat et dolor</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic03.jpg" alt="" /></a>
												<header>
													<h3>Sed etiam lorem nulla</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic04.jpg" alt="" /></a>
												<header>
													<h3>Consequat et tempus</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic05.jpg" alt="" /></a>
												<header>
													<h3>Blandit sed adipiscing</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic06.jpg" alt="" /></a>
												<header>
													<h3>Etiam nisl consequat</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic07.jpg" alt="" /></a>
												<header>
													<h3>Dolore nisl feugiat</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
									</div>
								</section>

						</div>
					</div>
					<div class="row">
						<div class="12u">

							<!-- Blog -->
								<section>
									<header class="major">
										<h2>The Blog</h2>
									</header>
									<div class="row">
										<!– WP LOOP STARTS/ENDS –>
										<?php $my_query = new WP_Query('category_name=news&showposts=2'); ?>
										<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<div class="6u">
												<section class="box">
													<a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic08.jpg" alt="" /></a>
													<header>
														<h3><?php the_title(); ?></h3>
														<p>Posted 45 minutes ago</p>
													</header>
													<p><?php the_excerpt() ?></p>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink() ?>" class="button icon fa-file-text">Continue Reading</a></li>
															<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
										<?php endwhile; ?>
										<!– WP LOOP STARTS/ENDS –>
									</div>
								</section>
							
						</div>
					</div>
				</div>
			</div>
<?php get_footer();?>