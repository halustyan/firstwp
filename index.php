<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();?>
</head>
<body>
<?php get_header( ); ?>
    <div class="container-fluid">
    <div class="row">
      <?php echo do_shortcode('[metaslider id="51"]'); ?>
    </div>
    </div>
    <div class="container-fluid under-slider">
        <div class="row">
            <div class="container container-under-slider">
                <div class="row under-slider-services">
                <?php $services = new WP_Query(array('post_type' => 'services', 'posts_per_page' => -1));?>
                  <?php global $query_string; query_posts( $query_string .'&order=ASC&posts_per_page=4' ); if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
                <div class="col under-slider-item">
                        <span class="circle-under-slider"><?php echo get_the_post_thumbnail( $id, 'thumbnail', array('class' => 'alignleft') ); ?></span>
                        <span class="header-text-under-slider"><?php the_title(); ?></span>
                        <span class="text-under-slider"><?php the_content(); ?></span>
                    </div>
                    <?php endwhile; ?>
                     <?php endif; ?>
                     <?php wp_reset_query();?> 
                </div>
            </div>
        </div>
    </div>
    <div class="slider-main">
        <div class="center-slider-main">
            PORTFOLIO
        </div>
        <section class="regular slider">  
      <?php $porfolios = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => -1)); ?>
	  <?php if ( $porfolios->have_posts() ) : while ( $porfolios->have_posts() ) : $porfolios->the_post(); ?>
      <div class="slide-item">
      <?php the_content(); ?>
      <div class="caption-portfolio-slides"><?php the_title(); ?></div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
  </section>
		</div>
    <div class="container-fluid what-is-lorem-ipsum">
        <div class="row what-is-container">
        <?php dynamic_sidebar( 'what-is' ); ?>
        </div>
    </div>
    <?php get_footer(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<?php  wp_footer();?>
</body>
</html>