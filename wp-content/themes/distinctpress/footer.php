  <div id="footer-widgets" class="background-cover">
    <div class="container">
      <div class="row">
      	<?php dynamic_sidebar('distinctpress-footer-sidebar') ?>
      </div>
    </div>
  </div>

  <div id="footer">
    <div class="container">
    <?php do_action( 'distinctpress_footer' ); ?>
    </div>
  </div>

</div>

<?php wp_footer(); ?>

</body>
</html>