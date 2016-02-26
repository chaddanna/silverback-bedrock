<?php
/**
 * Template Name: Home Template
 */
?>

<?php get_template_part('templates/page', 'header'); ?>
  <main id="main">
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col col-3">
            <img src="img/digital.svg" alt="">
            <h4>Digital</h4>
            <p>Online marketing means delivering results to our clients. Our digital department has a track record of success, focusing on targeted campaigns that drive quality traffic to your website.</p>
          </div>
          <div class="col col-3">
            <img src="img/creative.svg" alt="">
            <h4>Creative</h4>
            <p>Compelling copy combined with vivid visuals is our recipe for top-notch creative.  Our team of in-house designers, editors, writers, producers, directors, and photographers are fully equipped to take your next creative project from concept to completion.</p>
          </div>
          <div class="col col-3">
            <img src="img/media.svg" alt="">
            <h4>Media</h4>
            <p>When it comes to media buying, one thing matters: experience.  Our media buying team has X,XXX years of automotive ad buying experience, which ensures you get best-in-market pricing no matter the programming.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="creative">
      <div class="row clearfix">
        <div class="content">
          <div>
            <h2>Creative</h2>
            <p>
              Compelling copy combined with vivid visuals is our recipe for top-notch creative.  Our team of in-house designers, editors, writers, producers, directors, and photographers are fully equipped to take your next creative project from concept to completion.
            </p>
          </div>
        </div>
        <div class="video">
          <div class="video-placeholder" data-video="https://player.vimeo.com/video/128313782?title=0&byline=0&portrait=0">
            <img src="img/video-placeholder.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="work clearfix">
          <div class="work-item" data-video="https://www.youtube.com/embed/-R_483zeVF8">
            <div class="work-meta">
              <h4>Work Title</h4>
              <h5>Work Type</h5>
            </div>
            <img src="img/work-item1.png" alt="" />
          </div>
          <div class="work-item" data-video="https://www.youtube.com/embed/V50vifuTx2Y">
            <div class="work-meta">
              <h4>Work Title</h4>
              <h5>Work Type</h5>
            </div>
            <img src="img/work-item2.png" alt="" />
          </div>
          <div class="work-item" data-video="https://www.youtube.com/embed/LT6n1HcJOio">
            <div class="work-meta">
              <h4>Work Title</h4>
              <h5>Work Type</h5>
            </div>
            <img src="img/work-item3.png" alt="" />
          </div>
          <div class="work-item" data-video="https://www.youtube.com/embed/LbBiCL5-SAY">
            <div class="work-meta">
              <h4>Work Title</h4>
              <h5>Work Type</h5>
            </div>
            <img src="img/work-item4.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section id="quote">
      <h4>"Good design is making something intelligible and memorable. Great design is making something memorable and meaningful."</h4>
      <h5>Dieter Rams</h5>
    </section>

    <section id="blog">
      <div class="container">
        <h2>Our Blog & Case Studies</h2>
        <div class="row clearfix">

        <?php
          $wp_query = new WP_Query( array( 'order' => 'ASC', 'post_type' => 'post', 'posts_per_page' => 2 ) );

          while ($wp_query->have_posts()) : $wp_query->the_post();?>

          <div class="blog-item col col-2">
            <h3><?php the_title(); ?></h3>
            <h5><?php the_category( ', ' ); ?></h5>
            <p><?php the_excerpt(); ?></p>
            <a href="">Read More</a>
          </div>

        <?php endwhile; ?>

        </div>
        <div class="row cta-container">
          <a href="#">View Our Blog</a>
        </div>
      </div>
    </section>

    <section id="team">
      <div class="container">
        <h2>Our Leadership Team</h2>
        <div class="row clearfix">
          <div class="col col-3 team-item">
            <figure>
              <img src="img/jeff-cossar.png" alt="">
            </figure>
            <h4>Jeff Cossar</h4>
            <p>President</p>
            <span>1-123-456-7890</span>
            <a href="">Email Me</a>
          </div>
          <div class="col col-3 team-item">
            <figure>
              <img src="img/shane-stender.png" alt="">
            </figure>
            <h4>Shane Stender</h4>
            <p>Managing Director</p>
            <span>1-123-456-7890</span>
            <a href="">Email Me</a>
          </div>
          <div class="col col-3 team-item">
            <figure>
              <img src="img/esther-menard.png" alt="">
            </figure>
            <h4>Esther Menard</h4>
            <p>Account Service Director</p>
            <span>1-123-456-7890</span>
            <a href="">Email Me</a>
          </div>
        </div>
      </div>

      <section id="locations">
        <div class="row">
          <div class="col col-3 no-gutter location-item">
            <figure>
              <img src="img/location-item1.png" alt="">
            </figure>
            <div class="location-meta">
              <h3>Baton Rouge</h3>
              <h5>Corporate Headquarters</h5>
              <h5>10538 Kentshire Court<br>Baton Rouge, Louisiana</h5>
              <h5>P: 800-XXX-XXXX<br>F: 225-XXX-XXXX</h5>
              <a class="mobile-visible" href="">Call us</a>
            </div>
          </div>
          <div class="col col-3 no-gutter location-item">
            <figure>
              <img src="img/location-item2.png" alt="">
            </figure>
            <div class="location-meta">
              <h3>Charlotte</h3>
              <h5>East Coast Ops</h5>
              <h5>10538 Kentshire Court<br>Baton Rouge, Louisiana</h5>
              <h5>P: 800-XXX-XXXX<br>F: 225-XXX-XXXX</h5>
              <a class="mobile-visible" href="">Call us</a>
            </div>
          </div>
          <div class="col col-3 no-gutter location-item">
            <figure>
              <img src="img/location-item3.png" alt="">
            </figure>
            <div class="location-meta">
              <h3>Seattle</h3>
              <h5>West Coast Ops</h5>
              <h5>10538 Kentshire Court<br>Baton Rouge, Louisiana</h5>
              <h5>P: 800-XXX-XXXX<br>F: 225-XXX-XXXX</h5>
              <a class="mobile-visible" href="">Call us</a>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </section>

    </section>
  </main>
