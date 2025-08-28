<?php
/**
 * The template for displaying the 404 page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content sidebar">
  <div class="main-content" role="main" style="position:relative; overflow:hidden;">

    <div class="glitter-404">
      <h1>404</h1>
      <p>Oops! Looks like you wandered off the map 🗺️✨</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">✨ Take me home ✨</a>
      <div class="sparkles"></div>
    </div>

  </div><!-- .main-content -->
</div><!-- #primary -->

<script>
  document.addEventListener("mousemove", function(e) {
    for (let i = 0; i < 4; i++) {
      const sparkle = document.createElement("div");
      sparkle.className = "trail";
      sparkle.style.left = (e.pageX - 5) + "px";
      sparkle.style.top = (e.pageY - 5) + "px";
      sparkle.style.setProperty("--x", (Math.random() * 40 - 20) + "px");
      sparkle.style.setProperty("--y", (Math.random() * 40 - 20) + "px");
      document.querySelector(".sparkles").appendChild(sparkle);
      setTimeout(() => sparkle.remove(), 800);
    }
  });
</script>

<?php get_footer(); ?>
