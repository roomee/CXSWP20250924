  
<?php get_header(); ?>
<main class="content">
 
    <?php
      if ( have_posts() ) :
        
        while ( have_posts() ) : the_post();
          echo '



           <div class="container breadcrumbs-container animation-trigger animation-start">
  <div class="breadcrumbs animated-fade">
    <a class="breadcrumbs__link" href="/" data-wpel-link="internal"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">
      Home    </font></font></a>
            
    <span class="breadcrumbs__link breadcrumbs__link--active"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">
      '. get_the_title() . '   </font></font></span>
  </div>
</div>

	  <section class="calendar-section">
    
    <canvas class="animated-line section-intro-description__wave animated-fade" width="1366" height="100" style="height: 100px;"></canvas>
    
      <picture>
        <source media="(max-width: 1440px)" sizes="(max-width: 1440px) 100vw" srcset="/wp-content/themes/cyberxs/public/image/manufacturer/wave-bg-laptop.webp">
        <img src="/wp-content/themes/cyberxs/public/image/manufacturer/wave-bg.webp" alt="Calendar- image 1" class="page-calendar__circle-bg">
    </picture><div class="container">




<div class="page-calendar__header">
            <h1 class="heading heading--h2 page-calendar__heading"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">
            '. get_the_title() . '
            </font></font></h1>
        </div>

        <div id="calendar-main-wrapper">
'
;


       
          the_content();
        echo ' </div><p></p>
        
        
           </div>
	  </section>
    
    ';
                endwhile;
      else :
        echo '<p></p><p>No content found</p><p></p>';
      endif;
    ?>
 
  
</main>
<div id="toast-container" class="toast-container"></div>
<?php get_footer(); ?>