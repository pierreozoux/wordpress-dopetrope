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
										<h2>Flyers</h2>
									</header>
									<div class="row">
										<!– WP LOOP STARTS/ENDS –>
										<?php $my_query = new WP_Query('category_name=flyer&showposts=3&offset=0'); ?>
										<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<div class="4u">
												<section class="box">
													<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(367, 255)); ?></a>
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<p><?php the_excerpt() ?></p>
													<footer>
														<a href="<?php the_permalink() ?>" class="button alt">Find out more</a>
													</footer>
												</section>
											</div>
										<?php endwhile; ?>
										<!– WP LOOP STARTS/ENDS –>
									</div>
									<div class="row">
										<!– WP LOOP STARTS/ENDS –>
										<?php $my_query = new WP_Query('category_name=flyer&showposts=3&offset=3'); ?>
										<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<div class="4u">
												<section class="box">
													<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(367, 255)); ?></a>
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<p><?php the_excerpt() ?></p>
													<footer>
														<a href="<?php the_permalink() ?>" class="button alt">Find out more</a>
													</footer>
												</section>
											</div>
										<?php endwhile; ?>
										<!– WP LOOP STARTS/ENDS –>
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
													<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(580, 272)); ?></a>
													<header>
														<h3><?php the_title(); ?></h3>
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
