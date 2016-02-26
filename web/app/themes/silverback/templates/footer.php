<footer id="footer">
  <section id="contact">
    <h2>Get in Touch Today</h2>
    <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form"]');?>
    <div class="clearfix"></div>
  </section>

  <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
    <div class="container">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  <?php endif; ?>

</footer>
