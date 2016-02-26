<?php
/**
 * Template Name: Home Template
 */
?>

<?php get_template_part('templates/page', 'header'); ?>
  <main id="main">
    <section id="hero" style="background: url('<?php the_field('hero_image');?>') no-repeat top center fixed;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
      <div class="hero-content">
        <h1><?php the_field('hero_text');?></h1>
        <a href="#contact"><?php the_field('hero_cta_text');?></a>
      </div>

      <div class="trim">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/trim.png" alt="">
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <?php
            if( have_rows('services_repeater') ):
            while ( have_rows('services_repeater') ) : the_row();
          ?>

          <div class="col col-3">
            <img src="<?php the_sub_field('service_icon');?>" alt="">
            <h4><?php the_sub_field('service_title');?></h4>
            <p><?php the_sub_field('service_content');?></p>
          </div>

          <?php
            endwhile;
            endif;
          ?>
        </div>
      </div>
    </section>

    <section id="creative">
      <div class="row clearfix">
        <div class="content">
          <div>
            <h2><?php the_field('creative_title');?></h2>
            <p>
              <?php the_field('creative_content');?>
            </p>
            <a class="reel-cta">See Demo Reel</a>
          </div>
        </div>
        <div class="video">
          <div class="video-placeholder" data-video="<?php the_field('reel_video');?>">
            <img src="<?php the_field('reel_image');?>" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="work clearfix">
          <?php
            if( have_rows('creative_projects_repeater') ):
            while ( have_rows('creative_projects_repeater') ) : the_row();
          ?>

          <div class="work-item" data-video="<?php the_sub_field('video_url');?>">
            <div class="work-meta">
              <h4><?php the_sub_field('project_title');?></h4>
              <h5><?php the_sub_field('project_type');?></h5>
            </div>
            <img src="<?php the_sub_field('thumbnail_image');?>" alt="" />
          </div>

          <?php
            endwhile;
            endif;
          ?>
        </div>
      </div>
    </section>

    <section id="quote">
      <h4><?php the_field('quote_text');?></h4>
      <h5><?php the_field('quotee');?></h5>
    </section>

    <section id="blog">
      <div class="container">
        <h2><?php the_field('blog_title');?></h2>
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

    		<?php endwhile; wp_reset_query(); ?>

        </div>
        <div class="row cta-container">
          <a href="<?php the_field('blog_cta_page_link');?>"><?php the_field('blog_cta_text');?></a>
        </div>
      </div>
    </section>

    <section id="team">
      <div class="container">
        <h2><?php the_field('team_title');?></h2>
        <div class="row clearfix">
          <?php
            if( have_rows('team_member_repeater') ):
            while ( have_rows('team_member_repeater') ) : the_row();
          ?>

          <div class="col col-3 team-item">
            <figure>
              <img src="<?php the_sub_field('team_member_image');?>" alt="">
            </figure>
            <h4><?php the_sub_field('team_member_name');?></h4>
            <p><?php the_sub_field('team_member_position');?></p>
            <span><?php the_sub_field('team_member_phone');?></span>
            <a href="mailto:<?php the_sub_field('email');?>">Email Me</a>
          </div>

          <?php
            endwhile;
            endif;
          ?>
        </div>
      </div>

      <section id="locations">
        <div class="row">
          <?php
            if( have_rows('location_repeater') ):
            while ( have_rows('location_repeater') ) : the_row();
          ?>

          <div class="col col-3 no-gutter location-item">
            <figure>
              <img src="<?php the_sub_field('location_image');?>" alt="">
            </figure>
            <div class="location-meta">
              <h3><?php the_sub_field('city');?></h3>
              <h5><?php the_sub_field('location_type');?></h5>
              <h5><?php the_sub_field('street_address');?><br><?php the_sub_field('city');?>, <?php the_sub_field('state');?></h5>
              <h5>P: <?php the_sub_field('phone_number');?><br>F: <?php the_sub_field('fax_number');?></h5>
              <a class="mobile-visible" href="tel:<?php the_sub_field('phone_number');?>">Call us</a>
            </div>
          </div>

          <?php
            endwhile;
            endif;
          ?>
        </div>
        <div class="clearfix"></div>
      </section>

    </section>
  </main>
