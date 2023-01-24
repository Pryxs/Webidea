<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>

<footer id="footer" class="footer">
  <div class="layout">
    <div class="footer_logo">
      <img height="40" width="auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/logo.svg'; ?>" alt=""/>
    </div>

    <div class="footer_content">
      <span>Vehicula fringilla suspendisse</span>
      <span>Vulputate convallis massa</span>
      <span>Aliquam gravida Iacinia</span>
      <span>Nulla dictum praesent</span>
    </div>

    <div class="footer_content">
      <span>Enim vitae porttitor</span>
      <span>Porttitor dapibus imperdiet</span>
      <span>Vel aliquam</span>
    </div>

    <div class="footer_networks">
      <a href="#">Facebook</a>
      <a href="#">Twitter</a>
      <a href="#">LinkedIn</a>
    </div>

    <address>
      <p>Nous Contacter</p>
      <span class="address">2, rue Maureuce Barrès <br> 57000 METZ</span>
      <span class="tel">+33 3 87 52 12 12</span>
      <a href="mailto:hello@webidea.fr">hello@webidea.fr</a>
    </address>

    <div class="footer_infos">
      <span>@ 2020 Web Idea. Tous droits réservés.</span>
      <a href="#">Mentions légales</a>
      &nbsp;|&nbsp;
      <a href="#">Plan du site</a>
    </div>
  </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
