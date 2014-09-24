<?php get_header();?>
        </div>
      </div>
    
    <!-- Main -->
      <div id="main-wrapper">
        <div class="container">
                      
          <!-- Content -->
          <?php while ( have_posts() ) : the_post(); ?>
            <article class="box post">
              <?php the_post_thumbnail(array(783, 290)); ?>
              <header>
                <h2><?php the_title(); ?></h2>
                <p>Lorem ipsum dolor sit amet feugiat</p>
              </header>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>

        </div>
      </div>
<?php get_footer();?>