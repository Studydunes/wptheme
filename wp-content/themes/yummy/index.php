<?php get_header(); ?>
      
            <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
      endwhile; endif;
      ?>
        <!-- /.blog-main -->
       

     <!-- /.row -->
      <?php get_footer(); ?>
    <!-- Header End -->

    <!-- Page Top Recipe Section Begin -->
    
    <!-- Feature Recipe Section End -->

    <!-- Footer Section Begin -->
    