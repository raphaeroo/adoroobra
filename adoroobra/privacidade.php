 <?php
/* Template Name: privacidade */
 ?>
 <?php get_header(); ?>

  <?php
                        if ( have_posts() ) {
                                while ( have_posts() ) { the_post();

                                        the_content(); //Exibe todo o conteúdo de uma página WordPress

                                }
                        }
                    ?>

 <?php get_footer(); ?>