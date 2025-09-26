  
<?php get_header(); ?>
<main>
  <div class="container">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          echo '<h1 class="page-title">' . get_the_title() . '</h1>';
          the_content();
        endwhile;
      else :
        echo '<p>No content found</p>';
      endif;
    ?>
  </div>
</main>
<?php get_footer(); ?>