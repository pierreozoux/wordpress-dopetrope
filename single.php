<?php get_header();?>
</div>
</div>

<!-- Main -->
<div id="main-wrapper">
<div class="container">
  <div class="row">
    <div class="4u">
    
      <!-- Sidebar -->
        <section class="box">
          <a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic09.jpg" alt="" /></a>
          <header>
            <h3>Sed etiam lorem nulla</h3>
          </header>
          <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
          <footer>
            <a href="#" class="button alt">Magna sed taciti</a>
          </footer>
        </section>
        <section class="box">
          <header>
            <h3>Feugiat consequat</h3>
          </header>
          <p>Veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat sed lorem consequat feugiat lorem dolore.</p>
          <ul class="divided">
            <li><a href="#">Sed et blandit consequat sed</a></li>
            <li><a href="#">Hendrerit tortor vitae sapien dolore</a></li>
            <li><a href="#">Sapien id suscipit magna sed felis</a></li>
            <li><a href="#">Aptent taciti sociosqu ad litora</a></li>
          </ul>
          <footer>
            <a href="#" class="button alt">Ipsum consequat</a>
          </footer>
        </section>

    </div>
    <div class="8u skel-cell-important">
      
    <!-- Content -->
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="box post">
        <?php the_post_thumbnail(array(783, 290)); ?>
        <header>
          <h2><?php the_title(); ?></h2>
        </header>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
    </div>
  </div>
</div>
</div>
<?php get_footer();?>