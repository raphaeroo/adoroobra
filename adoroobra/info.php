 <?php
/* Template Name: Informações */
 ?>
 <?php get_header(); ?>

<div class="container pag-interna">
    
 <div class="row">
<div class="col-md-8 col-sm-12" style="text-align: left;">
    <h1><?php the_title(); ?></h1> <br>
    <img alt="<?php the_title(); ?>" style="width: 100%;" class="imagem-alt" src="<?php bloginfo('template_directory'); ?>/images/info/design-de-interiores.jpg">
<br /><br>

  <?php
                        if ( have_posts() ) {
                                while ( have_posts() ) { the_post();

                                        the_content();

                                }
                        }
                    ?>
                    </div>
<div class="col-md-4 col-sm-12" style="margin-top: 11em;">
    
    <div class="col-md-12">
        <ul class="linkzera">
            <li style="list-style-type:none;">
               	<?php
					wp_nav_menu( array(
						'menu' => 'info',
					   'depth' => 0,
					   'container' => '',
						'menu_id' => '',
					   'menu_class' => 'menuzito',
					   'walker' => new wp_bootstrap_navwalker()
					)
					);
				?>
            </li>
        </ul>
    </div>
    
</div>
</div>   
</div>

</div>
<div class="espaco"></div>

 <?php get_footer(); ?>