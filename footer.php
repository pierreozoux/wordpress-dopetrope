    <!-- Footer -->
      <div id="footer-wrapper">
        <section id="footer" class="container">
          <div class="row">
            <div class="8u">
              <section>
                <header>
                  <h2>Blandit nisl adipiscing</h2>
                </header>
                <ul class="dates">
                  <!– WP LOOP STARTS/ENDS –>
                  <?php $my_query = new WP_Query('category_name=events&showposts=5'); ?>
                  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <li>
                    <span class="date"><?php the_field('event_date') ?></span>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt() ?></p>
                  </li>
                  <?php endwhile; ?>
                  <!– WP LOOP STARTS/ENDS –>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section>
                <header>
                  <h2>What's this all about?</h2>
                </header>
                <a href="#" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/pic10.jpg" alt="" /></a>
                <p>
                  This is <strong>Dopetrope</strong> a free, fully responsive HTML5 site template by 
                  <a href="http://n33.co">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released for free under
                  the <a href="http://html5up.net/license/">Creative Commons Attribution</a> license so feel free to use it for any personal or commercial project &ndash; just don't forget to credit us!
                </p>
                <footer>
                  <a href="#" class="button">Find out more</a>
                </footer>
              </section>
            </div>
          </div>
          <div class="row">
            <div class="4u">
              <section>
                <header>
                  <h2>Tempus consequat</h2>
                </header>
                <ul class="divided">
                  <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
                  <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
                  <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
                  <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
                  <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
                  <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section>
                <header>
                  <h2>Ipsum et phasellus</h2>
                </header>
                <ul class="divided">
                  <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
                  <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
                  <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
                  <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
                  <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
                  <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section>
                <header>
                  <h2>Vitae tempor lorem</h2>
                </header>
                <ul class="social">
                  <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                  <li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
                  <li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
                  <li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
                  <li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
                </ul>
                <ul class="contact">
                  <li>
                    <h3>Address</h3>
                    <p>
                      Untitled Incorporated<br />
                      1234 Somewhere Road Suite<br />
                      Nashville, TN 00000-0000
                    </p>
                  </li>
                  <li>
                    <h3>Mail</h3>
                    <p><a href="#">someone@untitled.tld</a></p>
                  </li>
                  <li>
                    <h3>Phone</h3>
                    <p>(800) 000-0000</p>
                  </li>
                </ul>
              </section>
            </div>
          </div>
          <div class="row">
            <div class="12u">
            
              <!-- Copyright -->
                <div id="copyright">
                  <ul class="links">
                    <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                  </ul>
                </div>

            </div>
          </div>
        </section>
      </div>
<script>
$('.date').each(function(index, element) {
    $(element).html($(element).html().replace(/(\d\d)/, "<strong>$1</strong>"));
});
</script>
  </body>
</html>
