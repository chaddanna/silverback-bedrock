<!--<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>-->

<footer id="footer">
  <section id="contact">
    <h2>Get in Touch Today</h2>
    <form action="process.php" method="post" accept-charset="utf-8">
      <div>
        <div class="text-input">
          <label for="firstName">Name</label>
          <input id="Name" type="text" required name="Name">
        </div>
        <div class="text-input">
          <label for="email">Email</label>
          <input id="email" type="text" required name="email">
        </div>
        <div class="text-input">
          <label for="phone">Phone</label>
          <input id="phone" type="text" required name="phone">
        </div>
      </div>
      <div>
        <div class="text-input">
          <label for="website">Website</label>
          <input id="website" type="text" name="website">
        </div>
        <div class="text-input">
          <label for="message">Message</label>
          <textarea id="message" type="text" required name="message"></textarea>
        </div>
      </div>
      <button type="submit">Submit your message</button>
    </form>
      <div class="clearfix"></div>
  </section>
</footer>
