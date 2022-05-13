<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores_simple
 */

?>


    <footer class="flex flex-col items-center justify-center bg-black text-white h-60 w-full">
      <div class="w-24 h-auto invert pb-8">
        <?php the_custom_logo(); ?>
      </div>
      <div class="">
        <ul class="flex md:flex-row flex-col  font-bold text-xl space-x-0 items-center md:space-x-12">
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">blog</a></li>
          <li><a href="#">portfolio</a></li>
          <li><a href="#">work</a></li>
          <li><a href="#">contact</a></li>
        </ul>
      </div>
    </footer>



<script src="js/custom.js"></script>

</body>

</html>