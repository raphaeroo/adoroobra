 <?php
/* Template Name: blog */
 ?>
 <?php get_header(); ?>

<div class="container pag-interna">
    
    <div class="col-md-12">
    
    <h1><?php the_title(); ?></h1>

  <?php
                        if ( have_posts() ) {
                                while ( have_posts() ) { the_post();

                                        the_content(); //Exibe todo o conteúdo de uma página WordPress

                                }
                        }
                    ?>

</div>

</div>


<div class="espaco"></div>

<div class="container">
    <div class="col-12 text-center">
        <h2>Entre em Contato</h2>
        	<?php echo do_shortcode( '[contact-form-7 id="118" title="Página-Contato"]' ); ?>
    </div>
</div>

 <?php get_footer(); ?>